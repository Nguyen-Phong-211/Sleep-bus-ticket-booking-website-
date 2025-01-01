<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $route->point_route1 }} <i class="bi bi-clock"></i> {{ $route->time_route1 }}</h5>
                <p class="card-text">{{ $route->detail_address_point1 }}</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                        aria-valuemax="100">0%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $route->point_route2 }} <i class="bi bi-clock"></i> {{ $route->time_route2 }}</h5>
                <p class="card-text">{{ $route->detail_address_point2 }}</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30"
                        aria-valuemin="0" aria-valuemax="100">30%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $route->point_route3 }} <i class="bi bi-clock"></i> {{ $route->time_route3 }}</h5>
                <p class="card-text">{{ $route->detail_address_point3 }}</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40"
                        aria-valuemin="0" aria-valuemax="100">40%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $route->point_route4 }} <i class="bi bi-clock"></i> {{ $route->time_route4 }}</h5>
                <p class="card-text">{{ $route->detail_address_point4 }}</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <p class="text-danger fst-italic">Lưu ý: Đây chỉ là thời gian dự đoán, thời gian có thể sẽ khác đi tuỳ thuộc vào tình trạng giao thông,...</p>
</div>
