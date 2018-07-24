  

@extends('layouts.back')
@section('container')
<?php 
if(isset($_POST['submit']))

{ $No = $_POST['No'];
        
       for($i = 1; $i <= $No; $i++)   {   

                               $PurchaseOrderNo=$_POST['PurchaseOrderNo'];
                               $PODate=$_POST['PODate'];
                               
                               $itemDescription=$_POST['itemDescription[$i]'];
                               $Make=$_POST['Make[$i]'];
                               $Quantity=$_POST['Quantity[$i]'];
                               $Rate=$_POST['Rate[$i]'];
                               $Gross=$_POST['Gross[$i]'];
                               $Tax=$_POST['Tax[$i]'];
                               $NetAmount=$_POST['NetAmount[$i]'];
                               $RTax=$_POST['RTax[$i]'];
                               $Type=$_POST['Type[$i]'];
                               $ChalanNo=$_POST['ChalanNo[$i]'];
                               $ChalanDate=$_POST['ChalanDate[$i]'];
                               $ReceivedOn=$_POST['ReceivedOn[$i]'];
                               $ReceivedBy=$_POST['ReceivedBy[$i]'];
                               $FinancialYear=$_POST['FinancialYear'];
                               $CurrentStatus=$_POST['CurrentStatus'];
                               $ItemLocation=$_POST['ItemLocation'];
                               $EntryDate=$_POST['EntryDate'];
  if(mysql_query("Insert Into cpanels (PurchaseOrderNo, PODate, No, itemDescription, Make, Quantity, Rate, Gross, Tax, NetAmount, RTax, Type, ChalanNo, ChalanDate, ReceivedOn, ReceivedBy, FinancialYear, CurrentStatus, ItemLocation, EntryDate)
                   values ('$PurchaseOrderNo', '$PODate', '$No', '$itemDescription', '$Make', '$Quantity`, '$Rate', '$Gross', '$Tax', '$NetAmount', '$RTax', '$Type', '$ChalanNo', '$ChalanDate', '$ReceivedOn', '$ReceivedBy', '$FinancialYear', '$CurrentStatus', '$ItemLocation', '$EntryDate')
                  ")){
    header("Location:/cpanel/{{$user->user_id}}");
    exit;
  }
  else{
    echo "failed";
  }
}
}
?>
<head>
 <link href="jquery-ui-css" rel="stylesheet">
 <script src="jquery.js"></script>
 <script src="jquery-ui.js"></script>

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
 </style>
</head>
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
                          <li>  <a href="/profile/{{$user->user_id}}" ><button class="btn btn-primary">Home</button></a> </li>
                      </ul>
               </div><!-- /.navbar-collapse -->
        </nav>
 
   
<!--@if ($errors->any())
<div class="alert alert-danger" role="alert" style="font-size:20px;">
  
             @foreach($errors->all() as $error)
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
   
            
                {{ $error}}
                <p>
           @endforeach 
        
</div>
@endif -->
 <div class ="row">
<div class="container-fluid" id="pin">
   
  <hr>
  <div class="panel-heading">
    <p  id="a" style="font-size:25px; font-weight:bold; color:red;">Insert Item</p>
    </div><hr>
  <div class="panel-body">
               
                <form action="/cpanel/{{$user->user_id}}" method="POST" id="Form1" autocomplete="off"> 
                        {{ csrf_field() }}
                        <?php $today = date(1); ?>
                        

<table>
   <tr>
                            <div class="form-group{{ $errors->has('PurchaseOrderNo') ? ' has-error' : '' }}">
                            <label for="PurchaseOrderNo" class="control-label">Purchase Order No :</label>

                             
                                <input id="PurchaseOrderNo" type="text" class="form-control" style="width:40%;" maxlength="40"name="PurchaseOrderNo" value="{{$PurchaseOrderNo}}" readonly required autofocus>

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

                             
                                <input id="PODate" type="date" class="form-control" style="width:40%;" name="PODate" max="<?php echo $today; ?>" value="{{$PODate}}" readonly required autofocus>

                                @if ($errors->has('PODate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PODate') }}</strong>
                                    </span>
                                @endif
                             
                     </div>
   </tr>
   <tr>
     
           <label for="NoOfItems" class="control-label">No of Items :</label>
           <input type="text" class="form-control" id="No" style="width:40%;" value="{{$No}}" placeholder="No of Items" name="No" maxlength="2" readonly>
  
   </tr>
<br>
 
   <tr>
 
       <label for="itemdetail" class="control-label">Item Details :</label>
            <table class="table table-responsive table-hover table-bordered" width= 100%>
         
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
        
    
      
           @for( $i=1; $i <= $No; $i++)
<tr>
           <td> {{ $i }} </td>
         <td> 
          <div class="form-group{{ $errors->has('itemDescription.'.$i) ? ' has-error' : '' }}">
          <input id="itemDescription" type="text" class="form-control" name="itemDescription[{{$i}}]" value="{{old('itemDescription.'.$i)}}" required autofocus>
           @if ($errors->has('itemDescription.'.$i))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('itemDescription.'.$i) }}</strong>
                                    </span>
                                @endif
          </div>
         </td>
         <td> 
          <div class="form-group{{ $errors->has('Make.'.$i) ? ' has-error' : '' }}">
          <input id="Make" type="text" class="form-control" name="Make[{{$i}}]" value="{{ old('Make.'.$i) }}" maxlength="30" required autofocus> 
        @if ($errors->has('Make.'.$i))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Make.'.$i) }}</strong>
                                    </span>
                                @endif
                              </div></td>
         <td>
          <div class="form-group{{ $errors->has('Quantity.'.$i) ? ' has-error' : '' }}">
           <input id="Quantity" type="text" class="form-control" name="Quantity[{{$i}}]" onkeyup="qty_check()" value="{{ old('Quantity.'.$i) }}"   maxlength="2" required autofocus> 
            <p id="qty_msg"></p>
           @if ($errors->has('Quantity.'.$i))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Quantity.'.$i) }}</strong>
                                    </span>
                                @endif
                       </div> </td>         
         <td> 
          <div class="form-group{{ $errors->has('Rate.'.$i) ? ' has-error' : '' }}">
          <input id="Rate" type="text" class="form-control" name="Rate[{{$i}}]" value="{{ old('Rate.'.$i) }}" maxlength="10" required autofocus> 
        @if ($errors->has('Rate.'.$i))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Rate.'.$i) }}</strong>
                                    </span>
                                @endif
                              </div> </td>
         <td> 
           <div class="form-group{{ $errors->has('Gross.'.$i) ? ' has-error' : '' }}">
          <input id="Gross" type="text" class="form-control" name="Gross[{{$i}}]" value="{{ old('Gross.'.$i) }}" maxlength="10" required autofocus> 
        @if ($errors->has('Gross.'.$i))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Gross.'.$i) }}</strong>
                                    </span>
                                @endif
                              </div> </td>
         <td>
           <div class="form-group{{ $errors->has('Tax.'.$i) ? ' has-error' : '' }}">
           <input id="Tax" type="text" class="form-control" name="Tax[{{$i}}]" value="{{ old('Tax.'.$i) }}" maxlength="10" required autofocus> 
           @if ($errors->has('Tax.'.$i))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Tax.'.$i) }}</strong>
                                    </span>
                                @endif</div> </td>
         <td> 
          <div class="form-group{{ $errors->has('NetAmount.'.$i) ? ' has-error' : '' }}">
          <input id="NetAmount" type="text" class="form-control" name="NetAmount[{{$i}}]" value="{{ old('NetAmount.'.$i) }}" maxlength="10" required autofocus>
          @if ($errors->has('NetAmount.'.$i))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('NetAmount.'.$i) }}</strong>
                                    </span>
                                @endif
                                 </div> </td>
         <td>
          <div class="form-group{{ $errors->has('RTax.'.$i) ? ' has-error' : '' }}">
           <input id="RTax" type="text" class="form-control" name="RTax[{{$i}}]" value="{{ old('RTax.'.$i) }}" maxlength="5" required autofocus>
           @if ($errors->has('RTax.'.$i))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('RTax.'.$i) }}</strong>
                                    </span>
                                @endif </div> </td>
         <td>  
          <div class="form-group{{ $errors->has('Type.'.$i) ? ' has-error' : '' }}">
          <input id="Type" type="text" class="form-control" name="Type[{{$i}}]" value="{{ old('Type.'.$i) }}" maxlength="10" required autofocus>
          @if ($errors->has('Type.'.$i))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Type.'.$i) }}</strong>
                                    </span>
                                @endif
                                 </div> </td>
         <td> 
          <div class="form-group{{ $errors->has('ChalanNo.'.$i) ? ' has-error' : '' }}">
          <input id="ChalanNo" type="text" class="form-control" name="ChalanNo[{{$i}}]" value="{{ old('ChalanNo.'.$i) }}" maxlength="30" required autofocus>
          @if ($errors->has('ChalanNo.'.$i))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ChalanNo.'.$i) }}</strong>
                                    </span>
                                @endif
                                 </div> </td>
         <td>
           
          <div class="form-group{{ $errors->has('ChalanDate.'.$i) ? ' has-error' : '' }}">
           <input id="datepicker" type="date" class="form-control" name="ChalanDate[{{$i}}]" max="<?php echo $today; ?>" value="{{ old('ChalanDate.'.$i) }}" required autofocus>
           @if ($errors->has('ChalanDate.'.$i))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ChalanDate.'.$i) }}</strong>
                                    </span>
                                @endif
                                 </div> </td>
         <td> 
          <div class="form-group{{ $errors->has('ReceivedOn.'.$i) ? ' has-error' : '' }}">
          <input id="datepickers" type="date" class="form-control" name="ReceivedOn[{{$i}}]" max="<?php echo $today; ?>" value="{{ old('ReceivedOn.'.$i) }}" required autofocus> 
        @if ($errors->has('ReceivedOn.'.$i))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ReceivedOn.'.$i) }}</strong>
                                    </span>
                                @endif
                              </div> </td>
         <td> 
          <div class="form-group{{ $errors->has('ReceivedBy.'.$i) ? ' has-error' : '' }}">
          <input id="ReceivedBy" type="text" class="form-control" name="ReceivedBy[{{$i}}]" value="{{ old('ReceivedBy.$i') }}" maxlength="30" required autofocus>
          @if ($errors->has('ReceivedBy.'.$i))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ReceivedBy.'.$i) }}</strong>
                                    </span>
                                @endif 
                              </div> </td>
</tr>
 
 @endfor
 
 

      </tbody>
</table>
   </tr>
     
<tr>
  <div class="form-group{{ $errors->has('FinancialYear') ? ' has-error' : '' }}">
                            <label for="FinancialYear" class=" control-label">Financial Year :</label>

                             
                                  <select name="FinancialYear" class="form-control" style="width:40%;" id="FinancialYear" value="{{ old('FinancialYear') }}" required autofocus>
      
      <option value="{{ old('FinancialYear') }}">{{ old('FinancialYear') }}</option>
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
                                 <option value="{{ old('CurrentStatus') }}">{{ old('CurrentStatus') }}</option>
                                
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

                             
                                  <select name="ItemLocation" style="width:40%;" class="form-control" id="ItemLocation" value="{{ old('ItemLocation') }}">
      <option value="{{ old('ItemLocation') }}">{{ old('ItemLocation') }}</option>

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

                             
                                <input id="datepicker" type="date" style="width:40%;" class="form-control" name="EntryDate" value="{{ old('EntryDate') }}" max="<?php echo $today; ?>" required autofocus>

                               @if ($errors->has('EntryDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('EntryDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                         

   </tr>
    <tr>
 <div class="col-md-2 col-md-offset-5">
  <input id="button2" type="submit" class=" form-control btn btn-success" name="submit" onclick="return confirm('Are u really want to submit!');" value="Submit">
  </div>
</tr>
 </table>
</form>
  </div>
            </div>
        </div>
    </div>
</div>
</body>
  
<script src="/js/Marks.js"></script>

 
<script type="text/javascript">
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("EntryDate")[0].setAttribute('max', today);
document.getElementsByName("PODate")[0].setAttribute('max', today);
 
 document.getElementById("datepicker").setAttribute('max', today);
 document.getElementById("datepickers").setAttribute('max', today);
 for(i=1; i<=2 ; i++){
document.getElementsByName("ChalanDate[i]")[0].setAttribute('max', today);
 
 }

 // return false;
    

 $('#Form1').on('submit',function (event) 
  {  event.preventDefault();
    return false;
  });

/*function myfunction()
{   

    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {   document.getElementById("No").value = document.getElementById("No").value + 1 ;
            document.getElementById("No").value=this.responseText;
        }
    };
    xhttp.open("GET","/showId",true);
    xhttp.send();
    event.preventDefault();    
    return false;
  }
*/


 /*function qty_check()
  {  
    var qty=document.getElementById("Quantity").value;
    var qty_msg= document.getElementById("qty_msg");
    //var letter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
  onkeyup = function()
    {  
      if(qty.length==1)
      {qty_msg.style.color="green";
        qty_msg.innerHTML="hj";
      }
        
      else{
        qty_msg.style.color="red";
        qty_msg.innerHTML="Only numbers are allowed!";
        
      }
    };
    
  }*/
 /* function qty_check()
  {  var i =1;
    var qty_msg= document.getElementById("qty_msg");
     for(i=1; i < 2 ; i++){
    var qty[i]=document.getElementByName('Quantity.'.i).value; 
    
  onkeyup = function()
    {  
      if(qty[i].length>6)
      {
        qty_msg.style.color="green";
        qty_msg.innerHTML="";
      }
      else{
        qty_msg.style.color="red";
        qty_msg.innerHTML="Please enter more than 3 letters...!";
      }
    };
  }
  }*/
</script>
@endsection
