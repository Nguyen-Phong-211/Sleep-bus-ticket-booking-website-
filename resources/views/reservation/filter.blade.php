<div class="col-lg-4 filter-form light-background" data-aos="fade-up" data-aos-delay="500">
    <div class="p-4">
        <h3><i class="bi bi-filter-left"></i> Bộ lọc</h3>
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="price-range" class="form-label">Giá vé</label> <br>
                <div class="input-group">
                    <input type="text" id="price-range" name="price-range" class="form-control"
                        placeholder="Nhập giá vé" aria-describedby="basic-addon2">
                    <button type="submit" class="btn btn-primary input-group-text border-0" id="basic-addon2">Áp
                        dụng</button>
                </div>
            </div>
        </form>
        <script src="{{ asset('assets/js/home.js') }}"></script>
        <div class="mb-3 mt-3">
            <label for="date-range" class="form-label">Ngày đi</label>
            {{-- <input type="date" id="date-range" name="date-range" class="form-control"> --}}
            <input type="date" class="form-control" name="date-start" id="date-start">
        </div>
        <div class="mb-3">
            <label for="vehicle-type" class="form-label">Loại xe</label>
            <select id="vehicle-type" name="vehicle-type" class="form-select">
                <option value="all">Chọn loại xe</option>
                @foreach ($typeVehicles as $typeVehicle)
                    <option value="{{ $typeVehicle->type_vehicle_id }}">{{ $typeVehicle->type_vehicle_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="sit-type" class="form-label">Hàng ghế</label>
            <select id="sit-type" name="sit-type" class="form-select">
                <option value="all">Chọn hàng ghế</option>
                @foreach ($rowSeats as $rowSeat)
                    <option value="{{ $rowSeat->row_seat_id }}">{{ $rowSeat->row_seat_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="floor-type" class="form-label">Tầng</label>
            <select id="floor-type" name="floor-type" class="form-select">
                <option value="all">Chọn tầng</option>
                @foreach ($floors as $floor)
                    <option value="{{ $floor->floor_id }}">{{ $floor->floor_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Giờ khởi hành</label>
            @foreach ($typeTimes as $typeTime)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $typeTime->type_time_id }}"
                        id="flexCheckDefault{{ $typeTime->type_time_id }}">
                    <label class="form-check-label" for="flexCheckDefault{{ $typeTime->type_time_id }}">
                        {{ $typeTime->type_time_name }} (0)
                    </label>
                </div>
            @endforeach
        </div>
        <button type="submit"
            class="btn btn-primary w-100 border-0 mt-4 text-uppercase d-flex justify-content-center align-items-center">
            <i class="bi bi-trash3"></i>&nbsp;Xoá bộ lọc
        </button>
    </div>
</div>
