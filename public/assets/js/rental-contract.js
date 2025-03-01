$(document).ready(function () {
    const selectElementAddress = document.getElementById('select-vehicle');
    selectElementAddress.addEventListener('change', function () {
        const branchAddress = this.options[this.selectedIndex].dataset.branchAddress;
        document.getElementById('text-branch-address').textContent = 'Địa chỉ: '+ branchAddress;
    });
});

$(document).ready(function () {
    let now = new Date();
    let today = now.toISOString().slice(0, 16);

    $("#select-time-rend-start").attr("min", today);

    $("#select-time-rend-start, #select-time-rend-end").on("change", function () {
        let startTime = $("#select-time-rend-start").val();
        let endTime = $("#select-time-rend-end").val();

        if (startTime) {
            $("#select-time-rend-end").attr("min", startTime); 
        }

        if (startTime && endTime) {
            let start = new Date(startTime);
            let end = new Date(endTime);

            if (end <= start) {
                alert("Giờ kết thúc phải lớn hơn giờ bắt đầu!");
                $("#select-time-rend-end").val(""); 
                return;
            }

            let diffMinutes = (end - start) / (1000 * 60); 
            if (diffMinutes < 30) {
                // alert("Giờ kết thúc phải lớn hơn giờ bắt đầu ít nhất 30 phút!");
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Giờ kết thúc phải lớn hơn giờ bắt đầu ít nhất 30 phút!",
                    showConfirmButton: false,
                    timer: 1500
                });
                $("#select-time-rend-end").val("");
                return;
            }

            let hours = Math.floor(diffMinutes / 60);
            let minutes = diffMinutes % 60;
            $(".fw-bold.fs-6").text(`Tổng số giờ: ${hours} giờ ${minutes} phút`);
        }
    });
});