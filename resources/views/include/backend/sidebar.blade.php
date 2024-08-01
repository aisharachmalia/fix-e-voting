{{-- <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="{{url('admin/dashboard')}}" class="logo">
              <h1 class="text-white">E-Pilketos</h1>
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
                <a
                  data-bs-toggle="collapse"
                  href="{{url('/admin/dashboard')}}"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-home"></i>

                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Komponen</h4>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#tables">
                  <i class="fas fa-table"></i>
                  <p>Tabel</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{route('kandidat.index')}}">
                        <span class="sub-item">Kandidat</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{route('pemilih.index')}}">
                        <span class="sub-item">Pemilih</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{route('suara.index')}}">
                        <span class="sub-item">Suara</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div> --}}
      <nav class="nxl-navigation">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="/admin" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    {{-- <img src="assets/images/logo-full.png" alt="" class="logo logo-lg" /> --}}
                    <h3 class="logo logo-lg">E-VOTING KETOS</h3>

                    <img src="assets/images/smkassalaam.png" alt="" class="logo logo-sm" style="max-width: 80px" />
                </a>
            </div>
            <div class="navbar-content">
                <ul class="nxl-navbar">


                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-layout"></i></span>
                            <span class="nxl-mtext">Tables</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"> <a class="nxl-link" href="{{route('kandidat.index')}}">
                                <span class="sub-item">Kandidat</span>
                              </a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{route('pemilih.index')}}">
                                <span class="sub-item">Pemilih</span>
                              </a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{route('suara.index')}}">
                                <span class="sub-item">Suara</span>
                              </a></li>
                            <li class="nxl-item"></li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
