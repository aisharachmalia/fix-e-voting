<header class="nxl-header">
    <div class="header-wrapper">
        <!--! [Start] Header Left !-->
        <!--! [End] Header Left !-->
        <!--! [Start] Header Right !-->
        <div class="header-right ms-auto">
            <div class="d-flex align-items-center">
         
                <div class="dropdown nxl-h-item">
                    <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside">
                        <img src="{{asset('assets/images/avatar/2.png')}}" alt="user-image" class="img-fluid user-avtar me-0" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                        <div class="dropdown-header">
                            <div class="d-flex align-items-center">
                                <img src="{{asset('assets/images/avatar/2.png')}}" alt="user-image" class="img-fluid user-avtar" />
                                <div>
                                    <h6 class="text-dark mb-0">{{Auth::user()->name}} <span class="badge bg-soft-success text-success ms-1"></span></h6>
                                    {{-- <span class="fs-12 fw-medium text-muted">alex.della@outlook.com</span> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="dropdown-divider"></div>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-divider"></div> --}}
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"class="dropdown-item">
                        <i class="feather-log-out">
                         {{ __('Logout') }}>
                        </i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

                </div>
            </div>
        </div>
        <!--! [End] Header Right !-->
    </div>
</header>