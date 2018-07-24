 
@extends('layouts.back')
@section('container')
<title>Asset Management</title>
<!--<style>
 #fix{
          position: fixed;
          width: 100%;
        }
  </style>
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
   </div> -->

   <style> 
    
 
  th{
  font-size: 20px;
  color: black;
}
td{
  font-size: 18px;
}
          
#top {
         background-color: black;
        }
        #a{
          color: blue;
        }
        </style>
        <div id="alll">
        <div id="fix">
<div class="container-fluid ">

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
<nav class="navbar navbar-default ">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand " href="#" id="a" style="font-size:30px; font-weight:bold; color:blue;">Asset Management</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <!--a href="/profile"><button class="btn btn-primary pull-right" id="Home" value="Home">Home</button></a-->
              
       
       
    </div><!-- /.navbar-collapse -->
  <!-- /.container-fluid -->
</nav>
</div>
</div>

@yield('content')
@endsection