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
    $('#date-filter').attr('min', todayDate);  
    $('#date-filter').attr('max', maxDateFormatted);  

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

// Xử lý việc chọn ghế, tính tổng tiền
$(document).ready(function() {
    const maxSeats = 5;  
    let selectedSeats = 0;
    let selectedSeatNames = [];
    let selectedSeatIds = [];  

    // Hàm cập nhật tổng tiền và ghế đã chọn
    function updateTotalPrice(routeId) {
        const pricePerSeat = parseInt($('#total-price' + routeId).data('price'), 10); 

        if (isNaN(pricePerSeat)) {
            console.error("Giá vé không hợp lệ");
            return;
        }

        const totalPrice = selectedSeats * pricePerSeat;

        if (isNaN(totalPrice) || totalPrice < 0) {
            console.error("Tổng tiền không hợp lệ");
            return;
        }

        $('#total-price' + routeId).text(`Tổng tiền: ${new Intl.NumberFormat().format(totalPrice)} đồng`);

        const seatText = selectedSeats === 1 
            ? `1 vé: ${selectedSeatNames.join(', ')}`
            : `${selectedSeats} vé: ${selectedSeatNames.join(', ')}`;
        $('#selected-seats' + routeId).text(seatText);

        // Cập nhật các giá trị vào các input ẩn
        $('#selected-seats-count' + routeId).val(selectedSeats);  
        $('#total-price-value' + routeId).val(totalPrice); 
        $(`#selected-seats-name${routeId}`).val(selectedSeatNames.join(','));
        $('#selected-seats-id' + routeId).val(selectedSeatIds.join(','));
    }

    // Xử lý sự kiện khi checkbox thay đổi
    $('.checkbox-select-seat').on('change', function(event) {
        const $checkbox = $(this);
        const seatName = $checkbox.data('seat-number');  
        const seatId = $checkbox.data('seatId');        
        const routeId = $checkbox.data('route-id');     

        if ($checkbox.is(':checked')) {
            if (selectedSeats < maxSeats) {
                selectedSeats++;
                selectedSeatNames.push(seatName);
                selectedSeatIds.push(seatId); 
            } else {
                Swal.fire({
                    position: "top-end",
                    icon: "warning",
                    title: "Chỉ chọn tối đa 5 ghế",
                    showConfirmButton: false,
                    timer: 2000,
                });
                $checkbox.prop('checked', false); 
                return;
            }
        } else {
            // Nếu ghế bị bỏ chọn
            selectedSeats--;
            selectedSeatNames = selectedSeatNames.filter(name => name !== seatName);
            selectedSeatIds = selectedSeatIds.filter(id => id !== seatId);  
        }

        // Cập nhật tổng tiền và danh sách ghế
        updateTotalPrice(routeId);
    });
});
