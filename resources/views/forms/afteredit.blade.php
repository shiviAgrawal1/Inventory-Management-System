

 @extends('customer.home')

@section('content')

<style>
b{
  font-size: 22px;
  font-weight: bold;
}
td{
font-weight: bold;
font-size: 15px;
}
</style>
<div class="container-fluid">

       
          
 	             <div class="panel-heading"><hr>
 		                  <p  id="a" style="font-size:25px; font-weight:bold; color:green;">Edit Item</p><hr>
    </div>
                      <div class="panel-body">
                      
  <table class="table table-responsive table-hover table-bordered">
  		   <tr><b>Purchase Order No. :  <b>
          {{$one->PurchaseOrderNo}}
        </tr><br><br>
        <tr><b>PODate :  <b>
          {{$one->PODate}}
        </tr><br><br>
        <tr><b>No. of items :  <b>
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
<tr><b>Financial Year :  <b>
          {{$one->FinancialYear}}
        </tr><br><br>
        <tr><b>Current Status :  <b>
          {{$one->CurrentStatus}}
        </tr><br><br>
        <tr><b>Item Location :  <b>
          {{$one->ItemLocation}}
        </tr><br><br>
        <tr><b>Date of Entry:  <b>
          {{$one->EntryDate}}
        </tr>
        
</table>

  </div>
            </div>
       </div>

   </div>  
</div>

 
@endsection


