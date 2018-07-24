 
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
                          <li>  <a href="/profile/{{$user->user_id}}" ><button class="btn btn-primary">Home</button></a> </li>
                      </ul>
               </div><!-- /.navbar-collapse -->
        </nav>
 
  </div>
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


<div class="container" id="pin" style="width:40%;">
<div class="col-lg-12"> 
<div class="panel panel-default panel-responsive">
<div class="panel-heading">
    <p  id="a" style="font-size:25px; font-weight:bold; color:red;">Insert Item</p>
    </div>
<div class="panel-body">
          <form action="/ss/{{$user->user_id}}" method="GET">
                   {{ csrf_field() }}
                    <?php $today = date(1); ?>
              <div class="form-group{{ $errors->has('PurchaseOrderNo') ? ' has-error' : '' }}">
                 <label for="PurchaseOrderNo" class=" control-label">Purchase Order No :</label>
                 <div class="">
                 <input id="PurchaseOrderNo" type="text" class="form-control" name="PurchaseOrderNo" maxlength="40" value="{{ old('PurchaseOrderNo') }}" required autofocus>
                 </div>
                                @if ($errors->has('PurchaseOrderNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PurchaseOrderNo') }}</strong>
                                    </span>
                                @endif
              </div>  


              <div class="form-group{{ $errors->has('PODate') ? ' has-error' : '' }}">
                   <label for="PODate" class="control-label">Purchase Order Date :</label>
                   <div class="">
                   <input id="datepicker" type="date" class="col-md-8 form-control" name="PODate" max="<?php echo $today; ?>" value="{{ old('PODate') }}" required autofocus>
                   </div>
                                @if ($errors->has('PODate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PODate') }}</strong>
                                    </span>
                                @endif
              </div>

               <div class="form-group{{ $errors->has('No') ? ' has-error' : '' }}">
                   <label for="No" class=" control-label">No Of Items :</label>
                   
                   <input id="No" type="text" class="col-md-8 form-control" name="No" value="{{ old('No') }}" maxlength="2" required autofocus>
                   
                                @if ($errors->has('No'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('No') }}</strong>
                                    </span>
                                @endif
              </div>

              <br><br><div class="col-lg-4 col-lg-offset-5">
                      <input type="submit" class=" form-control btn btn-success" name="submit" value="Submit">
                 </div>
                 <div id="list">  </div>

         </form>

</div>
</div>
</div>
</div>
<script type="text/javascript">
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("PODate")[0].setAttribute('max', today);
</script>
@endsection