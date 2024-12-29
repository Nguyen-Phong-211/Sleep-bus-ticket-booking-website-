<div id="contact" class="contact">
    <div class="row stats-row gy-4 mt-5 p-4 contact-form" data-aos="fade-up" data-aos-delay="500">
        <form action="" method="post" class="" id="booking">
            <div class="row">
                <div class="col-lg-6 col-md-12 d-flex">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="direct" checked>
                        <label class="form-check-label">
                            Một chiều
                        </label>
                    </div>
                    <div class="form-check ms-4">
                        <input class="form-check-input" type="radio" name="direct">
                        <label class="form-check-label">
                            Khứ hồi
                        </label>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 text-end">
                    <a href="">Hướng dẫn mua vé</a>
                </div>
            </div>
    
            <div class="row mt-4">
                <div class="col-lg-6 col-md-12 d-flex justify-content-between">
                    <div class="d-flex flex-column flex-md-row w-100">
                        <div class="flex-fill col-md-5">
                            <label class="form-label">Điểm đi</label>
                            <select name="address-from" id="address-from" class="form-control">
                                <option value="">Chọn điểm đi</option>
                                @foreach ($departurePoints as $departurePoint)
                                    <option value="{{ $departurePoint['departurepoint_id'] }}">{{ $departurePoint['departurepoint_name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mx-3 mt-lg-4 mt-md-0">
                            <i class="fa-solid fa-arrows-left-right"></i>
                        </div>
                        <div class="flex-fill col-md-5">
                            <label class="form-label">Điểm đến</label>
                            <select name="address-to" id="address-to" class="form-control">
                                <option value="">Chọn điểm đến</option>
                                @foreach ($arrivalPoints as $arrivalPoint)
                                    <option value="{{ $arrivalPoint['arrivalpoint_id'] }}">{{ $arrivalPoint['arrivalpoint_name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-6 col-md-12 d-flex justify-content-between">
                    <div class="d-flex flex-column flex-md-row w-100">
                        <div class="flex-fill col-md-5">
                            <label class="form-label">Ngày đi</label>
                            <input type="date" class="form-control" name="date-start">
                        </div>

                        <div class="flex-fill col-md-5 ms-3">
                            <label class="form-label">Số vé</label>
                            <select name="number-ticket" id="custom-select" class="form-control custom-select">
                                <option value="">Chọn số vé</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
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

