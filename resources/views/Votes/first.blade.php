@extends('layouts.layout2')

@section('content')

<!--Center div for vote-->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Vote</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!--p for lorem ipsum-->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nisi vel tincidunt
            interdum, nisl nunc egestas nisi, euismod aliquam nisl nunc eget nunc.
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
            Nulla facilisi.
            Donec euismod, nisi vel tincidunt interdum, nisl nunc egestas nisi, euismod aliquam nisl
            nunc eget nunc.
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
            Nulla facilisi.
            Donec euismod, nisi vel tincidunt interdum, nisl nunc egestas nisi, euismod aliquam nisl
            nunc eget nunc.
        </p>
        <div class="col-md-12">
            <!--button for vote-->
            <button type="button" class="btn btn-primary btn-lg btn-block">
                <a href="{{route('vote')}}" style="color:white">Vote</a>
            </button>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection