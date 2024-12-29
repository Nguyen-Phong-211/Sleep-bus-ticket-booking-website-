<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Thuê xe theo hợp đồng</title>
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

            <div class="container section-title mt-3" data-aos="fade-up">
                <h2>THUÊ XE THEO HỢP ĐỒNG</h2>
                <p>Quý khách vui lòng chọn phương tiện phù hợp nhất. Sau khi đã thuê chúng tôi sẽ không chịu trách nhiệm về việc đổi phương tiện khác</p>
            </div>

            <div class="container">
                <div class="col-lg-12 col-md-6 bg-white p-4 rounded-5 mb-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="row mb-3 p-4">
                        <h4 class="text-uppercase mb-3">Thông tin xe &nbsp;<i class="fa-solid fa-car-rear"></i></h4>
                        <div class="col-md-6 p-3">
                            <div class="row mb-3">
                                <label class="form-check-label mb-3" for="select-vehicle">
                                    Chọn phương tiện <span class="text-danger">*</span>
                                </label>
                                <select class="form-select custom-input" id="select-vehicle">
                                    <option value="">Phương tiện</option>
                                    <option value="">Xe 4 chỗ - 51H-950.44</option>
                                    <option value="">Xe 4 chỗ - 51H-950.44</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <div class="mb-3">
                                    <label class="form-check-label mb-3" for="select-time-rend-start">
                                        Chọn giờ thuê - Giờ bắt đầu &nbsp;<span class="text-danger">*</span>
                                    </label>
                                    <input type="datetime-local" class="form-control ps-5 custom-input" id="select-time-rend-start" name="time-rend-start">
                                </div>
                            
                                <div class="mx-3 d-flex align-items-center">
                                    <i class="bi bi-arrow-right-circle-fill fs-3 text-primary"></i>
                                </div>
                            
                                <div class="mb-3">
                                    <label class="form-check-label mb-3" for="select-time-rend-end">
                                        Chọn giờ thuê - Giờ kết thúc &nbsp;<span class="text-danger">*</span>
                                    </label>
                                    <input type="datetime-local" class="form-control ps-5 custom-input" id="select-time-rend-end" name="time-rend-end">
                                </div>
                            
                                <div class="row flex-grow-1">
                                    <p class="fw-bold fs-6">Tổng số giờ: 3 giờ 2 phút</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-check-label mb-3" for="select-location">
                                    Nơi nhận phương tiện <span class="text-danger">*</span>
                                </label>
                                <select class="form-select custom-input" id="select-location">
                                    <option value="">Nơi nhận</option>
                                    <option value="">Trạm Xe Quận 5 - 144 Đăng Hưng, Phường 7</option>
                                </select>
                            </div>
                            <div class="row mb-3">
                                <p>Lưu ý:</p>
                                <ul>
                                    <li>Nhiên liệu đã được đổ đầy trước khi bàn giao cho quý khách.</li>
                                    <li>Quý khách vui lòng quay lại tình trạng xe trước và sau khi thuê. Để phòng trường hợp xấu, tránh mất tiền.</li>
                                    <li>Sau khi thuê quý khách vui lòng gìn giữ cẩn thận. Trường hợp tình trạng xe khác với ban đầu nhận thì chúng tôi sẽ liên hệ để quý khách bồi thường.</li>
                                    <li>Quý khách vui lòng thông báo cho chúng tôi khi xe đã bắt đầu di chuyển, đảm bảo an toàn và vệ sinh của quý khách.</li>
                                    <li>Sau khi nhận xe, chúng tôi không cho phép bất kì hình thức đổi xe nào khác.</li>
                                    <li>Nếu trong quá trình di chuyển mà xe có xảy ra tình trạng hết nhiên liệu hoặc hư hỏng thì chúng tôi không chịu trách nhiệm.</li>
                                </ul>
                            </div>
                            <div class="row mb-3">
                                <p>Phí thanh toán của chúng tôi như sau:</p>
                                <ul>
                                    <li>3 giờ đầu tiên giá <strong>680.000 đồng</strong></li>
                                    <li>3 giờ tiếp theo là giá <strong>530.000 đồng</strong></li>
                                    <li>Sau 6 giờ kể từ lúc nhận xe thì giá <strong>410.000 đồng</strong></li>
                                </ul>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-6 border-start p-3">
                            <h5 class="mb-3 text-uppercase">Thông tin phương tiện &nbsp;<i class="fa-solid fa-universal-access"></i></h5>
                            <table class="table table-borderless">
                                <tr>
                                    <td>Hình ảnh</td>
                                    <td>
                                        <img src="{{ asset('assets/img/hinh-xe-mau.png') }}" alt="" class="img-fluid" height="200px" width="200px">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Biển số xe</td>
                                    <td>51H-950.44</td>
                                </tr>
                                <tr>
                                    <td>Số lượng chỗ ngồi</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>Nhiên liệu hoạt động</td>
                                    <td>Xăng</td>
                                </tr>
                                <tr>
                                    <td>Số nhiên liệu tiêu thụ/100km</td>
                                    <td>09 lít</td>
                                </tr>
                                <tr>
                                    <td>Màu sắc</td>
                                    <td>Màu trắng</td>
                                </tr>
                                <tr>
                                    <td>Số Km đã đi</td>
                                    <td>12.000.000</td>
                                </tr>
                                <tr>
                                    <td>Số lượt người thuê</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Tình trạng</td>
                                    <td>Vui lòng đến nơi để xem chi tiết</td>
                                </tr>
                                <tr>
                                    <td>Số lượng xe</td>
                                    <td><span class="badge rounded-pill bg-success">2</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6 mb-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="row g-4">
                        <div class="col-lg-6 col-md-6 bg-white p-4 rounded-5">
                            <h4 class="text-center text-uppercase">Thông tin khách thuê &nbsp;<i class="fa-solid fa-circle-info"></i></h4>
                            <form action="" method="post" class="mt-3">
                                @csrf
                                <div class="col-md-12 position-relative mb-3">
                                    <input type="email" id="email" name="email"
                                        class="form-control ps-5 custom-input" placeholder="Họ và tên"
                                        value="{{ old('email') }}">
                                    <i
                                        class="bi bi-person-circle position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                </div>
                    
                                <div class="col-md-12 position-relative mb-3">
                                    <input type="text" class="form-control ps-5 custom-input" name="number_phone"
                                        placeholder="Số điện thoại" value="{{ old('number_phone') }}">
                                    <i
                                        class="fa-solid fa-phone position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                </div>
                    
                                <div class="col-md-12 position-relative">
                                    <input type="email" class="form-control ps-5 custom-input" name="email"
                                        placeholder="Email" value="{{ old('email') }}">
                                    <i
                                        class="bi bi-envelope position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                </div>
                            </form>
                        </div>
    
                        <div class="col-lg-5 ms-3 col-md-6 bg-white p-4 rounded-5">
                            <h4 class="text-center text-uppercase">Thông thanh toán &nbsp;<i class="bi bi-currency-exchange"></i></h4>
                            <div class="text-start col-12">
                                <table class="table table-borderless">
                                    <tr>
                                        <td>Tên xe</td>
                                        <td>Xe 8 chỗ Mitxubishi</td>
                                    </tr>
                                    <tr>
                                        <td>Biển số xe</td>
                                        <td>51H-950.44</td>
                                    </tr>
                                    <tr>
                                        <td>Điểm nhận xe</td>
                                        <td>144 Đăng Hưng, Phường 7, Quận 5</td>
                                    </tr>
                                    <tr>
                                        <td>Số lượng ghế</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>Số giờ thuê</td>
                                        <td>3 giờ 2 phút</td>
                                    </tr>
                                    <tr class="fs-5 fw-bold">
                                        <td>Giá tạm tính</td>
                                        <td>1.540.000 đồng</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Các thông tin liên quan đến phương tiện vui lòng xem bên trên</td>
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