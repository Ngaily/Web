<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
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
    .container {
        display: flex;
        width: 100%;
    }

    .left-side {
        flex: 7;
        padding: 10px;
    }

    .right-side {
        flex: 3;
        padding: 10px;
        /* background-color: #f9f9f9; */
    }

    .left-content {
        background-color: #f1f1f1;
        padding: 20px;
        margin-bottom: 20px;
    }

    .right-content {
        /* background-color: #e1e1e1; */
        padding: 20px;
        margin-bottom: 0;
    }


    /* top news */
    .top-news {
        margin-bottom: 40px;
    }

    .top-news h2 {
        font-size: 2.5em;
        margin-bottom: 20px;
        color: #333;
        text-align: center;
        padding: 10px 0;
        border-bottom: 2px solid #ddd;
    }

    .top-news .articles {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .top-news article {
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 15px;
        margin-bottom: 20px;
        flex: 1 1 calc(50% - 20px);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .top-news article h3 {
        font-size: 1.8em;
        margin-bottom: 10px;
        color: #333;
    }

    .top-news article img {
        width: 100%;
        height: auto;
        max-width: 100%;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .top-news article p {
        font-size: 1em;
        color: #666;
    }

    /* main */
    main {
        display: flex;
        margin-top: 20px;
    }

    .main-content {
        flex: 3;
    }

    .main-content section {
        margin-bottom: 30px;
    }

    .main-content h2 {
        background-color: #3A98B9;
        padding: 10px;
        margin: 0 0 10px 0;
    }

    .main-content article {
        background: white;
        padding: 20px;
        margin-bottom: 10px;
        border-left: 5px solid #3A98B9;
    }

    /* featured-news */
    .featured-news {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .featured-news h2 {
        width: 100%;
        font-size: 2em;
        margin-bottom: 20px;
        color: white;
    }

    .featured-news article {
        flex: 1 1 calc(50% - 20px);
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 15px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .featured-news article h3 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .featured-news article p {
        color: #666;
        margin-bottom: 10px;
    }

    .featured-img {
        width: 100%;
        height: 150px;
        background-size: cover;
        background-position: center;
        border-radius: 5px;
    }

    .featured-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 5px;
    }

    /* Last news */
    .latest-news {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .latest-news h2 {
        width: 100%;
        font-size: 2em;
        margin-bottom: 20px;
        color: white;
        margin-top: 0;
    }

    .latest-article {
        flex: 1 1 calc(50% - 20px);
        display: flex;
        margin-bottom: 20px;
        padding: 15px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .latest-article .latest-img img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 5px;
        margin-right: 15px;
    }

    .latest-article .latest-img {
        flex: 1;
        min-width: 150px;
        height: 150px;
        background-size: cover;
        background-position: center;
        border-radius: 5px;
        margin-right: 15px;
    }

    .latest-article .latest-content {
        flex: 3;
    }

    .latest-article .latest-content h3 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .latest-article .latest-content p {
        color: #666;
    }

    /* hot news */
    .hot-news {
        padding: 40px 20px;
        color: #333333;

    }

    .hot-news h2 {
        font-size: 2.0em;
        color: white;
        text-align: center;
        margin-bottom: 30px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .hot-news-content {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .hot-news-left,
    .hot-news-right {
        flex: 1 1 calc(50% - 20px);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        color: #ffffff;
        margin-bottom: 20px;
    }

    .hot-news article {
        background-color: #ffffff;
        color: #333333;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .hot-news article h3 {
        font-size: 1.5em;
        margin-bottom: 10px;


    }

    .hot-news article p {
        font-size: 1em;
        line-height: 1.6;
        color: #666666;

    }



    .anh img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

    }

    .ndphu {
        background-color: white;
        margin-top: 10px;
        padding: 7px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .ndphu {
        display: flex;
        flex-direction: column;
        gap: 20px;

    }

    .ndphu article {
        display: flex;
        gap: 20px;
        padding: 5px;
        margin: 2.5px;

    }

    .ndphu img {
        max-width: 100px;
        height: auto;
        display: block;
    }

    .ndphu .content {
        display: flex;
        flex-direction: column;

    }

    .ndphu h3 {
        margin: 0;
        color: #333;

    }

    .ndphu p {
        margin: 0;
        color: #666;

    }
    </style>
</head>

<body class="home">

    <!-- Header Section -->
    @include('public.layout.header')

    <!-- Navigation Bar -->
    @include('public.layout.menu')


    <div class="container">
        <div class="left-side">
            <div>
                <!-- Top News Section -->
                <section class="top-news">
                    <h2>Tin tức hàng đầu</h2>
                    <div class="container">
                        <div class="articles">
                            <article>
                                <img
                                    src="https://i1-vnexpress.vnecdn.net/2024/07/19/tbt-nguyen-phu-trong-ho-cam-dao-1-1721385146.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=RQPQxfExH0Wcfo3b4TzjwA">
                                <a href="{{'chitiet'}}">
                                    <p class="text-info">Dấu ấn ngoại giao của Tổng bí thư Nguyễn Phú Trọng</p>
                                </a>
                                <em>
                                    <p>Ngày đăng: 20/07/2024</p>
                                </em>
                            </article>
                            <article>
                                <img
                                    src="https://i1-vnexpress.vnecdn.net/2024/07/20/TTX-TBTNguyenPhuTrong-JPG-2424-1721413427.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=qEAvu635D4tS9dJKslAjeg">
                                <a href="{{'chitiet'}}">
                                    <p class="text-info">Lãnh đạo các nước chia buồn Tổng Bí thư Nguyễn Phú Trọng từ
                                        trần
                                    </p>
                                </a>
                                <em>
                                    <p>Ngày đăng: 19/07/2024</p>
                                </em>
                            </article>
                            <article>

                                <img src="https://i1-vnexpress.vnecdn.net/2024/07/20/ap-thap-4677-1721441845.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=YZ2ZblKPzwPUptRnvuqcZw"
                                    alt="Top News 2">
                                <a href="{{'chitiet'}}">
                                    <p class="text-info">Áp thấp nhiệt đới có thể mạnh lên thành bão</p>
                                </a>
                                <em>
                                    <p>Ngày đăng: 18/07/2024</p>
                                </em>
                            </article>
                            <article>

                                <img
                                    src="https://i1-vnexpress.vnecdn.net/2024/07/20/z5650832240100-98dd2f584d4182d-7626-4856-1721448293.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=mKBIlWEK6MIcQtZNMhUbOQ">
                                <a href="{{'chitiet'}}">
                                    <p class="text-info">Công an dùng võng đưa hai người bị ong đốt nguy kịch đi cấp cứu
                                    </p>
                                </a>
                                <em>
                                    <p>Ngày đăng: 18/07/2024</p>
                                </em>
                            </article>
                        </div>
                    </div>
                </section>




                <!-- Main Content Section -->
                <main class="container">
                    <div class="main-content">
                        <!-- Featured News Section -->
                        <section class="featured-news">
                            <h2 class="text-white">Tin tức nổi bật</h2>
                            <article>

                                <div class="featured-img">
                                    <img src="https://i1-vnexpress.vnecdn.net/2024/07/20/vna-potal-tong-bi-thu-nguyen-phu-trong-lam-viec-tai-tinh-thai-binh-133693-1721408946.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=mDxPZVl04gBCtTg_VKkSGA"
                                        alt="Top News 1">
                                </div>
                                <a href="{{'chitiet'}}">
                                    <p class="text-info">Những khoảnh khắc bình dị của Tổng bí thư Nguyễn Phú Trọng</p>
                                </a>
                                <em>
                                    <p>Ngày đăng: 20/07/2024</p>
                                </em>
                            </article>
                            <article>

                                <div class="featured-img">
                                    <img
                                        src="https://i1-vnexpress.vnecdn.net/2024/07/20/HUY-2421-1732-1721444497.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=XkeVGHUVof16uaBLdsaaRw">
                                </div>
                                <a href="{{'chitiet'}}">
                                    <p class="text-info">Kiến nghị đầu tư nâng cấp đường sắt Hà Nội - Lạng Sơn</p>
                                </a>
                                <em>
                                    <p>Ngày đăng: 20/07/2024</p>
                                </em>
                            </article>
                            <article>

                                <div class="featured-img">
                                    <img
                                        src="https://i1-vnexpress.vnecdn.net/2024/07/20/Nobland-6555-1721459853.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=YQXCydTrUsJienbTbZjw9w">
                                </div>
                                <a href="{{'chitiet'}}">
                                    <p class="text-info">Trừ lương công nhân vì mất hàng, doanh nghiệp bị phạt 70 triệu
                                        đồng
                                    </p>
                                </a>
                                <em>
                                    <p>Ngày đăng: 20/07/2024</p>
                                </em>
                            </article>
                            <article>

                                <div class="featured-img">
                                    <img
                                        src="https://i1-vnexpress.vnecdn.net/2024/07/20/Urozhaynoye-1557-1721460866.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=Tx1iIDRMIJnobjGVd-LD4A">
                                </div>
                                <a href="{{'chitiet'}}">
                                    <p class="text-info">Lính Nga cưỡi xe máy tấn công làng chiến lược ở Donetsk</p>
                                </a>
                                <em>
                                    <p>Ngày đăng: 20/07/2024</p>
                                </em>
                            </article>
                        </section>

                    </div>
                </main>
            </div>
        </div>


        <div class="right-side">
            <div class="right-content">
                <!-- Sidebar Section -->
                @include('public.layout.sidebar')
            </div>
            <div class="anh">
                <img src="https://www.bqllang.gov.vn/images/NAM_2019/Thang_11/20-11/can_bo_truoc_het.png" alt="">
                <div class="ndphu">
                    <article>
                        <img src="https://image.nhandan.vn/w800/Uploaded/2024/cvjntcigjcvwxtj/2024_07_20/tbt1-1-2-5906.jpg.webp"
                            alt="">
                        <a href="{{'chitiet'}}">
                            <p class="text-info">Tang lễ Tổng Bí thư Nguyễn Phú Trọng được tổ chức theo nghi thức Quốc
                                tang</p>
                        </a>
                    </article>
                    <article>
                        <img src="https://image.tienphong.vn/w645/Uploaded/2024/ycgvpvoi/2024_06_20/21-6-anh-tpo-gia-vang-4854.jpg"
                            alt="">
                        <a href="{{'chitiet'}}">
                            <p class="text-info">Giá vàng nhẫn tròn trơn giảm mạnh</p>
                        </a>

                    </article>
                    <article>
                        <img src="https://imagev3.vietnamplus.vn/w820/Uploaded/2024/fsmsy/2024_07_19/ttxvn-dai-bang-tang-1220.jpg.webp"
                            alt="">
                        <a href="{{'chitiet'}}">
                            <p class="text-info">Lễ viếng, Lễ truy điệu và Lễ an táng Tổng Bí thư Nguyễn Phú Trọng</p>
                        </a>
                    </article>
                    <article>
                        <img src="https://imagev3.vietnamplus.vn/h600/Uploaded/2024/lepz/2024_07_20/ttxvn-tong-bi-thu-mat-tran-van-hoa-3-8970.jpg.webp"
                            alt="">
                        <a href="{{'chitiet'}}">
                            <p class="text-info">Tổng Bí thư Nguyễn Phú Trọng - nhà lãnh đạo xuất sắc trên mặt trận văn
                                hóa</p>
                        </a>
                    </article>
                    <article>
                        <img src="https://imagev3.vietnamplus.vn/w820/Uploaded/2024/lepz/2024_07_20/ttxvn-nha-bao-nhi-le-1375.jpg.webp"
                            alt="">
                        <a href="{{'chitiet'}}">
                            <p class="text-info">Tổng Bí thư Nguyễn Phú Trọng qua lời kể của những người đồng nghiệp</p>
                        </a>
                    </article>
                    <article>
                        <img src="https://photo-baomoi.bmcdn.me/w250_r3x2/2024_07_20_146_49685982/f7bea54adb05325b6b14.jpg.webp"
                            alt="">
                        <a href="{{'chitiet'}}">
                            <p class="text-info">Thông cáo đặc biệt về Lễ tang Tổng Bí thư Nguyễn Phú Trọng</p>
                        </a>
                    </article>

                </div>
            </div>

        </div>
    </div>


    <main class="container">
        <div class="main-content">
            <!-- Latest News Section -->
            <section class="latest-news">
                <h2>Tin mới nhất</h2>
                <article class="latest-article">
                    <div class="latest-img">
                        <img src="https://i1-kinhdoanh.vnecdn.net/2024/07/20/3A8BC5F426B24BD5A3694DF7743C0E-7811-4693-1721467285.jpg?w=380&h=228&q=100&dpr=1&fit=crop&s=30Xjb8nGkibX-Slm-c7ZcA"
                            alt="Top News 1">
                    </div>
                    <div class="latest-content">
                        <a href="{{'chitiet'}}">
                            <p class="text-info">Xuất khẩu trứng cá tăng hơn 84 lần</p>
                        </a>
                        <em>
                            <p>Ngày đăng: 20/07/2024</p>
                        </em>
                    </div>
                </article>
                <article class="latest-article">
                    <div class="latest-img">
                        <img src="https://i1-giaitri.vnecdn.net/2024/07/20/olympic-1-3230-1721467261.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=uRlyxm3_wqQTD6RbYO3hSg"
                            alt="Top News 1">
                    </div>
                    <div class="latest-content">
                        <a href="{{'chitiet'}}">
                            <p class="text-info">Đội tuyển Thái Lan đổi đồng phục Olympic
                            </p>
                        </a>
                        <em>
                            <p>Ngày đăng: 20/07/2024</p>
                        </em>
                    </div>
                </article>
                <article class="latest-article">
                    <div class="latest-img">
                        <img src="https://i1-vnexpress.vnecdn.net/2024/07/20/mua-co-phan-tu-tam-sinh-nghia-4691-3199-1721470848.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=7puQz8-HQvX9bMb0dkRv5w"
                            alt="Top News 1">
                    </div>
                    <div class="latest-content">
                        <a href="{{'chitiet'}}">
                            <p class="text-info">TP HCM khởi công nhà máy đốt rác phát điện 6.400 tỷ đồng</p>
                        </a>
                        <em>
                            <p>Ngày đăng: 20/07/2024</p>
                        </em>
                    </div>
                </article>

                <article class="latest-article">
                    <div class="latest-img">
                        <img src="https://i1-vnexpress.vnecdn.net/2024/07/20/Thiet-ke-chua-co-ten-72-3096-1721440690.png?w=1020&h=0&q=100&dpr=1&fit=crop&s=321OyrmZoW76Y5WKwNygWQ"
                            alt="Top News 1">
                    </div>
                    <div class="latest-content">
                        <a href="{{'chitiet'}}">
                            <p class="text-info">Người có IQ 'cao nhất lịch sử'</p>
                        </a>
                        <em>
                            <p>Ngày đăng: 20/07/2024</p>
                        </em>
                    </div>
                </article>
            </section>


            <!-- Hot News Section -->
            <section class="hot-news">
                <h2>Tin tức nóng</h2>
                <div class="hot-news-content">
                    <div class="hot-news-left">
                        <article class="latest-article">
                            <div class="latest-img">
                                <img src="https://i1-vnexpress.vnecdn.net/2024/07/20/0a1a7158-1721449887-2956-1721450230.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=1ZyCIg4m2irfuvrnszLbxQ"
                                    alt="Top News 1">
                            </div>
                            <div class="latest-content">
                                <a href="{{'chitiet'}}">
                                    <p class="text-info">Giám đốc Sở Tài chính Bắc Ninh bị khởi tố</p>
                                </a>
                                <em>
                                    <p>Ngày đăng: 20/07/2024</p>
                                </em>
                            </div>
                        </article>
                        <article class="latest-article">
                            <div class="latest-img">
                                <img src="https://i1-vnexpress.vnecdn.net/2024/07/15/1-1721052317.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=FO2J1wfqiMYcDMtOnuUpEg"
                                    alt="Top News 1">
                            </div>
                            <div class="latest-content">
                                <a href="{{'chitiet'}}">
                                    <p class="text-info">Hội nghị Geneve 70 năm trước</p>
                                </a>
                                <em>
                                    <p>Ngày đăng: 20/07/2024</p>
                                </em>
                            </div>
                        </article>
                    </div>
                    <div class="hot-news-right">
                        <article class="latest-article">
                            <div class="latest-img">
                                <img src="https://i1-vnexpress.vnecdn.net/2024/07/20/52dc7ae1-a2fc-4b39-a600-572b7a-2795-8056-1721454091.jpg?w=380&h=228&q=100&dpr=1&fit=crop&s=Bch_G251V-dQ_SblEOKVSQ"
                                    alt="Top News 1">
                            </div>
                            <div class="latest-content">
                                <a href="{{'chitiet'}}">
                                    <p class="text-info">Thí sinh phân vân dù đỗ sớm hàng loạt đại học</p>
                                </a>
                                <em>
                                    <p>Ngày đăng: 20/07/2024</p>
                                </em>
                            </div>
                        </article>
                        <article class="latest-article">
                            <div class="latest-img">
                                <img src="https://i1-giadinh.vnecdn.net/2024/07/20/A-nh-1-7-1-8585-1721467063.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=4cVMyU9ugEELznSSz5dqMQ"
                                    alt="Top News 1">
                            </div>
                            <div class="latest-content">
                                <a href="{{'chitiet'}}">
                                    <p class="text-info">Canh chua chay thanh mát ngày hè</p>
                                </a>
                                <em>
                                    <p>Ngày đăng: 20/07/2024</p>
                                </em>
                            </div>
                        </article>
                        <br>

                    </div>
                </div>
            </section>

        </div>
    </main>

    <!-- Footer Section -->
    <footer class="ft">
        @include('public.layout.footer')
    </footer>

</body>

</html>