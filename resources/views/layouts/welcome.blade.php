<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* CSS code */
        body, h1, h2, h3, p, ul, li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background-color: #4176BB;
            color: #fff;
            padding: 10px 0;
            display: flex; /* Sử dụng flexbox */
            justify-content: space-between; /* Canh chỉnh hai phần tử sang hai bên */
            align-items: center; /* Canh chỉnh theo chiều dọc */
        }

        nav ul {
            list-style-type: none;
            margin-top: 2px;
            margin-right: 30px;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #ffd700; /* Thay đổi màu khi rê chuột vào menu */
        }

        .slider {
            width: 100%;
            overflow: hidden;
            position: relative;
            margin-bottom: 20px; /* Thêm khoảng cách phía dưới của slider */
            height: 200px; /* Chiều cao mới của slider */
        }

        .slider img {
            width: 100%;
            height: 100%; /* Chiều cao mới của hình ảnh */
            display: none;
        }

        .slider img:first-child {
            display: block;
        }

        .search-container .search-form {
    flex: 1; /* Để form tìm kiếm mở rộng ra */
    display: flex;
    flex-direction: column; /* Hiển thị các thành phần dọc theo cột */
    align-items: flex-start; /* Căn chỉnh các thành phần sang trái */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.search-container .search-form input[type="text"],
.search-container .search-form select {
    margin-bottom: 10px; /* Thêm khoảng cách giữa các dòng */
    padding: 8px;
    border: none;
    border-radius: 5px;
}

.search-container .search-form button {
    padding: 8px 15px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.search-container .search-form button:hover {
    background-color: #45a049;
}

.search-container .search-icon {
    margin-right: 10px;
}

    </style>
</head>
<body>
    @include('employer.header')

    <div class="slider">
        <img src="https://fbu.edu.vn/wp-content/uploads/2024/04/tai-sao-nganh-ngon-ngu-anh-chua-bao-gioi-het-hot-hinh4.jpg" alt="Slide 1">
        <img src="https://fbu.edu.vn/wp-content/uploads/2024/04/Bo-giao-duc-va-dao-tao-1536x1086.png" alt="Slide 2">
        <img src="https://fbu.edu.vn/wp-content/uploads/2023/08/Picture12.jpg" alt="Slide 3">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content">
                    <img src="/global_assets/images/search.png" style="width: 300px; margin-left: 100px" alt="">
                    <h2 style="text-align:center; font-size: 40px; margin-top: -30px">
                        Bạn muốn xác nhận văn bằng chứng chỉ? Hãy tìm ngay.
                    </h2>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="search-container">
                    <img src="/global_assets/images/searching.png" style="width:100px; margin-left: 200px" alt="">
                    <form id="searchForm" class="search-form" action="/search" method="GET">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text search-icon"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" id="certificate_number" name="certificate_number" placeholder="Số hiệu văn bằng chứng chỉ">
                        </div>
                        <select class="form-control" name="certificate_type">
                            <option value="english">Bằng tiếng Anh</option>
                            <option value="graduate">Bằng tốt nghiệp</option>
                        </select>
                        <button type="submit" class="btn btn-primary" style="background-color: #4176bb">Tìm ngay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{--@include('search.results')--}}
    <div id="modalSearchResult"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Custom jQuery
        $(document).ready(function() {
            // Đăng ký sự kiện submit của form
            $('#searchForm').submit(function(event) {
                // Ngăn chặn hành vi mặc định của form
                event.preventDefault();
                // Lấy dữ liệu từ form
                var formData = $(this).serialize();
                // Hiển thị dữ liệu trong console để kiểm tra
                //console.log(formData);
                //Gửi dữ liệu đến trang xử lý tìm kiếm
                $.ajax({
                    url: '/search',
                    method: 'GET',
                    data: formData,
                    success: function(response) {
                        // Xử lý kết quả trả về
                        $('#modalSearchResult').append(response)
                        $("#searchResult").modal('show');
                    },
                    error: function(xhr, status, error) {
                        // Xử lý lỗi
                        console.log(error);
                        console.log(status);
                    }
                });
            });
        });
    </script>
    <script>
        // JavaScript code
        document.addEventListener('DOMContentLoaded', function() {
            var currentIndex = 0;
            var slides = document.querySelectorAll('.slider img');
            var slideCount = slides.length;

            function showNextSlide() {
                slides[currentIndex].style.display = 'none';
                currentIndex = (currentIndex + 1) % slideCount;
                slides[currentIndex].style.display = 'block';
            }

            setInterval(showNextSlide, 3000); // Đổi ảnh mỗi 3 giây
        });
    </script>
@include('employer.footer')
</body>
</html>
