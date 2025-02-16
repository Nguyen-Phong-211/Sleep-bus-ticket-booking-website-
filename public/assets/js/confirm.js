$(document).ready(function () {
    // Attach click event to the download button
    $("#downloadInvoiceBtn").on("click", function (event) {
        event.preventDefault(); // Prevent default button action

        var $downloadButton = $("#downloadInvoiceBtn");
        var qrCodeValue = $("#code-image-qrcode").text(); // Get the QR code value

        $downloadButton.hide(); // Hide the download button

        // Convert the invoice section to an image using html2canvas
        html2canvas($("#convert-image-invoice")[0], {
            scrollX: 0,
            scrollY: -window.scrollY,
            useCORS: true, // Enable cross-origin resource sharing
            backgroundColor: "#ffffff" // Set background color to white
        }).then(function (canvas) {
            var imageData = canvas.toDataURL("image/png"); // Convert canvas to image data
            var $link = $("#downloadLink");

            $link.attr("href", imageData); // Set the image as download link
            $link.attr("download", "invoice.png"); // Set the file name
            $link.show();
            $link[0].click(); // Trigger the download

            $("#convert-image-invoice").submit(); // Submit the form
        });
    });
});

$(document).ready(function () {
    $("#convert-image-invoice").submit(function (event) {
        event.preventDefault(); 

        Swal.fire({
            title: "Đang xử lý...",
            html: "Vui lòng chờ trong giây lát.",
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        var formData = new FormData(this); 

        $.ajax({
            url: $(this).attr("action"), 
            type: $(this).attr("method"), 
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.success) {
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Đặt vé thành công!",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location.href = response.redirect; 
                    });
                } else {
                    Swal.fire({
                        title: "Lỗi!",
                        text: "Có lỗi xảy ra trong quá trình xử lý.",
                        icon: "error",
                        confirmButtonText: "Thử lại"
                    });
                }
            },
            error: function () {
                Swal.fire({
                    title: "Lỗi!",
                    text: "Không thể hoàn tất đặt vé. Vui lòng thử lại.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    });
});
