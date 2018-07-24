

  
 @extends('layouts.back')
@section('container')
 <style>
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
#yes,#no{
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
                            <li><a href="/search/{{$all->user_id}}" style="font-size:20px; color:black;"><b>View/Search item</b></a></li>
                            <li><a href="/cpanel/create/{{$all->user_id}}" style="font-size:20px; color:black;"><b>Insert item</b></a></li>
                            @if($all->Group=="Admin")
                            <li><a href="/likesearch/{{$all->user_id}}" style="font-size:20px; color:black;"><b>Edit item</b></a></li>
                            <li><a href="/delsearch/{{$all->user_id}}" style="font-size:20px; color: black;"><b>Delete item</b></a></li>
                            @endif
                          <li>  <a href="/profile/{{$all->user_id}}" ><button class="btn btn-primary">Home</button></a> </li>
                      </ul>
               </div><!-- /.navbar-collapse -->
        </nav>
 
   
<div class="container-fluid">

      <div class="col-md-12">
        
       
         <div class="panel panel-default panel-responsive">
          
 	             <div class="panel-heading">
 		                 <p  id="a" style="font-size:25px; font-weight:bold; color:red;">Remove User</p>
    </div>
                      <div class="panel-body">
                      
  <table class="table table-responsive table-hover table-bordered col-lg-12">
  		  <h3><i> In this page there are {{ $users->count() }} users.</i> </h3>
  		  <thead>
  		  	<th>Sr No.</th>
          <th>Name</th>
          <th>User_id</th>
  		  	 
  		  	<th>Email</th>
          <th>Address</th>
  		  	<th>Date of Birth</th>
          <th>Contact_no</th>
          <th>Group</th>
          <th>Delete</th>
  		    </thead> 

        <tbody>
          <?php $i=1; ?>
  @foreach($users as $user)

      <tr id="user{{$user->id}}">
           <td>{{$i++}}</td>
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
      <td>
        <form action="/destroy_user/{{$user->id}}/{{$all->user_id}}" method="GET">
              {{ csrf_field()}}
              {{ method_field('DELETE')}}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <button class="btn btn-danger btn-delete" onclick="return confirm('Are u sure to delete!');">Delete</button>
        </form>
         
         <!-- <div id="myModal" class="modal">

   Modal content -->
  <!--<div class="modal-content">
    <span class="close">&times;</span>

      <p>Do you really want to delete this?</p>
<form action="/destroy_user/{{$user->id}}/{{$all->user_id}}" method="GET">
              {{ csrf_field()}}
              {{ method_field('DELETE')}}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <button class="btn btn-danger btn-delete" id="yes" >Yes</button>
        </form>
       
        <button class="btn btn-primary btn-no" id="no" >No</button>
        
      </div>
     
</div>--> <!--end model --></td>
       
  @endforeach

      </tbody>
</table>
{{$users->links()}}
  </div>
            </div>
       </div>

   </div>  
</div>

 <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn =document.querySelectorAll("[id='myBtn']");
 
var no = document.getElementById("no");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
 
for(var j = 0; j < btn.length; j++){ 
  
btn[j].onclick = function() {
    modal.style.display = "block";
 } }


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
</script>
@endsection


