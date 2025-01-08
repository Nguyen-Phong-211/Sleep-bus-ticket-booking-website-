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