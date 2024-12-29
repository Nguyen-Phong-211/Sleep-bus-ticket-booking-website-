// login ajax
$(document).ready(function() {
    $('#loginForm').on('submit', function(e) {
        e.preventDefault();

        var numberPhone = $('#number_phoneLogin').val();
        var password = $('#passwordLogin').val();

        $.ajax({
            url: "{{ route('login.post') }}",
            method: 'POST',
            data: {
                number_phone: numberPhone,
                password: password,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response.status == 'success') {
                    window.location.href = response.redirect;
                }
            },
            error: function(xhr) {
                var errorMessage = xhr.responseJSON.message;

                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: errorMessage,
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
});