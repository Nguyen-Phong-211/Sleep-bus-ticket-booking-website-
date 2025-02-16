<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Hoá đơn</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('cnd-css')
    <script src="{{ asset('assets/js/confirm.js') }}"></script>
</head>

<body class="index-page" style="background-color: #f3f9fe">

    <header id="header" class="header d-flex align-items-center fixed-top">
        @include('menu')
    </header>

    <main class="main mt-5">

        <section class="py-3 py-md-5" style="background-color: #f3f9fe">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-xl-8 col-xxl-7" id="invoice">

                        <form action="{{ route('orderticket.storage') }}" method="post" id="convert-image-invoice" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="row gy-3 mb-3">
                                <div class="row mb-4">
                                    <div class="col-12 text-center mt-3">
                                        <img src="{{ asset('assets/img/general/logo.png') }}" alt=""
                                            class="img-fluid rounded-5 mx-auto" width="100px" height="100px">
                                        <h4 class="mt-2 mb-2 fw-bold">
                                            Hệ thống VeXe247.com
                                        </h4>
                                        <h5>
                                            Niềm tin - Chất lượng - Hài lòng
                                        </h5>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h4 class="text-center">Hoá đơn/Thẻ lên xe</h4>
                                        <div class="row">
                                            <span class="col-6">Khách hàng</span>
                                            <span class="col-6 text-sm-start">{{ Auth::user()->fullname }}</span>
                                            <span class="col-6">Điện thoại</span>
                                            <span class="col-6 text-sm-start">{{ Auth::user()->number_phone }}</span>
                                            <span class="col-6">Email</span>
                                            <span class="col-6 text-sm-start">{{ Auth::user()->email }}</span>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <img name="img-qrcode" src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code"
                                            class="img-fluid" style="max-width: 180px; height: auto;">
                                            <input type="hidden" name="img-qrcode" value="data:image/png;base64,{{ base64_encode($qrCode) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-12 col-sm-6 col-md-8">
                                    <h4>Thông tin chuyến xe <strong>{{ $departurepoint_name }} - {{ $arrivalpoint_name }}</strong></h4>
                                    <div class="row">
                                        <span class="col-6">Nơi đi</span>
                                        <span class="col-6 text-sm-start">{{ $departurepoint_name }}</span>

                                        <span class="col-6">Nơi đến</span>
                                        <span class="col-6 text-sm-start">{{ $arrivalpoint_name }}</span>
                                        <input type="hidden" name="route" value="{{ $route }}">

                                        <span class="col-6">Điểm trả khách</span>
                                        <span class="col-6 text-sm-start">{{ $arrivalPoint }}</span>

                                        <span class="col-6">Biển số xe</span>
                                        @foreach ($uniqueLicensePlates as $licensePlate)
                                            <span class="col-6 text-sm-start">{{ $licensePlate }}</span>
                                            <input type="hidden" name="licensePlates" value="{{ $licensePlate }}">
                                        @endforeach


                                        <span class="col-6">Ngày khởi hành</span>
                                        <span class="col-6 text-sm-start">{{ $date_departure }}</span>

                                        <span class="col-6">Giờ khởi hàng</span>
                                        <span class="col-6 text-sm-start">{{ $time_departure }}</span>
                                        
                                        @if ($travelMode === "Trung chuyển")
                                            <span class="col-6">Khứ hồi</span>
                                            <span class="col-6 text-sm-start">Không</span>

                                            <span class="col-6">Trung chuyển</span>
                                            <span class="col-6 text-sm-start">Có</span>
                                            <input type="hidden" name="travelMode" value="1">
                                        @else
                                            <span class="col-6">Khứ hồi</span>
                                            <span class="col-6 text-sm-start">Không</span>

                                            <span class="col-6">Trung chuyển</span>
                                            <span class="col-6 text-sm-start">Không</span>
                                            <input type="hidden" name="travelMode" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <h4 class="row">
                                        <span class="col-12">Thông tin hoá đơn #</span>
                                    </h4>
                                    <div class="row">
                                        <span class="col-6">Costomer</span>
                                        <span class="col-6 text-sm-end">{{ Auth::user()->user_code }}</span>
                                        <span class="col-6">Invoice Code</span>
                                        <span class="col-6 text-sm-end">{{ rand(1000000000, 9999999999) }}</span>
                                        <span class="col-6">Invoice Date</span>
                                        <span
                                            class="col-6 text-sm-end">{{ \Carbon\Carbon::now()->format('d/m/Y H:i:s') }}</span>
                                        <span class="col-6">Reference</span>
                                        <span class="col-6 text-sm-end">{{ rand(1000000000, 9999999999) }}</span>
                                        <span class="col-6">QR Code</span>
                                        <span class="col-6 text-sm-end" id="code-image-qrcode">{{ rand(1000000000, 9999999999) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-uppercase">STT</th>
                                                    <th scope="col" class="text-uppercase">Ghế</th>
                                                    <th scope="col" class="text-uppercase">Tầng</th>
                                                    <th scope="col" class="text-uppercase">Hàng</th>
                                                    <th scope="col" class="text-uppercase">Loại xe</th>
                                                    <th scope="col" class="text-uppercase">Giá</th>
                                                    <th scope="col" class="text-uppercase">Thành tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                @foreach ($getInfoSeat as $index => $seat)
                                                    <tr>
                                                        <th scope="row">{{ $index + 1 }}</th>
                                                        <td>
                                                            {{ $seat->seat_name }}
                                                            <input type="hidden" name="seatName" value="{{ $seatName }}">
                                                        </td>

                                                        <td>{{ $seat->floor_name }}</td>
                                                        <td>{{ $seat->row_seat_name }}</td>
                                                        <td>{{ $seat->type_vehicle_name }}</td>
                                                        <td>{{ number_format($seat->price) }}</td>

                                                        @if ((int) $otherFees == 0)
                                                            <td>{{ number_format($seat->price + 50000) }}</td>
                                                        @else
                                                            <td>{{ number_format($seat->price + 0) }}</td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <th scope="row" colspan="6" class="text-uppercase text-end">Phí trung chuyển</th>
                                                    @if ((int) $otherFees != 0)
                                                        <td class="text-end fs-5 fw-bold">{{ number_format(50000) }}</td>
                                                        <input type="hidden" name="dif_cost" value="50000">
                                                    @else
                                                        <td class="text-end fs-5 fw-bold">0</td>
                                                        <input type="hidden" name="dif_cost" value="0">
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="6" class="text-uppercase text-end">Tổng tiền</th>
                                                    <td class="text-end fs-5 fw-bold">{{ number_format($finalTotal) }}</td>
                                                </tr>
                                            </tbody>
                                        </table>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <p class="text-danger">Lưu ý: Vui lòng xuất trình ảnh này cho nhân viên trước khi lên xe. Nếu có thắt mắc vui lòng liên hệ Hotline: 0983 982 983</p>
                            </div>
                            <div class="row">
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-primary mb-3 btn-custom border-0"
                                        id="downloadInvoiceBtn" onclick="downloadInvoice(event)"><i
                                            class="fa-solid fa-thumbs-up"></i>
                                            &nbsp;Xác nhận và tải hoá đơn
                                    </button>
                                </div>
                            </div>
                        </form>

                        <a id="downloadLink" style="display: none"></a>
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