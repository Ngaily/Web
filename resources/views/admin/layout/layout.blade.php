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
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        line-height: 1.6;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    /* header */
    header {
        background: #3A98B9;
        color: #fff;
        padding: 20px 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    header h1 {
        margin: 0;
        font-size: 24px;
        text-align: center;
    }

    /* container */
    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        overflow: hidden;
    }

    main {
        flex: 1;
        padding: 20px;
        background: #fff;
    }

    .dashboard-header {
        text-align: center;
        margin-bottom: 20px;
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
        background: #fff;
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

    /* layout container */
    .layout-container {
        display: flex;
        flex: 1;
    }

    /* sidebar */
    .sidebar {
        width: 25%;
        background: #3A98B9;
        color: #fff;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        box-sizing: border-box;
    }

    .sidebar a {
        color: #fff;
        text-decoration: none;
        display: block;
        margin: 10px 0;
        font-size: 16px;
    }

    .sidebar a:hover {
        background: #575757;
        padding-left: 10px;
        transition: 0.3s;
    }

    /* footer */
    footer {
        background: #3A98B9;
        color: #fff;
        text-align: center;
        padding: 20px 0;
        box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
    }

    footer p {
        margin: 0;
    }
    </style>
</head>

<body>

    <header>
        <div class="container">
            <h1>Admin</h1>
        </div>
    </header>

    <div class="layout-container">
        <aside class="sidebar">
            <nav>
                <a href="{{'admin'}}">Trang chủ</a>
                <a href="{{'listus'}}">Quản trị user</a>
                <a href="{{'listtin'}}">Quản trị tin</a>
                <a href="{{'listLT'}}">Quản trị loại tin</a>
                <a href="#">Logout</a>
            </nav>
        </aside>
        <main>
            <div>
                @yield('noidung')
            </div>
        </main>
    </div>
</body>

</html>