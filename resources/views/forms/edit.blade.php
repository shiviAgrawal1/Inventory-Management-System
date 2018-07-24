   
 
  
 @extends('layouts.back')
@section('container')
<head><link href="jquery-ui-css" rel="stylesheet">
 <script src="jquery.js"></script>
 <script src="jquery-ui.js"></script>
 <style>
 .container-fluid{color: black;}
 /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin-top: 8%;
    margin-left: 30%;
    padding: 20px;
    border: 1px solid #888;
    width: 40%;
}

/* The Close Button */
.close {
    color: black;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;
}
#yes , #no{
  width:150px;
}
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
 </style></head>
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
</head>
@if ($errors->any())
<div class="alert alert-danger" role="alert" style="font-size:20px;">
  
            @foreach ($errors->all() as $error)
                 
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
   
            
                {{ $error }}
                <p>
            @endforeach
        
</div>
@endif
 <div class ="row">
<div class="container-fluid" id="pin">
   
  <div class="panel-heading"><hr>
     <p  id="a" style="font-size:25px; font-weight:bold; color:green;">Edit Item</p><hr>
    </div>
  <div class="panel-body">
               
                <form action="/update3/{{$one->PurchaseOrderNo}}/{{$user->user_id}}" method="POST"> 
                        {{ csrf_field() }}
                      <?php $today = date(1); ?>
                        
<table>
   <tr>
                            <div class="form-group{{ $errors->has('PurchaseOrderNo') ? ' has-error' : '' }}">
                            <label for="PurchaseOrderNo" class="control-label">Purchase Order No :</label>

                             
                                <input id="PurchaseOrderNo" type="text" class="form-control" style="width:40%;" maxlength="40" name="PurchaseOrderNo" value="{{$one->PurchaseOrderNo}}" required autofocus>

                                @if ($errors->has('PurchaseOrderNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PurchaseOrderNo') }}</strong>
                                    </span>
                                @endif
                             
                           </div>  
   </tr>
   <tr>
                    <div class="form-group{{ $errors->has('PODate') ? ' has-error' : '' }}">
                            <label for="PODate" class="control-label">Purchase Order Date :</label>

                             
                                <input id="datepicker" type="date" class="form-control" name="PODate" style="width:40%;"max="<?php echo $today; ?>" value="{{$one->PODate}}" required autofocus>

                                @if ($errors->has('PODate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PODate') }}</strong>
                                    </span>
                                @endif
                             
                     </div>
   </tr>
   <tr>
     
           <label for="NoOfItems" class="control-label">No of Items :</label>
           <input type="text" class="form-control" id="No"  value="{{$one->No}}" placeholder="No of Items" style="width:40%;" maxlength="2" name="No">
  
   </tr>
<br>
 
   <tr>
 
       <label for="itemdetail" class="control-label">Item Details :</label>
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
          <th>Chalan No.</th>
          <th>Chalan Date</th>
          <th>Received On</th>
          <th>Received By</th>
          </thead> 

        <tbody id="sem">
        
    
      <?php $i=1 ?>
           @foreach($cpanels as $cpanel)
<tr>
           <td> {{ $i }} </td>
         <td>  <input id="itemDescription" type="text" class="form-control" name="itemDescription[{{$i}}]" value="{{$cpanel->itemDescription}}"></td>
         <td>  <input id="Make" type="text" class="form-control" name="Make[{{$i}}]" value="{{$cpanel->Make}}" maxlength="30"></td>
         <td>  <input id="Quantity" type="text" class="form-control" name="Quantity[{{$i}}]" value="{{$cpanel->Quantity}}" maxlength="2"></td>
         <td>  <input id="Rate" type="text" class="form-control" name="Rate[{{$i}}]" value="{{$cpanel->Rate}}" maxlength="10"></td>
         <td>  <input id="Gross" type="text" class="form-control" name="Gross[{{$i}}]" value="{{$cpanel->Gross}}" maxlength="10"></td>
         <td>  <input id="Tax" type="text" class="form-control" name="Tax[{{$i}}]" value="{{$cpanel->Tax}}" maxlength="10"></td>
         <td>  <input id="NetAmount" type="text" class="form-control" name="NetAmount[{{$i}}]" value="{{$cpanel->NetAmount}}" maxlength="10"></td>
         <td>  <input id="RTax" type="text" class="form-control" name="RTax[{{$i}}]" value="{{$cpanel->RTax}}" maxlength="5"></td>
         <td>  <input id="Type" type="text" class="form-control" name="Type[{{$i}}]" value="{{$cpanel->Type}}" maxlength="10"></td>
         <td>  <input id="ChalanNo" type="text" class="form-control" name="ChalanNo[{{$i}}]" value="{{$cpanel->ChalanNo}}" maxlength="30"></td>
         <td>  <input id="datepicker" type="date" class="form-control" name="ChalanDate[{{$i}}]" max="<?php echo $today; ?>" value="{{$cpanel->ChalanDate}}"></td>
         <td>  <input id="datepickers" type="date" class="form-control" name="ReceivedOn[{{$i}}]" max="<?php echo $today; ?>" value="{{$cpanel->ReceivedOn}}"></td>
         <td>  <input id="ReceivedBy" type="text" class="form-control" name="ReceivedBy[{{$i}}]" value="{{$cpanel->ReceivedBy}}" maxlength="30"></td>
</tr> {{$i++}}
 @endforeach
 
 

      </tbody>
</table>
   </tr>
   <tr>
  <div class="form-group{{ $errors->has('FinancialYear') ? ' has-error' : '' }}">
                            <label for="FinancialYear" class=" control-label">Financial Year :</label>

                             
                                  <select name="FinancialYear" class="form-control" style="width:40%;" id="FinancialYear" value="{{ old('FinancialYear') }}" required autofocus>
      
      <option value="{{$one->FinancialYear}}">{{$one->FinancialYear}}</option>
      <option value="2009-10">2009-10</option>
      <option value="2010-11">2010-11</option>
      <option value="2011-12">2011-12</option>
      <option value="2012-13">2012-13</option>
      <option value="2013-14">2013-14</option>
      <option value="2014-15">2014-15</option>
      <option value="2015-16">2015-16</option>
      <option value="2016-17">2016-17</option>
      <option value="2017-18">2017-18</option>
      <option value="2018-19">2018-19</option>
      <option value="2019-20">2019-20</option>
    </select>
                                @if ($errors->has('FinancialYear'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('FinancialYear') }}</strong>
                                    </span>
                                @endif
                             
   
                        </div>

</tr>
     
     <tr>
      <div class="form-group{{ $errors->has('CurrentStatus') ? ' has-error' : '' }}">
                            <label for="CurrentStatus" class="control-label">Current Status :</label>

                             
                               <select name="CurrentStatus" class="form-control" style="width:40%;" id="CurrentStatus" value="{{ old('CurrentStatus') }}" required autofocus>
                                 <option value="{{$one->CurrentStatus}}">{{$one->CurrentStatus}} </option>
                                
                                 <option value="Working">Working</option>
                                 <option value="Non-Working">Non-Working</option>
                                 <option value="Non-Working / Non-Repairable">Non-Working / Non-Repairable</option>
                                  <option value="Others">Others</option>
                               </select>
                            
                                @if ($errors->has('CurrentStatus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('CurrentStatus') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
     </tr>   
     <tr>

      <div class="form-group{{ $errors->has('ItemLocation') ? ' has-error' : '' }}">
                            <label for="ItemLocation" class="control-label">Item Location :</label>

                             
                                  <select name="ItemLocation" class="form-control" id="ItemLocation" style="width:40%;">
                                 <option value="{{$one->ItemLocation}}">{{$one->ItemLocation}}</option>
                                 
      <option value="Centre of e-Governance">Centre of e-Governance</option>
      <option value="Display Area">Display Area</option>
      <option value="Working Area">Working Area</option>
      <option value="Manager Room">Manager Room</option>
      <option value="VC Room">VC Room</option>
      <option value="Conference Hall">Conference Hall</option>
      <option value="Pantry">Pantry</option>
      <option value="UPS Room">UPS Room</option>
      <option value="Server Room">Server Room</option>
      <option value="Meity Store">Meity Store</option>
       
    </select>
                                @if ($errors->has('ItemLocation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ItemLocation') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
     </tr>                
   
   <tr>

     <div class="form-group{{ $errors->has('EntryDate') ? ' has-error' : '' }}">
                            <label for="EntryDate" class="  control-label">Date of Entry :</label>

                             
                                <input id="datepicker" type="date" class="form-control" name="EntryDate" max="<?php echo $today; ?>" value="{{$one->EntryDate}}" style="width:40%;"required autofocus>

                                @if ($errors->has('EntryDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('EntryDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                         

   </tr>
          
   
    


   
   <tr>
 <div >
    
   <!--  <div id="myModal" class="modal">-->

  <!-- Modal content -->
 <!-- <div class="modal-content">
    <span class="close">&times;</span>

      <p>Are you sure to edit?</p>
       <button class="btn btn-danger" id="yes" type="button">Yes</button>
      </tr>
 </table>  
 </form>
<button class="btn btn-primary btn-no" id="no" >No</button>
        
      </div>
     
</div>--> <!--end model --> 
 <button class="btn btn-success col-md-2 col-md-offset-5"  onclick="return confirm('Are u sure to edit!');">Submit</button>
</div>
</tr>
 </table>  
 </form>

  

 


                          
     


  
                         
                </div>
            </div>
        </div>
    </div>
</div>
  

<script>
fn(){return false;}
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var no = document.getElementById("no");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
no.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("EntryDate")[0].setAttribute('max', today);
document.getElementsByName("PODate")[0].setAttribute('max', today);
 
 document.getElementById("datepicker").setAttribute('max', today);
 document.getElementById("datepickers").setAttribute('max', today);
 for(i=1; i<=2 ; i++){
  document.getElementsByName("ChalanDate[i]")[0].setAttribute('max', today);
 
 }


</script>
<!--<script type="text/javascript">
$(function() {
var date = new Date();
var currentMonth = date.getMonth();
var currentDate = date.getDate();
var currentYear = date.getFullYear();
$('#datepicker').datepicker({
maxDate: new Date(currentYear, currentMonth, currentDate)
});
});
</script> -->
@endsection
