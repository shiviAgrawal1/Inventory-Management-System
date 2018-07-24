@extends('customer.home')

@section('content')
<head>
 <link href="jquery-ui-css" rel="stylesheet">
 <script src="jquery.js"></script>
<script src="jquery-ui.js"></script>

<script>
   $(function(){
    $("#datepicker").datepicker({ 
      dateFormat:"yy/mm/dd",
      changeMonth:true,
      changeYear:true,
      maxDate:"+5",
      minDate: 0

      
    });
$("#datepicker").datepicker("setDate","5");

   });



</script>
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
<div class="container" id="pin">
  <div class="col-lg-12 col-lg-offset-0"> 
 <div class="panel panel-default panel-responsive">
  <div class="panel-heading">
    <button type="button" class="btn btn-info" id="customer">Insert Item Detail</button>
  </div>
  <div class="panel-body">
                
                    <form class="form-horizontal" enctype="multipart/form-data"  action="/customer" method= "POST" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('itemDescription') ? ' has-error' : '' }}">
                            <label for="itemDescription" class="col-md-4 control-label">Item Description :</label>

                            <div class="col-md-6">
                                <textarea class="form-control" rows="4" name="itemDescription" value="{{ old('itemDescription') }}" required autofocus></textarea>

                                @if ($errors->has('itemDescription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('itemDescription') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('Category') ? ' has-error' : '' }}">
                            <label for="Category" class="col-md-4 control-label">Category :</label>
                            

                            <div class="col-md-6">
     <select name="Category" class="form-control" id="Category">
      
      <option value="Hardware/Assets">Hardware/Assets</option>
      <option value="Computer Equipments">Computer Equipments</option>
      <option value="Furniture and Fixtures">Furniture and Fixtures</option>
      <option value="Consumables">Consumables</option>
      <option value="Office Equipments">Office Equipments</option>
      <option value="Softwares">Softwares</option>
      <option value="Others">Others</option>
       
    </select>
                                @if ($errors->has('Category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('PurchaseOrderNo') ? ' has-error' : '' }}">
                            <label for="PurchaseOrderNo" class="col-md-4 control-label">Purchase Order No :</label>

                            <div class="col-md-6">
                                <input id="PurchaseOrderNo" type="text" class="form-control" name="PurchaseOrderNo" value="{{ old('PurchaseOrderNo') }}" required autofocus>

                                @if ($errors->has('PurchaseOrderNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PurchaseOrderNo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('PurchaseOrderDocument') ? ' has-error' : '' }}">
                            <label for="PurchaseOrderDocument" class="col-md-4 control-label">Purchase Order Document :</label>

                            <div class="col-md-6">
                                <input id="PurchaseOrderDocument" type="file" class="form-control" name="PurchaseOrderDocument" value="{{ old('PurchaseOrderDocument') }}" required>

                                @if ($errors->has('PurchaseOrderDocument'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PurchaseOrderDocument') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('PODate') ? ' has-error' : '' }}">
                            <label for="PODate" class="col-md-4 control-label">Purchase Order Date :</label>

                            <div class="col-md-6">
                                <input id="datepicker" type="date" class="form-control" name="PODate" value="{{ old('PODate') }}" required autofocus>

                                @if ($errors->has('PODate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PODate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('ChalanNo') ? ' has-error' : '' }}">
                            <label for="ChalanNo" class="col-md-4 control-label">Challan No :</label>

                            <div class="col-md-6">
                                <input id="ChalanNo" type="text" class="form-control" name="ChalanNo" value="{{ old('ChalanNo') }}" required autofocus>

                                @if ($errors->has('ChalanNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ChalanNo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ChalanDate') ? ' has-error' : '' }}">
                            <label for="ChalanDate" class="col-md-4 control-label">Challan Date :</label>

                            <div class="col-md-6">
                                <input id="datepicker" type="date" class="form-control" name="ChalanDate" value="{{ old('ChalanDate') }}" required autofocus>

                                @if ($errors->has('ChalanDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ChalanDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('ReceivedOn') ? ' has-error' : '' }}">
                            <label for="ReceivedOn" class="col-md-4 control-label">Received On :</label>

                            <div class="col-md-6">
                                <input id="datepicker" type="date" class="form-control" name="ReceivedOn" value="{{ old('ReceivedOn') }}" required autofocus>

                                @if ($errors->has('ReceivedOn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ReceivedOn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('ReceivedBy') ? ' has-error' : '' }}">
                            <label for="ReceivedBy" class="col-md-4 control-label">Received By :</label>

                            <div class="col-md-6">
                                <input id="ReceivedBy" type="text" class="form-control" name="ReceivedBy" value="{{ old('ReceivedBy') }}" required autofocus>

                                @if ($errors->has('ReceivedBy'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ReceivedBy') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

 <div class="form-group{{ $errors->has('FinancialYear') ? ' has-error' : '' }}">
                            <label for="FinancialYear" class="col-md-4 control-label">Financial Year :</label>

                            <div class="col-md-6">
                                  <select name="FinancialYear" class="form-control" id="FinancialYear">
       
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
                        </div>

 <div class="form-group{{ $errors->has('CurrentStatus') ? ' has-error' : '' }}">
                            <label for="CurrentStatus" class="col-md-4 control-label">Current Status :</label>

                            <div class="col-md-6">
                               <select name="CurrentStatus" class="form-control" id="CurrentStatus">
       
                                 
                                 <option value="Working">Working</option>
                                 <option value="Non-Working">Non-Working</option>
                                 <option value="Non-Working / Non-Repairable">Non-Working / Non-Repairable</option>
                                  <option value="Others">Others</option>
                               </select>
                           </div>
                                @if ($errors->has('CurrentStatus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('CurrentStatus') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

 <div class="form-group{{ $errors->has('ItemLocation') ? ' has-error' : '' }}">
                            <label for="ItemLocation" class="col-md-4 control-label">Item Location :</label>

                            <div class="col-md-6">
                                  <select name="ItemLocation" class="form-control" id="ItemLocation">
       
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
                        </div>


                     <div class="form-group{{ $errors->has('EntryDate') ? ' has-error' : '' }}">
                            <label for="EntryDate" class="col-md-4 control-label">Date of Entry :</label>

                            <div class="col-md-6">
                                <input id="datepicker" type="date" class="form-control" name="EntryDate" value="{{ old('EntryDate') }}" required autofocus>

                                @if ($errors->has('EntryDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('EntryDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
   

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
