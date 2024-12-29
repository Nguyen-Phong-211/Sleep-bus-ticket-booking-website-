document.getElementById("signupForm").addEventListener("submit", function(event) {
    event.preventDefault(); 

    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("number_phone").value.trim();
    const password = document.getElementById("password").value.trim();
    const passwordConfirmation = document.getElementById("password_confirmation").value.trim();

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email || !emailRegex.test(email)) {
        Swal.fire({
            position: "top-end",
            icon: "warning",
            title: "Vui lòng nhập email đúng định dạng",
            showConfirmButton: false,
            timer: 1000
        });
        return;
    }

    const phoneRegex = /^\d{10}$/; 
    if (!phone || !phoneRegex.test(phone)) {
        Swal.fire({
            position: "top-end",
            icon: "warning",
            title: "Số điện thoại phải là 10 chữ số",
            showConfirmButton: false,
            timer: 1000
        });
        return;
    }

    if (!password || password.length < 8) {
        Swal.fire({
            position: "top-end",
            icon: "warning",
            title: "Mật khẩu phải có ít nhất 8 ký tự",
            showConfirmButton: false,
            timer: 1500
        });
        return;
    }

    if (password !== passwordConfirmation) {
        Swal.fire({
            position: "top-end",
            icon: "warning",
            title: "Mật khẩu xác nhận không khớp",
            showConfirmButton: false,
            timer: 1000
        });
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