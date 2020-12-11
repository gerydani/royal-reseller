<!-- Top Bar Start -->
<div class="topbar-main">
    <!-- Button mobile view to collapse sidebar menu -->
        <div class="container-fluid">
            <!-- LOGO -->
            {{-- <div class="topbar-left">
                <a href="{{ route('user.registrasi') }}" class="logo"><span>Royal<span>Warehouse</span></span><i class="mdi mdi-layers"></i></a>
            </div> --}}

            <!-- Logo container-->
            <div class="logo">
                <!-- Text Logo -->
                <a href="{{ route('Home') }}" class="logo">
                    <span>Royal<span>Warehouse</span></span><i class="mdi mdi-layers"></i>
                </a>
                <!-- Image Logo -->
                {{-- <a href="index.html" class="logo">
                    <img src="assets/images/logo-sm.png" alt="" height="26" class="logo-small">
                    <img src="assets/images/logo.png" alt="" height="24" class="logo-large">
                </a> --}}
            </div>
            <!-- End Logo container-->

            {{-- <!-- Page title -->
            <ul class="nav navbar-nav list-inline navbar-left">
                <li class="list-inline-item">
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>
                <li class="list-inline-item">
                    <h4 class="page-title">Enterprise Resource Planning - @yield('judul')</h4>
                </li>
            </ul> --}}

            {{-- <nav class="navbar-custom">

                <ul class="list-unstyled topbar-right-menu float-right mb-0">

                </ul>
            </nav> --}}
            <div class="menu-extras topbar-custom">

                <ul class="list-unstyled topbar-right-menu float-right mb-0">

                    <li class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                    <li class="hide-phone">
                        <form class="app-search">
                            <input type="text" placeholder="Search..."
                                    class="form-control">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                    <li>
                        <!-- Notification -->
                        <div class="notification-box">
                            <ul class="list-inline mb-0">
                                <li>
                                    <a href="javascript:void(0);" class="right-bar-toggle">
                                        <i class="mdi mdi-bell-outline noti-icon"></i>
                                    </a>
                                    <div class="noti-dot">
                                        <span class="dot"></span>
                                        <span class="pulse"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End Notification bar -->
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                            <!-- item-->
                            <a href="{{ route('edit.profile',['id'=>session('user_id')]) }}" class="dropdown-item notify-item">
                                <i class="ti-user m-r-5"></i> Profile
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ti-settings m-r-5"></i> Settings
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ti-lock m-r-5"></i> Lock screen
                            </a>

                            <!-- item-->
                            <a href="logout" class="dropdown-item notify-item">
                                <i class="ti-power-off m-r-5"></i> Logout
                            </a>

                        </div>
                    </li>

                </ul>
            </div>
            <!-- end menu-extras -->
            <div class="clearfix"></div>

        </div><!-- end container -->
</div>
<!-- Top Bar End -->
