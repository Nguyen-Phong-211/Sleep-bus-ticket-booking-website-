<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Đặt vé - Chọn ghế và điền thông tin</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('cnd-css')
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        @include('menu')
    </header>

    <main class="main mt-5">

        <section class="light-background">

            <div class="container">
                <div class="col-lg-12 col-md-6 bg-white p-4 rounded-5 mb-3" data-aos="fade-up" data-aos-delay="500">
                    <p class="text-start mt-3"><a href="{{ route('reservation.index') }}"><i
                                class="bi bi-arrow-left"></i>&nbsp;Quay lại</a></p>
                    <div class="row gy-4">
                        <h4 class="text-center text-uppercase">Chọn ghế &nbsp;<i class="fa-solid fa-chair"></i></h4>
                        <div class="d-flex justify-content-evenly">
                            <div>
                                <p class="font-monospace fs-6">
                                    <i class="bi bi-bookmark-x-fill text-danger icon-primary"></i>
                                    Đã bán
                                </p>
                            </div>
                            <div>
                                <p class="font-monospace fs-6">
                                    <i class="bi bi-bookmark-plus text-success icon-primary"></i> Còn trống
                                </p>
                            </div>
                        </div>

                        @include('reservation.orderticket.seat-order')

                        <script src="{{ asset('assets/js/orderticket.js') }}"></script>

                    </div>
                </div>

                <div class="col-lg-12 col-md-6 bg-white p-4 rounded-5 mb-3" data-aos="fade-up" data-aos-delay="500">

                    @include('reservation.orderticket.form-infocustomer')

                </div>


                <div class="col-lg-12 col-md-6 bg-white p-4 rounded-5 mb-3" data-aos="fade-up" data-aos-delay="500">

                    @include('reservation.orderticket.info-adpoint')

                </div>

                <div class="col-lg-6 col-md-3 bg-white p-4 rounded-5" data-aos="fade-up" data-aos-delay="500">
                    <h4 class="text-center text-uppercase">Thông tin lượt đi và giá &nbsp;<i
                            class="bi bi-currency-exchange"></i></h4>
                    <div class="text-start col-12">

                        <form action="{{ route('orderticket.confirm') }}" method="get">
                            @csrf
                            <table class="table table-borderless">
                                <tr>
                                    <td>Tuyến xe</td>
                                    <td class="fw-bold fs-5">
                                        @foreach ($info_departures as $info_departure)
                                            {{ $info_departure->departurepoint_name }} - 
                                        @endforeach

                                        @foreach ($info_arrivalpoints as $info_arrivalpoint)
                                            {{ $info_arrivalpoint->arrivalpoint_name }}
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Thời gian xuất bến</td>
                                    <td>
                                        @foreach ($info_departures as $info_departure)
                                            {{ $info_departure->departure_time }}
                                            {{ date('d/m/Y', strtotime($info_departure->departure_date)) }}
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Số lượng ghế</td>
                                    <td id="seatNames">{{ $seat_name }}</td>
                                </tr>
                                <tr>
                                    <td>Điểm trả khách</td>
                                    <td id="arrivalPoint"></td>
                                </tr>
                                <tr>
                                    <td>Hình thức di chuyển</td>
                                    <td id="travelMode">Một chiều</td>
                                </tr>
                                <tr>
                                    <td>Giá</td>
                                    <td id="totalPrice">{{ number_format($total_price) }} đồng</td>
                                </tr>
                                <tr>
                                    <td>Phí trung chuyển</td>
                                    <td id="otherFees">0 đồng</td>
                                </tr>
                                <tr class="fs-5 fw-bold">
                                    <td>Tổng tiền thanh toán</td>
                                    <td id="finalTotal">{{ number_format($total_price) }} đồng</td>
                                </tr>
                            </table>

                            <input type="hidden" name="seatNames" value="">
                            <input type="hidden" name="totalPrice" value="">
                            <input type="hidden" name="otherFees" value="">
                            <input type="hidden" name="finalTotal" value="">
                            

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-custom border-0"><i
                                        class="bi bi-check2-circle"></i>&nbsp;
                                    THANH TOÁN
                                </button>
                            </div>
                        </form>
                        <script>
                            $(document).ready(function() {
                                const transshipmentFee = 50000;

                                function updateTotalPrice() {
                                    let totalPrice = parseInt("{{ $total_price }}");
                                    let otherFees = 0;

                                    if ($('#trung-chuyen-2').prop('checked')) {
                                        otherFees = transshipmentFee;
                                    } else {
                                        otherFees = 0;
                                    }

                                    $('#otherFees').text(otherFees.toLocaleString() + ' đồng');
                                    let finalTotal = totalPrice + otherFees;
                                    $('#finalTotal').text(finalTotal.toLocaleString() + ' đồng');
                                }

                                $('input[name="diem-tra"]').on('change', function() {
                                    updateTotalPrice();
                                });

                                updateTotalPrice();
                            });
                        </script>
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
