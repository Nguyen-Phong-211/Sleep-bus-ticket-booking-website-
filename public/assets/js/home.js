$(document).ready(function() {
    $('#address-from').change(function() {
        var selectedDepartureId = $(this).val();
        var arrivalPointsSelect = $('#address-to');

        // Xóa các tùy chọn cũ và thêm tùy chọn mặc định
        arrivalPointsSelect.empty();
        arrivalPointsSelect.append('<option value="">Chọn điểm đến</option>');

        // Kiểm tra nếu có điểm đi được chọn
        if (selectedDepartureId) {
            var arrivalPoints = $('#address-from option:selected').data('arrivalpoints');

            // Kiểm tra dữ liệu arrivalPoints có tồn tại hay không
            if (arrivalPoints && Array.isArray(arrivalPoints)) {
                $.each(arrivalPoints, function(index, arrivalPoint) {
                    arrivalPointsSelect.append(
                        $('<option>', {
                            value: arrivalPoint.arrivalpoint_id,
                            text: arrivalPoint.arrivalpoint_name
                        })
                    );
                });
            } else {
                console.error("Dữ liệu arrivalpoints không hợp lệ:", arrivalPoints);
            }
        }
    });

    // Khi người dùng thay đổi điểm đến
    $('#address-to').change(function() {
        var selectedArrivalId = $(this).val();

        if (selectedArrivalId) {
            $('#address-from').addClass('readonly');
        } else {
            $('#address-from').removeClass('readonly');
        }
    });

    $('#booking').submit(function(e) {
        $('#address-from').prop('disabled', false);
    });
});


$(document).ready(function() {
    // Lấy ngày hôm nay
    var today = new Date();
    
    // Lấy năm, tháng, ngày hiện tại
    var yyyy = today.getFullYear();
    var mm = today.getMonth() + 1; // Tháng (bắt đầu từ 0)
    var dd = today.getDate();

    // Đảm bảo tháng và ngày có 2 chữ số
    if (mm < 10) {
        mm = '0' + mm;
    }
    if (dd < 10) {
        dd = '0' + dd;
    }

    // Định dạng ngày hôm nay cho thuộc tính min
    var todayDate = yyyy + '-' + mm + '-' + dd;

    // Tính ngày tối đa (3 tháng kể từ hôm nay)
    var maxDate = new Date(today);
    maxDate.setMonth(today.getMonth() + 3); // Thêm 3 tháng

    var maxyyyy = maxDate.getFullYear();
    var maxmm = maxDate.getMonth() + 1;
    var maxdd = maxDate.getDate();

    if (maxmm < 10) {
        maxmm = '0' + maxmm;
    }
    if (maxdd < 10) {
        maxdd = '0' + maxdd;
    }

    // Định dạng ngày tối đa cho thuộc tính max
    var maxDateFormatted = maxyyyy + '-' + maxmm + '-' + maxdd;

    // Gán giá trị cho input
    $('#date-start').attr('min', todayDate);  // Ngày bắt đầu từ hôm nay
    $('#date-start').attr('max', maxDateFormatted);  // Giới hạn 3 tháng tới

    // Không cho phép chọn năm
    $('#date-start').attr('onfocus', 'this.blur()');
});