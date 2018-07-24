 @extends('layouts.back')
@section('container') 
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>                   
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Asset Management') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     
   
     

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
  margin-top: 10%;
  color: ;
  background-color: lightsteelblue;
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
<div class="container-fluid">
<nav class="navbar navbar-default">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand " href="#" id="a" style="font-size:30px; font-weight:bold;"><b>Asset Management</b></a>
  
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
         
       
      <ul class="nav navbar-nav navbar-right">
                               <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                             <li> <a href="#" ><button type="button" class="btn btn-primary" id="add">Home</button></a></li>
               </ul>
           </div>
       </nav>
   </div>
   <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
@yield('content')
   @endsection