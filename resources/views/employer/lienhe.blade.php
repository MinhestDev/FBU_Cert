<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS code */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .contact-form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="contact-form">
                <h2 class="text-center mb-4">Liên hệ</h2>
                <form id="contactForm">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Họ và tên" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Nội dung" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Gửi</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Custom jQuery
    $(document).ready(function() {
        // Đăng ký sự kiện submit của form
        $('#contactForm').submit(function(event) {
            // Ngăn chặn hành vi mặc định của form
            event.preventDefault();
            // Lấy dữ liệu từ form
            var formData = $(this).serialize();
            // Hiển thị dữ liệu trong console để kiểm tra
            console.log(formData);
            // Gửi dữ liệu đến trang xử lý liên hệ
            // $.ajax({
            //     url: '/contact',
            //     method: 'POST',
            //     data: formData,
            //     success: function(response) {
            //         // Xử lý kết quả trả về
            //     },
            //     error: function(xhr, status, error) {
            //         // Xử lý lỗi
            //     }
            // });
        });
    });
</script>

</body>
</html>
