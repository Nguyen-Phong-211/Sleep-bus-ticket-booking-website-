document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll(".checkbox-select-seat");
    const maxSeats = 5;

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", function () {
            const selectedSeats = document.querySelectorAll(".checkbox-select-seat:checked").length;

            if (selectedSeats > maxSeats) {
                this.checked = false;
                Swal.fire({
                    position: "top-end",
                    icon: "warning",
                    title: "Chỉ chọn tối đa 5 ghế",
                    showConfirmButton: false,
                    timer: 1500,
                });
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.checkbox-select-seat').forEach(checkbox => {
        if (checkbox.checked) {
            checkbox.disabled = true;
        }
    });
});

function updateBranchAddress() {
    const selectElement = document.getElementById("diem-don-select");
    const selectedOption = selectElement.options[selectElement.selectedIndex];

    const address = selectedOption.getAttribute("data-address");

    const addressSpan = document.getElementById("address-branch");
    addressSpan.textContent = address ? `Địa chỉ: ${address}` : "Địa chỉ: Không có địa chỉ";
}

document.addEventListener("DOMContentLoaded", function () {
    updateBranchAddress();
});

// 
function getAddressArrivalpoint() {
    const selectElement = document.getElementById("diem-tra-select");
    const selectedOption = selectElement.options[selectElement.selectedIndex];

    const address = selectedOption.getAttribute("data-address");
    const name_main = selectedOption.getAttribute("data-name-main");

    const addressSpan = document.getElementById("address-arrivalpoint");
    const arrivalPoint = document.getElementById("arrivalPoint");

    arrivalPoint.textContent = name_main? `${name_main}` : "Không tồn tại";
    addressSpan.textContent = address ? `Địa chỉ: ${address}` : "Địa chỉ: Không có địa chỉ";
}

document.addEventListener("DOMContentLoaded", function () {
    getAddressArrivalpoint();
});

// 

// update travel mode
$(document).ready(function() {
    function updateTravelMode() {
        if ($('#trung-chuyen-2').prop('checked')) {
            $('#travelMode').text('Trung chuyển');  
        } else {
            $('#travelMode').text('Một chiều');  
        }
    }
    $('input[name="diem-tra"]').on('change', function() {
        updateTravelMode();
    });

    updateTravelMode();
});

// insert values into input tags
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        const seatNames = document.getElementById('seatNames').textContent.trim();
        const totalPrice = document.getElementById('totalPrice').textContent.trim().replace(/[^0-9]/g, ''); // Lấy số
        const otherFees = document.getElementById('otherFees').textContent.trim().replace(/[^0-9]/g, ''); // Lấy số
        const finalTotal = document.getElementById('finalTotal').textContent.trim().replace(/[^0-9]/g, ''); // Lấy số

        form.querySelector('input[name="seatNames"]').value = seatNames;
        form.querySelector('input[name="totalPrice"]').value = totalPrice;
        form.querySelector('input[name="otherFees"]').value = otherFees;
        form.querySelector('input[name="finalTotal"]').value = finalTotal;
    });
});

