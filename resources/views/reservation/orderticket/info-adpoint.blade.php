<div class="row mb-3">
    <h4 class="text-center text-uppercase mb-3">Thông tin đón trả &nbsp;<i class="fa-solid fa-location-dot"></i></h4>
    <div class="col-md-6 p-3">
        <h5 class="mb-3">ĐIỂM ĐÓN &nbsp;<i class="fa-solid fa-universal-access"></i></h5>
        <div class="d-flex mb-3">
            @foreach ($info_departures as $info_departure)
                @if ($info_departure->one_way == 1 && $info_departure->transshipment == 0)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="diem-don" id="diem-don" checked>
                        <label class="form-check-label" for="diem-don">
                            Điểm đón
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="radio" name="diem-don" id="trung-chuyen" disabled> 
                        <label class="form-check-label" for="trung-chuyen">
                            Trung chuyển
                        </label>
                    </div>
                @elseif ($info_departure->one_way == 1 && $info_departure->transshipment == 1)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="diem-don" id="diem-don">
                        <label class="form-check-label" for="diem-don">
                            Điểm đón
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="radio" name="diem-don" id="trung-chuyen"> 
                        <label class="form-check-label" for="trung-chuyen">
                            Trung chuyển
                        </label>
                    </div>
                @else
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="diem-don" id="diem-don" checked>
                        <label class="form-check-label" for="diem-don">
                            Điểm đón
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="radio" name="diem-don" id="trung-chuyen" disabled> 
                        <label class="form-check-label" for="trung-chuyen">
                            Trung chuyển
                        </label>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="mb-3">
            <select class="form-select custom-input mb-3" id="diem-don-select" aria-label="Chọn điểm đón" onchange="updateBranchAddress()">
                @foreach ($info_departures as $info_departure)
                    <option value="{{ $info_departure->branch_id }}" data-address="{{ $info_departure->address }}">{{ $info_departure->branch_name }}</option>
                @endforeach
            </select>
            <span id="address-branch">Địa chỉ: Vui lòng chọn điểm đón</span>
        </div>    
    </div>
    
    <div class="col-md-6 border-start p-3">
        <h5 class="mb-3">ĐIỂM TRẢ &nbsp;<i class="fa-solid fa-universal-access"></i></h5>
        <div class="d-flex mb-3">
            @foreach ($info_arrivalpoints as $info_arrivalpoint)
                @if ($info_arrivalpoint->one_way == 1 && $info_arrivalpoint->transshipment == 0)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="diem-tra" id="diem-tra" checked>
                        <label class="form-check-label" for="diem-tra">
                            Điểm trả
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input disabled class="form-check-input" type="radio" name="diem-tra" id="trung-chuyen-2">
                        <label class="form-check-label" for="trung-chuyen-2">
                            Trung chuyển
                        </label>
                    </div>
                @elseif ($info_arrivalpoint->one_way == 1 && $info_arrivalpoint->transshipment == 1)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="diem-tra" id="diem-tra">
                        <label class="form-check-label" for="diem-tra">
                            Điểm trả
                        </label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="radio" name="diem-tra" id="trung-chuyen-2" checked>
                        <label class="form-check-label" for="trung-chuyen-2">
                            Trung chuyển
                        </label>
                    </div>
                @endif
            @endforeach
            
        </div>

        <div class="mb-3">
            <select class="form-select custom-input mb-3" id="diem-tra-select" aria-label="Chọn điểm trả" onchange="getAddressArrivalpoint()">
                @foreach ($info_arrivalpoints as $info_arrivalpoint)
                    <option value="{{ $info_arrivalpoint->branch_id }}" data-address="{{ $info_arrivalpoint->address }}" data-name-main="{{ $info_arrivalpoint->branch_name }}">{{ $info_arrivalpoint->branch_name }}</option>
                    <option value="{{ $info_arrivalpoint->route_detail_id }}" data-address="{{ $info_arrivalpoint->detail_address_point1 }}" data-name-main="{{ $info_arrivalpoint->point_route1 }}">{{ $info_arrivalpoint->point_route1 }}</option>
                    <option value="{{ $info_arrivalpoint->route_detail_id }}" data-address="{{ $info_arrivalpoint->detail_address_point2 }}" data-name-main="{{ $info_arrivalpoint->point_route2 }}">{{ $info_arrivalpoint->point_route2 }}</option>
                    <option value="{{ $info_arrivalpoint->route_detail_id }}" data-address="{{ $info_arrivalpoint->detail_address_point3 }}" data-name-main="{{ $info_arrivalpoint->point_route3 }}">{{ $info_arrivalpoint->point_route3 }}</option>
                @endforeach
            </select>
            <span id="address-arrivalpoint">Địa chỉ: Vui lòng chọn điểm đón</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <p class="text-danger">Quý khách vui lòng có mặt tại 
            <strong>
                @foreach ($info_departures as $info_departure)
                    {{ $info_departure->departure_time }} {{ date('d/m/Y', strtotime($info_departure->departure_date)) }}
                @endforeach  
            </strong> để được trung chuyển hoặc kiểm tra thông tin trước khi lên xe.</p>
    </div>
</div>