<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Đăng nhập</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('cnd-css')
</head>

<body class="index-page">

    @if (session('error'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "warning",
                title: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('success_change_password'))
    <script>
        Swal.fire({
            position: "top-end",
            icon: "warning",
            title: "{{ session('success_change_password') }}",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
    @endif

    <header id="header" class="header d-flex align-items-center fixed-top">
        @include('menu')
    </header>

    <main class="main mt-5">
        <section id="contact" class="contact section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4 g-lg-5">
                    <div class="col-lg-7 mx-auto">
                        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/general/logo.png') }}" alt="" class="img-fluid"
                                    height="150px" width="150px">
                            </div>
                            <h3>ĐĂNG NHẬP TÀI KHOẢN</h3>

                            <form action="{{ route('login.post') }}" method="post" class="mt-4" id="loginForm"
                                data-aos="fade-up" data-aos-delay="200">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-12 position-relative">
                                        <input type="text" class="form-control ps-5" id="number_phoneLogin" name="number_phone" value="{{ old('number_phone') }}" placeholder="Số điện thoại">
                                        <i class="fa-solid fa-phone position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                    </div>

                                    <div class="col-md-12 position-relative">
                                        <input type="password" class="form-control ps-5" id="passwordLogin" name="password" value="{{ old('password') }}" placeholder="Mật khẩu">
                                        <i class="fa-solid fa-key position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                    </div>

                                    <div class="col-md-12 fs-6 text-start">
                                        <p>
                                            <a href="{{ route('misspassword.index') }}"><i class="fa-solid fa-id-card"></i>&nbsp; Quên mật khẩu</a>
                                        </p>
                                        <p>
                                            Chưa có tài khoản. Vui lòng đăng ký &nbsp;<a href="{{ route('signup.index') }}"><i class="fa-solid fa-user-plus"></i>&nbsp; tại đây</a>
                                        </p>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn">
                                            <i class="fa-solid fa-paper-plane"></i>ĐĂNG NHẬP
                                        </button>
                                    </div>
                                </div>

                                <div class="mt-3 d-flex align-items-center mb-3">
                                    <hr class="flex-grow-1">
                                    <span class="mx-2">HOẶC</span>
                                    <hr class="flex-grow-1">
                                </div>

                                <div class="border-top-3 row mt-3">
                                    <div class="col-12 text-center">
                                        <a href="" class="btn"><i class="fa-brands fa-google"></i>ĐĂNG NHẬP
                                            VỚI TÀI KHOẢN GOOGLE</a>
                                    </div>
                                </div>
                            </form>

                            <script>
                                $('#loginForm').on('submit', function(e) {
                                    e.preventDefault();

                                    var formData = $(this).serialize();

                                    $.ajax({
                                        url: "{{ route('login.post') }}",
                                        method: 'POST',
                                        data: formData,
                                        success: function(response) {
                                            window.location.href = response.redirect_url;
                                        },
                                        error: function(xhr) {
                                            var errors = xhr.responseJSON.errors;
                                            var errorMessage = '';
                                            if (errors) {
                                                for (var key in errors) {
                                                    errorMessage += errors[key][0] + '\n';
                                                }
                                            }

                                            Swal.fire({
                                                position: "top-end",
                                                icon: "warning",
                                                title: "Yêu cầu nhập đủ thông tin.",
                                                showConfirmButton: false,
                                                timer: 1000
                                            });
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer">
        @include('footer')
    </footer>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    @include('cnd-js')

</body>

</html>
