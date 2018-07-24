

  
 @extends('layouts.back')
@section('container')
 

 <style>
 td{
 font-size: 15px;
}
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
                           <li> <a href="/profile/{{$user->user_id}}" ><button class="btn btn-primary">Home</button></a></li>
                      </ul>
               </div><!-- /.navbar-collapse -->
        </nav>
 
  </div>
<div class="container-fluid">

      <div class="col-md-12">
      
       
         <div class="panel panel-default panel-responsive">
          
 	             <div class="panel-heading">
 		                 <p  id="a" style="font-size:25px; font-weight:bold; color:red;">Item Details</p>
    </div>
                      <div class="panel-body">
                      
  <table class="table table-responsive table-hover table-bordered col-lg-12">
  		<thead>
  		  	<th>Sr. No.</th>
          <th>Purchase Order No.</th>
          <th>PODate</th>
          <th>No of items</th>
          <th>Item Description</th>
          <th>Make/Model</th>
          <th>Quantity</th>
          <th>Rate (INR)</th>
          <th>Gross Price</th>
          <th>Taxes & Duties</th>
          <th>Net Amount</th>
      </thead> 

        <tbody>
        <?php $i=1; ?>
  @foreach($cpanels as $cpanel)
<tr>
          <td> {{ $i++}} </td>
          <td>{{$cpanel->PurchaseOrderNo}}</td>
          <td>{{$cpanel->PODate}}</td>
          <td>{{$cpanel->No}}</td>
          <td>{{$cpanel->itemDescription}}</td>
          <td>{{$cpanel->Make}}</td>
          <td>{{$cpanel->Quantity}}</td>
          <td>{{$cpanel->Rate}}</td>
          <td>{{$cpanel->Gross}}</td>
          <td>{{$cpanel->Tax}}</td>
          <td>{{$cpanel->NetAmount}}</td>
         

 </tr>           
   @endforeach
    </tbody>
</table>

<table class="table table-responsive table-hover table-bordered col-lg-12">
  <thead>
          <th>Sr. No.</th>
          <th>Rate of tax</th>
          <th>Type of tax</th>
          <th>Chalan No</th>
          <th>Chalan Date</th>
          <th>Received On</th>
          <th>Received By</th>
          
          <th>Financial Year</th>
          <th>Current Status</th>
          <th>Item Location</th>
          <th>Date of Entry</th>
  </thead>
  <tbody>
     <?php $i=1; ?>
  @foreach($cpanels as $cpanel)
<tr>
          <td> {{ $i++}} </td>
          <td>{{$cpanel->RTax}}</td>
          <td>{{$cpanel->Type}}</td>
          <td>{{$cpanel->ChalanNo}}</td>
          <td>{{$cpanel->ChalanDate}}</td>
          <td>{{$cpanel->ReceivedOn}}</td>
          <td>{{$cpanel->ReceivedBy}}</td>

          <td>{{$cpanel->FinancialYear}}</td>
          <td>{{$cpanel->CurrentStatus}}</td>
          <td>{{$cpanel->ItemLocation}}</td>
          <td>{{$cpanel->EntryDate}}</td>
</tr>          
 @endforeach
  </tbody>
</table>        
   </div>
            </div>
       </div>

   </div>  
</div>

@endsection

