

    
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
  div{
  font-size: 20px;
  position: center;
  font-weight: bold;
 }   
 b{color: black;}
th{
  font-size: 20px;
  color: black;
}
td{
  font-size: 18px;
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
 
   
<div class="container-fluid">

      <div class="col-md-12">
      
       
         <div class="panel panel-default panel-responsive">
          
 	             <div class="panel-heading">
 		                  <p  id="a" style="font-size:25px; font-weight:bold; color:red;">Item Detail</p>
    </div>
                      <div class="panel-body">
                      
  <table class="table table-responsive table-hover table-bordered">
  		   <tr><b>Purchase Order No. :  </b>
          {{$one->PurchaseOrderNo}}
        </tr><br><br>
        <tr><b>Purchase Order Date :  </b>
          {{$one->PODate}}
        </tr><br><br>
        <tr><b>No. of Items :  </b>
          {{$one->No}}
        </tr>
        <tr>
        
        <br><br>
        <b>Items detail:</b>
        <table class="table table-responsive table-hover table-bordered">
  		  <thead>
  		  	 

          <th>Sr. No.</th>
          <th>Item Description</th>
          <th>Make/Model</th>
          <th>Quantity</th>
          <th>Rate (INR)</th>
          <th>Gross Price</th>
          <th>Taxes & Duties</th>
          <th>Net Amount</th>
          <th>Rate of tax</th>
          <th>Type of tax</th>
          <th>Chalan No</th>
  		  	<th>Chalan Date</th>
  		  	<th>Received On</th>
  		  	<th>Received By</th>


  		  	 
  		  </thead> 

        <tbody>
        <?php $i=1; ?>
  @foreach($cpanels as $cpanel)
      
       
      
<tr>
           <td> {{ $i++}} </td>
          <td>{{$cpanel->itemDescription}}</td>
          <td>{{$cpanel->Make}}</td>
          <td>{{$cpanel->Quantity}}</td>
          <td>{{$cpanel->Rate}}</td>
          <td>{{$cpanel->Gross}}</td>
          <td>{{$cpanel->Tax}}</td>
          <td>{{$cpanel->NetAmount}}</td>
          <td>{{$cpanel->RTax}}</td>
          <td>{{$cpanel->Type}}</td>
          <td>{{$cpanel->ChalanNo}}</td>
          <td>{{$cpanel->ChalanDate}}</td>
          <td>{{$cpanel->ReceivedOn}}</td>
          <td>{{$cpanel->ReceivedBy}}</td>


 </tr>           
      
  @endforeach

      </tbody>
</table></tr>
<tr><b>Financial Year :  </b>
          {{$one->FinancialYear}}
        </tr><br><br>
        <tr><b>Current Status :  </b>
          {{$one->CurrentStatus}}
        </tr><br><br>
        <tr><b>Item Location :  </b>
          {{$one->ItemLocation}}
        </tr><br><br>
        <tr><b>Date of Entry:  </b>
          {{$one->EntryDate}}
        </tr>
         
</table>

  </div>
            </div>
       </div>

   </div>  
</div>
</body>
 
@endsection


