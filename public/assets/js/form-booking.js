$(document).ready(function () {
    let selectedSeats = [];
    let seatPrice = 0;
    const transshipmentFee = 50000;

    // Cập nhật danh sách ghế ngồi
    $(".checkbox-select-seat").on("change", function () {
        let seatName = $(this).data("seat-number");
        if (!seatPrice) {
            seatPrice = parseFloat($(this).data("price"));
        }
        if ($(this).prop("checked")) {
            if (!selectedSeats.includes(seatName)) {
                selectedSeats.push(seatName);
            }
        } else {
            selectedSeats = selectedSeats.filter(seat => seat !== seatName);
        }
        updateSeatDisplay();
    });

    function updateSeatDisplay() {
        $("#seatNames").text(selectedSeats.join(","));
        $("input[name='seatName']").val(selectedSeats.join(","));
        
        let totalPrice = selectedSeats.length * seatPrice;
        $("#totalPrice").text(totalPrice.toLocaleString() + " đồng");
        $("#totalPriceInput").val(totalPrice);
        updateFinalTotal();
    }

    function updateFinalTotal() {
        let totalPrice = parseInt($("#totalPriceInput").val()) || 0;
        let otherFees = $("#trung-chuyen-2").prop("checked") ? transshipmentFee : 0;
        
        $("#otherFees").text(otherFees.toLocaleString() + " đồng");
        $("#otherFeesInput").val(otherFees);

        let finalTotal = totalPrice + otherFees;
        $("#finalTotal").text(finalTotal.toLocaleString() + " đồng");
        $("#finalTotalInput").val(finalTotal);
    }

    // Cập nhật điểm trả khách
    let arrivalPointObserver = new MutationObserver(function () {
        let newValue = $("#arrivalPoint").text().trim();
        $("input[name='arrivalPoint']").val(newValue);
    });
    arrivalPointObserver.observe($("#arrivalPoint")[0], { childList: true, subtree: true, characterData: true });

    // Cập nhật hình thức di chuyển
    let travelModeObserver = new MutationObserver(function () {
        let newValue = $("#travelMode").text().trim();
        $("#travelModeInput").val(newValue);
    });
    travelModeObserver.observe($("#travelMode")[0], { childList: true, subtree: true, characterData: true });

    // Cập nhật tổng tiền khi thay đổi điểm trả khách hoặc chọn trung chuyển
    $("input[name='diem-tra'], #trung-chuyen-2").on("change", function () {
        updateFinalTotal();
    });

    updateFinalTotal();

    // Kiểm tra trước khi submit
    $("#bookingForm").on("submit", function (event) {
        let seatName = $("input[name='seatName']").val().trim();
        if (!seatName) {
            event.preventDefault();
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "Vui lòng chọn ghế!",
                showConfirmButton: false,
                timer: 1500
            });
        }
    });
});