<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Đặt vé thành công</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('cnd-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="index-page" style="background-color: #f3f9fe">

    <header id="header" class="header d-flex align-items-center fixed-top">
        @include('menu')
    </header>

    <main class="main mt-5">

        <section class="d-flex justify-content-center align-items-center" style="background-color: #f3f9fe;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card border-0 rounded-3 shadow-sm p-4 text-center mt-5">
                            <i class="fas fa-check-circle text-success display-3 mb-3"></i>
                            <h1 class="display-5 text-success fw-bold">Đặt Vé Thành Công!</h1>
                            <p class="lead">
                                Cảm ơn bạn đã đặt vé xe. Nếu có bất cứ thắc mắc nào vui lòng liên hệ với số điện thoại <strong>0983 982 983</strong>
                            </p>

                            <div class="text-center">
                                <a href="{{ route('home.index') }}" class="btn btn-custom" style="width: max-content;">
                                    <i class="fas fa-home"></i> Quay về trang chủ
                                </a>
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
