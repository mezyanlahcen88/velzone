<!-- ========== App Menu ========== -->

<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('dashboard') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">

                <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="17">



            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Dashboards" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards"
                            class="text-uppercase">{{ trans('navigation_navigation_dashboard') }}</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Dashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" data-key="t-analytics" href="{{ route('dashboard') }}">
                                    <span class="text-uppercase">{{ trans('navigation_navigation_dashboard') }} </span></a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line text-uppercase"></i> <span data-key="t-apps"
                            class="text-uppercase">{{ trans('navigation_navigation_manage_users') }}</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">

                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-key="users">
                                        <span class="text-uppercase">{{ trans('navigation_navigation_users_list') }}</span>
                                        <span class="badge badge-pill bg-danger" data-key="users">0</span>

                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-key="roles"> <span
                                            class="text-uppercase">{{ trans('navigation_navigation_roles_list') }} </span>
                                        <span class="badge badge-pill bg-danger" data-key="users">0</span>
                                    </a>
                                </li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        </li> <!-- end Dashboard Menu -->
        {{-- start configuration --}}
        <li class="menu-title"><i class="ri-more-fill"></i>
            <span data-key="t-pages" class="text-uppercase">{{ trans('navigation_navigation_configuration') }}</span>
        </li>








        </ul>
    </div>
    <!-- Sidebar -->
</div>

<div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
