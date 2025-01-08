<div class="row">
    <h4 class="text-center text-uppercase">Thông tin khách hàng &nbsp;<i class="fa-solid fa-circle-info"></i></h4>
    <div class="col-lg-6 col-md-6 mt-3">
        <div class="row mb-3">
            @if (Auth::check())
                <form action="" method="post">
                    <div class="col-md-12 position-relative mb-3">
                        <input readonly type="text" id="fullname" name="fullname" value="{{ Auth::user()->fullname }}"
                            class="form-control ps-5 custom-input" placeholder="Họ và tên"
                            value="{{ old('fullname') }}">
                        <i
                            class="bi bi-person-circle position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                    </div>

                    <div class="col-md-12 position-relative mb-3">
                        <input readonly type="text" class="form-control ps-5 custom-input" name="number_phone" value="{{ Auth::user()->number_phone }}"
                            placeholder="Số điện thoại" value="{{ old('number_phone') }}">
                        <i
                            class="fa-solid fa-phone position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                    </div>

                    <div class="col-md-12 position-relative">
                        <input readonly type="email" class="form-control ps-5 custom-input" name="email" value="{{ Auth::user()->email }}"
                            placeholder="Email" value="{{ old('email') }}">
                        <i
                            class="bi bi-envelope position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                    </div>
                </form>
            @endif
        </div>

        @if (Auth::user()->fullname === "CHƯA XÁC ĐỊNH")
            <div class="row">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modelUpdateInfoUser">
                    <i class="bi bi-pencil-square"></i>&nbsp; Cập nhật thông tin
                </button>
                
                <div class="modal fade" id="modelUpdateInfoUser" tabindex="-1" aria-labelledby="modelUpdateInfoUserLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modelUpdateInfoUserLabel">FORM CẬP NHẬT THÔNG TIN NGƯỜI DÙNG</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12 position-relative mb-3">
                                        <label for="fullname" class="form-label">Họ và tên <span class="text-danger">*</span></label>
                                        <input type="text" id="fullname" name="fullname" value="{{ Auth::user()->fullname }}"
                                            class="form-control custom-input" placeholder="Họ và tên"
                                            value="{{ old('fullname') }}">
                                    </div>
                
                                    <div class="col-md-12 position-relative mb-3">
                                        <label for="number_phone" class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                                        <input readonly type="text" class="form-control custom-input" name="number_phone" value="{{ Auth::user()->number_phone }}"
                                            placeholder="Số điện thoại" value="{{ old('number_phone') }}">
                                    </div>
                
                                    <div class="col-md-12 position-relative">
                                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input readonly type="email" class="form-control custom-input" name="email" value="{{ Auth::user()->email }}"
                                            placeholder="Email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
                                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @else
            
        @endif
    </div>

    <div class="col-lg-6 col-md-6 mt-3">
        <p>
            (*) Quý khách vui lòng cập nhật thông tin chính xác để có thể đặt vé nhanh chóng
        </p>
        <p>
            (*) Quý khách vui lòng có mặt tại bến xuất phát của xe trước ít nhất 30 phút giờ xe khởi
            hành, mang theo thông báo đã thanh toán vé thành công có chứa mã vé được gửi từ hệ thống
            VeXe247.com. Vui lòng liên hệ Trung tâm tổng đài 0983 982 983 để được hỗ trợ.
        </p>
        <p>
            (*) Nếu quý khách có nhu cầu trung chuyển, vui lòng liên hệ Tổng đài trung chuyển 0983
            982 983 trước khi đặt vé. Chúng tôi không đón/trung chuyển tại những điểm xe trung
            chuyển không thể tới được.
        </p>
    </div>
</div>