<div
    class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    <a href="{{ route('home.index') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">VeXe247.com</h1>
    </a>

    <nav id="navmenu" class="navmenu">
        <ul class="d-flex align-items-center w-100">
            <li class="text-uppercase"><a href="{{ route('home.index') }}" class="fw-bold">Trang chủ</a></li>
            <li class="text-uppercase"><a href="{{ route('schedule.index') }}" class="fw-bold">Lịch trình</a></li>
            <li class="dropdown text-uppercase">
                <a href="#"><span class="fw-bold">DỊCH VỤ</span> <i
                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    <li><a href="{{ route('reservation.index') }}">Đặt vé xe</a></li>
                    <li><a href="{{ route('rental-contract.index') }}">Hợp đồng bao xe</a></li>
                    <li><a href="{{ route('hire-driver.index') }}">Thuê tài xế</a></li>
                    <li><a href="{{ route('delivery.index') }}">Giao hàng</a></li>
                </ul>
            </li>
            <li class="text-uppercase"><a href="{{ route('consultation.index') }}" class="fw-bold">Tra cứu</a></li>
            <li class="text-uppercase"><a href="{{ route('contact.index') }}" class="fw-bold">Liên hệ</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    @if (Auth::check())
        <nav id="navmenu" class="navmenu">
            <ul class="d-flex align-items-center w-100 list-unstyled m-0">
                <li class="dropdown text-uppercase d-flex align-items-center">
                    <img src="{{ asset('assets/img/general/profile.png') }}" alt="" class="img-fluid"
                        height="50px" width="50px">
                    <a href="#" class="d-flex align-items-center ms-2">
                        <span class="fw-bold">{{ Auth::user()->fullname ?? 'CHƯA XÁC ĐỊNH' }}</span>
                        <i class="bi bi-chevron-down toggle-dropdown ms-1"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('setting.index') }}" class="dropdown-item">Cài đặt tài khoản</a></li>
                        <li><a href="{{ route('logout.logout') }}" id="logoutLink" class="dropdown-item">Đăng xuất</a>
                        </li>
                        <li class="dropdown"><a href="#"><span>Ngôn ngữ</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li>
                                    <a href="{{ route('lang.language', ['locale' => 'vi']) }}">
                                        <img src="{{ asset('assets/img/general/la-co-viet-nam.png') }}" alt="" class="img-fluid" height="40px" width="40px">
                                        TIẾNG VIỆT
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('lang.language', ['locale' => 'en']) }}">
                                        <img src="{{ asset('assets/img/general/la-co-nuoc-anh.png') }}" alt="" class="img-fluid" height="40px" width="40px">
                                        TIẾNG ANH
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    @else
        <a class="btn-getstarted" href="{{ route('signup.index') }}">
            <i class="fa-solid fa-right-to-bracket"></i>&nbsp;
            Đăng nhập / Đăng ký
        </a>
    @endif

</div>
