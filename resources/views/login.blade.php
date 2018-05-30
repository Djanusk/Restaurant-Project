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
                    </div>
                </form>
                </div>
                <div class="col-md-4 col-xs-0">
                </div>
            </div>
        </div>
    </body>
</html>