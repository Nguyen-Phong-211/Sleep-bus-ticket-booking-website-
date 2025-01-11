<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Liên hệ</title>
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
                timer: 2000
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
                    <div class="col-lg-5">
                        <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                            <h3>THÔNG TIN LIÊN HỆ</h3>
                            <p>Bạn có thể liên hệ với chúng tôi qua các thông tin sau.</p>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="content">
                                    <h4>Trụ sở</h4>
                                    <p>144 Phạm Ngũ Lão</p>
                                    <p>Phường 7, Quận Gò Vấp, TpHCM</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="content">
                                    <h4>Số điện thoại</h4>
                                    <a href="tel:0983982983">0983 982 983</a>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4>Địa chỉ email</h4>
                                    <a href="mailto:vexe247@gmail.com">vexe247@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                            <h3>FORM HỖ TRỢ LIÊN HỆ</h3>

                            <form action="{{ route('contact.store') }}" method="post" class="mt-4" data-aos="fade-up"
                                data-aos-delay="200" onsubmit="return showSendingAlert()">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-12 position-relative">
                                        <input type="email" name="emailContact" class="form-control ps-5"
                                            placeholder="Email" value="{{ Auth::check() ? Auth::user()->email : '' }}"
                                            @if (Auth::check()) disabled @endif>
                                        <i
                                            class="fa-solid fa-envelope position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                    </div>

                                    <div class="col-md-12 position-relative">
                                        <input type="text" class="form-control ps-5" name="number_phoneContact"
                                            placeholder="Số điện thoại"
                                            value="{{ Auth::check() ? Auth::user()->number_phone : '' }}"
                                            @if (Auth::check()) disabled @endif>
                                        <i
                                            class="fa-solid fa-phone position-absolute top-50 start-0 translate-middle-y ps-4"></i>
                                    </div>

                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" name="content" placeholder="Vui lòng nhập nội dung liên hệ"></textarea>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn"><i class="fa-solid fa-paper-plane"></i>
                                            GỬI</button>
                                    </div>
                                </div>
                            </form>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    @if (session('status') === 'success')
                                        Swal.fire({
                                            position: "top-end",
                                            icon: 'success',
                                            title: 'Thành công',
                                            text: '{{ session('message') }}',
                                            timer: 1500,
                                            showConfirmButton: false
                                        });
                                    @elseif (session('status') === 'error')
                                        Swal.fire({
                                            position: "top-end",
                                            icon: 'error',
                                            title: 'Lỗi',
                                            text: '{{ session('message') }}',
                                            timer: 1500,
                                            showConfirmButton: false
                                        });
                                    @endif
                                });

                                function showSendingAlert() {
                                    if (!validateForm()) {
                                        return false;
                                    }

                                    Swal.fire({
                                        title: "Đang gửi email...",
                                        html: "Vui lòng chờ trong giây lát.",
                                        timer: 0, 
                                        timerProgressBar: true,
                                        didOpen: () => {
                                            Swal.showLoading();
                                        },
                                        willClose: () => {
                                        }
                                    });

                                    return true; 
                                }

                                function validateForm() {
                                    var email = document.querySelector('input[name="emailContact"]').value;
                                    var phone = document.querySelector('input[name="number_phoneContact"]').value;
                                    var content = document.querySelector('textarea[name="content"]').value;

                                    if (!email || !phone || !content) {
                                        Swal.fire({
                                            position: "top-end",
                                            icon: "warning",
                                            title: "Vui lòng điền đủ thông tin!",
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                        return false;
                                    }
                                    return true;
                                }
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

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('cnd-js')

</body>

</html>
