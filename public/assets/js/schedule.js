$(document).ready(function() {
    function loadRoutes() {
        var departureId = $('#address-from').val();
        var arrivalId = $('#address-to').val();
        var tableBody = $('#route-table-body');
        var alertMessage = $('#no-results-alert');

        tableBody.empty();
        alertMessage.hide();

        if (departureId) {
            $.ajax({
                url: '/schedule/findschedule',
                method: 'GET',
                data: { departure_id: departureId, arrival_id: arrivalId },
                success: function(response) {
                    if (response.length > 0) {
                        $.each(response, function(index, route) {
                            tableBody.append(`
                                <tr>
                                    <td class="align-middle">${route.departurepoint_name} - ${route.arrivalpoint_name}</td>
                                    <td class="align-middle">${route.type_vehicle_name}</td>
                                    <td class="align-middle">${route.total_km} Km</td>
                                    <td class="align-middle">${route.total_time} giờ</td>
                                    <td class="align-middle">${new Intl.NumberFormat().format(route.price)} VNĐ</td>
                                    <td class="align-middle">
                                        <a href="/reservation?route_schedule=${route.route_id}&route_name=${route.departurepoint_name}-${route.arrivalpoint_name}"
                                            class="border-0 badge rounded-pill bg-primary p-3 text-white">
                                            <i class="fa-solid fa-magnifying-glass"></i>&nbsp;Tìm chuyến xe
                                        </a>
                                    </td>
                                </tr>
                            `);
                        });
                    } else {
                        alertMessage.show();
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Lỗi khi lấy dữ liệu tuyến xe:", error);
                }
            });
        }
    }

    // Khi chọn "Điểm đi"
    $('#address-from').change(function() {
        var departureId = $(this).val();
        var arrivalPointsSelect = $('#address-to');

        arrivalPointsSelect.empty().append('<option value="">Chọn điểm đến</option>');

        if (departureId) {
            var arrivalPoints = $('#address-from option:selected').data('arrivalpoints');

            if (arrivalPoints && Array.isArray(arrivalPoints)) {
                $.each(arrivalPoints, function(index, arrivalPoint) {
                    arrivalPointsSelect.append(
                        $('<option>', {
                            value: arrivalPoint.arrivalpoint_id,
                            text: arrivalPoint.arrivalpoint_name
                        })
                    );
                });
            }

            loadRoutes();
        }
    });

    // Khi chọn "Điểm đến"
    $('#address-to').change(function() {
        loadRoutes();
    });
});