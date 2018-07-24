  @extends('layouts.back')
@section('container')
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

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
         body,html{
    height: 100%;
  }

   .nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 12px;
  font-weight: 200;
  background-color: #2e353d;
  position: fixed;
  top: 0px;
  width: 300px;
  height: 100%;
  color: #e1ffff;
}
.nav-side-menu .brand {
  background-color: #23282e;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: fixed;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
}
body {
  margin: 0px;
  padding: 0px;
}

  body{
    background-image: url('/india.jpg');
  }
  #side{
    margin-top: 12%;
  }
  p{
    font-weight: bold;
    font-size: 40px;
    color: blue;
  }
  .profile-img
{  height: 140px;
  width: 140px;
   border: 5px solid #fff;
   border-radius: 100%;
.glyphicon
{
  width:150px;
  height: 150px;
}

#t{
  text-align: center;
}
h2{
  font-weight: bold;
  color: red;

}
 
 
</style>
<body>
    {{csrf_field()}}
 <div class="container-fluid">
         <div id="top" class="row" >
                <div class="col-lg-1">
                   <img src="/meity-logo.jpg" class="" alt="meity" style="width:100px; height = 200px;">
                </div>
                <div class="col-lg-8">
                   <img src="/meity.JPEG" class="img-responsive" alt="meity" style="width:1000px; height = 700px;">
                </div>
                <div class="col-lg-3">
                   <img src="/logo_ceg.png" alt="CeG" class="pull-right" style="width:300px; height = 200px;">
                </div>
          </div> 
  </div>
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
                <a class="navbar-brand " href="#" id="a" style="font-size:30px; font-weight:bold; color:blue;"><b>Asset Management</b></a>
  
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   
       
                       <ul class="nav navbar-nav navbar-right">
                            <li><a href="/search/{{$user->user_id}}">View/Search item</a></li>
                            <li><a href="/cpanel/create/{{$user->user_id}}">Insert item</a></li>
                            @if($user->Group=="Admin")
                            <li><a href="/likesearch/{{$user->user_id}}"><b>Edit item</b></a></li>
                            <li><a href="/delsearch/{{$user->user_id}}"><b>Delete item</b></a></li>
                            @endif
                            <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="">
                            </span>
                            <span class="username" style="color:black; font-size=10px;"><b>{{$user->name    }}</b></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="/mydetail/{{$user->user_id}}"><i class="" style="color:black; font-size=10px;"></i><b>My Profile</b></a>
              </li>
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
                      </ul>
               </div><!-- /.navbar-collapse -->
        </nav>
        
        <div class="row">
          <div class="col-lg-4">
  
<div class="nav-side-menu" id="side" style="position:fixed; margin-top:15%;">
    <div class="brand"></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li class="collapsed active" >
                  <a href="#">
                  <i  style="font-size:20px;">Dashboard</i> 
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed">
                <a href="#" style="font-size:15px;"> <i class="fa fa-list"></i> Forms<span class="arrow"> </span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li><a href="/search/{{$user->user_id}}">Search item</a></li>
                    <li><a href="/cpanel/create/{{$user->user_id}}">Insert item</a></li>
                    <li><a href="/cpanel/{{$user->user_id}}">All items</a></li>
                    
                     @if($user->Group == "Admin")
              <li><a class="" href="/likesearch/{{$user->user_id}}">Edit</a></li>
              <li><a class="" href="/delsearch/{{$user->user_id}}">Delete</a></li>
              @endif
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#" style="font-size:15px;"> <i class="fa fa-user fa-lg"></i>My Account<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                   <li><a class="" href="/mydetail/{{$user->user_id}}">Profile</a></li>
                   <li><a class="" href="/edit/{{$user->id}}">Edit Profile</a></li>
                   
                </ul>
          @if($user->Group == "Admin")
          <li>
            <a class="" href="/group/{{$user->user_id}}" style="font-size:15px;">
                            <i class="fa fa-table fa-lg"></i>
                          <span>Group Users</span>
                      </a>
          </li>
           
            <li>
            <a class="" href="/allusers/{{$user->user_id}}" style="font-size:15px;">
                             <i class="fa fa-users fa-lg"></i>
                          <span>All Users</span>
                      </a>
          </li>
           <li>
            <a class="" href="/delete_user/{{$user->user_id}}" style="font-size:15px;">
                             <i class="fa fa-remove fa-lg"></i>
                          <span>Remove any User</span>
                      </a>
          </li>
          @endif

            </ul>
     </div>
</div>
</div>
<!--
 @if($user->Group == "Admin")
<div class="col-lg-6 text-center">
 
   <p style="color:red; margin-top:-3%;">Welcome Admin!</p>

  @else
   
 <p style="color:red; margin-top:-3%;"> welcome {{$user->name}}!</p>
 
@endif
<div class="container-fluid">
  <br><br>
  <div class="col-lg-12"> 
 <div class="panel panel-default panel-responsive" style=" margin-top:-4%;">
  
   
  <div class="panel-body text-center" style="background-color:powderblue;" >  
    <div class="row">
      
<img class="profile-img img-circle pull-left" style="border-color:grey; margin-left:20px;" id="img" src="/uploads/avatars/{{$user->avatar}}" alt="profile">
  <h1 style="color:blue; font-weight:bold; font-size:50px;">{{  $user->name}}</h1>
  <!--  <form enctype="multipart/form-data" action="/update_avatar2/{{$user->user_id}}""  method= "POST" class="pull-left"  >
    {{csrf_field()}}
    <input type="file" name="avatar" style="font-size:15px;">
     <input type="hidden" name="user_id" value="{{ $user->user_id }}">
     
     <input type="submit" name="submit" value="Change Pic" class=" btn btn-success pull-left">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>  -->
          
     <!--      </div><br><br>
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
           <a href="/cpanel/create"> <div class="service-box">
               <i class="fa fa-4x fa-list-alt text-primary sr-icons"></i>
               
              <h3><b>Insert</b></h3>
               
            </div></a>
          </div>
          @if($user->Group =="Admin")
          <div class="col-lg-3 col-md-6 text-center">
            <a href="/likesearch"><div class="service-box">
              <i class="fa fa-4x fa-pencil text-success sr-icons"></i>
              <h3><b>Edit</b></h3>
              </div></a>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
           <a href="/delsearch"> <div class="service-box">
              <i class="fa fa-4x fa-remove text-danger sr-icons"></i>
              <h3><b>Delete</b></h3>
               </div></a>
          </div>
          @endif
          <div class="col-lg-3 col-md-6 text-center">
           <a href="/search"> <div class="service-box">
               <i class="fa fa-4x fa-search text-primary sr-icons"></i>
               
              <h3><b>Search</b></h3>
              </div></a>
          </div>
        </div>
       
        --> 
      
  </div>
  </div>
  </div>
 
</div>
  </div>
</div>
  
                   
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  
<body>
  <script type="text/javascript">
  function htmlbodyHeightUpdate(){
    var height3 = $( window ).height()
    var height1 = $('.nav').height()+50
    height2 = $('.main').height()
    if(height2 > height3){
      $('html').height(Math.max(height1,height3,height2)+10);
      $('body').height(Math.max(height1,height3,height2)+10);
    }
    else
    {
      $('html').height(Math.max(height1,height3,height2));
      $('body').height(Math.max(height1,height3,height2));
    }
    
  }
  $(document).ready(function () {
    htmlbodyHeightUpdate()
    $( window ).resize(function() {
      htmlbodyHeightUpdate()
    });
    $( window ).scroll(function() {
      height2 = $('.main').height()
        htmlbodyHeightUpdate()
    });
  });
  </script>
@endsection