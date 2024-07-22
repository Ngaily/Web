@extends('admin.layout.layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tin</title>
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


        .delete-btn {
            width: 50px;
            padding: 0.5rem 0.5rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 5px;

        }

        .delete-btn:hover {
            background-color: #d32f2f;
        }

        .up-btn {
            width: 50px;
            border: none;
            padding: 0.5rem 0.5rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 5px;
        }
    </style>
</head>

<body>

    <div class="main">
        <!-- <div class="container"> -->
        @section('noidung')
        <h2>Danh sách tin</h2>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Hình ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Ngày đăng</th>
                    <th>Lượt xem</th>
                    <th>Loại tin</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($data as $tin)
            <tbody>
                <tr>
                    <td>{{$tin->id}}</td>
                    <td><img src="https://i.ytimg.com/vi/7UlfQ0qEWXI/maxresdefault.jpg" alt="Hình ảnh 1" width="100">
                    </td>
                    <td>{{$tin->tieude}}</td>
                    <td>{{$tin->noidung}}</td>
                    <td>{{$tin->date}}</td>
                    <td>{{$tin->luotxem}}</td>
                    <td>{{$tin->idLT}}</td>

                    <td>
                        <button class="btn btn-danger delete-btn">Xoá</button>
                        <a href="{{'/capnhattin'}}" class="btn btn-primary up-btn">Cập nhật</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="https://i.ytimg.com/vi/7UlfQ0qEWXI/maxresdefault.jpg" alt="Hình ảnh 1" width="100">
                    </td>
                    <td>Số hóa Công nghệ Bảo mật Thứ sáu, 19/7/2024, 15:57 (GMT+7) Nhiều sân bay gián đoạn vì dịch vụ
                        đám mây Microsoft gặp sự cố</td>
                    <td>Số hóa Công nghệ Bảo mật Thứ sáu, 19/7/2024, 15:57 (GMT+7) Nhiều sân bay gián đoạn vì dịch vụ
                        đám mây Microsoft gặp sự cố Microsoft xác nhận dịch vụ đám mây Azure, Microsoft 365 và Teams gặp
                        trục trặc, khiến nhiều chuyến bay bị ảnh hưởng, trong đó có Vietjet.</td>
                    <td>18/07/2024</td>
                    <td>5</td>
                    <td>Xã hội</td>

                    <td>
                        <button class="btn btn-danger delete-btn">Xoá</button>
                        <a href="{{'/capnhattin'}}" class="btn btn-primary up-btn">Cập nhật</a>
                    </td>
                </tr>
            </tbody>
            @endforeach

        </table>


        <!-- <div class="button-container"> -->
        <a href="{{'/addtin'}}"><button class="add-btn">Thêm</button></a>
        <!-- <a href="{{'/listtin'}}"><button class="add-btn">Danh sách</button></a>
        </div> -->
        @endsection
    </div>
    <!-- </div> -->

</body>

</html>