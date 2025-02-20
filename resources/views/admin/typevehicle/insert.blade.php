<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Quản lý danh mục phương tiện</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('admin.cdn-css')
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
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Loại phương tiện <span class="text-danger">*</span></label>
                                        <select name="typeVehicle" id="" class="form-control input-custom">
                                            <option value="">Chọn loại phương tiện</option>
                                            <option value="">Xe khách</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tên phương tiện <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-custom" name="nameVehicle" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Biến số <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-custom" name="	licensePlate" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mục đích sử dụng <span class="text-danger">*</span></label>
                                        <select name="purposeOfUse" id="" class="form-control input-custom">
                                            <option value="">Chọn mục đích sử dụng</option>
                                            <option value="">Thuê</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mức tiêu thụ nhiên liệu <span class="text-danger">*</span></label>
                                        <select name="fuel100Km" id="" class="form-control input-custom">
                                            <option value="">Chọn mức tiêu thụ nhiên liệu</option>
                                            <option value="">10l/100 Km</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Số lượng max chỗ ngồi <span class="text-danger">*</span></label>
                                        <select name="numberMaxSeat" id="" class="form-control input-custom">
                                            <option value="">Chọn số lượng max chỗ ngồi</option>
                                            <option value="">24</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6"></div>
                            </div>
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
