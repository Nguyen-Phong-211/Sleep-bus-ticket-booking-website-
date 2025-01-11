<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tra cứu vé xe, hợp đồng, đơn giao hàng, thuê tài xế</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('cnd-css')
</head>

<body class="index-page">
    @include('loading')

    <header id="header" class="header d-flex align-items-center fixed-top">
        @include('menu')
    </header>

    <main class="main mt-5">

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4 g-lg-5">

                    <div class="col-lg-12">
                        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                            <h3>TRA CỨU VÉ, TRA CỨU HỢP ĐỒNG, TRA CỨU GIAO HÀNG, TRA CỨU TÀI XẾ</h3>

                            <form action="" method="post" class="mt-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="row gy-4">
                                    
                                    <div class="col-md-12 position-relative">
                                        <input type="text" class="form-control ps-5" name="number_phone" placeholder="Số điện thoại">
                                        <i class="fa-solid fa-phone position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                    </div>

                                    <div class="col-md-12 position-relative">
                                        <input type="text" class="form-control ps-5" name="id-ticket" placeholder="Nhập mã vé xe, mã hợp đồng, mã giao hàng, mã thuê tài xế">
                                        <i class="fa-brands fa-ideal position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                    </div>


                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn"><i class="fa-solid fa-paper-plane"></i>TRA CỨU</button>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Contact Section -->
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
