<header class="header">
  <nav class="navbar navbar-default" id="n" >
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>
      <a href="#" class="logo"><b>Asset</b> <span class="lite"><b>Management</b></span></a>
      <!--logo end-->
       <div class="top-nav notification-row">
         
        <ul class="nav pull-right top-menu">

                            <li><a href="/search" style="color:black; font-size=10px;"><b>Search Item</b></a></li>
                            <li><a href="/cpanel/create" style="color:black; font-size=10px;"><b>Insert Item</b></a></li>
                            @if($user->Group=="Admin")
                            <li><a href="#" style="color:black; font-size=10px;"><b>Edit/Delete item</b></a></li>
                            @endif
                            
              
           
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username" style="color:black; font-size=10px;"><b>{{$user->name}}</b></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile" style="color:black; font-size=10px;"></i><b>My Profile</b></a>
              </li>
               <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
              <li>
                <a href="#"><i class="icon_key_alt" style="color:black; font-size=10px;"></i><b>Documentation</b></a>
              </li>
               
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
</nav>
    </header>
     