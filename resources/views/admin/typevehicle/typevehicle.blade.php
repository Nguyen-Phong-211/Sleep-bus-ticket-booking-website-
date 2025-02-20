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
                    <li class="breadcrumb-item active">Quản lý danh mục phương tiện</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4 class="card-title mb-0">Quản lý danh mục phương tiện</h4>
                        <a href="{{ route('admin.typevehicle.insert', ['tid' => Str::uuid7()]) }}" class="btn btn-primary ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Thêm danh mục phương tiện">
                            <i class="bi bi-plus-square"></i>
                        </a>
                    </div>                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã loại phương tiện</th>
                                        <th>Tên loại phương tiện</th>
                                        <th>Max ghế ngồi</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã loại phương tiện</th>
                                        <th>Tên loại phương tiện</th>
                                        <th>Max ghế ngồi</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="" id="" class="form-select custom-form">
                                                @foreach ($getTypeVehicle as $index => $typeVehicle)
                                                    <option value="{{ $loop->iteration }}">{{ $loop->iteration }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="" class="form-select custom-form">
                                                @foreach ($getTypeVehicle as $index => $typeVehicle)
                                                    <option value="{{ $typeVehicle->type_vehicle_id }}">{{ $typeVehicle->type_vehicle_id }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="" class="form-select custom-form">
                                                <option value="" selected>All</option>
                                                @foreach ($getTypeVehicle as $index => $typeVehicle)
                                                    <option value="{{ $typeVehicle->type_vehicle_name }}">{{ $typeVehicle->type_vehicle_name }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="" class="form-select custom-form">
                                                <option value="" selected>All</option>
                                                @foreach ($getTypeVehicle as $index => $typeVehicle)
                                                    <option value="{{ $typeVehicle->max_seat }}">{{ $typeVehicle->max_seat }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($getTypeVehicle as $index => $typeVehicle)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td> 
                                            <td>{{ $typeVehicle->type_vehicle_id }}</td>
                                            <td>{{ $typeVehicle->type_vehicle_name }}</td>
                                            <td>{{ $typeVehicle->max_seat }}</td>
                                            <td>
                                                <a href="{{ route('admin.typevehicle.update', ['id' => $typeVehicle->type_vehicle_id, 'tid' => Str::uuid7()]) }}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#typeVehicle{{ $typeVehicle->type_vehicle_id }}"><i class="bi bi-pencil-square"></i></a>
                                                @include('admin.typevehicle.form-update')
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
