@extends('layouts.back')
@section('container')
<title> Asset Management </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
        #top{
         background-color: black;
        }
        #n{
          color: black;
          font-weight: bold;
          font-size: 25px;
        }
        #fix{
          position: fixed;
          width: 98%;
        }
 
</style>
<body>
 <div class="container-fluid">
   
    <div id ="fix">

           <div id="top" class="row" >
                <div class="col-lg-1">
                   <img src="meity-logo.jpg" class="img-responsive" alt="meity" style="width:100px; height = 200px;">
                </div>
                <div class="col-lg-8">
                   <img src="meity.JPEG" class="img-responsive" alt="meity" style="width:1000px; height = 700px;">
                </div>
                <div class="col-lg-3">
                   <img src="logo_ceg.png" alt="CeG" class="  img-responsive pull-right" style="width:300px; height = 200px;">
                </div>
          </div> 
          <div class="row">
        <nav class="navbar navbar-default" id="n" >
  
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <!--a class="navbar-brand" href="#"><img src="/images.png" class="img-responsive" alt="asset" style="width:80px; height = 20px;">
                </a-->
                <a class="navbar-brand " href="#" id="a" style="font-size:30px; font-weight:bold;"><b>Asset Management</b></a>
  
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                          <li class="active"><a href="#all">Home <span class="sr-only">(current)</span></a></li>
         
                       <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                            <li id="black"><a href="#">About Asset Manaement</a></li>
                            <li id="black"><a href="#">About CeG</a></li>
             
                         </ul>
                      </li>
                  </ul>
       
                       <ul class="nav navbar-nav navbar-right">
                            <li><a href="/sa">Search Item</a></li>
                            <li><a href="/customer/create">Insert Item</a></li>
                            <li><a href="/after_edit">Edit/Delete item</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                      
                      </ul>
               </div><!-- /.navbar-collapse -->
        </nav>
      </div>
 </div><!--fixed-->
 
  

<div class="row">
   <img src="/india.jpg" alt="CeG">
                
</div>
<br>
<div class="row">
   <img src="/india.jpg" alt="CeG">
                
</div>


 </div>
<body>
@endsection