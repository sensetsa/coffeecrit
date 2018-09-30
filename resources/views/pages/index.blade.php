@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('css/index_page.css')}}">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

<body>
    <div class="grid">
        <div class="left">
            <div class="centercontent">
                <a href="/r/music"><img src="{{URL::asset('/iconspics/musicicon.svg')}}" class="iconbutton btn buttonpadding"></a>
                <a href="/r/art"><img src="{{URL::asset('/iconspics/brushicon.svg')}}" class="iconbutton btn buttonpadding"></a>
                <a href="/r/code"><img src="{{URL::asset('/iconspics/codeicon.svg')}}" class="iconbutton btn buttonpadding"></a>
            </div>
            @foreach($posts as $post)
            <div class="centercontent standardpadding postborder">
                <h1>{{$post->title}}</h1>
                <p>{{$post->body}}</p>
            </div>
            @endforeach
        </div>
        <div class="right" style="text-align:center">
            <div>
                <script>
                    $(document).ready(function(){
                        var test = 0;
                        $("#btn").click(function(){
                            alert(test);
                            $.ajax({
                                type:'GET',
                                url:'/getmsg',
                                data:{
                                    "_token": "{{csrf_token()}}",
                                    "msg": "hello world2!"
                                },
                                success:function(data){
                                    $("#test").html(data.msg);
                                }
                            });
                        });
                    });
                </script>
                <div id="test">
                    <p>hello world!</p>
                </div>
                <button id="btn">Click to change</button>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm
                                Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--<a href="{{ route('login') }}" class="btn btn-primary accessbuttons">Login</a><br><br>
            <a href="{{ route('register') }}" class="btn btn-primary accessbuttons">Register</a>-->
        </div>
    </div>
</body>
@endsection