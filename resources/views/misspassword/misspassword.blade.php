<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Quên mật khẩu</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('cnd-css')
</head>

<body class="index-page">

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
                            <h3>VUI LÒNG ĐIỀN THÔNG TIN BÊN DƯỚI</h3>

                            <form action="{{ route('authu.forgotPassword') }}" method="post" class="mt-4" id="misspasswordForm" data-aos="fade-up" data-aos-delay="200">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-12 position-relative">
                                        <input type="email" class="form-control ps-5" id="emailMisspassword" name="emailMisspassword" value="{{ old('emailMisspassword') }}" placeholder="Nhập email">
                                        <i class="fa-solid fa-envelope position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                    </div>

                                    <div class="col-md-12 position-relative">
                                        <input type="password" id="passwordMisspassword" class="form-control ps-5" name="passwordMisspassword" placeholder="Mật khẩu" value="{{ old('passwordMisspassword') }}">
                                        <i class="fa-solid fa-key position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn">
                                            <i class="fa-solid fa-paper-plane"></i>ĐĂNG NHẬP
                                        </button>
                                    </div>
                                </div>
                            </form>
                            @if (session('error'))
                                <script>
                                    Swal.fire({
                                        position: "top-end",
                                        icon: "warning",
                                        title: "Email không tồn tại trong hệ thống!",
                                        showConfirmButton: false,
                                        timer: 1000
                                    });
                                </script>
                            @endif
                            <script>
                                document.getElementById('misspasswordForm').addEventListener('submit', function (event) {
                                    const email = document.getElementById("emailMisspassword").value.trim();
                                    const password = document.getElementById("passwordMisspassword").value.trim();
                                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                                    
                                    if (!email || !emailRegex.test(email)) {
                                        Swal.fire({
                                            position: "top-end",
                                            icon: "warning",
                                            title: "Vui lòng nhập email đúng định dạng",
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                        event.preventDefault();  
                                        return;
                                    }
                            
                                    if (password.length < 8) {
                                        Swal.fire({
                                            position: "top-end",
                                            icon: "warning",
                                            title: "Mật khẩu phải có ít nhất 8 ký tự",
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                        event.preventDefault(); 
                                        return;
                                    }
                            
                                    Swal.fire({
                                        title: "Đang gửi email...",
                                        html: "Vui lòng chờ trong giây lát.",
                                        timer: 3000,
                                        timerProgressBar: true,
                                        didOpen: () => {
                                            Swal.showLoading();  
                                        },
                                    }).then(() => {
                                        this.submit(); 
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    @include('cnd-js')

</body>

</html>
