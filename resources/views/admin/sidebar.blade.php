<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#management-vehicle" data-bs-toggle="collapse" href="#">
                <i class="bi bi-truck"></i><span>Quản lý phương tiện</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="management-vehicle" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Danh mục phương tiện</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Phương tiện</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-stopwatch"></i>
                <span>Quản lý thời gian khởi hành</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#management-seat" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Quản lý chỗ ngồi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="management-seat" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Chỗ ngồi</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Hàng ghế</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Tầng ghế</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#management-route" data-bs-toggle="collapse" href="#">
                <i class="bi bi-sign-turn-slight-right"></i><span>Quản lý tuyến đường</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="management-route" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Điểm đi</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Điểm đến</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Tuyến đường</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Lịch trình</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Các trạm dừng chân</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#management-invoices" data-bs-toggle="collapse" href="#">
                <i class="bi bi-receipt"></i><span>Quản lý hoá đơn</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="management-invoices" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Vé xe</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Hợp đồng thuê xe</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Hợp đồng thuê tài xế</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Đơn giao hàng</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-heading">Khác</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
                <i class="bi bi-envelope"></i>
                <span>Danh sách khách hàng</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Liên hệ</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li>
    </ul>
</aside>