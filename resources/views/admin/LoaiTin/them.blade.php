@extends('admin.layout.layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm loại tin</title>
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
        <h2>Thêm loại tin</h2>
        <form id="add-news-form">
            <div class="form-group">
                <label for="loai">Loại tin:</label>
                <input type="text" class="form-control" id="loai" name="loai" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Thêm</button>
        </form>
        <a href="{{'/listLT'}}"><button class="btn btn-primary btn-block">Danh sách</button></a>
        @endsection
    </div>
</body>

</html>