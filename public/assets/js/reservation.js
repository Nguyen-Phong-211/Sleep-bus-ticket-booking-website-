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
    $('#date-filter').attr('min', todayDate);  // Ngày bắt đầu từ hôm nay
    $('#date-filter').attr('max', maxDateFormatted);  // Giới hạn 3 tháng tới

    // Không cho phép chọn năm
    $('#date-filter').attr('onfocus', 'this.blur()');
});

document.getElementById('clear-filters-btn').addEventListener('click', function() {
    var form = document.getElementById('filters-form');
    form.reset(); 

    document.getElementById('price-range').value = '';

    var checkboxes = form.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
    });

    var selects = form.querySelectorAll('select');
    selects.forEach(function(select) {
        select.value = 'all'; 
    });

    window.location.href = window.location.pathname;
});