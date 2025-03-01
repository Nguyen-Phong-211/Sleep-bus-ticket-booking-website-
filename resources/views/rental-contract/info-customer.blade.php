<div class="mt-3">
    <div class="position-relative mb-3">
        <input readonly type="text" id="fullname" name="fullname"
            class="form-control ps-5 custom-input" placeholder="Họ và tên"
            value="{{ Auth::user()->fullname }}">
        <i class="bi bi-person-circle position-absolute top-50 start-0 translate-middle-y ps-4"></i>
    </div>

    <div class="position-relative mb-3">
        <input readonly type="text" class="form-control ps-5 custom-input" name="number_phone"
            placeholder="Số điện thoại" value="{{ Auth::user()->number_phone }}">
        <i class="fa-solid fa-phone position-absolute top-50 start-0 translate-middle-y ps-4"></i>
    </div>

    <div class="position-relative">
        <input readonly type="email" class="form-control ps-5 custom-input" name="email"
            placeholder="Email" value="{{ Auth::user()->email }}">
        <i class="bi bi-envelope position-absolute top-50 start-0 translate-middle-y ps-4"></i>
    </div>
</div>
