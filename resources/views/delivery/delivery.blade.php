<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Giao hàng</title>
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
                <h2>GIAO HÀNG</h2>
                <p>Quý khách vui lòng đến trạm gần nhất để giao hàng.</p>
            </div>


            <div class="container">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-lg-12 col-md-6 bg-white p-4 rounded-5 mb-3" data-aos="fade-up" data-aos-delay="500">
                        <div class="row mb-3 p-4">
                            <h4 class="text-uppercase mb-3">Thông hàng hoá &nbsp;<i class="fa-solid fa-circle-info"></i>
                            </h4>
                            <div class="col-md-6 p-3">
                                <div class="row mb-3">
                                    <label class="form-check-label mb-3" for="select-category">
                                        Chọn danh mục mặt hàng <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select custom-input" name="select-category"
                                        id="select-category">
                                        <option value="">Danh mục mặc hàng</option>
                                        <option value="">Đồ tươi sống</option>
                                        <option value="">Hàng đông lạnh</option>
                                        <option value="">Hàng khô</option>
                                        <option type="">Xe máy</option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-check-label mb-3" for="select-name">
                                        Tên gọi mặt hàng <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="select-name" name="select-name"
                                        class="form-control custom-input" placeholder="Tên gọi mặt hàng"
                                        value="{{ old('select-name') }}">
                                </div>
                                <div class="row mb-3">
                                    <label class="form-check-label mb-3" for="select-weight">
                                        Trọng lượng <span class="text-danger">*</span>
                                    </label>
                                    <input type="number" id="select-weight" min="0" max="500"
                                        name="select-weight" class="form-control custom-input"
                                        placeholder="Trọng lượng mặt hàng" value="{{ old('select-weight') }}">
                                </div>
                                <div class="row mb-3">
                                    <label class="form-check-label mb-3" for="select-address">
                                        Mô tả tình trạng mặt hàng hàng <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control custom-input" id="select-address" rows="3" placeholder="Nhập địa chỉ"></textarea>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-check-label mb-3" for="select-image">
                                        Ảnh chụp mặt hàng <span class="text-danger">*</span>
                                    </label>
                                    <input type="file" id="select-image" name="select-image[]"
                                        class="form-control custom-input" accept="image/*" multiple>
                                    <div id="image-preview" class="mt-3"></div>
                                </div>

                            </div>

                            <div class="col-md-6 border-start p-3">
                                <h5 class="mb-3 text-uppercase">Thông tin nhận hàng và giao hàng &nbsp;<i
                                        class="fa-solid fa-truck"></i></h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <td>Chọn trạm giao hàng <span class="text-danger">*</span></td>
                                        <td>
                                            <select class="form-select custom-input" name="select-branch-delivery"
                                                id="select-branch-delivery">
                                                <option value="">Chọn trạm giao hàng</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dịch vụ giao hàng <span class="text-danger">*</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="deliveryType" id="deliveryToStation" checked>
                                                    <label class="form-check-label" for="deliveryToStation">
                                                        Giao hàng đến trạm nhận
                                                    </label>
                                                </div>
                                                <div class="form-check ms-3">
                                                    <input class="form-check-input" type="radio" name="deliveryType" id="deliveryToAddress">
                                                    <label class="form-check-label" for="deliveryToAddress">
                                                        Giao tận nơi
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="stationRow">
                                        <td>Địa trạm nhận hàng <span class="text-danger">*</span></td>
                                        <td>
                                            <select class="form-select custom-input" name="stationSelection" id="stationSelection">
                                                <option value="">Chọn trạm nhận hàng</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr id="addressRow" style="display: none;">
                                        <td>Địa chỉ giao hàng tận nơi <span class="text-danger">*</span></td>
                                        <td>
                                            <textarea class="form-control custom-input" name="deliveryAddress" id="deliveryAddress" rows="3"></textarea>
                                        </td>
                                    </tr>                                    
                                    <tr>
                                        <td>Họ tên người nhận <span class="text-danger">*</span></td>
                                        <td>
                                            <input type="text" id="consignee" name="consignee"
                                                class="form-control custom-input" placeholder="Họ tên người nhận"
                                                value="{{ old('consignee') }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Số điện thoại người nhận 1 <span class="text-danger">*</span></td>
                                        <td>
                                            <input type="text" id="number-phone-consignee"
                                                name="number-phone-consignee" class="form-control custom-input"
                                                placeholder="Số điện thoại người nhận 1"
                                                value="{{ old('number-phone-consignee') }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Số điện thoại người nhận 2 <span class="fst-italic">(Optional)</span></td>
                                        <td>
                                            <input type="text" id="number-phone-consignee"
                                                name="number-phone-consignee" class="form-control custom-input"
                                                placeholder="Số điện thoại người nhận 2"
                                                value="{{ old('number-phone-consignee') }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email <span class="fst-italic">(Optional)</span></td>
                                        <td>
                                            <input type="email" id="email-consignee" name="email-consignee"
                                                class="form-control custom-input" placeholder="Email người nhận"
                                                value="{{ old('email-consignee') }}">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-6 bg-white p-4 rounded-5 mb-3" data-aos="fade-up" data-aos-delay="500">
                        <div class="row mb-3 p-4">
                            <div class="col-md-6 p-3">
                                <div class="row mb-3">
                                    <h5 class="mb-3 text-uppercase">Thông tin người nhận &nbsp;<i class="fa-solid fa-flag"></i></h5>
                                    <form action="" method="post">
                                        <div class="col-md-12 position-relative mb-3">
                                            <input type="text" class="form-control ps-5 custom-input" name="fullname" placeholder="Họ và tên" value="{{ old('fullname') }}">
                                            <i class="fa-solid fa-key position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                        </div>

                                        <div class="col-md-12 position-relative mb-3">
                                            <input type="email" id="email" name="email" class="form-control ps-5 custom-input" placeholder="Email" value="{{ old('email') }}">
                                            <i class="fa-solid fa-envelope position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                        </div>
                                        
                                        <div class="col-md-12 position-relative mb-3">
                                            <input type="text" class="form-control ps-5 custom-input" name="number_phone" placeholder="Số điện thoại" value="{{ old('number_phone') }}">
                                            <i class="fa-solid fa-phone position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <h5 class="mb-3 text-uppercase">Chú ý &nbsp;<i class="fa-solid fa-flag"></i></h5>
                                    <table class="table table-borderless">
                                        <tr>
                                            <td colspan="4">Đơn giá của chúng tôi được tính như sau</td>
                                        </tr>
                                        <tr>
                                            <td>Khối lượng đơn hàng > 3kg</td>
                                            <td>Giá: <strong>25.000 đồng / Kg</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Khối lượng đơn hàng < 3kg và > 10kg </td>
                                            <td>Giá: <strong>35.000 đồng / Kg</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Khối lượng đơn hàng < 10kg và > 40kg</td>
                                            <td>Giá: <strong>75.000 đồng / Kg</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Khối lượng đơn hàng > 40kg</td>
                                            <td>Giá: <strong>95.000 đồng / Kg</strong></td>
                                        </tr>
                                    </table>
                                    <ul>
                                        <li>Yêu cầu quý khách nhập đúng trọng lượng. Trường hợp chênh lệch nhau 3kg thì chúng tôi sẽ dừng việc nhận đơn hàng của quý khách</li>
                                        <li>Quý khách vui lòng chụp hình rõ nét, có thể bao quát được tình trạng đơn hàng</li>
                                        <li>Trong quá trình vận chuyển, nếu đơn hàng có hỏng hóc hoặc tình trạng thay đổi so với ban đầu thì chúng tôi hoàn toàn chụi trách nhiệm</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 p-3">
                                <h5 class="mb-3 text-uppercase">Hoá đơn tạm tính &nbsp;<i class="fa-solid fa-receipt"></i></h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="fs-6 text-uppercase fw-bold" colspan="5">Thông tin người gửi</td>
                                    </tr>
                                    <tr>
                                        <td>Người gửi</td>
                                        <td>Nguyễn Văn A</td>
                                    </tr>
                                    <tr>
                                        <td>Số điện thoại</td>
                                        <td>0123 456 789</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>vana@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ gửi</td>
                                        <td>Hồ Chí Minh</td>
                                    </tr>
                                    <tr>
                                        <td class="fs-6 text-uppercase fw-bold" colspan="5">Thông tin người nhận</td>
                                    </tr>
                                    <tr>
                                        <td>Người gửi</td>
                                        <td>Nguyễn Văn A</td>
                                    </tr>
                                    <tr>
                                        <td>Số điện thoại</td>
                                        <td>0123 456 789</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>vana@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Tên mặt hàng</td>
                                        <td>
                                            Xe máy SH 125CC
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ nhận</td>
                                        <td>Hồ Chí Minh</td>
                                    </tr>
                                    <tr>
                                        <td class="fs-6 text-uppercase fw-bold" colspan="5">Thông tin đơn hàng vận chuyển</td>
                                    </tr>
                                    <tr>
                                        <td>Mã đơn hàng vận chuyển</td>
                                        <td>123HFS6GG7778FYSOO</td>
                                    </tr>
                                    <tr>
                                        <td>Tên đơn hàng</td>
                                        <td>Xe gắn máy</td>
                                    </tr>
                                    <tr>
                                        <td>Khối lượng</td>
                                        <td>114 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Tên mặt hàng</td>
                                        <td>
                                            Xe máy SH 125CC
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dịch vụ giao hàng</td>
                                        <td>Giao hàng đến trạm nhận</td>
                                    </tr>
                                    <tr>
                                        <td>Phí phát sinh</td>
                                        <td>0 đồng</td>
                                    </tr>
                                    <tr>
                                        <td>Tổng tiền</td>
                                        <td class="fs-5 fw-bold">234.000 đồng</td>
                                    </tr>
                                    <tr>
                                        <td class="fs-6 fw-bold" colspan="5">Đơn hàng sẽ được vận chuyển vào ngày 12/03/2024</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-end">
                                            <button type="submit" class="btn btn-primary btn-custom"><i class="fa-solid fa-paper-plane"></i>XÁC NHẬN</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </form>
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
