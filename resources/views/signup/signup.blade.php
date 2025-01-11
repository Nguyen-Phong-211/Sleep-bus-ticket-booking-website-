<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Đăng ký</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('cnd-css')
</head>

<body class="index-page">
    @include('loading')

    @if (session('error'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 1000
            });
        </script>
    @endif

    <header id="header" class="header d-flex align-items-center fixed-top">
        @include('menu')
    </header>

    <main class="main mt-5">

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4 g-lg-5">

                    <div class="col-lg-7 mx-auto">
                        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/general/logo.png') }}" alt="" class="img-fluid"
                                    height="150px" width="150px">
                            </div>
                            <h3>ĐĂNG KÝ TÀI KHOẢN</h3>
                            <p>Bạn đã có tài khoản. Hãy <a href="{{ route('login') }}"><i
                                        class="fa-solid fa-arrow-right"></i>&nbsp; Đăng nhập</a></p>

                            <form action="{{ route('signup.store') }}" method="post" class="mt-4" data-aos="fade-up"
                                data-aos-delay="200" id="signupForm">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-12 position-relative">
                                        <input type="email" id="email" name="email" class="form-control ps-5"
                                            placeholder="Email" value="{{ old('email') }}">
                                        <i
                                            class="fa-solid fa-envelope position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                    </div>

                                    <div class="col-md-12 position-relative">
                                        <input type="text" id="number_phone" class="form-control ps-5"
                                            name="number_phone" placeholder="Số điện thoại"
                                            value="{{ old('number_phone') }}">
                                        <i
                                            class="fa-solid fa-phone position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                    </div>

                                    <div class="col-md-12 position-relative">
                                        <input type="password" id="password" class="form-control ps-5" name="password"
                                            placeholder="Mật khẩu" value="{{ old('password') }}">
                                        <i
                                            class="fa-solid fa-key position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                    </div>

                                    <div class="col-md-12 position-relative">
                                        <input type="password" id="password_confirmation" class="form-control ps-5"
                                            name="password_confirmation" placeholder="Xác nhận mật khẩu"
                                            value="{{ old('password_confirmation') }}">
                                        <i
                                            class="fa-solid fa-key position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                    </div>

                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input" type="checkbox" value="" checked>
                                        <label class="form-check-label">
                                            Bạn đã đồng ý với các chính sách <a href="{{ route('clause.index') }}">điều
                                                khoản và bảo mật</a> của chúng tôi.
                                        </label>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn"><i
                                                class="fa-solid fa-paper-plane"></i>ĐĂNG KÝ</button>
                                    </div>

                                </div>

                                <div class="mt-3 d-flex align-items-center mb-3">
                                    <hr class="flex-grow-1">
                                    <span class="mx-2">HOẶC</span>
                                    <hr class="flex-grow-1">
                                </div>

                                <div class="border-top-3 row mt-3">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn"><i class="fa-brands fa-google"></i>ĐĂNG KÝ
                                            VỚI TÀI KHOẢN GOOGLE</button>
                                    </div>
                                </div>
                            </form>
                            <script src="{{ asset('assets/js/signup.js') }}"></script>
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

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
