@extends('layouts.back')
@section('container')
 <style>
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
#yes,#no,#ok,#cancel{
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

        
 	             <div class="panel-heading">
 		           
               <hr><a href="#" id="a" style="font-size:25px; font-weight:bold; color:red;">Delete Item</a><hr>
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
          <th>Delete</th>


  		  	 
  		  </thead> 

        <tbody>
        <?php $i=1; ?>
  @foreach($cpanels as $cpanel)
      
       
      
<tr>
           <td> {{$i++}} </td>
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
          <td> 

            <form action="/del3/{{$cpanel->id}}/{{$one->PurchaseOrderNo}}/{{$user->user_id}}" method="GET" onSubmit="window.scrollTo(5000,500);>
              {{ csrf_field()}}
              {{ method_field('DELETE')}}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <button  class="btn btn-danger btn-delete"  onclick="return confirm('Are u sure to delete!');">Delete</button>
        </form>
         <!-- <div id="myModal" class="modal">

   Modal content -->  
  <!--<div class="modal-content">
    <span class="close">&times;</span>

      <p>Do you really want to delete this?</p>
      <form action="/del3/{{$cpanel->id}}/{{$one->PurchaseOrderNo}}/{{$user->user_id}}" method="GET">
              {{ csrf_field()}}
              {{ method_field('DELETE')}}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <button class="btn btn-danger btn-delete" id="yes" >Yes</button>
        </form>
       
        <button class="btn btn-primary btn-no" id="no" >No</button>
        
      </div>
     
</div>--> <!--end model -->
      </td>


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
        </tr><br>
        <tr>
   <!--      <form action="/del2/{{$one->PurchaseOrderNo}}" method="GET">
            {{ csrf_field()}}
              {{ method_field('DELETE')}} 
              <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
  
-->
          <button class="btn btn-danger btn-delete"   id="lastdel" >Delete</button>

     <div id="Modals" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close close2">&times;</span>

      <p>Do you really want to delete this?</p>
       
     
    
     
      <form action="/del2/{{$one->PurchaseOrderNo}}/{{$user->user_id}}" method="GET">
            {{ csrf_field()}}
              {{ method_field('DELETE')}} 
              <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
              
        <button class="btn btn-danger btn-delete" id="ok" >Yes</button>
        </form>
       
        <button class="btn btn-primary btn-no" id="cancel" >No</button>
        
      </div>
     
</div> <!--end model -->
     
    <!--</form> --> 
       
        
        </tr>
</table>

  </div>
            </div>
       </div>

   </div>  
</div> 
 
<script>
// Get the modal
 

/*var btn =document.querySelectorAll("[id='myBtn']");

var modal = document.getElementById('myModal');
 
var no = document.getElementById("no");
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
for(var i = 0; i < btn.length; i++){ 
btn[i].onclick = function() {
    modal.style.display = "block";
 } }
  
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
}*/
var btn2 = document.getElementById('lastdel');
 

var modal2 = document.getElementById('Modals');
 
var cancel = document.getElementById("cancel");
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
 
btn2.onclick = function() {
    modal2.style.display = "block";
 } 
  
span2.onclick = function() {
    modal2.style.display = "none";
}
cancel.onclick = function() {
    modal2.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal2.style.display = "none";
    }
}
$(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
 
 
@endsection


