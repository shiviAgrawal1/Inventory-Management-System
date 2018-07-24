    @extends('layouts.back')
@section('container')
 <style>
 label{
  font-weight: bold;
 }
 .container-fluid,.container{color:black;
  font-weight: bold;}
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
  .container
  {
    background-image: url("p2.jpg");
  }
 </style>
 <body bgcolor="orange">
    {{csrf_field()}}
    <div id="all">
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
                          <li>  <a href="/profile/{{$user->user_id}}" ><button class="btn btn-primary">Home</button></a> </li>
                      </ul>
               </div><!-- /.navbar-collapse -->
        </nav>
 
  </div>
  <div class="container">
         <div class="panel panel-default " style="background-image: url('')">
          
               <div class="panel-heading">
                     <p  id="a" style="font-size:25px; font-weight:bold; color:red;">Search Item</p>
    </div>
                      <div class="panel-body">

                         
                          <form action="/after_search/{{$user->user_id}}" method="POST">
                            {{ csrf_field() }}

                            <div class="text-center" id="search">
                              <!--input type="text" name="Search" id="Search"-->
                       <select name="Search" id="Search" class="browser-default" style="width:500px; height:30px;">
                            <option value="">SELECT</option>
                        </select><br><br>

                        <br>
<input type="button" onclick="myFunction()" class="btn btn-warning" value="Select any of the given option & click here">
   
<div class="radio">
  <label>
    <a href "#search"><input type="radio" name="optionsRadios" id="optionsRadios3" value="PurchaseOrderNo" checked></a>Purchase Order No.
    
  </label>
</div>
<div class="radio">
  <label>
    <a href "#search"><input type="radio" name="optionsRadios" id="optionsRadios4" value="PODate" checked></a>Purchase Order Date
    
  </label>
</div>
<div class="radio">
  <label>
    <a href "#search"><input type="radio" name="optionsRadios" id="optionsRadios5" value="ChalanNo" checked></a>Chalan No
    
  </label>
</div>
<div class="radio">
  <label>
    <a href "#search"><input type="radio" name="optionsRadios" id="optionsRadios6" value="ChalanDate" ChalanDate></a>Chalan Date
    
  </label>
</div>
<div class="radio">
  <label>
    <a href "#search"><input type="radio" name="optionsRadios" id="optionsRadios7" value="ReceivedBy" checked></a>Received By
    
  </label>
</div>
<div class="radio">
  <label>
    <a href "#search"><input type="radio" name="optionsRadios" id="optionsRadios8" value="ReceivedOn" checked></a>Received On
    
  </label>
</div>
<div class="radio">
  <label>
    <a href "#search"><input type="radio" name="optionsRadios" id="optionsRadios9" value="FinancialYear" checked></a>FinancialYear
    
  </label>
</div>
<div class="radio">
  <label>
    <a href "#search"><input type="radio" name="optionsRadios" id="optionsRadios10" value="CurrentStatus" checked></a>CurrentStatus
    
  </label>
</div>
<div class="radio">
  <label>
    <a href "#search"><input type="radio" name="optionsRadios" id="optionsRadios11" value="ItemLocation" checked></a>ItemLocation
    
  </label>
</div>
<div class="radio">
  <label>
    <a href "#search"><input type="radio" name="optionsRadios" id="optionsRadios12" value="EntryDate" checked></a>EntryDate
    
  </label>
</div>
<div class="radio">
  <label>
    <a href "#search"><input type="radio" name="optionsRadios" id="optionsRadios12" value="All" checked></a>View all items
    
  </label>
</div>

 
<input type="hidden" name="_token" value="{{ csrf_token() }}">
   

                        <br>
                           <input type="submit" class="btn btn-success" id="Search" value="Search">
                           </div>
                        </form>
                      </div>
            </div>
          </div>
        



        
 <script src="/js/cus.js"></script>
          
@endsection
</div>
</body>