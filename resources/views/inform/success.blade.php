<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successful Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .confirmation-container {
            max-width: 600px;
            margin: auto;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
        }
        .order-id {
            background-color: #198754;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }
        .check-icon-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #c3e6cb;
            margin: 0 auto 20px auto;
        }
        .check-icon-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #e0f2e9;
        }
        .check-icon {
            font-size: 50px;
            color: #198754;
        }
    </style>
</head>
<body>
    <div class="container confirmation-container">
        <div class="check-icon-wrapper">
            <div class="check-icon-container">
                <div class="check-icon">✔</div>
            </div>
        </div>
        <h2 class="mt-3">Cảm ơn bạn đã đặt vé!</h2>
        <p>Vui lòng liên hệ với chúng tôi nếu bạn có thắc mắc</p>
        <a href="{{ route('home.index') }}" class="order-id text-decoration-none">Quay về trang chủ</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
