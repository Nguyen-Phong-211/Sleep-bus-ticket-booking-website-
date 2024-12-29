<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Thuê tài xế</title>
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
                <h2>THUÊ XE TÀI XẾ</h2>
                <p>Quý khách vui lòng chọn tài xế nào mà mình yên tâm nhất.</p>
            </div>

            <div class="container">
                <div class="col-lg-12 col-md-6 bg-white p-4 rounded-5 mb-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="row mb-3 p-4">
                        <h4 class="text-uppercase mb-3">Thông tài xế &nbsp;<i class="fa-solid fa-circle-info"></i></h4>
                        <div class="col-md-6 p-3">
                            <div class="row mb-3">
                                <label class="form-check-label mb-3" for="select-driver">
                                    Chọn tài xế <span class="text-danger">*</span>
                                </label>
                                <select class="form-select custom-input" id="select-driver">
                                    <option value="">Tài xế</option>
                                    <option value="">Nguyễn Hoàng Long</option>
                                    <option value="">Trần Văn Út</option>
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
                                <label class="form-check-label mb-3" for="select-address">
                                    Cung cấp địa chỉ để tài xế có thể đến ngay <span class="text-danger">*</span>
                                </label>
                                <textarea class="form-control custom-input" id="select-address" rows="3" placeholder="Nhập địa chỉ"></textarea>
                            </div>
                            <div class="row mb-3">
                                <p>Lưu ý:</p>
                                <ul>
                                    <li>Chi phí để tài xế di chuyển đến địa chỉ bạn đăng ký là hoàn toàn không mất phí.</li>
                                    <li>Quý khách vui lòng kiểm tra thông tin mã tài xế có đúng với trên email gửi về.</li>
                                    <li>Quý khách vui lòng thanh toán toàn bộ phí sau khi hoàn thành việc thuê tài xế.</li>
                                    <li>Sau khi đã thuê tài xế, chúng tôi không cho phép khách hàng đổi tài xế khác.</li>
                                    <li>Nếu tài xế có hành vi, chuẩn mực không phù hợp thì vui lòng liên hệ ngay Tổng đài: 0983 982 983</li>
                                </ul>
                            </div>
                            <div class="row mb-3">
                                <p>Phí thanh toán của chúng tôi như sau:</p>
                                <ul>
                                    <li>3 giờ đầu tiên giá <strong>330.000 đồng</strong></li>
                                    <li>2 giờ tiếp theo là giá <strong>260.000 đồng</strong></li>
                                    <li>Sau 5 giờ kể từ lúc nhận xe thì giá <strong>190.000 đồng</strong></li>
                                </ul>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-6 border-start p-3">
                            <h5 class="mb-3 text-uppercase">Thông tin tài xế &nbsp;<i class="fa-solid fa-universal-access"></i></h5>
                            <table class="table table-borderless">
                                <tr>
                                    <td>Hình ảnh</td>
                                    <td>
                                        <img src="{{ asset('assets/img/general/hinh-mau-tai-xe.jpg') }}" alt="" class="img-fluid" height="200px" width="200px">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Họ và tên</td>
                                    <td>Nguyễn Văn A</td>
                                </tr>
                                <tr>
                                    <td>Sinh năm</td>
                                    <td>1980</td>
                                </tr>
                                <tr>
                                    <td>Số năm kinh nghiệm</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Số lượt thuê</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>Bằng lái xe hạng</td>
                                    <td>B2</td>
                                </tr>
                                <tr>
                                    <td>Ngày cấp bằng lái</td>
                                    <td>12/03/2020 - Công an Tỉnh Cà Mau</td>
                                </tr>
                                <tr>
                                    <td>Số lượt người thuê</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Tình trạng</td>
                                    <td><span class="badge rounded-pill bg-success">Đang chờ khách thuê</span></td>
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
                                        <td>Mã tài xế</td>
                                        <td>17382</td>
                                    </tr>
                                    <tr>
                                        <td>Tên tài xế</td>
                                        <td>Nguyễn Văn A</td>
                                    </tr>
                                    <tr>
                                        <td>Sinh năm</td>
                                        <td>1980</td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ tài xế đến</td>
                                        <td>144 Đăng Hưng, Phường 7, Quận 5</td>
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
