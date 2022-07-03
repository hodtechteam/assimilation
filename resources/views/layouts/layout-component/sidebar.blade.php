             <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Navigation -->
          <div class="content-side">
            <ul class="nav-main">
            @if(auth()->user()->hasRole('admin'))
                            
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ url('home') }}">
                        <i class="nav-main-link-icon fa fa-location-arrow"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                           
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ url('users/list') }}">
                        <i class="nav-main-link-icon fa fa-users"></i>
                        <span class="nav-main-link-name">Users</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ url('manage/house-hold') }}">
                        <i class="nav-main-link-icon fa fa-settings"></i>
                        <span class="nav-main-link-name">Manage Household</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ url('visitation/list') }}">
                        <i class="nav-main-link-icon fa fa-settings"></i>
                        <span class="nav-main-link-name">Visitation List</span>
                        </a>
                    </li>

                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-clone"></i>
                        <span class="nav-main-link-name">Guests</span>
                        </a>
                        <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ url('all/cards') }}">
                            <span class="nav-main-link-name">All</span>
                            </a>
                            <a class="nav-main-link" href="{{ url('contacted/cards') }}">
                            <span class="nav-main-link-name">Contacted</span>
                            </a>
                            <a class="nav-main-link" href="{{ url('uncontacted/cards') }}">
                                <span class="nav-main-link-name">Uncontacted</span>
                            </a>
                            <a class="nav-main-link" href="{{ url('visited/cards') }}">
                            <span class="nav-main-link-name">Visited</span>
                            </a>
                        </li>
                        </ul>
                    </li>
                    
            @else

                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="{{ url('home') }}">
                        <i class="nav-main-link-icon fa fa-location-arrow"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    @if(auth()->user()->unit == 'Follow-Up')
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-clone"></i>
                        <span class="nav-main-link-name">Guest</span>
                        </a>
                        <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ url('cards') }}">
                            <span class="nav-main-link-name">Create</span>
                            </a>
                            <a class="nav-main-link" href="{{ url('card/list') }}">
                            <span class="nav-main-link-name">List</span>
                            </a>
                        </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="{{ url('visitation') }}">
                        <i class="nav-main-link-icon fa fa-clone"></i>
                        <span class="nav-main-link-name">Visitation Card</span>
                        </a>
                        <a class="nav-main-link active" href="{{ url('cards') }}">
                            <i class="nav-main-link-icon fa fa-clone"></i>
                            <span class="nav-main-link-name">Create Card</span>
                        </a>
                    </li>
                    @endif

              @endif
              
            </ul>
          </div>
          <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->