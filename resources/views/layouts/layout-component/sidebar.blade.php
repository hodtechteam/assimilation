{{--  <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            
                            @if(auth()->user()->hasRole('admin'))
                            <li>
                                <a href="{{ url('home') }}" class="waves-effect">
                                    <i class="mdi mdi-home-variant-outline"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-email-outline"></i>
                                    <span>Cards</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('#') }}">All Cards</a></li>
                                    <li><a href="{{ url('#') }}">Visitation</a></li>
                                </ul>
                            </li>
                            @else
                            <li>
                                <a href="{{ url('home') }}" class="waves-effect">
                                    <i class="mdi mdi-home-variant-outline"></i>
                                    <span>Card</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('my/cards') }}" class="waves-effect">
                                    <i class="mdi mdi-card"></i>
                                    <span>My Cards</span>
                                </a>
                            </li>
                            @endif

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->  --}}


             <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Navigation -->
          <div class="content-side">
            <ul class="nav-main">
            @if(auth()->user()->hasRole('admin'))
                            
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="{{ url('home') }}">
                        <i class="nav-main-link-icon fa fa-location-arrow"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-clone"></i>
                        <span class="nav-main-link-name">Cards</span>
                        </a>
                        <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ my/cards }}">
                            <span class="nav-main-link-name">My Cards</span>
                            </a>
                            <a class="nav-main-link" href="#">
                            <span class="nav-main-link-name">List</span>
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

              @endif
              
            </ul>
          </div>
          <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->