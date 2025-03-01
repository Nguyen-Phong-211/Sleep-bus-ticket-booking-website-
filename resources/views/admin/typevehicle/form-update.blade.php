<div class="modal fade" id="typeVehicle{{ $typeVehicle->type_vehicle_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.typevehicle.update', ['id' => $typeVehicle->type_vehicle_id, 'tid' => Str::uuid7()]) }}" method="post">
            @csrf
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM THAY ĐỔI THÔNG TIN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Mã thao tác:</label>
                        <input type="text" disabled class="form-control input-custom" name="" value="{{ Str::uuid7() }}">
                        <input type="hidden" name="code_" value="{{ Str::uuid7() }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Tên loại phương tiện:</label>
                        <input type="text" class="form-control input-custom" name="nameTypeVehicle" placeholder="Tên loại phương tiện" value="{{ $typeVehicle->type_vehicle_name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Max chỗ ngồi:</label>
                        <input type="text" class="form-control input-custom" name="maxSeat" placeholder="Tên loại phương tiện" value="{{ $typeVehicle->max_seat }}">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i>&nbsp; Đóng</button>
                    <button type="submit" class="btn btn-success"><i class="bi bi-floppy"></i>&nbsp; Lưu thay đổi</button>
                </div>
            </div>
        </form>
    </div>
</div>