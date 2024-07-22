<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Quên mật khẩu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Login Form Template" name="keywords">
    <meta content="Login Form Template" name="description">
    <style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #666666;
        background: #eaeff4;
    }

    .clearfix::after {
        content: '';
        clear: both;
        display: table;
    }

    .wrapper {
        margin: 0 auto;
        width: 100%;
        max-width: 1140px;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .container {
        position: relative;
        width: 100%;
        max-width: 600px;
        height: auto;
        display: flex;
        background: #ffffff;
        box-shadow: 0 0 5px #999999;
    }



    .container.login-3 {
        box-shadow: 0 0 15px rgba(0, 0, 0, .1);
    }

    .login-3 .col-left,
    .login-3 .col-right {
        width: 55%;
        padding: 45px 35px;
        display: flex;
    }

    .login-3 .col-left {
        width: 45%;
        background: #3A98B9;

    }



    .login-3 .login-text {
        position: relative;
        width: 100%;
        color: #ffffff;
        text-align: center;
    }

    .login-3 h2 {
        margin: 0 0 15px 0;
        font-size: 30px;
        font-weight: 700;
    }

    .login-3 h2 img {
        width: 120px;
    }

    .login-3 p {
        margin: 0 0 20px 0;
        font-size: 16px;
        font-weight: 500;
        line-height: 22px;
    }

    .login-3 .btn {
        display: inline-block;
        padding: 7px 20px;
        font-size: 16px;
        letter-spacing: 1px;
        text-decoration: none;
        border-radius: 5px;
        color: #ffffff;
        outline: none;
        border: 1px solid #ffffff;
        transition: .3s;
        -webkit-transition: .3s;
    }

    .login-3 .btn:hover {
        color: #3A98B9;
        background: #ffffff;
    }

    .login-3 .login-form {
        position: relative;
        width: 100%;
        color: #666666;
    }

    .login-3 .login-form p:last-child {
        margin: 0;
    }

    .login-3 .login-form p a {
        color: #3A98B9;
        font-size: 14px;
        text-decoration: none;
    }


    .login-3 .login-form label {
        display: block;
        width: 100%;
        margin-bottom: 2px;
        letter-spacing: .5px;
    }

    .login-3 .login-form p:last-child label {
        width: 60%;
        float: left;
    }

    .login-3 .login-form label span {
        color: #ff574e;
        padding-left: 2px;
    }

    .login-3 .login-form input {
        display: block;
        width: 100%;
        height: 40px;
        padding: 0 10px;
        font-size: 16px;
        letter-spacing: 1px;
        outline: none;
        border: 1px solid #3A98B9;
        border-radius: 5px;
    }

    .login-3 .login-form input:focus {
        border-color: #ff574e;
    }

    .login-3 .login-form input.btn {
        color: #ffffff;
        background: #3A98B9;
        border-color: #3A98B9;
        outline: none;
        cursor: pointer;
    }

    .login-3 .login-form input.btn:hover {
        color: #3A98B9;
        background: #ffffff;
    }

    .qmk {
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="wrapper login-3">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome Back</h2>
                </div>
            </div>
            <div class="col-right">
                <div class="login-form">
                    <h2>Quên mật khẩu</h2>
                    <form>
                        <p>
                            <input type="email" placeholder="Email" required>
                        </p>
                        <input class="btn" type="submit" value="Gửi" />
                        </p>

                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>