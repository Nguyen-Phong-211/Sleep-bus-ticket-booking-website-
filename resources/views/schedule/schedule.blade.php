<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Lịch trình</title>
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
                <h2>LỊCH TRÌNH</h2>
                <p>Quý khách tìm kiếm theo điểm đi và điểm đến để chọn được đúng lịch trình mà mình muốn đi.</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4 g-lg-5">
                    <div class="col-lg-12">
                        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                            <h3>TÌM LỊCH TRÌNH</h3>

                            <form action="" method="post" class="mt-4" data-aos="fade-up" data-aos-delay="200">
                                @csrf
                                <div class="row align-items-center g-3 d-flex justify-content-between">
                                    <div class="col-12 col-md-5">
                                        <label class="form-label">Điểm đi</label>
                                        <select name="address_from" id="address-from" class="form-control">
                                            <option value="">Chọn điểm đi</option>
                                            @foreach ($departurePoints as $departurePoint)
                                                @if (isset($departureId) && $departureId == $departurePoint['departurepoint_id'])
                                                    <option value="{{ $departurePoint['departurepoint_id'] }}" selected
                                                        data-arrivalpoints="{{ json_encode($departurePoint['arrivalpoints']) }}">
                                                        {{ $departurePoint['departurepoint_name'] }}
                                                    </option>
                                                @else
                                                    <option value="{{ $departurePoint['departurepoint_id'] }}"
                                                        data-arrivalpoints="{{ json_encode($departurePoint['arrivalpoints']) }}">
                                                        {{ $departurePoint['departurepoint_name'] }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-2 text-center icon-two-direct">
                                        <i class="fa-solid fa-arrows-left-right icon-direct"></i>
                                    </div>

                                    <div class="col-12 col-md-5">
                                        <label class="form-label">Điểm đến</label>
                                        <select name="address_to" id="address-to" class="form-control">
                                            <option value="">Chọn điểm đến</option>
                                            @foreach ($arrivalPoints as $arrivalPoint)
                                                @if (isset($arrivalId) && $arrivalId == $arrivalPoint['arrivalpoint_id'])
                                                    <option value="{{ $arrivalPoint['arrivalpoint_id'] }}" selected>{{ $arrivalPoint['arrivalpoint_name'] }}</option>
                                                @else
                                                    <option value="{{ $arrivalPoint['arrivalpoint_id'] }}">{{ $arrivalPoint['arrivalpoint_name'] }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </form>                            
                            
                            <script src="{{ asset('assets/js/home.js') }}"></script>

                            <div class="col-lg-12 mt-5">
                                @if ($getRoute->isEmpty())
                                    <div class="container text-center no-result-container">
                                        <img src="{{ asset('assets/img/general/no-result.png') }}"
                                            alt="No Result" class="no-result-image img-fluid">
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
                                @else
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tuyến xe</th>
                                                <th scope="col">Loại xe</th>
                                                <th scope="col">Quảng đường</th>
                                                <th scope="col">Thời gian ước tính</th>
                                                <th scope="col">Giá vé</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="route-table-body">
                                            @foreach ($getRoute as $route)
                                                <tr>
                                                    <td class="align-middle">{{ $route->departurepoint_name }} -
                                                        {{ $route->arrivalpoint_name }}</td>
                                                    <td class="align-middle">{{ $route->type_vehicle_name }}</td>
                                                    <td class="align-middle">{{ $route->total_km }} Km</td>
                                                    <td class="align-middle">{{ $route->total_time }} giờ</td>
                                                    <td class="align-middle">{{ number_format($route->price) }} VNĐ</td>
                                                    <td class="align-middle">
                                                        <a href="{{ route('reservation.index', ['route_schedule' => $route->route_id]) }}"
                                                            class="border-0 badge rounded-pill bg-primary p-3 text-white">
                                                            <i class="fa-solid fa-magnifying-glass"></i>&nbsp;
                                                            Tìm chuyến xe
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer">

        @include('footer')

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('cnd-js')

</body>

</html>
