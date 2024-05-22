<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-center">
            <a href="#" class="text-nowrap logo-img">
                <img src="{{ asset('logo-primary.png') }}" class="dark-logo rounded" />
                {{-- <img src="{{ asset('panel-assets/dist/images/logo-primary.png') }}"
					class="light-logo rounded" width="38" alt="" /> --}}
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-black"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <!-- ============================= -->
                <!-- Home -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu text-white">Home</span>
                </li>
                <!-- =================== -->
                <!-- Dashboard -->
                <!-- =================== -->
                <li class="sidebar-item {{ Route::is('admin-panel.dashboard') ? 'selected' : '' }}">
                    <a class="sidebar-link" href="{{ route('admin-panel.dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                @if (auth()->user()->level == 'admin')
                    <li class="sidebar-item {{ Route::is('admin-panel.user.*') ? 'selected' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin-panel.user.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-users"></i>
                            </span>
                            <span class="hide-menu">User</span>
                        </a>
                    </li>
                @endif
                <li class="sidebar-item {{ Route::is('admin-panel.faculties.*') || Route::is('admin-panel.work-unit.*') || Route::is('admin-panel.allotments.*') ? 'selected' : '' }}">
                    <a class="sidebar-link has-arrow {{ Route::is('admin-panel.faculties.*') || Route::is('admin-panel.work-unit.*') || Route::is('admin-panel.allotments.*') ? 'active' : '' }}" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-archive-filled"></i>
                        </span>
                        <span class="hide-menu">Master Data</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item {{ Route::is('admin-panel.faculties.index') ? 'active' : '' }}">
                            <a href="{{ route('admin-panel.faculties.index') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Fakultas</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Route::is('admin-panel.work-units.index') ? 'active' : '' }}">
                            <a href="{{ route('admin-panel.work-units.index') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Unit Kerja</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Route::is('admin-panel.allotments.index') ? 'active' : '' }}">
                            <a href="{{ route('admin-panel.allotments.index') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Penempatan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item {{ Route::is('admin-panel.endowment') || Route::is('admin-panel.how-to-donate') ? 'selected' : '' }}">
                    <a class="sidebar-link has-arrow {{ Route::is('admin-panel.endowment') || Route::is('admin-panel.how-to-donate') ? 'active' : '' }}" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-clipboard"></i>
                        </span>
                        <span class="hide-menu">Halaman</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item {{ Route::is('admin-panel.endowment') ? 'active' : '' }}">
                            <a href="{{ route('admin-panel.endowment') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Dana Abadi</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Route::is('admin-panel.how-to-donate') ? 'active' : '' }}">
                            <a href="{{ route('admin-panel.how-to-donate') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Cara Donasi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item {{ Route::is('admin-panel.donations.*') ? 'selected' : '' }}">
                    <a class="sidebar-link" href="{{ route('admin-panel.donations.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-moneybag"></i>
                        </span>
                        <span class="hide-menu">Donasi</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Route::is('admin-panel.news.*') ? 'selected' : '' }}">
                    <a class="sidebar-link" href="{{ route('admin-panel.news.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-news"></i>
                        </span>
                        <span class="hide-menu">Berita</span>
                    </a>
                </li>
                <div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded">
                    <div class="d-flex">
                        <div class="unlimited-access-title">
                            <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Halaman Utama</h6>
                            <a href="{{ route('web.home') }}" class="btn btn-primary fs-2 fw-semibold lh-sm">Kembali</a>
                        </div>
                        <div class="unlimited-access-img">
                            <img src="{{ asset('panel-assets/dist/images/backgrounds/rocket.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                {{-- <li class="sidebar-item {{ Route::is('admin-panel.criteria.*') ? 'selected' : '' }}">
                    <a class="sidebar-link" href="{{ route('admin-panel.criteria.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-category-filled"></i>
                        </span>
                        <span class="hide-menu">Kriteria</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Route::is('admin-panel.criminal.*') ? 'selected' : '' }}">
                    <a class="sidebar-link" href="{{ route('admin-panel.criminal.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-x"></i>
                        </span>
                        <span class="hide-menu">PTP</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Route::is('admin-panel.evidence.*') ? 'selected' : '' }}">
                    <a class="sidebar-link" href="{{ route('admin-panel.evidence.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-archive-filled"></i>
                        </span>
                        <span class="hide-menu">Barang Bukti</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Route::is('admin-panel.evidence.*') ? 'selected' : '' }}">
                    <a class="sidebar-link has-arrow {{ Route::is('admin-panel.evidence.*') ? 'active' : '' }}" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-archive-filled"></i>
                        </span>
                        <span class="hide-menu">Barang Bukti</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item {{ Route::is('admin-panel.evidence.index') ? 'active' : '' }}">
                            <a href="{{ route('admin-panel.evidence.index') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Ditahan</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Route::is('admin-panel.evidence.returned') ? 'active' : '' }}">
                            <a href="{{ route('admin-panel.evidence.returned') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Dikembalikan</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Route::is('admin-panel.evidence.terminated') ? 'active' : '' }}">
                            <a href="{{ route('admin-panel.evidence.terminated') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Dimusnahkan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item {{ Route::is('admin-panel.scan-barcode.*') ? 'selected' : '' }}">
                    <a class="sidebar-link" href="{{ route('admin-panel.scan-barcode.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-scan"></i>
                        </span>
                        <span class="hide-menu">Scan Barcode</span>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->
