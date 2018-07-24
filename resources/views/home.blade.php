   



          

    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   
   
  <title>Asset Management</title>

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
           
<!--<div class="container" >

            <div class="panel panel-default" style="color:white; width:1000px; height:200px;">
                

                <div class="panel-body" style="color:black; font-size:30px;">
                     

                    You are successfully registered
                    ,Please login your account!
                    <br>
                   <a href="{{ route('login') }}" ><button class="btn btn-success" style="color:black; ">Login</button></a>
                </div>
             
    </div> -->
 
 <nav class="navbar navbar-default" id="n" >
  
             
                <a class=" navbar-brand" href="#" id="a" style="font-size:30px; font-weight:bold; color:blue; text-align:center;"><b>Asset Management</b></a>
  
            </nav>
   <div class="container-fluid">
  <br><br>
  <div class="col-lg-7 col-lg-offset-3"> 
 <div class="panel panel-default panel-responsive">
  
    
   <div class="panel-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<h2 style="color:black;"><b><i>You are successfully registered
                    ,Please login your account!</i></b> </h2>
                    <br>
                   <a href="{{ route('login') }}" ><button class="btn btn-primary" style="color:black; font-size:18px; width:180px; height:40px; ">Login</button></a>
                
                     
                </div>
            </div>
        </div>
    </div>
 

</body>


</html>
 
