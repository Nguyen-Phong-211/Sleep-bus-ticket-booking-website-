<div class="col-lg-4 filter-form light-background" data-aos="fade-up" data-aos-delay="200">
    <div class="p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="m-0"><i class="bi bi-filter-left"></i> Bộ lọc</h3>
            <button type="button" class="badge bg-warning border-0" id="clear-filters-btn">
                <i class="fa-solid fa-trash"></i>&nbsp; Xoá bộ lọc
            </button>
        </div>

        <form id="filter-form" action="{{ route('reservation.findRouteByPrice') }}" method="get">
            <div class="mb-3">
                <label for="price-range" class="form-label">Giá vé</label> <br>
                <div class="input-group">
                    <input type="text" id="price-range" name="price_range" class="form-control"
                        placeholder="Nhập giá vé mong muốn" aria-describedby="basic-addon2" 
                        value="{{ request()->get('price_range', old('price_range')) }}">
                    <button type="submit" class="btn btn-primary input-group-text border-0" id="basic-addon2">Áp dụng</button>
                </div>
            </div>
        </form>

        <script src="{{ asset('assets/js/home.js') }}"></script>

        <form action="{{ route('reservation.filterRoutes') }}" method="get" id="filters-form">
            <div class="mb-3 mt-3">
                <label for="date-filter" class="form-label">Ngày đi</label>
                <input type="date" class="form-control" name="date_filter" id="date-filter" value="{{ old('date_filter', request()->get('date_filter')) }}">
            </div>
    
            <script src="{{ asset('assets/js/reservation.js') }}"></script>
            <div class="mb-3">
                <label for="vehicle-type" class="form-label">Loại xe</label>
                <select id="vehicle-type" name="vehicle_type" class="form-select">
                    <option value="all" {{ old('vehicle_type', request()->get('vehicle_type')) == 'all' ? 'selected' : '' }}>Chọn loại xe</option>
                    @foreach ($typeVehicles as $typeVehicle)
                        <option value="{{ $typeVehicle->type_vehicle_id }}" 
                            {{ old('vehicle_type', request()->get('vehicle_type')) == $typeVehicle->type_vehicle_id ? 'selected' : '' }}>
                            {{ $typeVehicle->type_vehicle_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label for="sit-type" class="form-label">Hàng ghế</label>
                <select id="sit-type" name="sit_type" class="form-select">
                    <option value="all" {{ old('sit_type', request()->get('sit_type')) == 'all' ? 'selected' : '' }}>Chọn hàng ghế</option>
                    @foreach ($rowSeats as $rowSeat)
                        <option value="{{ $rowSeat->row_seat_id }}" 
                            {{ old('sit_type', request()->get('sit_type')) == $rowSeat->row_seat_id ? 'selected' : '' }}>
                            {{ $rowSeat->row_seat_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="floor-type" class="form-label">Tầng</label>
                <select id="floor-type" name="floor_type" class="form-select">
                    <option value="all" {{ old('floor_type', request()->get('floor_type')) == 'all' ? 'selected' : '' }}>Chọn tầng</option>
                    @foreach ($floors as $floor)
                        <option value="{{ $floor->floor_id }}" 
                            {{ old('floor_type', request()->get('floor_type')) == $floor->floor_id ? 'selected' : '' }}>
                            {{ $floor->floor_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Giờ khởi hành</label>
                @foreach ($typeTimes as $typeTime)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $typeTime->type_time_id }}" name="time_filters[]"
                            id="flexCheckDefault{{ $typeTime->type_time_id }}"
                            {{ is_array(old('time_filters', request()->get('time_filters'))) && in_array($typeTime->type_time_id, old('time_filters', request()->get('time_filters'))) ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexCheckDefault{{ $typeTime->type_time_id }}">
                            {{ $typeTime->type_time_name }} (0)
                        </label>
                    </div>
                @endforeach
            </div>
            <button type="submit"
                class="btn btn-primary w-100 border-0 mt-4 text-uppercase d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-magnifying-glass"></i>&nbsp;Áp dụng
            </button>
        </form>
    </div>
</div>


