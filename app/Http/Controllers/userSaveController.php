<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\useripRequest;
use App\Models\userIp;

class userSaveController extends Controller
{
    //
    public function index()
    {
        return view("saveip.index");
    }

    public function saveIp(useripRequest $request)
    {
        //get ip address
        $requested = $request->validated();
        $ip = $request->ip(); //$_SERVER['REMOTE_ADDR'];
        userIp::create([
            'ip' => $ip,
            'location' => $request->location,
            'age' => $request->age,
            'gender' => $request->gender
        ]);
        return redirect('/insert')->with('message', 'Thanks for your vote!');
    }

    public function ShowAll()
    {
        $userip = userIp::all();
        return view('saveip.showAll', compact('userip'));
    }

    public function vote()
    {
        return view("votes.first");
    }
}
