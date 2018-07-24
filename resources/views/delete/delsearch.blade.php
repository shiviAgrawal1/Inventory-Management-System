 
 @extends('layouts.back')
@section('container')
 <style>
 .container-fluid{color:black; font-weight:bold;}
div{font-weight: bold;}
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
b{
  font-size: 20px;
}
#t{
  text-align: center;
}
h2{
  font-weight: bold;
  color: blue;
}
 label{
  font-weight: bold;
 }
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
 </style>
 <body>
    {{csrf_field()}}
 <div class="container-fluid" style="background-color:black;">
         <div id="top" class="row" style="background-color:black; color:black;">
                <div class="col-lg-1">
                   <img src="/meity-logo.jpg" class="" alt="meity" style="background-color:black; width:100px; height = 200px;">
                </div>
                <div class="col-lg-8">
                   <img src="/meity.JPEG" class="img-responsive" alt="meity" style="background-color:black; width:1000px; height = 700px;">
                </div>
                <div class="col-lg-3">
                   <img src="/logo_ceg.png" alt="CeG" class="pull-right" style=" background-color:black; width:300px; height = 200px;">
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
                            <li><a href="/search/{{$user->user_id}}" style="font-size:20px; color:black;"><b>View/Search item</b></a></li>
                            <li><a href="/cpanel/create/{{$user->user_id}}" style="font-size:20px; color:black;"><b>Insert item</b></a></li>
                            @if($user->Group=="Admin")
                            <li><a href="/likesearch/{{$user->user_id}}" style="font-size:20px; color:black;"><b>Edit item</b></a></li>
                            <li><a href="/delsearch/{{$user->user_id}}" style="font-size:20px; color: black;"><b>Delete item</b></a></li>
                            @endif
                          <li>  <a href="/profile/{{$user->user_id}}" ><button class="btn btn-primary">Home</button></a> </li>
                      </ul>
               </div><!-- /.navbar-collapse -->
        </nav>
 
  </div>
<div class="container-fluid">
        
  
         <div class="panel panel-default ">
          
               <div class="panel-heading">
                <a href="#" id="a" style="font-size:25px; font-weight:bold; color:red;">Delete Item</a>
    </div>
                     
                      <div class="panel-body">

                         
                          <form action="/delafter_search/{{$user->user_id}}" method="GET">
                            {{ csrf_field() }}
                            <br><br>
                            <div class="text-center" id="search">
                               <label for="PurchaseOrderNo" class=" control-label"><i style="color:black;">Delete items of Purchase Order No :</i></label>
                            <br>    <select name="PurchaseOrderNo" id="PurchaseOrderNo" class="browser-default" style="width:500px; height:30px;" required>
                            <option value="">SELECT</option>
                            @foreach($PO as $P)
                            <option value="{{$P->PurchaseOrderNo}}">{{$P->PurchaseOrderNo}}</option>;
            
                            @endforeach
                        </select><br><br>
                        

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
   

                         
                        <input type="submit" class="btn btn-success" id="Search" value="Enter">
                           </div>
                            
                        </form>
                      </div>
            </div>
          </div>
        @endsection