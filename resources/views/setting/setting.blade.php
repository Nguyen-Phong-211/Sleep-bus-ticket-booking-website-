<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Cài đặt</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('cnd-css')
</head>

<body class="index-page">
    @include('loading')

    @if (session('success'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    <header id="header" class="header d-flex align-items-center fixed-top">
        @include('menu')
    </header>

    <main class="main mt-5">


        <!-- Profile 1 - Bootstrap Brain Component -->
        <section class="light-background py-3 py-md-5 py-xl-8">

            <div class="container mt-3">
                <div class="row justify-content-md-center">
                    <div class="container section-title mt-3" data-aos="fade-up">
                        <h2>CÀI ĐẶT TÀI KHOẢN</h2>
                        <p>Khách hàng thực hiện việc thay đổi thông tin khi cần thiết. Vui lòng cập nhật toàn bộ thông
                            tin mới nhất để có thể thao tác với các dịch vụ của chúng tôi một cách nhanh nhất.</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row gy-4 gy-lg-0">
                    <div class="col-12 col-lg-4 col-xl-3">
                        <div class="row gy-4">
                            <div class="col-12" data-aos="fade-up">
                                <div class="card widget-card border-light shadow-sm">
                                    <div class="card-header bg-background-card">Xin chào,
                                        {{ Auth::user()->fullname ?? 'CHƯA XÁC ĐỊNH' }}</div>
                                    <div class="card-body">
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('assets/img/user/' . Auth::user()->avatar ?? 'profile.jpg') }}"
                                                class="img-fluid rounded-circle" height="100px" width="100px"
                                                alt="avatar">
                                        </div>
                                        <h5 class="text-center mb-1"> {{ Auth::user()->fullname ?? 'CHƯA XÁC ĐỊNH' }}
                                        </h5>
                                        <p class="text-center text-secondary mb-4">Khách hành thân thiết &nbsp;<i
                                                class="bi bi-emoji-smile icon-primary text-warning"></i></p>
                                        <ul class="list-group list-group-flush mb-4">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <h6 class="m-0">Số lượt đặt vé</h6>
                                                <span>0</span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <h6 class="m-0">Số lượt thuê tài xế</h6>
                                                <span>0</span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <h6 class="m-0">Số lượt thuê xe</h6>
                                                <span>0</span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <h6 class="m-0">Số lượt giao hàng</h6>
                                                <span>0</span>
                                            </li>
                                        </ul>
                                        <div class="d-grid m-0 text-center">
                                            <a href="" class="btn btn-outline-primary btn-custom text-uppercase"
                                                type="button"><i class="fa-solid fa-clock-rotate-left"></i>&nbsp; Lịch
                                                sử giao dịch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 col-xl-9" data-aos="fade-up">
                        <div class="card widget-card border-light shadow-sm">
                            <div class="card-body p-4">
                                <ul class="nav nav-tabs" id="profileTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active text-uppercase" id="overview-tab"
                                            data-bs-toggle="tab" data-bs-target="#overview-tab-pane" type="button"
                                            role="tab" aria-controls="overview-tab-pane" aria-selected="true"><i
                                                class="fa-regular fa-address-book"></i>&nbsp; Tổng quan thông
                                            tin</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-uppercase" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                                            aria-controls="profile-tab-pane" aria-selected="false"><i
                                                class="fa-regular fa-pen-to-square"></i>&nbsp; Cập nhật thông
                                            tin</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-uppercase" id="password-tab" data-bs-toggle="tab"
                                            data-bs-target="#password-tab-pane" type="button" role="tab"
                                            aria-controls="password-tab-pane" aria-selected="false"><i
                                                class="fa-solid fa-passport"></i>&nbsp; Thay đổi mật khẩu</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-uppercase" id="history-transaction-tab"
                                            data-bs-toggle="tab" data-bs-target="#history-transaction-tab"
                                            type="button" role="tab" aria-controls="history-transaction-tab"
                                            aria-selected="false"><i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                                            Lịch sử giao dịch</button>
                                    </li>
                                </ul>


                                <div class="tab-content pt-4" id="profileTabContent">
                                    <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel"
                                        aria-labelledby="overview-tab" tabindex="0">
                                        <h5 class="mb-3">Về khách hàng &nbsp;<i
                                                class="fa-solid fa-person-circle-exclamation"></i></h5>
                                        <p class="mb-3">
                                            Khách hàng đã đăng ký tài khoản của chúng tôi thành công vào lúc 9:00
                                            12/03/2024
                                        </p>
                                        <h5 class="mb-3">Thông tin chung &nbsp;<i
                                                class="fa-regular fa-circle-user"></i></h5>
                                        <div class="row g-0">

                                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                                <div class="p-2">Mã khách hàng</div>
                                            </div>
                                            <div
                                                class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                                <div class="p-2">{{ Auth::user()->user_code }}</div>
                                            </div>

                                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                                <div class="p-2">Họ và tên</div>
                                            </div>
                                            <div
                                                class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                                <div class="p-2">{{ Auth::user()->fullname ?? 'CHƯA XÁC ĐỊNH' }}
                                                </div>
                                            </div>

                                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                                <div class="p-2">Số điện thoại</div>
                                            </div>
                                            <div
                                                class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                                <div class="p-2">{{ Auth::user()->number_phone }}</div>
                                            </div>

                                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                                <div class="p-2">Số điện thoại dự phòng</div>
                                            </div>
                                            <div
                                                class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                                <div class="p-2">{{ Auth::user()->backup_phone_number }}</div>
                                            </div>

                                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                                <div class="p-2">Địa chỉ</div>
                                            </div>
                                            <div
                                                class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                                <div class="p-2">{{ Auth::user()->address ?? 'CHƯA XÁC ĐỊNH' }}
                                                </div>
                                            </div>

                                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                                <div class="p-2">Email</div>
                                            </div>
                                            <div
                                                class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                                <div class="p-2">{{ Auth::user()->email }}</div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                        aria-labelledby="profile-tab" tabindex="0">

                                        <form action="{{ route('user.update') }}" class="row gy-3 gy-xxl-4"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-12">
                                                <div class="row gy-2">
                                                    <label class="col-12 form-label m-0">Ảnh đại diện</label>
                                                    <div class="col-12">
                                                        <img id="avatarImage"
                                                            src="{{ asset('assets/img/user/' . Auth::user()->avatar ?? 'profile.jpg') }}"
                                                            class="img-fluid" height="100px" width="100px"
                                                            alt="avatar">
                                                    </div>
                                                    <div class="col-12">
                                                        <a href="#!" id="uploadLink"
                                                            class="d-inline-block bg-primary link-light lh-1 p-2 rounded">
                                                            <i class="bi bi-upload"></i> Chọn ảnh
                                                        </a>
                                                        <a href="#!"
                                                            class="d-inline-block bg-danger link-light lh-1 p-2 rounded">
                                                            <i class="bi bi-trash"></i> Xóa ảnh
                                                        </a>
                                                    </div>

                                                    <input type="file" id="avatarInput" class="d-none"
                                                        accept="image/*" name="avatarUpdate">
                                                </div>
                                            </div>

                                            <script>
                                                document.getElementById('uploadLink').addEventListener('click', function(e) {
                                                    e.preventDefault();

                                                    document.getElementById('avatarInput').click();
                                                });

                                                document.getElementById('avatarInput').addEventListener('change', function(e) {
                                                    var file = e.target.files[0];

                                                    if (file) {
                                                        if (file.type.startsWith('image/')) {
                                                            var reader = new FileReader();

                                                            reader.onload = function(e) {
                                                                document.getElementById('avatarImage').src = e.target.result;

                                                            };

                                                            reader.readAsDataURL(file);
                                                        } else {
                                                            alert("Vui lòng chọn một file ảnh.");
                                                        }
                                                    }
                                                });
                                            </script>

                                            <div class="col-12 col-md-6">
                                                <label for="inputFirstName" class="form-label">Họ và tên</label>
                                                <input type="text" class="form-control custom-input"
                                                    id="inputFirstName" name="fullNameUpdate"
                                                    value="{{ Auth::user()->fullname ?? '' }}">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="inputEmail" class="form-label">Email</label>
                                                <input type="email" class="form-control custom-input"
                                                    id="inputEmail" name="emailUpdate"
                                                    value="{{ Auth::user()->email }}">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="inputNumberPhone" class="form-label">Số điện thoại</label>
                                                <input type="text" class="form-control custom-input"
                                                    id="inputNumberPhone" name="numberPhoneUpdate"
                                                    value="{{ Auth::user()->number_phone }}">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="inputNumberPhonePrepare" class="form-label">Số điện thoại
                                                    dự phòng</label>
                                                <input type="text" class="form-control custom-input"
                                                    id="inputNumberPhonePrepare" name="inputNumberPhonePrepare"
                                                    value="{{ Auth::user()->backup_phone_number ?? '' }}">
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <label for="inputAddress" class="form-label">Địa chỉ</label>
                                                <textarea id="inputAddress" name="inputAddressUpdate" class="form-control custom-input" rows="3">{{ Auth::user()->address ?? '' }}</textarea>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit"
                                                    class="btn btn-primary btn-custom text-uppercase"><i
                                                        class="fa-regular fa-floppy-disk"></i>&nbsp; Lưu thay
                                                    đổi</button>
                                            </div>
                                        </form>
                                    </div>



                                    <div class="tab-pane fade" id="password-tab-pane" role="tabpanel"
                                        aria-labelledby="password-tab" tabindex="0">

                                        <form id="changePasswordForm" method="POST">
                                            @csrf
                                            <div class="row gy-3 gy-xxl-4">
                                                <div class="col-12">
                                                    <label for="currentPassword" class="form-label">Mật khẩu hiển
                                                        tại</label>
                                                    <input type="password" name="passwordCurrent"
                                                        class="form-control custom-input" id="currentPassword">
                                                </div>
                                                <div class="col-12">
                                                    <label for="newPassword" class="form-label">Mật khẩu mới</label>
                                                    <input type="password" name="newPassword"
                                                        class="form-control custom-input" id="newPassword">
                                                </div>
                                                <div class="col-12">
                                                    <label for="confirmPassword" class="form-label">Nhập lại mật khẩu
                                                        mới</label>
                                                    <input type="password" class="form-control custom-input"
                                                        name="confirmNewPassword" id="confirmPassword">
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-custom text-uppercase"><i
                                                            class="fa-regular fa-floppy-disk"></i>&nbsp; Lưu thay
                                                        đổi</button>
                                                </div>
                                            </div>
                                        </form>

                                        <script>
                                            $(document).ready(function() {
                                                $('#changePasswordForm').on('submit', function(e) {
                                                    e.preventDefault();

                                                    var formData = $(this).serialize();
                                                    $.ajax({
                                                        url: "{{ route('user.updatePassword') }}",
                                                        method: 'POST',
                                                        data: formData,
                                                        success: function(response) {
                                                            Swal.fire({
                                                                position: 'top-end',
                                                                icon: 'success',
                                                                title: response.message,
                                                                showConfirmButton: false,
                                                                timer: 1500
                                                            });
                                                        },
                                                        error: function(xhr) {
                                                            var errorMessage = xhr.responseJSON.message ||
                                                                'Có lỗi xảy ra. Vui lòng thử lại.';
                                                            Swal.fire({
                                                                position: 'top-end',
                                                                icon: 'error',
                                                                title: errorMessage,
                                                                showConfirmButton: false,
                                                                timer: 1500
                                                            });
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer id="footer" class="footer">

        @include('footer')

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('cnd-js')

</body>

</html>
