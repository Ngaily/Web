@extends('admin.layout.layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách loại tin</title>
    <style>
    .main {

        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);

    }

    h1 {
        text-align: center;
        color: white;
        margin-bottom: 1rem;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 1rem;
    }

    a:hover {
        text-decoration: none;
    }

    .add-btn {
        display: block;
        margin: 0 auto 1rem auto;
        background-color: #4CAF50;
        color: white;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin: 10px;


    }

    .add-btn:hover {
        background-color: #45a049;
        text-decoration: none;

    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
    }

    th,
    td {
        padding: 0.75rem;
        text-align: left;
        border: 1px solid #dee2e6;
    }

    th {
        background-color: #659DBD;
        color: #fff;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    .delete-btn {
        background-color: #f44336;
        color: #fff;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;

    }

    .delete-btn:hover {
        background-color: #d32f2f;
    }
    </style>
</head>

<body>

    <div class="main">
        <!-- <div class="container"> -->
        @section('noidung')
        <h2>Danh sách loại tin</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Loại tin</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Xã hội</td>
                    <td>
                        <button class="delete-btn">Xoá</button>
                        <a href="{{'/capnhatLT'}}"><button class="btn-primary delete-btn">Cập nhật</button></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Giải trí</td>
                    <td>
                        <button class="delete-btn">Xoá</button>
                        <a href="{{'/capnhatLT'}}"><button class="btn-primary delete-btn">Cập nhật</button></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Thế giới</td>
                    <td>
                        <button class="delete-btn">Xoá</button>
                        <a href="{{'/capnhatLT'}}"><button class="btn-primary delete-btn">Cập nhật</button></a>
                    </td>
                </tr>

            </tbody>
        </table>
        <!-- <div class="button-container"> -->
        <a href="{{'/addLT'}}"><button class="add-btn">Thêm</button></a>
        <!-- <a href="{{'/listtin'}}"><button class="add-btn">Danh sách</button></a>
        </div> -->
        @endsection
    </div>
    <!-- </div> -->

</body>

</html>