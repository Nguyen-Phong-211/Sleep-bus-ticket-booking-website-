<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('admin.cdn-css')
</head>

<body>

    @include('admin.navarbar')


    @include('admin.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">

            <div class="row">
                <div class="col-lg-8">
                    @include('admin.dashbroad.left-dashbroad')
                </div>
                @include('admin.dashbroad.right-dashbroad')
            </div>
        </section>

    </main>

    @include('admin.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('admin.cdn-js')

</body>

</html>
