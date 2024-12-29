<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ thành công</title>
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
            <p>Cảm ơn bạn đã liên hệ với hệ thống chúng tôi. Chúng tôi sẽ sớm phản hồi cho bạn qua email này! Thông tin liên hệ gồm:</p>
            <ul>
                <li><strong>Email:</strong> {{ $data['emailContact'] }}</li>
                <li><strong>Số điện thoại:</strong> {{ $data['number_phoneContact'] }}</li>
                <li><strong>Nội dung liên hệ:</strong> {{ $data['content'] }}</li>
            </ul>
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
