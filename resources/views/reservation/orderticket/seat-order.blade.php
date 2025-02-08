@if (isset($_REQUEST['route_']))
    @if ($type_vehicle_id == 3)
        <ul class="list-group list-group-flush w-100">
            <div class="row row-cols-2 row-cols-md-3 g-3">
                @foreach ($displaySeats as $seat)
                    @if ($seat->type_vehicle_id == 3)
                        <div class="col-md-6">
                            @if ($seat->status == 0)
                                <div class="d-flex flex-column h-100">
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-top">
                                        <span>
                                            <i class="bi bi-bookmark-plus text-success icon-primary"></i>&nbsp;&nbsp;
                                            {{ $seat->seat_name }}
                                        </span>
                                        <div class="form-check">
                                            <input class="form-check-input checkbox-select-seat" type="checkbox" disabled
                                                data-seat-number="{{ $seat->seat_name }}"
                                                data-seatId="{{ $seat->seat_id }}"
                                                value="{{ $seat->seat_name }}" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Click để chọn ghế ngồi">
                                        </div>
                                    </li>
                                </div>
                            @else
                                <div class="d-flex flex-column h-100">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                        <span>
                                            <i class="bi bi-bookmark-x-fill text-danger icon-primary"></i>&nbsp;&nbsp;
                                            {{ $seat->seat_name }}
                                        </span>
                                        <div class="form-check">
                                            <input disabled class="form-check-input checkbox-select-seat select-success"
                                                type="checkbox" title="Ghế đã chọn" value="{{ $seat->seat_name }}">
                                        </div>
                                    </li>
                                </div>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="row mt-3">
                <img src="{{ asset('assets/img/general/so-do-ghe-tren-xe-khach.png') }}" alt="">
            </div>
        </ul>
    @else
        @php
            $seatsByFloor = $displaySeats->where('type_vehicle_id', $type_vehicle_id)->groupBy('floor_name');
        @endphp

        <div class="row">
            <div class="col-md-6">
                <h6>Tầng 2</h6>
                @if (isset($seatsByFloor['Tầng 2']))
                    <ul class="list-group list-group-flush w-100">
                        <div class="row row-cols-2 row-cols-md-3 g-3">
                            @foreach ($seatsByFloor['Tầng 2'] as $seat)
                                <div class="col-md-6">
                                    @if ($seat->status == 0)
                                        <div class="d-flex flex-column h-100">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                <span>
                                                    <i
                                                        class="bi bi-bookmark-plus text-success icon-primary"></i>&nbsp;&nbsp;
                                                    {{ $seat->seat_name }}
                                                </span>
                                                <div class="form-check">
                                                    <input class="form-check-input checkbox-select-seat" type="checkbox"
                                                    data-seat-number="{{ $seat->seat_name }}"
                                                    data-seatId="{{ $seat->seat_id }}"
                                                    value="{{ $seat->seat_name }}" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Click để chọn ghế ngồi">

                                                </div>
                                            </li>
                                        </div>
                                    @else
                                        <div class="d-flex flex-column h-100">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                <span>
                                                    <i
                                                        class="bi bi-bookmark-x-fill text-danger icon-primary"></i>&nbsp;&nbsp;
                                                    {{ $seat->seat_name }}
                                                </span>
                                                <div class="form-check">
                                                    <input disabled
                                                        class="form-check-input checkbox-select-seat select-success"
                                                        type="checkbox" title="Ghế đã chọn" value="{{ $seat->seat_name }}">
                                                </div>
                                            </li>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </ul>
                @else
                    <p>Không có ghế ở tầng này.</p>
                @endif
            </div>

            <div class="col-md-6">
                <h6>Tầng 1</h6>
                @if (isset($seatsByFloor['Tầng 1']))
                    <ul class="list-group list-group-flush w-100">
                        <div class="row row-cols-2 row-cols-md-3 g-3">
                            @foreach ($seatsByFloor['Tầng 1'] as $seat)
                                <div class="col-md-6">
                                    @if ($seat->status == 0)
                                        <div class="d-flex flex-column h-100">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                <span>
                                                    <i
                                                        class="bi bi-bookmark-plus text-success icon-primary"></i>&nbsp;&nbsp;
                                                    {{ $seat->seat_name }}
                                                </span>
                                                <div class="form-check">
                                                    <input class="form-check-input checkbox-select-seat" type="checkbox"
                                                    data-seat-number="{{ $seat->seat_name }}"
                                                    data-seatId="{{ $seat->seat_id }}"
                                                    value="{{ $seat->seat_name }}" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Click để chọn ghế ngồi">
                                                </div>
                                            </li>
                                        </div>
                                    @else
                                        <div class="d-flex flex-column h-100">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                <span>
                                                    <i
                                                        class="bi bi-bookmark-x-fill text-danger icon-primary"></i>&nbsp;&nbsp;
                                                    {{ $seat->seat_name }}
                                                </span>
                                                <div class="form-check">
                                                    <input disabled
                                                        class="form-check-input checkbox-select-seat select-success"
                                                        type="checkbox" title="Ghế đã chọn" value="{{ $seat->seat_name }}">
                                                </div>
                                            </li>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </ul>
                @else
                    <p>Không có ghế ở tầng này.</p>
                @endif
            </div>
        </div>

        @if ($type_vehicle_id == 1)
            <div class="row">
                <img src="{{ asset('assets/img/general/so-do-ghe-tren-xe-limousine.jpg') }}" alt=""
                    class="img-fluid" width="100%" height="300px">
            </div>
        @elseif ($type_vehicle_id == 2)
            <div class="row mt-3">
                <img src="{{ asset('assets/img/general/so-de-ghe-xe-giuong-nam.jpg') }}" alt="" class="img-fluid"
                    width="100%" height="200px">
            </div>
        @endif
    @endif
@else
    @if ($type_vehicle_id == 3)
        <ul class="list-group list-group-flush w-100">
            <div class="row row-cols-2 row-cols-md-3 g-3">
                @foreach ($displaySeats as $seat)
                    @if ($seat->type_vehicle_id == 3)
                        <div class="col-md-6">
                            @if ($seat->status == 0)
                                <div class="d-flex flex-column h-100">
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-top">
                                        <span>
                                            <i class="bi bi-bookmark-plus text-success icon-primary"></i>&nbsp;&nbsp;
                                            {{ $seat->seat_name }}
                                        </span>
                                        <div class="form-check">
                                            @php
                                                $seatNamesArray = explode(',', $seat_name);
                                            @endphp

                                            @if (in_array($seat->seat_name, $seatNamesArray))
                                                <input class="form-check-input checkbox-select-seat" type="checkbox"
                                                    checked data-seat-number="{{ $seat->seat_name }}"
                                                    data-seatId="{{ $seat->seat_id }}"
                                                    value="{{ $seat->seat_name }}" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Click để chọn ghế ngồi">
                                            @else
                                                <input class="form-check-input checkbox-select-seat" type="checkbox" disabled
                                                    data-seat-number="{{ $seat->seat_name }}"
                                                    data-seatId="{{ $seat->seat_id }}"
                                                    value="{{ $seat->seat_name }}" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Click để chọn ghế ngồi">
                                            @endif
                                        </div>
                                    </li>
                                </div>
                            @else
                                <div class="d-flex flex-column h-100">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                        <span>
                                            <i class="bi bi-bookmark-x-fill text-danger icon-primary"></i>&nbsp;&nbsp;
                                            {{ $seat->seat_name }}
                                        </span>
                                        <div class="form-check">
                                            <input disabled class="form-check-input checkbox-select-seat select-success"
                                                type="checkbox" title="Ghế đã chọn" value="{{ $seat->seat_name }}">
                                        </div>
                                    </li>
                                </div>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="row mt-3">
                <img src="{{ asset('assets/img/general/so-do-ghe-tren-xe-khach.png') }}" alt="">
            </div>
        </ul>
    @else
        @php
            $seatsByFloor = $displaySeats->where('type_vehicle_id', $type_vehicle_id)->groupBy('floor_name');
        @endphp

        <div class="row">
            <div class="col-md-6">
                <h6>Tầng 2</h6>
                @if (isset($seatsByFloor['Tầng 2']))
                    <ul class="list-group list-group-flush w-100">
                        <div class="row row-cols-2 row-cols-md-3 g-3">
                            @foreach ($seatsByFloor['Tầng 2'] as $seat)
                                <div class="col-md-6">
                                    @if ($seat->status == 0)
                                        <div class="d-flex flex-column h-100">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                <span>
                                                    <i
                                                        class="bi bi-bookmark-plus text-success icon-primary"></i>&nbsp;&nbsp;
                                                    {{ $seat->seat_name }}
                                                </span>
                                                <div class="form-check">
                                                    @php
                                                        $seatNamesArray = explode(',', $seat_name);
                                                    @endphp

                                                    @if (in_array($seat->seat_name, $seatNamesArray))
                                                        <input class="form-check-input checkbox-select-seat" type="checkbox"
                                                            checked data-seat-number="{{ $seat->seat_name }}"
                                                            data-seatId="{{ $seat->seat_id }}"
                                                            value="{{ $seat->seat_name }}" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Click để chọn ghế ngồi">
                                                    @else
                                                        <input class="form-check-input checkbox-select-seat" type="checkbox" disabled
                                                            data-seat-number="{{ $seat->seat_name }}"
                                                            data-seatId="{{ $seat->seat_id }}"
                                                            value="{{ $seat->seat_name }}" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Click để chọn ghế ngồi">
                                                    @endif

                                                </div>
                                            </li>
                                        </div>
                                    @else
                                        <div class="d-flex flex-column h-100">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                <span>
                                                    <i
                                                        class="bi bi-bookmark-x-fill text-danger icon-primary"></i>&nbsp;&nbsp;
                                                    {{ $seat->seat_name }}
                                                </span>
                                                <div class="form-check">
                                                    <input disabled
                                                        class="form-check-input checkbox-select-seat select-success"
                                                        type="checkbox" title="Ghế đã chọn" value="{{ $seat->seat_name }}">
                                                </div>
                                            </li>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </ul>
                @else
                    <p>Không có ghế ở tầng này.</p>
                @endif
            </div>

            <div class="col-md-6">
                <h6>Tầng 1</h6>
                @if (isset($seatsByFloor['Tầng 1']))
                    <ul class="list-group list-group-flush w-100">
                        <div class="row row-cols-2 row-cols-md-3 g-3">
                            @foreach ($seatsByFloor['Tầng 1'] as $seat)
                                <div class="col-md-6">
                                    @if ($seat->status == 0)
                                        <div class="d-flex flex-column h-100">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                <span>
                                                    <i
                                                        class="bi bi-bookmark-plus text-success icon-primary"></i>&nbsp;&nbsp;
                                                    {{ $seat->seat_name }}
                                                </span>
                                                <div class="form-check">
                                                    @php
                                                        $seatNamesArray = explode(',', $seat_name);
                                                    @endphp

                                                    @if (in_array($seat->seat_name, $seatNamesArray))
                                                        <input class="form-check-input checkbox-select-seat" type="checkbox"
                                                            checked data-seat-number="{{ $seat->seat_name }}"
                                                            data-seatId="{{ $seat->seat_id }}"
                                                            value="{{ $seat->seat_name }}" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Click để chọn ghế ngồi">
                                                    @else
                                                        <input class="form-check-input checkbox-select-seat" type="checkbox" disabled
                                                            data-seat-number="{{ $seat->seat_name }}"
                                                            data-seatId="{{ $seat->seat_id }}"
                                                            value="{{ $seat->seat_name }}" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Click để chọn ghế ngồi">
                                                    @endif
                                                </div>
                                            </li>
                                        </div>
                                    @else
                                        <div class="d-flex flex-column h-100">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center border-top">
                                                <span>
                                                    <i
                                                        class="bi bi-bookmark-x-fill text-danger icon-primary"></i>&nbsp;&nbsp;
                                                    {{ $seat->seat_name }}
                                                </span>
                                                <div class="form-check">
                                                    <input disabled
                                                        class="form-check-input checkbox-select-seat select-success"
                                                        type="checkbox" title="Ghế đã chọn" value="{{ $seat->seat_name }}">
                                                </div>
                                            </li>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </ul>
                @else
                    <p>Không có ghế ở tầng này.</p>
                @endif
            </div>
        </div>

        @if ($type_vehicle_id == 1)
            <div class="row">
                <img src="{{ asset('assets/img/general/so-do-ghe-tren-xe-limousine.jpg') }}" alt=""
                    class="img-fluid" width="100%" height="300px">
            </div>
        @elseif ($type_vehicle_id == 2)
            <div class="row mt-3">
                <img src="{{ asset('assets/img/general/so-de-ghe-xe-giuong-nam.jpg') }}" alt="" class="img-fluid"
                    width="100%" height="200px">
            </div>
        @endif
    @endif
@endif