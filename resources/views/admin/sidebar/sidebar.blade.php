
    <!--sidebar start-->
    <style>
    p{
      font-size: 52px;
      font-weight: bold;
      color: Blue;
      margin-top: 2%;
      margin-left: 15%;

    }
    </style>
    <aside>
      
      <div id="sidebar" class="nav-collapse " style="position:fixed;">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="#">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="/cpanel/create">Insert item</a></li>
              <li><a class="" href="/search">Search item</a></li>
              <li><a class="" href="/cpanel">All items</a></li>
              @if($user->Group == "Admin")
              <li><a class="" href="#">Edit</a></li>
              <li><a class="" href="#">Delete</a></li>
              @endif
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>About U</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="/mydetail/{{$user->user_id}}">My Detail</a></li>
              <li><a class="" href="/edit/{{$user->id}}">Edit</a></li>
              
            </ul>
          </li>
           @if($user->Group == "Admin")
          <li>
            <a class="" href="/group">
                           <i class="icon_table"></i>
                          <span>Group Users</span>
                      </a>
          </li>
           
            <li>
            <a class="" href="/allusers">
                           <i class="icon_genius"></i>
                          <span>All Users</span>
                      </a>
          </li>
           <li>
            <a class="" href="widgets.html">
                            <i class="icon_documents_alt"></i>
                          <span>Add new User</span>
                      </a>
          </li>
          @endif
        </ul>
        <!-- sidebar menu end-->
      </div>
<div class="row">
         @if($user->Group == "Admin")
         <p>Welcome Admin!</p>
         @else
         <p>Welcome {{$user->name}}!</p>
         @endif
   <img src="/india.jpg" alt="CeG">
 </div>
 

    </aside>