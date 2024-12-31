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

                            <form action="" method="get" class="mt-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="col-lg-12 col-md-12 d-flex justify-content-between">
                                    <div class="d-flex flex-column flex-md-row w-100">

                                        <div class="flex-fill col-md-5">
                                            <label class="form-label">Điểm đi</label>
                                            <select name="address-from" id="address-from" class="form-control">
                                                <option value="">Chọn điểm đi</option>
                                                @foreach ($departurePoints as $departurePoint)
                                                    <option value="{{ $departurePoint['departurepoint_id'] }}"
                                                        data-arrivalpoints="{{ json_encode($departurePoint['arrivalpoints']) }}">
                                                        {{ $departurePoint['departurepoint_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div
                                            class="d-flex align-items-center justify-content-center mx-3 mt-lg-4 mt-md-0">
                                            <i class="fa-solid fa-arrows-left-right"></i>
                                        </div>

                                        <div class="flex-fill col-md-5">
                                            <label class="form-label">Điểm đến</label>
                                            <select name="address-to" id="address-to" class="form-control">
                                                <option value="">Chọn điểm đến</option>
                                                @foreach ($arrivalPoints as $arrivalPoint)
                                                    <option value="{{ $arrivalPoint['arrivalpoint_id'] }}">
                                                        {{ $arrivalPoint['arrivalpoint_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <script>
                                            $(document).ready(function() {
                                                $('#address-from').change(function() {
                                                    var selectedDepartureId = $(this).val();
                                                    var arrivalPointsSelect = $('#address-to');

                                                    arrivalPointsSelect.empty();
                                                    arrivalPointsSelect.append('<option value="">Chọn điểm đến</option>');

                                                    // Kiểm tra nếu có điểm đi được chọn
                                                    if (selectedDepartureId) {
                                                        var arrivalPoints = $('#address-from option:selected').data('arrivalpoints');

                                                        // Hiển thị các điểm đến tương ứng
                                                        $.each(arrivalPoints, function(index, arrivalPoint) {
                                                            arrivalPointsSelect.append(
                                                                $('<option>', {
                                                                    value: arrivalPoint.arrivalpoint_id,
                                                                    text: arrivalPoint.arrivalpoint_name
                                                                })
                                                            );
                                                        });
                                                    }
                                                });
                                                // Nếu điểm đến đã được chọn trước, ẩn danh sách điểm đi
                                                $('#address-to').change(function() {
                                                    var selectedArrivalId = $(this).val();
                                                    if (selectedArrivalId) {
                                                        $('#address-from').prop('disabled', true); 
                                                    } else {
                                                        $('#address-from').prop('disabled', false); 
                                                    }
                                                });
                                            });
                                        </script>

                                    </div>
                                </div>
                            </form>

                            <div class="col-lg-12 mt-5">
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
                                    <tbody>
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

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
