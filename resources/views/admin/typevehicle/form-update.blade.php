<div class="modal fade" id="typeVehicle{{ $typeVehicle->type_vehicle_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM THAY ĐỔI THÔNG TIN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <div class="mb-3">
                        <p class=""><strong>Mã thao tác</strong>: {{ Str::uuid7() }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Tên loại phương tiện:</label>
                        <input type="text" class="form-control" name="nameTypeVehicle" placeholder="Tên loại phương tiện" value="{{ $typeVehicle->type_vehicle_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Max chỗ ngồi:</label>
                        <input type="text" class="form-control" name="maxSeat" placeholder="Tên loại phương tiện" value="{{ $typeVehicle->max_seat }}">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-success">Lưu thay đổi</button>
                </div>
            </div>
        </form>
    </div>
</div>