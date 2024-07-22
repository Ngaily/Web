@extends('admin.layout.layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    .main {
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 1rem;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 4px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 4px;
        margin-top: 10px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
    </style>
</head>

<body>
    <div class="main">
        @section('noidung')
        <h2>Cập nhật tin</h2>
        <form id="update-form">
            <div class="form-group">
                <label for="title">Tiêu đề:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Nội dung:</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="date">Ngày đăng:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="view">Lượt xem:</label>
                <input type="number" class="form-control" id="view" name="view" required>
            </div>
            <div class="form-group">
                <label for="category">Loại tin:</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="xa-hoi">Xã hội</option>
                    <option value="chinh-tri">Chính trị</option>
                    <option value="doi-song">Thế giới</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Hình ảnh:</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Cập nhật</button>
        </form>
        <a href="{{'/listtin'}}"><button class="btn btn-primary btn-block">Danh sách</button></a>
        @endsection
    </div>
</body>

</html>