<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OTP Verification</title>
    @include('cnd-css')
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/authu.css') }}">
</head>

<body>
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
    <div class="col-lg-4 mx-auto" id="container">
        <header>
            <i class="bx bxs-check-shield"></i>
        </header>
        <h4>Nhập mã xác thực</h4>
        <form action="" method="post">
            @csrf
            <div class="input-field">
                <input type="number" name="otp1" maxlength="1" required/>
                <input type="number" name="otp2" maxlength="1" required disabled/>
                <input type="number" name="otp3" maxlength="1" required disabled/>
                <input type="number" name="otp4" maxlength="1" required disabled/>
                <input type="number" name="otp5" maxlength="1" required disabled/>
                <input type="number" name="otp6" maxlength="1" required disabled/>
            </div>
            <p id="countdown-container-misspassword" class="mt-3">
                Mã có hiệu lực trong vòng <span id="countdown-misspassword">60</span> giây
            </p>
            <button type="submit"  class="btn btn-primary" name="btn-authu">Xác thực</button>
        </form>
    </div>

    <script src="{{ asset('assets/js/misspassword.js') }}"></script>
</body>

</html>
