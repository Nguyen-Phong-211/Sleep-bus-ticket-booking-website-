<hr>
<div class="d-flex justify-content-evenly mb-3">
    <div>
        <p class="font-monospace fs-6">
            <i class="bi bi-bookmark-x-fill text-danger icon-primary"></i>
            Đã đặt
        </p>
    </div>
    <div>
        <p class="font-monospace fs-6">
            <i class="bi bi-bookmark-plus text-success icon-primary"></i> Còn trống
        </p>
    </div>
</div>

<div class="container-sm">
    <h5>Chọn ghế</h5>

    @if ($route->type_vehicle_id == 3)
        <ul class="list-group list-group-flush w-100">
            <div class="row row-cols-2 row-cols-md-3 g-3">
                @foreach ($displaySeats as $seat)
                    @if ($seat->type_vehicle_id == 3)
                        <div class="col-md-6">
                            @if ($seat->status == 0)
                                <div class="d-flex flex-column h-100">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-top">
                                        <span>
                                            <i class="bi bi-bookmark-plus text-success icon-primary"></i>&nbsp;&nbsp;
                                            {{ $seat->seat_name }}
                                        </span>
                                        <div class="form-check">
                                            <input class="form-check-input checkbox-select-seat" type="checkbox"
                                                data-seat-price="{{ $route->price }}"
                                                data-seat-number="{{ $seat->seat_name }}"
                                                data-seatId="{{ $seat->seat_id }}"
                                                data-route-id="{{ $route->route_id }}"
                                                onchange="updateTotalPrice('{{ $route->route_id }}')"
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
            $seatsByFloor = $displaySeats->where('type_vehicle_id', $route->type_vehicle_id)->groupBy('floor_name');
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
                                                        data-seat-price="{{ $route->price }}"
                                                        data-seat-number="{{ $seat->seat_name }}"
                                                        data-seatId="{{ $seat->seat_id }}"
                                                        data-route-id="{{ $route->route_id }}"
                                                        onchange="updateTotalPrice('{{ $route->route_id }}')"
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
                                                        type="checkbox" title="Ghế đã chọn"
                                                        value="{{ $seat->seat_name }}">
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
                                                        data-seat-price="{{ $route->price }}"
                                                        data-seat-number="{{ $seat->seat_name }}"
                                                        data-seatId="{{ $seat->seat_id }}"
                                                        data-route-id="{{ $route->route_id }}"
                                                        onchange="updateTotalPrice('{{ $route->route_id }}')"
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
                                                        type="checkbox" title="Ghế đã chọn"
                                                        value="{{ $seat->seat_name }}">
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

        @if ($seat->type_vehicle_id == 1)
            <div class="row">
                <img src="{{ asset('assets/img/general/so-do-ghe-tren-xe-limousine.jpg') }}" alt=""
                    class="img-fluid" width="100%" height="300px">
            </div>
        @elseif ($seat->type_vehicle_id == 2)
            <div class="row mt-3">
                <img src="{{ asset('assets/img/general/so-de-ghe-xe-giuong-nam.jpg') }}" alt=""
                    class="img-fluid" width="80%" height="200px">
            </div>
        @endif
    @endif

    <hr>

    <div class="row">
        <div class="text-start col-lg-6 col-md-3">
            <p id="selected-seats{{ $route->route_id }}">1 vé, </p>
        </div>
        <div class="text-end col-lg-6 col-md-3">
            <p class="fs-5 fw-bold" id="total-price{{ $route->route_id }}" data-price="{{ $route->price }}">Tổng
                tiền: {{ number_format($route->price) }} đồng</p>

            <form id="ticket-form" method="post" data-route-id="{{ $route->route_id }}" 
                action="{{ route('orderticket.index', 
                ['route' => $route->route_id, 
                'routename' => $route->departurepoint_name . $route->arrivalpoint_name,
                'vehiclename' => $route->type_vehicle_name,
                'departuredate' => \Carbon\Carbon::parse($route->departure_date)->format('d-m-Y'),
                'departuretime' => \Carbon\Carbon::parse($route->departure_time)->format('H') ]) }}">
                @csrf
                @method('post')

                <input type="hidden" name="route" value="{{ $route->route_id }}">
                <input type="hidden" id="selected-seats-count{{ $route->route_id }}" name="ticket"
                    value="0">
                <input type="hidden" id="total-price-value{{ $route->route_id }}" name="total_price"
                    value="{{ $route->price }}">
                <input type="hidden" id="selected-seats-name{{ $route->route_id }}" name="seat_name"
                    value="">
                <input type="hidden" id="select-type-vehicle" name="type_vehicle_id"
                    value="{{ $route->type_vehicle_id }}">
                <input type="hidden" id="selected-route" name="route" value="{{ $route->route_id }}">

                <input type="hidden" id="selected-route-name" name="route_name"
                    value="{{ $route->departurepoint_name . $route->arrivalpoint_name }}">

                <button type="submit" class="btn btn-primary btn-custom border-0">
                    <i class="bi bi-check2-circle"></i>&nbsp;Chọn vé
                </button>
            </form>

        </div>
    </div>
</div>
<script src="{{ asset('assets/js/reservation.js') }}"></script>
