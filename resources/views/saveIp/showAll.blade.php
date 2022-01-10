@extends('layouts.layout2')

@section('content')
<!---table for all the data--->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>All the data</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IP</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($userip as $userip)

                        <tr>
                            <td>{{$userip->id}}</td>
                            <td>{{$userip->ip}}</td>
                            <td>{{$userip->gender}}</td>
                            <td>{{$userip->age}}</td>
                            <td>{{$userip->location}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection