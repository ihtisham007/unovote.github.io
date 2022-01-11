<!--Center div--->
@extends('layouts.layout2')

@section('content')
<!---check if there is error-->
@if ($errors->any())
<div class="alert alert-danger">
    <p>{{'There are some errors in fields'}}</p>
</div>
@endif
<script>
    function changeborder(id) {
        document.querySelector("select[name=" + id + "]").style.border = "1px solid red";
    }
</script>
</div>
@if ($message = Session::get('message'))
<script>
    Toast.fire({
        icon: 'success',
        title: '{{$message}}'
    });
    let a = 10;
</script>
@endif
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <script async="true" src="https://preprod.pol.is/embed.js"></script>
            <div class="panel-body">
                <form class="form-horizontal" style="display: flex;vertical-align:middle;justify-content:center;" method="POST" action="{{ route('saveip') }}">
                    {{ csrf_field() }}

                    <!---select for gender--->
                    <div class="row">
                        <div class="form-div" style="">
                            <div class="col-md-12">
                                <select class="custom-select" name="gender">
                                    <option value="0" selected>Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="non-binary">Non-binary</option>
                                </select>
                                @if($errors->has('gender'))
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                <script>
                                    changeborder('gender');
                                </script>
                                @endif
                            </div>
                            <!--Select for age options are 16-18 18-24 25-34 35-44 45-54 55-64 65+ -->
                            <div class="col-md-12">
                                <select class="custom-select" name="age">
                                    <option value="0" selected>Age</option>
                                    <option value="16-18">16-18</option>
                                    <option value="18-24">18-24</option>
                                    <option value="25-34">25-34</option>
                                    <option value="35-44">35-44</option>
                                    <option value="45-54">45-54</option>
                                    <option value="55-64">55-64</option>
                                    <option value="65+">65+</option>
                                </select>
                                @if($errors->has('age'))
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                                <script>
                                    changeborder('age');
                                </script>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <!--Select for location options are Urban Rural--->
                                <select class="custom-select" name="location">
                                    <option value="0" selected>Location</option>
                                    <option value="urban">Urban</option>
                                    <option value="rural">Rural</option>
                                </select>
                                @if($errors->has('location'))
                                <span class="text-danger">{{ $errors->first('location') }}</span>
                                <script>
                                    changeborder('location');
                                </script>
                                @endif
                            </div>
                        </div>

                        <div class="vote-div" style="display: none;">

                            <div class="col-md-12">
                                <iframe src="https://pol.is/2hackettat?parent_url=http%3A%2F%2Flocalhost%3A8000%2F&referrer=" width="100%" height="500" frameborder="0" scrolling="no">
                                    <div class='polis' data-conversation_id='2hackettat'></div>
                                    <script async="true" src="https://pol.is/embed.js"></script>
                                </iframe>


                                <!--p for lorem ipsum-->

                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nisi vel tincidunt
                                    interdum, nisl nunc egestas nisi, euismod aliquam nisl nunc eget nunc.
                                </p>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                   
                                </button>
                            </div>-->
                            </div>
                        </div>
                        <!---button for submit-->
                </form>

            </div>
            </form>
        </div>
    </div>
</div>
</div>


<script>
    let count = 0;
    document.querySelector('.vote-div').style.display = 'none';
    document.querySelectorAll('select').forEach(function(index, key) {
        index.addEventListener("change", function() {
            if (this.value != "0")
                count += 1;

            if (count == 3) {
                document.querySelector('.form-div').style.display = "none";
                document.querySelector('.vote-div').style.display = "block";
                document.querySelector("form").removeAttribute("style");

            }
        })


    })
</script>
@endsection