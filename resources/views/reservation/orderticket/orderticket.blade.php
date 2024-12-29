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

                    </div>
                </div>


                <div class="col-lg-12 col-md-6 bg-white p-4 rounded-5 mb-3" data-aos="fade-up" data-aos-delay="500">

                    @include('reservation.orderticket.form-infocustomer')

                </div>


                <div class="col-lg-12 col-md-6 bg-white p-4 rounded-5 mb-3" data-aos="fade-up" data-aos-delay="500">

                    @include('reservation.orderticket.info-adpoint')

                </div>

                <div class="col-lg-6 col-md-3 bg-white p-4 rounded-5" data-aos="fade-up" data-aos-delay="500">
                    <h4 class="text-center text-uppercase">Thông tin lượt đi và giá &nbsp;<i class="bi bi-currency-exchange"></i></h4>
                    <div class="text-start col-12">
                        <table class="table table-borderless">
                            <tr>
                                <td>Tuyến xe</td>
                                <td>Sài Gòn - Cần Thơ</td>
                            </tr>
                            <tr>
                                <td>Thời gian xuất bến</td>
                                <td>09:00 12/12/2024</td>
                            </tr>
                            <tr>
                                <td>Số lượng ghế</td>
                                <td>B02</td>
                            </tr>
                            <tr>
                                <td>Điểm trả khách</td>
                                <td>Bến Xe Cần Thơ</td>
                            </tr>
                            <tr>
                                <td>Hình thức di chuyển</td>
                                <td>Một chiều</td>
                            </tr>
                            <tr>
                                <td>Giá</td>
                                <td>230.000 đồng</td>
                            </tr>
                            <tr>
                                <td>Phí khác</td>
                                <td>0 đồng</td>
                            </tr>
                            <tr class="fs-5 fw-bold">
                                <td>Tổng tiền thanh toán</td>
                                <td>230.000 đồng</td>
                            </tr>
                        </table>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary btn-custom"><i
                                    class="bi bi-check2-circle"></i>&nbsp;
                                    THANH TOÁN
                            </button>
                        </div>
                        
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
