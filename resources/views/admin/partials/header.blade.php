<header id="page-topbar">
    <div class="d-flex">
        <div class="navbar-brand-box text-center">
            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{asset('assets/images/logo.png')}}" alt="" height="20">
                </span>
            </a>
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{asset('assets/images/logo_dark.png')}}" alt="" height="20">
                </span>
            </a>
        </div>

        <div class="navbar-header">    
            <button type="button" class="button-menu-mobile waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button> 
            <div class="d-flex ms-auto">

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user me-2" src="{{asset('uploads/profile_image/')}}/{{Auth::user()->profile_image ?? 'default.png'}}" alt="Header Avatar"> 
                        <span class="d-none d-md-inline-block ms-1">{{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i> </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="{{route('admin.user.edit-profile')}}"><i class="dripicons-user font-size-16 align-middle d-inline-block me-1"></i> Profile</a>
                        <a class="dropdown-item text-danger" href="{{route('logout')}}"><i class="dripicons-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                    </div>
                </div>

            </div>
        </div>    
    </div>    
</header>