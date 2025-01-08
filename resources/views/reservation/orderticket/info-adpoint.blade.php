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
                @foreach ($branches as $branch)
                    <option value="{{ $branch->branch_id }}" data-address="{{ $branch->address }}">{{ $branch->branch_name }}</option>
                @endforeach
            </select>
            <span id="address-branch">Địa chỉ: Vui lòng chọn điểm đón</span>
        </div>
        <script>
            function updateBranchAddress() {
                const selectElement = document.getElementById("diem-don-select");
                const selectedOption = selectElement.options[selectElement.selectedIndex];

                const address = selectedOption.getAttribute("data-address");

                const addressSpan = document.getElementById("address-branch");
                addressSpan.textContent = address ? `Địa chỉ: ${address}` : "Địa chỉ: Không có địa chỉ";
            }
        </script>
    </div>
    
    <div class="col-md-6 border-start p-3">
        <h5 class="mb-3">ĐIỂM TRẢ &nbsp;<i class="fa-solid fa-universal-access"></i></h5>
        <div class="d-flex mb-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="diem-tra" id="diem-tra">
                <label class="form-check-label" for="diem-tra">
                    Điểm trả
                </label>
            </div>
            <div class="form-check ms-3">
                <input class="form-check-input" type="radio" name="diem-tra" id="trung-chuyen-2">
                <label class="form-check-label" for="trung-chuyen-2">
                    Trung chuyển
                </label>
            </div>
        </div>

        <div class="mb-3">
            <select class="form-select custom-input" id="diem-tra-select" aria-label="Chọn điểm trả">
                <option selected>BX Miền Tây</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <p class="text-danger">Quý khách vui lòng có mặt tại <strong>Bến xe/Văn Phòng An Nhơn Trước 16:30 23/12/2024</strong> để được
            trung chuyển hoặc kiểm tra thông tin trước khi lên xe.</p>
    </div>
</div>