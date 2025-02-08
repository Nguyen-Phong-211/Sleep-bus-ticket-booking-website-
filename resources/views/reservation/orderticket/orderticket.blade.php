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

                        @php
                            $transactionId = Str::uuid7();
                            $redirect = Str::uuid7();
                        @endphp
                        <form action="{{ route('orderticket.confirm', ['redirect' => $redirect, 'transaction_id' => $transactionId]) }}" method="post">

                            @csrf
                            <table class="table table-borderless">
                                <tr>
                                    <td>Tuyến xe</td>
                                    <input type="hidden" name="route" value="{{ $route }}">
                                    <td class="fw-bold fs-5">
                                        @foreach ($info_departures as $info_departure)
                                            {{ $info_departure->departurepoint_name }} - 
                                            <input type="hidden" name="departurepoint_name" value="{{ $info_departure->departurepoint_name }}">
                                        @endforeach

                                        @foreach ($info_arrivalpoints as $info_arrivalpoint)
                                            {{ $info_arrivalpoint->arrivalpoint_name }}
                                            <input type="hidden" name="arrivalpoint_name" value="{{ $info_arrivalpoint->arrivalpoint_name }}">
                                        @endforeach
                                        <input type="hidden" name="type_vehicle_id" value="{{ $type_vehicle_id }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Thời gian xuất bến</td>
                                    <td>
                                        @foreach ($info_departures as $info_departure)
                                            {{ $info_departure->departure_time }}
                                            {{ date('d/m/Y', strtotime($info_departure->departure_date)) }}
                                            <input type="hidden" name="date_departure" value="{{ date('d/m/Y', strtotime($info_departure->departure_date)) }}">
                                            <input type="hidden" name="time_departure" value="{{ $info_departure->departure_time }}">
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Số lượng ghế</td>
                                    <td id="seatNames">{{ $seat_name }}</td>
                                    <input type="hidden" name="seatName" value="{{ $seat_name }}">

                                    <script>
                                        document.addEventListener("DOMContentLoaded", function () {
                                            let selectedSeats = []; // Mảng lưu trữ các ghế đã chọn
                                    
                                            document.querySelectorAll(".checkbox-select-seat").forEach(function (checkbox) {
                                                checkbox.addEventListener("change", function () {
                                                    let seatName = this.dataset.seatNumber; // Lấy tên ghế từ data attribute
                                                    if (this.checked) {
                                                        if (!selectedSeats.includes(seatName)) {
                                                            selectedSeats.push(seatName);
                                                        }
                                                    } else {
                                                        selectedSeats = selectedSeats.filter(seat => seat !== seatName);
                                                    }
                                                    updateSeatDisplay();
                                                });
                                            });
                                    
                                            function updateSeatDisplay() {
                                                document.getElementById("seatNames").textContent = selectedSeats.join(", ");
                                                document.querySelector("input[name='seatName']").value = selectedSeats.join(", ");
                                            }
                                        });
                                    </script>
                                    
                                </tr>
                                <tr>
                                    <td>Điểm trả khách</td>
                                    <td id="arrivalPoint"></td>
                                    <input type="hidden" name="arrivalPoint" value="">

                                    <script>
                                        const arrivalPointElement = document.getElementById('arrivalPoint');
                                    
                                        const observer = new MutationObserver((mutations) => {
                                            mutations.forEach((mutation) => {
                                                if (mutation.type === 'childList' || mutation.type === 'characterData') {
                                                    const newValue = arrivalPointElement.textContent.trim();
                                                    document.querySelector('input[name="arrivalPoint"]').value = newValue;
                                                }
                                            });
                                        });
                                    
                                        observer.observe(arrivalPointElement, { childList: true, subtree: true, characterData: true });
                                    </script>
                                </tr>
                                <tr>
                                    <td>Hình thức di chuyển</td>
                                    <td id="travelMode">Một chiều</td>
                                    <input type="hidden" name="travelMode" value="" id="travelModeInput">

                                    <script>
                                        const travelModeElement = document.getElementById('travelMode');
                                        const travelModeInput = document.getElementById('travelModeInput');
                                
                                        if (travelModeElement && travelModeInput) {
                                            const observer = new MutationObserver((mutations) => {
                                                mutations.forEach((mutation) => {
                                                    if (mutation.type === 'childList' || mutation.type === 'characterData') {

                                                        const newValue = travelModeElement.textContent.trim();
                                                        travelModeInput.value = newValue;
                                                    }
                                                });
                                            });
                                
                                            observer.observe(travelModeElement, { childList: true, subtree: true, characterData: true });
                                        }
                                    </script>
                                </tr>
                                <tr>
                                    <td>Giá</td>
                                    <td id="totalPrice">{{ number_format($total_price) }} đồng</td>
                                    <input type="hidden" name="totalPrice" value="{{ $total_price }}">
                                </tr>
                                <tr>
                                    <td>Phí trung chuyển</td>
                                    <td id="otherFees">0 đồng</td>
                                    <input type="hidden" name="otherFees" value="" id="otherFeesInput">
                                    <script>
                                        const otherFeesElement = document.getElementById('otherFees');
                                        const otherFeesInput = document.getElementById('otherFeesInput');
                                
                                        if (otherFeesElement && otherFeesInput) {
                                            const observer = new MutationObserver((mutations) => {
                                                mutations.forEach((mutation) => {
                                                    if (mutation.type === 'childList' || mutation.type === 'characterData') {

                                                        const newValue = otherFeesElement.textContent.trim();
                                                        otherFeesInput.value = newValue;
                                                    }
                                                });
                                            });
                                
                                            observer.observe(otherFeesElement, { childList: true, subtree: true, characterData: true });
                                        }
                                    </script>
                                </tr>
                                <tr class="fs-5 fw-bold">
                                    <td>Tổng tiền thanh toán</td>
                                    <td id="finalTotal">{{ number_format($total_price) }} đồng</td>
                                    <input type="hidden" name="finalTotal" id="finalTotalInput" value="">
                                    <script>
                                        const finalTotalElement = document.getElementById('finalTotal');
                                        const finalTotalInput = document.getElementById('finalTotalInput');
                                
                                        if (finalTotalElement && finalTotalInput) {
                                            const observer = new MutationObserver((mutations) => {
                                                mutations.forEach((mutation) => {
                                                    if (mutation.type === 'childList' || mutation.type === 'characterData') {

                                                        const newValue = finalTotalElement.textContent.trim();
                                                        finalTotalInput.value = newValue;
                                                    }
                                                });
                                            });
                                
                                            observer.observe(finalTotalElement, { childList: true, subtree: true, characterData: true });
                                        }
                                    </script>
                                </tr>
                            </table>

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
