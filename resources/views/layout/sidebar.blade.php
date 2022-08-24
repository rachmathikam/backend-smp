


    <div class="sidebar-user text-center">
        <a class="setting-primary" href="{{ route('profile.index')}}"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/1.png" alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">{{ Auth::user()->role->role }}</span></div>
        <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6></a>
        <p class="mb-0 font-roboto">Human Resources Department</p>
    </div>
    <!-- navbar -->
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>General</h6>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title active" href="javascript:void(0)"><i data-feather="home"></i><span>Dashboard</span></a>
                        <ul class="nav-submenu menu-content" style="display: block;">


                        <li><a href="{{ url('/page') }}" class="active">Page</a></li>


                            <li><a href="{{ url('/') }}" class="active">Home</a></li>

                        </ul>
                    </li>


                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="users"></i><span>User</span></a>
                        <ul class="nav-submenu menu-content"  style="display: none;">
                            <li><a href="{{ url('guru') }}" class="">Guru</a></li>
                            <li><a href="https://laravel.pixelstrap.com/viho/widgets/chart-widget" class="">Siswa</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- end-navbar -->
