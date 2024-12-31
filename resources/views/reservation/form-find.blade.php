<div id="contact" class="contact container">
    <div class="row stats-row gy-4 mt-3 p-4 contact-form" data-aos="fade-up" data-aos-delay="200">
        <h2>Tìm kiếm vé xe</h2>
        <form action="{{ route('reservation.findRoute') }}" method="get" class="" id="booking">
            <div class="row">

                @if (isset($direct) && $direct == 1)
                    <div class="col-lg-6 col-md-12 d-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="direct" value="0">
                            <label class="form-check-label">
                                Một chiều
                            </label>
                        </div>
                        <div class="form-check ms-4">
                            <input class="form-check-input" type="radio" name="direct" value="1" checked>
                            <label class="form-check-label">
                                Khứ hồi
                            </label>
                        </div>
                    </div>
                @else 
                    <div class="col-lg-6 col-md-12 d-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="direct" value="0" checked>
                            <label class="form-check-label">
                                Một chiều
                            </label>
                        </div>
                        <div class="form-check ms-4">
                            <input class="form-check-input" type="radio" name="direct" value="1">
                            <label class="form-check-label">
                                Khứ hồi
                            </label>
                        </div>
                    </div>
                @endif

                <div class="col-lg-6 col-md-12 text-end">
                    <a href="">Hướng dẫn mua vé</a>
                </div>
            </div>
    
            <div class="row mt-4">
                <div class="col-lg-6 col-md-12 d-flex justify-content-between">
                    <div class="d-flex flex-column flex-md-row w-100">
                        <div class="flex-fill col-md-5">
                            <label class="form-label">Điểm đi</label>
                            <select name="address_from" id="address-from" class="form-control">
                                <option value="">Chọn điểm đi</option>
                                @foreach ($departurePoints as $departurePoint)
                                    @if (isset($departurePointId) && $departurePointId == $departurePoint['departurepoint_id'])
                                        <option value="{{ $departurePoint['departurepoint_id'] }}" selected
                                            data-arrivalpoints="{{ json_encode($departurePoint['arrivalpoints']) }}">
                                            {{ $departurePoint['departurepoint_name'] }}
                                        </option>
                                    @else
                                        <option value="{{ $departurePoint['departurepoint_id'] }}"
                                            data-arrivalpoints="{{ json_encode($departurePoint['arrivalpoints']) }}">
                                            {{ $departurePoint['departurepoint_name'] }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mx-3 mt-lg-4 mt-md-0">
                            <i class="fa-solid fa-arrows-left-right"></i>
                        </div>
                        <div class="flex-fill col-md-5">
                            <label class="form-label">Điểm đến</label>
                            <select name="address_to" id="address-to" class="form-control">
                                <option value="">Chọn điểm đến</option>
                                    @foreach ($arrivalPoints as $arrivalPoint)
                                        @if (isset($arrivalPointId) && $arrivalPointId == $arrivalPoint['arrivalpoint_id'])
                                            <option value="{{ $arrivalPoint['arrivalpoint_id'] }}" selected>{{ $arrivalPoint['arrivalpoint_name'] }}</option>
                                        @else
                                            <option value="{{ $arrivalPoint['arrivalpoint_id'] }}">{{ $arrivalPoint['arrivalpoint_name'] }}</option>
                                        @endif
                                    @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <script src="{{ asset('assets/js/home.js') }}"></script>
            
                <div class="col-lg-6 col-md-12 d-flex justify-content-between">
                    <div class="d-flex flex-column flex-md-row w-100">
                        <div class="flex-fill col-md-5">
                            <label class="form-label">Ngày đi</label>
                            @if (isset($departureDate))
                                <input type="date" class="form-control" name="date_start" value="{{ $departureDate }}" id="date-start">
                            @else
                                <input type="date" class="form-control" name="date_start" id="date-start">
                            @endif
                        </div>
                        <div class="flex-fill col-md-5 ms-3">
                            <label class="form-label">Số vé</label>
                            <select name="number_ticket" id="custom-select" class="form-control custom-select">
                                <option value="">Chọn số vé</option>
                                @foreach ([1, 2, 3, 4, 5] as $option)
                                    <option value="{{ $option }}" {{ isset($ticket) && $ticket == $option ? 'selected' : '' }}>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col text-center">
                    <button type="submit" class="btn"><i class="fa-solid fa-magnifying-glass-location"></i>TÌM CHUYẾN</button>
                </div>
            </div>
        </form>
    </div>
</div>