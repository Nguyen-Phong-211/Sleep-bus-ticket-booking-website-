<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mã OTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .content {
            padding: 20px;
            line-height: 1.6;
        }
        .footer {
            background-color: #f4f4f4;
            color: #666;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
        }
        .button {
            display: inline-block;
            padding: 10px 15px;
            color: #ffffff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Thông báo từ hệ thống</h1>
        </div>
        <div class="content">
            <h2>Chào bạn,</h2>
            <p>Bạn đã đặt vé thành công. Vui lòng xem thông tin chi tiết bên dưới</p>
            <p><strong>Hoá đơn của bạn:</strong></p>
            <br>
            <div class="text-center">
                <img class="text-center" src="{{ asset($invoiceImagePath) }}" alt="Invoice Image" style="max-width: 100%;">
            </div>
            <br>
            <i>Vui lòng xuất mã này cho nhân viên tại trạm trước khi lên xe. Xin cảm ơn quý khách!</i>
            <br>
            <i>Trân trọng.</i>
            <p>Chúng tôi luôn sẵn sàng hỗ trợ bạn. Nếu có thắc mắc, vui lòng liên hệ qua email <a href="mailto:support@vexe247.com">support@vexe247.com</a>.</p>
            <a href="#" class="button">Truy cập trang web</a>
        </div>
        <div class="footer">
            <p>Bản quyền © 2024 Thuộc VeXe247.com. Mọi quyền được bảo lưu.</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
