 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   
   
  <title>Login Page</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <style type="text/css">
        
        .login-img3-body{

  background: url('../img/login.jpg') no-repeat center center fixed; 

  -webkit-background-size: cover;

  -moz-background-size: cover;

  -o-background-size: cover;

  background-size: cover;

}
.login-img{
  font-size: 60px;
  text-align: center;
}
.panel{
  width: 50%;
  height: 40%;
  max-width:500px;
  margin-left:auto;
  margin-right:auto;
  margin-top: 25%;
  color: ;
  background-color: lightsteelblue;
}
  </style>
  
</head>

<body class="login-img3-body">

  <div class="container">
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-body">
     <form class="form-horizontal" method="GET" action="/profile">
                        {{ csrf_field() }}
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
         
         <div class="input-group form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                            <div class="">
                                <input id="user_id" type="text" class="form-control" name="user_id" value="{{ old('user_id') }}" required autofocus>

                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>    
        </div>
         
         <div class="input-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                   <span class="input-group-addon"><i class="icon_key_alt"></i></span>       
                            <div class="">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>
        
        <div class="form-group">
                            
                                 
                                     
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                     
                                 
                                <a class="pull-right btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            
        </div>
         <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Login
                                </button>

                                
                            </div>
        </div>
    </div>   
    </form>
      </div>
            </div>
        </div>
    </div>

  </div>


</body>

</html>
