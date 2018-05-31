@extends('layouts.appmain')

@section('content')
<div class="wrapper">
    <div class="container">
        <div class="row" style="padding:10%;background-color:lightgrey">
            <div class="col-md-4 col-xs-0">
            </div>
            <div class="col-md-4 col-xs-12">
            <br/>
            <h3 align="center">Please Login</h3>
            <br/>

            @if(isset(Auth::user()->email))
                <script>window.location="/main/successlogin";</script>
            @endif

            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <!--Catches Validation Errors-->
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ @error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ url('/main/checklogin') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Enter Email</label>
                    <input type="email" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="login" class="btn btn-primary" value="Login"/>
                    <a href="{{ url('/register') }}" class="btn btn-primary">Register</a>
                </div>
            </form>
            </div>
            <div class="col-md-4 col-xs-0">
            </div>
        </div>
    </div>
</div>
@endsection