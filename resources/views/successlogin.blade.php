<!DOCTYPE html>
<html>
    <head>
        <title>Restaurant Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </head>
    <body>
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
    </body>
</html>