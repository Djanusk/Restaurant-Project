@extends('layouts.appmain')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-0">
            </div>
            <div class="col-md-4 col-xs-12">
            <br/>
            <h3 align="center">Login Successful</h3>
            <br/>

            @if(isset(Auth::user()->email))
                <div class="alert alert-danger succes-block">
                    <strong>Welcome {{ Auth::user()->name }}</strong>
                    <br/>
                    <a href="{{ url('/main/logout') }}">Logout</a>
                </div>
            @else
                <script>window.location = "/main";</script>
            @endif

            </div>
            <div class="col-md-4 col-xs-0">
            </div>
        </div>
    </div>
@endsection