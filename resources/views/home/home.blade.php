<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ __('messages.home') }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('cnd-css')
</head>

<body class="index-page">

    @if (session('success_message' ))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('success_message') }}",
                showConfirmButton: false,
                timer: 1000
            });
        </script>
    @endif

    <header id="header" class="header d-flex align-items-center fixed-top">
        @include('menu')
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('assets/img/general/logo.png') }}" alt="" class="img-fluid rounded-5 me-4 mb-4" width="100px" height="100px">
                            <div class="company-badge mb-4">
                                <i class="bi bi-gear-fill me-2"></i>
                                Đặt vé nhanh chóng
                            </div>

                            <h1 class="mb-4">
                                Kết nối điểm đến<br>
                                nâng tầm trải nghiệm<br>
                                <span class="accent-text">Chạm là đi ngay</span>
                            </h1>

                            <p class="mb-4 mb-md-5">
                                Website đặt vé xe khách của chúng tôi giúp bạn đặt vé nhanh chóng và tiện lợi, với thông
                                tin minh bạch và lựa chọn đa dạng. Chỉ với vài thao tác, bạn có thể dễ dàng chọn chuyến
                                xe, giờ khởi hành và chỗ ngồi, đảm bảo một chuyến đi an toàn và thoải mái
                            </p>

                            <div class="hero-buttons">
                                <a href="#booking" class="btn btn-primary me-0 me-sm-2 mx-1">Đặt vé ngay</a>
                                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                    class="btn btn-link mt-2 mt-sm-0 glightbox">
                                    <i class="bi bi-play-circle me-1"></i>
                                    Play Video
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                            <img src="assets/img/illustration-1.webp" alt="Hero Image" class="img-fluid">

                            <div class="customers-badge">
                                <div class="customer-avatars">
                                    <img src="assets/img/avatar-1.webp" alt="Customer 1" class="avatar">
                                    <img src="assets/img/avatar-2.webp" alt="Customer 2" class="avatar">
                                    <img src="assets/img/avatar-3.webp" alt="Customer 3" class="avatar">
                                    <img src="assets/img/avatar-4.webp" alt="Customer 4" class="avatar">
                                    <img src="assets/img/avatar-5.webp" alt="Customer 5" class="avatar">
                                    <span class="avatar more">12+</span>
                                </div>
                                <p class="mb-0 mt-2">12,000+ khách hàng tin dùng</p>
                            </div>
                        </div>
                    </div>
                </div>


                @include('home.form-registration')

            </div>

        </section><!-- /Hero Section -->

        @include('home.connect-vexe247')

        @include('home.aboutus-vexe247')

        <!-- Clients Section -->
        <section id="clients" class="clients section">

            @include('home.client')

        </section>
        <!-- /Clients Section -->

        @include('home.introduction-booking')

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
