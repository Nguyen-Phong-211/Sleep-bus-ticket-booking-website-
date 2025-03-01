<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Quản lý danh mục phương tiện</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('admin.cdn-css')
    <script src="{{ asset('assets/vendor/bootstrap/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/typevehicle.js') }}"></script>
</head>

<body>

    @include('admin.navarbar')


    @include('admin.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Quản lý danh mục phương tiện</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.typevehicle') }}">Quản lý danh mục phương tiện</a></li>
                    <li class="breadcrumb-item active">Thêm</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4 class="card-title mb-0">Thêm danh mục phương tiện</h4>
                    </div>                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="{{ route("admin.typevehicle.storage", ['tid' => Str::uuid7()]) }}" class="form" id="form-insert-typevehicle" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="vehicle_name" class="form-label">Tên xe <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control input-custom" name="vehicleName" id="vehicle_name" placeholder="Limousin Hoàng Anh" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="license_plate" class="form-label">Biển số xe <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control input-custom" name="licensePlate" id="license_plate" maxlength="10" required placeholder="51E-567B 67">
                                        </div>
                                        <div class="mb-3">
                                            <label for="type_vehicle_id" class="form-label">Loại xe <span class="text-danger">*</span></label>
                                            <select class="form-select input-custom" name="typeVehicleId" id="type_vehicle_id" required>
                                                <option value="">Chọn loại xe</option>
                                                <option value="1">Loại Xe 1</option>
                                                <option value="2">Loại Xe 2</option>
                                                <option value="3">Loại Xe 3</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="color" class="form-label">Màu xe <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control input-custom" name="color" id="color" maxlength="50" required placeholder="Màu trắng">
                                        </div>
                                        <div class="mb-3">
                                            <label for="fuel_name" class="form-label">Loại nhiên liệu <span class="text-danger">*</span></label>
                                            <select class="form-select input-custom" name="fuelName" id="fuel_name" required>
                                                <option value="">Chọn loại nhiên liệu</option>
                                                <option value="1">Xăng</option>
                                                <option value="2">Dầu</option>
                                                <option value="3">Khác</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="number_of_km" class="form-label">Số Km đã đi</label>
                                            <input type="number" step="0.01" class="form-control input-custom" name="numberOfKm" id="number_of_km" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="purpose_of_use" class="form-label">Mục đích sử dụng <span class="text-danger">*</span></label>
                                            <select class="form-select input-custom" name="purposeOfUse" id="purpose_of_use" required>
                                                <option value="">Chọn mục đính sử dụng</option>
                                                <option value="1">Thuê</option>
                                                <option value="2">Chở khách</option>
                                                <option value="3">Chở hàng hoá</option>
                                                <option value="4">Trung chuyển đưa/đón khách</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="fuel_per_100" class="form-label">Nhiên liệu/100km <span class="text-danger">*</span></label>
                                            <input type="number" step="0.01" class="form-control input-custom" name="fuelPer100" id="fuel_per_100" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="max_seat" class="form-label">Số ghế tối đa <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control input-custom" name="maxSeat" id="max_seat" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="route_id" class="form-label">ID tuyến đường <span class="text-danger">*</span></label>
                                            <select class="form-select input-custom" name="routeId" id="route_id" required>
                                                <option value="">Chọn tuyến đường</option>
                                                <option value="1">Tuyến Đường 1</option>
                                                <option value="2">Tuyến Đường 2</option>
                                                <option value="3">Tuyến Đường 3</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image_vehicle" class="form-label">Hình ảnh phương tiện <span class="text-danger">*</span></label>
                                            <input type="file" class="form-control input-custom" accept="image/*" name="imageVehicle" id="image_vehicle" required>
                                            <img id="preview" src="#" alt="Hình ảnh phương tiện" style="display: none; max-width: 200px; margin-top: 10px;">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i>&nbsp; Lưu thông tin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    @include('admin.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('admin.cdn-js')

</body>

</html>
