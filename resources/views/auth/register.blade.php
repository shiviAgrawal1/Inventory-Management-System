<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   
   
  <title>Registration Page</title>

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
  width: 100%;
  height: 100%;
   
  margin-left:auto;
  margin-right:auto;
  margin-top: 5%;
  color:black;
  font-weight: bold;

  background-color: lightsteelblue;
}
 #top{
    background-color: black;
    color: black;
  }
   label,input,body,div{
    color: black;
    font-size: 20px;
    font-weight: bold;
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
     <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
         
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" onkeyup="name_check()" value="{{ old('name') }}" maxlength="40" style="color: black;"  required autofocus>
                                 <p id="name_msg"></p>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        
  <div> 
<label class="col-md-5 control-label"></label>
<div class="col-md-6" >
                           
  <button  id="button1" onclick= "myfunction()"   required>Generate user id</button>
</div>                             
   </div>      <br><p><p><p><p><p>                      
             
            <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                           
                             
                            <label class="col-md-4 control-label">User Id</label>

                            <div class="col-md-6">
                                <input id="user_id" type="text" class="form-control" name="user_id" maxlength="20" style="color: black;" readonly>

                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          
                      

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" onkeyup="e_check()" value="{{ old('email') }}" style="color: black;" required autofocus >
                                   <p id="e_msg"></p>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('Address') ? ' has-error' : '' }}">
                            <label for="Address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="Address" type="text" class="form-control" name="Address" value="{{ old('Address') }}" maxlength="40" style="color: black;" required autofocus >

                                @if ($errors->has('Address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" style="color: black;" required autofocus >

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('Contact_no') ? ' has-error' : '' }}">
                            <label for="Contact_no" class="col-md-4 control-label">Contact no.</label>

                            <div class="col-md-6">
                                <input id="Contact_no" type="text" class="form-control" name="Contact_no" onkeyup="con_check()" maxlength="10" value="{{ old('Contact_no') }}" style="color: black;" required autofocus >
                                 <p id="con_msg"></p>
                                @if ($errors->has('Contact_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Contact_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" onkeyup="pass_check()" minlength="6" maxlength="20" style="color: black;" required >
                              <p id="pass_msg"></p>
                              <!--p style="color:red; font-size:18px;">minimum 6 characters are required</p-->
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" onkeyup="retype_check()" minlength="6" maxlength="20" style="color: black;" required >
                                 <p id="retype_msg"></p>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
   




         <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Register
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
  <script>
   
function myfunction()
{   

    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("user_id").value=this.responseText;
        }
    };
    xhttp.open("GET","/showId",true);
    xhttp.send();
    event.preventDefault();    
    return false;
  }

 
  var x;
  function name_check()
  {  
    var name=document.getElementById("name").value;
    var name_msg= document.getElementById("name_msg");
  onkeyup = function()
    {  
      if(name.length>3)
      {
        name_msg.style.color="green";
        name_msg.innerHTML="";
      }
      else{
        name_msg.style.color="red";
        name_msg.innerHTML="Please enter more than 3 letters...!";
      }
    };
  }
    function con_check()
  {  
    var con=document.getElementById("Contact_no").value;
    var con_msg= document.getElementById("con_msg");
  onkeyup = function()
    {  
      if(con.length==10)
      {
        con_msg.style.color="green";
        con_msg.innerHTML="";
      }
      else{
        con_msg.style.color="red";
        con_msg.innerHTML="Contact No must be of 10 digits....!";
      }
    };
    
  }
 /* function e_check()
  {  
    var e=document.getElementById("email").value;
    var e_msg= document.getElementById("e_msg");
    //var letter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
  onkeyup = function()
    {  
      if(!e.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
      {e_msg.style.color="red";
        e_msg.innerHTML="Email address must contain @ and . characters!";
      }
        
      else{
        e_msg.style.color="green";
        e_msg.innerHTML="";
      }
    };
    
  }*/
  function pass_check()
  {  
    var pass=document.getElementById("password").value;
    var pass_msg= document.getElementById("pass_msg");
    x = pass;
  onkeyup = function()
    {  
      if(pass.length>5)
      {
        pass_msg.style.color="green";
        pass_msg.innerHTML="";
      }
      else{
        pass_msg.style.color="red";
        pass_msg.innerHTML="Please enter more than 5 letters...!";
      }
    };
    
  }
  function retype_check()
  {  
    var retype=document.getElementById("password-confirm").value;
    var retype_msg= document.getElementById("retype_msg");
  onkeyup = function()
    {  
      if(retype===x)
      {
        retype_msg.style.color="green";
        retype_msg.innerHTML="Password is Match....!";
      }
      else{
        retype_msg.style.color="red";
        retype_msg.innerHTML="Password is Not Match....!";
      }
    };
    
  }
  </script>
</html>
