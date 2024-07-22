@extends('admin.layout.layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách user</title>
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
        <h2>Danh sách user</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nguyễn Văn A</td>
                    <td>vana@example.com</td>
                    <td>********</td>
                    <td><button class="delete-btn">Xoá</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Trần Thị B</td>
                    <td>tranb@example.com</td>
                    <td>********</td>
                    <td><button class="delete-btn">Xoá</button></td>
                </tr>

            </tbody>
        </table>

        @endsection
    </div>
    <!-- </div> -->

</body>

</html>