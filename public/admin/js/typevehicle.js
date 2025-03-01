$(document).ready(function () {
    $('#image_vehicle').change(function (event) {
        var input = event.target;
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result).show();
            };

            reader.readAsDataURL(input.files[0]); 
        }
    });
});

$(document).ready(function () {
    $("#filterSTT, #filterMaLoai, #filterTenLoai, #filterMaxGhe").on("change", function () {
        filterTable();
    });

    function filterTable() {
        var rowCount = 0; 

        $("#multi-filter-select tbody tr").each(function () {
            var stt = $("#filterSTT").val();
            var maLoai = $("#filterMaLoai").val();
            var tenLoai = $("#filterTenLoai").val();
            var maxGhe = $("#filterMaxGhe").val();

            var rowSTT = $(this).find("td:nth-child(1)").text().trim();
            var rowMaLoai = $(this).find("td:nth-child(2)").text().trim();
            var rowTenLoai = $(this).find("td:nth-child(3)").text().trim();
            var rowMaxGhe = $(this).find("td:nth-child(4)").text().trim();

            if (
                (stt === "" || rowSTT === stt) &&
                (maLoai === "" || rowMaLoai === maLoai) &&
                (tenLoai === "" || rowTenLoai === tenLoai) &&
                (maxGhe === "" || rowMaxGhe === maxGhe)
            ) {
                $(this).show();
                rowCount++; 
            } else {
                $(this).hide();
            }
        });

        if (rowCount === 0) {
            $("#noDataAlert").show();
            $("#tfoot-table").hide();
        } else {
            $("#noDataAlert").hide();
        }
    }
});