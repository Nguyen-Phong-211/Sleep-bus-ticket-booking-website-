<div class="row">
    <h4 class="text-center text-uppercase">Thông tin khách hàng &nbsp;<i class="fa-solid fa-circle-info"></i></h4>
    <div class="col-lg-6 col-md-6 mt-3">
        <form action="" method="post">
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

    <div class="col-lg-6 col-md-6 mt-3">
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