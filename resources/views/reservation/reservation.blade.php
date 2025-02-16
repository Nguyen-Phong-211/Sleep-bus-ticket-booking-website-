<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Đặt vé</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('cnd-css')
</head>

<body class="index-page">
    @include('loading')

    <header id="header" class="header d-flex align-items-center fixed-top">
        @include('menu')
    </header>

    <main class="main mt-5">

        <section id="contact" class="contact section light-background">

            <div class="container section-title mt-3" data-aos="fade-up">
                <h2>TẤT CẢ CÁC VÉ</h2>
                <p>Quý khách sử dụng bộ lọc để có thể tìm được tuyến đường phù hợp nhất.</p>
            </div>

            @include('reservation.form-find')

        </section>


        <section id="filter" class="filter section light-background">
            <div class="container">
                <div class="row mx-auto">

                    @include('reservation.filter')

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                        @if ($routes->isEmpty() || session('end_seats'))
                            <div class="row gy-4">
                                <div class="col-lg-12 col-md-6">
                                    <div class="card p-3 border-0 mb-3 rounded-4 shadow-sm">
                                        <div class="row g-0">
                                            <div class="col-md-12">
                                                <div class="container text-center no-result-container">
                                                    <img src="{{ asset('assets/img/general/no-result.png') }}"
                                                        alt="No Result" class="no-result-image img-fluid w-25">
                                                    <h1 class="display-4">Không có kết quả</h1>
                                                    <p class="lead">Xin lỗi, không tìm thấy thông tin bạn cần.</p>
                                                    <a href="{{ route('home.index') }}"
                                                        class="btn btn-primary btn-custom border-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                            height="25" fill="currentColor" class="bi bi-house"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                                                        </svg>
                                                        &nbsp; Quay lại trang chủ
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            @foreach ($routes as $route)
                                <div class="row gy-4">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="card p-3 border-0 mb-3 rounded-4 shadow-sm">
                                            <div class="row g-0">
                                                <div class="col-md-12">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><i
                                                                class="fa-solid fa-van-shuttle icon-primary"></i>&nbsp;
                                                            {{ $route->departurepoint_name }} -
                                                            {{ $route->arrivalpoint_name }}
                                                        </h5>
                                                        <div class="d-flex align-items-center mb-3 mt-3">
                                                            <div class="d-flex flex-column align-items-center me-3">
                                                                <h4 class="mb-1">{{ $route->departure_time }}</h4>
                                                                <span class="text-muted text-truncate"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="{{ $route->d_detail_address }}"
                                                                    style="max-width: 200px;">{{ $route->d_detail_address }}</span>
                                                            </div>

                                                            <i class="bi bi-circle-fill icon-primary"></i>
                                                            <div class="progress flex-grow-1"
                                                                style="height: 2px; margin-right: 10px; background-color: transparent;">
                                                                <div class="dotted-progress" style="width: 100%;"></div>
                                                            </div>

                                                            <span class="text-black mx-2" style="font-size: 1.5rem;">
                                                                {{ $route->total_time }}
                                                            </span>

                                                            <div class="progress flex-grow-1"
                                                                style="height: 2px; margin-left: 10px; background-color: transparent;">
                                                                <div class="dotted-progress" style="width: 100%;"></div>
                                                            </div>

                                                            <i class="bi bi-geo-alt icon-primary"></i>
                                                            <div class="d-flex flex-column align-items-center ms-3">
                                                                <h4 class="mb-1">{{ $route->arrival_time }}</h4>
                                                                <span class="text-muted text-truncate"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="{{ $route->a_detail_address }}"
                                                                    style="max-width: 200px;">{{ $route->a_detail_address }}</span>
                                                            </div>
                                                        </div>

                                                        <p class="card-text fst-italic text-danger">Lưu ý: Quý khách vui
                                                            lòng
                                                            xuất trình hoá đơn khi lên xe!</p>

                                                        <div class="d-flex justify-content-between mb-3">
                                                            <div class="card-text">
                                                                Loại xe: <span class="badge rounded-pill bg-primary">
                                                                    {{ $route->type_vehicle_name }}
                                                                </span>
                                                            </div>
                                                            <div class="card-text">
                                                                Hàng ghế: <span class="badge rounded-pill bg-primary">
                                                                    {{ $route->row_seat_name }}
                                                                </span>
                                                            </div>
                                                            <div class="card-text">
                                                                Tầng: <span class="badge rounded-pill bg-primary">
                                                                    {{ $route->floor_name }}
                                                                </span>
                                                            </div>
                                                            <div class="card-text">
                                                                Còn:
                                                                @php
                                                                    $status_seat = null;
                                                                    $badge_class = 'bg-danger';
                                                                    $status_text = 'Hết vé';

                                                                    if ($route->type_vehicle_id == 1) {
                                                                        $status_seat =
                                                                            $status_seat_limousine->status_seat ?? 0;
                                                                        $badge_class =
                                                                            $status_seat > 0
                                                                                ? 'bg-success'
                                                                                : 'bg-danger';
                                                                        $status_text =
                                                                            $status_seat > 0
                                                                                ? "{$status_seat} chỗ trống"
                                                                                : 'Hết vé';
                                                                    } elseif ($route->type_vehicle_id == 2) {
                                                                        $status_seat =
                                                                            $status_seat_sleepbus->status_seat ?? 0;
                                                                        $badge_class =
                                                                            $status_seat > 0
                                                                                ? 'bg-success'
                                                                                : 'bg-danger';
                                                                        $status_text =
                                                                            $status_seat > 0
                                                                                ? "{$status_seat} chỗ trống"
                                                                                : 'Hết vé';
                                                                    } elseif ($route->type_vehicle_id == 3) {
                                                                        $status_seat =
                                                                            $status_seat_coach->status_seat ?? 0;
                                                                        $badge_class =
                                                                            $status_seat > 0
                                                                                ? 'bg-success'
                                                                                : 'bg-danger';
                                                                        $status_text =
                                                                            $status_seat > 0
                                                                                ? "{$status_seat} chỗ trống"
                                                                                : 'Hết vé';
                                                                    }
                                                                @endphp

                                                                <span class="badge rounded-pill {{ $badge_class }}">
                                                                    {{ $status_text }}
                                                                </span>
                                                            </div>

                                                            <div class="card-text">
                                                                Giá: <span class="fs-5 text-warning font-monospace">
                                                                    {{ number_format($route->price) }}
                                                                </span>đồng
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if ($status_text == 'Hết vé')
                                                    @else
                                                        <hr>
                                                        <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
                                                            <a href="{{ route('orderticket.index', ['route' => $route->route_id, 'type_vehicle_id' => $route->type_vehicle_id, 'route_' => (string) Str::uuid7()]) }}"
                                                                class="btn btn-primary w-auto border-0 text-uppercase rounded-5 p-3">
                                                                <i class="bi bi-bookmark-check"></i>&nbsp; Chọn tuyến
                                                            </a>

                                                            <ul class="nav nav-pills mb-0 ms-4" id="pills-tab"
                                                                role="tablist">
                                                                <li class="nav-item active" role="presentation">
                                                                    <button class="nav-link" id="pills-home-tab"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#pills-home{{ $route->route_id }}"
                                                                        type="button" role="tab"
                                                                        aria-controls="pills-home{{ $route->route_id }}"
                                                                        aria-selected="true">
                                                                        Chọn ghế
                                                                    </button>
                                                                </li>
                                                                <li class="nav-item ms-3" role="presentation">
                                                                    <button class="nav-link" id="pills-profile-tab"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#pills-profile{{ $route->route_id }}"
                                                                        type="button" role="tab"
                                                                        aria-controls="pills-profile{{ $route->route_id }}"
                                                                        aria-selected="false">Lịch trình</button>
                                                                </li>
                                                                <li class="nav-item ms-3" role="presentation">
                                                                    <button class="nav-link" id="pills-contact-tab"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#pills-contact{{ $route->route_id }}"
                                                                        type="button" role="tab"
                                                                        aria-controls="pills-contact{{ $route->route_id }}"
                                                                        aria-selected="false">Trung chuyển</button>
                                                                </li>
                                                                <li class="nav-item ms-3" role="presentation">
                                                                    <button class="nav-link" id="pills-polocy-tab"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#pills-polocy{{ $route->route_id }}"
                                                                        type="button" role="tab"
                                                                        aria-controls="pills-polocy{{ $route->route_id }}"
                                                                        aria-selected="false">Chính sách</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    @endif

                                                    <div class="tab-content" id="pills-tabContent">

                                                        <div class="tab-pane fade"
                                                            id="pills-home{{ $route->route_id }}" role="tabpanel">

                                                            @include('reservation.seat-selection')

                                                        </div>

                                                        <div class="tab-pane fade"
                                                            id="pills-profile{{ $route->route_id }}" role="tabpanel"
                                                            aria-labelledby="pills-profile-tab">
                                                            <hr>

                                                            @include('reservation.ininerary')

                                                        </div>

                                                        <div class="tab-pane fade"
                                                            id="pills-contact{{ $route->route_id }}" role="tabpanel"
                                                            aria-labelledby="pills-contact-tab">
                                                            <hr>

                                                            Đón/ trả tận nơi:
                                                            <ul>
                                                                <li>Thời gian nhận khách : Trước 4 tiếng.</li>
                                                                <li>Thời gian xe đón : Chuẩn bị trước 2 -3 tiếng, do mật
                                                                    độ giao thông trong thành phố và sẽ kết hợp đón
                                                                    nhiều điểm khác nhau nên thời gian đón cụ thể tài xế
                                                                    sẽ liên hệ hẹn giờ.</li>
                                                                <li>Hẻm nhỏ xe không quay đầu được : Xe trung chuyển sẽ
                                                                    đón Khách đầu hẻm/ đầu đường.</li>
                                                                <li>Khu vực có biển cấm dừng đỗ xe không đón được : Xe
                                                                    trung chuyển sẽ đón tại vị trí gần nhất có thể.</li>
                                                                <li>Hành lý : Hành lý nhỏ gọn dưới 20 kg, không vận
                                                                    chuyển kèm động vật , thú cưng, không mang đồ có
                                                                    mùi, đồ chảy nước trên xe.</li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane fade"
                                                            id="pills-polocy{{ $route->route_id }}" role="tabpanel"
                                                            aria-labelledby="pills-polocy-tab">
                                                            <hr>
                                                            <p>Quý khách vui lòng liên hệ để huỷ chuyến xe trước 2 tiếng
                                                                (nếu có thay đổi)
                                                                . Nếu quý khách đã thanh toán và muốn
                                                                huỷ chuyển xe thì vui lòng liên hệ với số tổng đài của
                                                                Công ty <strong>0983 982 983</strong> và làm theo hướng
                                                                dẫn của nhân viên để có thể được hoàn tiền sớm nhất.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer mt-0">

        @include('footer')

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('cnd-js')

</body>

</html>
