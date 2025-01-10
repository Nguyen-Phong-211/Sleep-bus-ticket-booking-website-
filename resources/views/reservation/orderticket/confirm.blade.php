<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Hoá đơn</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('cnd-css')
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
                        <form action="" method="" id="convert-image-invoice">
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
                                        <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code"
                                            class="img-fluid" style="max-width: 180px; height: auto;">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-12 col-sm-6 col-md-8">
                                    <h4>Thông tin chuyến xe <strong>Sài Gòn - Cà Mau</strong></h4>
                                    <div class="row">
                                        <span class="col-6">Nơi đi</span>
                                        <span class="col-6 text-sm-start">{{ Auth::user()->user_code }}</span>
                                        <span class="col-6">Nơi đến</span>
                                        <span class="col-6 text-sm-start">{{ rand(1000000000, 9999999999) }}</span>
                                        <span class="col-6">Giờ khởi hành</span>
                                        <span
                                            class="col-6 text-sm-start">{{ \Carbon\Carbon::now()->format('d/m/Y H:i:s') }}</span>
                                        <span class="col-6">Ngày khởi hàng</span>
                                        <span class="col-6 text-sm-start">{{ rand(1000000000, 9999999999) }}</span>
                                        <span class="col-6">Khứ hồi</span>
                                        <span class="col-6 text-sm-start">Có</span>
                                        <span class="col-6">Trung chuyển</span>
                                        <span class="col-6 text-sm-start">Có</span>
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
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-uppercase">STT</th>
                                                    <th scope="col" class="text-uppercase">Ghế</th>
                                                    <th scope="col" class="text-uppercase text-end">Giá</th>
                                                    <th scope="col" class="text-uppercase text-end">Phí trung chuyển
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>A1, A2</td>
                                                    <td class="text-end">290.000</td>
                                                    <td class="text-end">50.000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="3" class="text-uppercase text-end">
                                                        Total</th>
                                                    <td class="text-end fs-5 fw-bold">$495.1</td>
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
                                        id="downloadInvoiceBtn" onclick="downloadInvoice()"><i
                                            class="fa-solid fa-thumbs-up"></i>Xác nhận và tải hoá đơn</button>
                                </div>
                            </div>
                        </form>
                        <a id="downloadLink" style="display:none"></a>

                        <script>
                            function downloadInvoice(event) {
                                event.preventDefault();
                                var downloadButton = document.getElementById('downloadInvoiceBtn');
                                var qrCodeValue = document.getElementById('code-image-qrcode').innerText;

                                downloadButton.style.display = 'none';

                                html2canvas(document.getElementById('convert-image-invoice'), {
                                    scrollX: 0,
                                    scrollY: -window.scrollY,
                                    useCORS: true,
                                    width: document.getElementById('convert-image-invoice').offsetWidth,
                                    height: document.getElementById('convert-image-invoice').offsetHeight,
                                    x: 0,
                                    y: 0,
                                    allowTaint: true,
                                    backgroundColor: "#ffffff"
                                }).then(function(canvas) {
                                    var imgData = canvas.toDataURL('image/png');
                                    var downloadLink = document.createElement('a');
                                    downloadLink.href = imgData;
                                    downloadLink.download = qrCodeValue + '.png';
                                    downloadLink.click(); 

                                    downloadButton.style.display = 'inline-block';
                                });
                            };
                            document.getElementById('downloadInvoiceBtn').addEventListener('click', downloadInvoice);
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
