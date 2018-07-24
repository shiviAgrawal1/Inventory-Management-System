 @extends('customer.home')

@section('content')

<div class="container-fluid">
  <br><br>
  <div class="col-lg-12"> 
 <div class="panel panel-default panel-responsive">
  
   <div class="panel-heading">
   <caption>Ur detail</caption>
   </div>
   <div class="panel-body text-center">
    
    <table class="table table-responsive table-hover table-bordered col-lg-12">
        
        <thead>
          <th>id</th>
          <th>Name</th>
          <th>User_id</th>
           
          <th>Email</th>
          <th>Address</th>
          <th>Date of Birth</th>
          <th>Contact_no</th>
          <th>Group</th>
          </thead> 

        <tbody>
  

      <tr id="user{{$user->id}}">
           <td>{{$user->id}}</td>
           <td>{{$user->name}}</td>
          <td>

             
            {{$user->user_id}}
          
              
            </td>
       
      <td>{{$user->email}}</td>
      <td>{{$user->Address}}</td>
      <td>{{$user->dob}}</td>
      <td>{{$user->Contact_no}}</td>
      <td>
        {{$user->Group}}
      </td>
       
  

      </tbody>
</table>
     

   </div>
   </div>
   </div>
   </div>
   @endsection