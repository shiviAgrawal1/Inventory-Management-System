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
  width: 500px;
  height: 300px;
   
  margin-left:30%;
  margin-right:auto;
  margin-top: 8%;
  color: ;
  background-color: lightsteelblue;
  text-align: center;
  font-weight: bold;
  font-size: 30px;
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
                 
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<br>
                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                 <div class="login-wrap">
                    <hr>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class=" control-label">E-Mail Address</label>
                      
                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
<br><div style="color:red; font-size:18px;">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                         {{ $errors->first('email') }} 
                                    </span>
                                @endif  </div>
                            </div>
                        </div>
<hr>
                          <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    Send Password reset link
                                </button>

                                
                            </div>
        </div><hr>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

