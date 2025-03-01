<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.index') ? '' : 'collapsed' }}" href="{{ route('admin.index') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Quản lý phương tiện -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.typevehicle', 'admin.vehicle') ? '' : 'collapsed' }}" 
               data-bs-target="#management-vehicle" data-bs-toggle="collapse" href="#">
                <i class="bi bi-truck"></i><span>Quản lý phương tiện</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="management-vehicle" class="nav-content collapse {{ request()->routeIs('admin.typevehicle', 'admin.vehicle', 'admin.typevehicle.insert') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.typevehicle') }}" class="{{ request()->routeIs('admin.typevehicle', 'admin.typevehicle.insert') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Danh mục phương tiện</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.vehicle') }}" class="{{ request()->routeIs('admin.vehicle') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Phương tiện</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Quản lý thời gian khởi hành -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.departurearrival') ? 'active' : 'collapsed' }}" href="{{ route('admin.departurearrival') }}">
                <i class="bi bi-stopwatch"></i>
                <span>Quản lý thời gian khởi hành</span>
            </a>
        </li>

        <!-- Quản lý chỗ ngồi -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.seat', 'admin.row', 'admin.floor') ? '' : 'collapsed' }}" 
               data-bs-target="#management-seat" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Quản lý chỗ ngồi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="management-seat" class="nav-content collapse {{ request()->routeIs('admin.seat.seat', 'admin.seat.rowseat', 'admin.seat.floor') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.seat.seat') }}" class="{{ request()->routeIs('admin.seat.seat') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Chỗ ngồi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.seat.rowseat') }}" class="{{ request()->routeIs('admin.seat.rowseat') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Hàng ghế</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.seat.floor') }}" class="{{ request()->routeIs('admin.seat.floor') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Tầng ghế</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Quản lý tuyến đường -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.route.route', 'admin.route.schedule', 'admin.route.stopstation') ? '' : 'collapsed' }}" 
               data-bs-target="#management-route" data-bs-toggle="collapse" href="#">
                <i class="bi bi-sign-turn-slight-right"></i><span>Quản lý tuyến đường</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="management-route" class="nav-content collapse {{ request()->routeIs('admin.route', 'admin.schedule', 'admin.stopstation') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.route.route') }}" class="{{ request()->routeIs('admin.route') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Tuyến đường</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.route.schedule') }}" class="{{ request()->routeIs('admin.schedule') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Lịch trình</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.route.stopstation') }}" class="{{ request()->routeIs('admin.stopstation') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Các trạm dừng chân</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Quản lý hoá đơn -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.invoice.invoice', 'admin.invoice.contract') ? '' : 'collapsed' }}" 
               data-bs-target="#management-invoices" data-bs-toggle="collapse" href="#">
                <i class="bi bi-receipt"></i><span>Quản lý hoá đơn</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="management-invoices" class="nav-content collapse {{ request()->routeIs('admin.invoice', 'admin.contract') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.invoice.invoice') }}" class="{{ request()->routeIs('admin.invoice') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Vé xe</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.invoice.contract') }}" class="{{ request()->routeIs('admin.contract') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Hợp đồng thuê xe</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Khác -->
        <li class="nav-heading">Khác</li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.customer.customer') ? 'active' : 'collapsed' }}" href="{{ route('admin.customer.customer') }}">
                <i class="bi bi-envelope"></i>
                <span>Danh sách khách hàng</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.contact.contact') ? 'active' : 'collapsed' }}" href="{{ route('admin.contact.contact') }}">
                <i class="bi bi-person"></i>
                <span>Liên hệ</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('login') ? 'active' : 'collapsed' }}" href="{{ route('login') }}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li>

    </ul>
</aside>
