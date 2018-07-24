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
  margin-top: 7%;
  color: black ;
  background-color: lightsteelblue;
  font-weight: black;
}
 #top{
    background-color: black;
    color: black;

  }
  </style>
  
</head>

<body class="login-img3-body">
<div id="top" class="row" >
                <div class="col-lg-1">
                   <img src="/meity-logo.jpg" class="img-responsive" alt="meity" style="width:100px; height = 200px;">
                </div>
                <div class="col-lg-8">
                   <img src="/meity.JPEG" class="img-responsive" alt="meity" style="width:1000px; height = 700px;">
                </div>
                <div class="col-lg-3">
                   <img src="/logo_ceg.png" alt="CeG" class="  img-responsive pull-right" style="width:300px; height = 200px;">
                </div>
          </div> 
          <nav class="navbar navbar-default" id="n" >
  
             
                <a class=" navbar-brand" href="#" id="a" style="font-size:30px; font-weight:bold; color:blue; text-align:center;"><b>Asset Management</b></a>
  
            </nav>
  <div class="container">
    
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-body">
                <ul class="nav nav-tabs">
  <li role="presentation" class="active" style="width:50%; font-size:20px"><a href="#"><b>Login</b></a></li>
  <li role="presentation"  style="width:50%; font-size:20px"><a href="{{route('register')}}"><b>Sign Up</b></a></li>
  
</ul> <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

         
       
        <p class="login-img"><i class="icon_lock_alt"></i></p>
         
         <div class="input-group form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                             
                                <input id="user_id" type="text" class="form-control" name="user_id" value="{{ old('user_id') }}" required autofocus>

                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                                
        </div>
         
         <div class="input-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                   <span class="input-group-addon"><i class="icon_key_alt"></i></span>       
                             
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
        </div>
        
        <div class="form-group">
                            <div>
                                 
                                    <label style="font-weight: bold; color: black;">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>

                                
                                 <a class="pull-right btn btn-link" href="{{ route('password.request') }}" style="font-weight: bold;">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>  
  

          <div class="form-group">
                            <div class="col-lg-5 col-lg-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                
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
