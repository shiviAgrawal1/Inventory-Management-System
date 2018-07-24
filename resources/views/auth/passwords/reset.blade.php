<!DOCTYPE html>
<html lang="en">

 <head>
  <title>Asset Management</title>
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
 #top{
    background-color: black;
    color: black;

  }
  
  .panel{
  width: 600px;
  height: 300px;
   
   margin:0px auto;
   margin-top:8%;
  
  background-color: lightsteelblue;
   
  
  font-size: 20px;
}
input{
    width: 300px;
    height: 24px;
}
button{
    background-color: blue;
    color: white;
    width: 200px;
    height: 35px;
}
table{
    margin:0px auto;
}
  
  </style>
  
</head>

<body class="login-img3-body">
 <div id="top" class="row" >
  <table><tr><td>
                <div class="col-md-1">
                   <img src="/meity-logo.jpg" class="img-responsive" alt="meity" style="width:100px; height =200px;">
                </div></td><td>
                <div class="col-md-6">
                   <img src="/meity.JPEG" class="img-responsive" alt="meity" style="width:900px; height = 600px;">
                </div></td><td>
                <div class="col-md-2">
                   <img src="/logo_ceg.png" alt="CeG" class="  img-responsive pull-right" style="width:200px; height = 200px;">
                </div></td></tr></table>
          </div>         
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><br><center>Reset Password</center></div>
                <hr>
                <div class="panel-body" >
                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}
<table><tr>
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <td>      <label for="email" class="col-md-4 control-label">E-Mail Address</label>
</td><td>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
</td></tr><tr><td>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
</td><td>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div></td></tr><tr><td>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                           </td><td> <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br></td></tr><tr><td></td><td>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div></td></tr><br></table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>