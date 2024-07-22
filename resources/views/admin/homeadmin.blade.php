@extends('admin.layout.layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <style>
    .main {

        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);

    }



    .dashboard-header {
        text-align: center;
        /* margin-bottom: 20px; */
    }

    .dashboard-header h2 {
        color: #333;
    }

    .admin-panel {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .admin-card {
        /* background: #fff; */
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: calc(33.333% - 20px);
        box-sizing: border-box;
    }

    .admin-card h3 {
        margin-top: 0;
        color: #333;
    }

    .admin-card p {
        color: #666;
    }
    </style>
</head>

<body>

    @section('noidung')

    <div class="dashboard-header">
        <h2>Trang chủ Admin</h2>
        <p></p>
    </div>

    @endsection

</body>

</html>