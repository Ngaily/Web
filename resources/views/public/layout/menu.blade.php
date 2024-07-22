<style>
    .navbar {
        background-color: #3A98B9;
        /* background-color: #49c5b6; */
        padding: 1rem 0;

    }

    .navbar ul {
        list-style-type: none;
        text-align: center;
        margin: 0;
        padding: 0;
    }

    .navbar ul li {
        display: inline-block;
        margin-right: 1rem;
    }

    .navbar ul li a {
        color: #fff;
        text-decoration: none;
        padding: 0.5rem 1rem;
        display: inline-block;
    }

    .navbar ul li a:hover {
        color: olive;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #fff;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu .dropdown-item {
        padding: 0.5rem 1rem;
        display: block;
        clear: both;
        font-weight: normal;
        line-height: 1.5;
        color: #333;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #f1f1f1;
    }

    .navbar .form-inline {
        display: flex;
        align-items: center;
        margin-left: auto;

    }

    .navbar .form-inline .form-control {
        margin-right: 0.5rem;
    }

    /* logo */
    .logo {
        font-family: 'Arial', sans-serif;
        font-size: 3em;
        font-weight: bold;
        color: #ffffff;
        text-transform: uppercase;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        letter-spacing: 2px;
        margin: 0;
        padding: 5px;
        display: inline-block;

    }
</style>
<nav class="navbar fixed-top">
    <h1 class="logo">News</h1>

    <div class="container">
        <ul>
            <li><a href="{{'/'}}">Home</a></li>
            <!-- <li><a href="{{'/gioithieu'}}">Giới thiệu</a></li> -->
            <li class="dropdown">
                <a class="nav-link dropdown-toggle" href="{{'/tin'}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tin tức
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{'/tin'}}">Xã hội</a>
                    <a class="dropdown-item" href="{{'/tin'}}#">Giải trí</a>
                    <a class="dropdown-item" href="{{'/tin'}}">Đời sống</a>
                </div>
            </li>


            <li><a href="{{'/dangky'}}">Đăng ký</a></li>
            <li><a href="{{'/dangnhap'}}">Đăng nhập</a></li>
        </ul>
        <!-- Search form -->
        <ul class="nav-item ml-auto">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0 text-white" type="submit">Search</button>
            </form>
        </ul>
    </div>

</nav>
<script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });

    $(document).ready(function() {
        $('#navbarDropdown').on('click', function(e) {
            var $el = $(this).next('.dropdown-menu');
            if ($el.hasClass('show')) {
                window.location.href = $(this).attr('href');
            } else {
                $('.dropdown-menu').removeClass('show');
                $el.toggleClass('show');
                e.preventDefault();
            }
        });

        $(document).on('click', function(e) {
            if (!$(e.target).closest('.nav-item.dropdown').length) {
                $('.dropdown-menu').removeClass('show');
            }
        });
    });
</script>