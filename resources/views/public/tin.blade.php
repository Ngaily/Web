<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        line-height: 1.6;
        background-color: #f9f9f9;
    }


    main {
        margin-top: 70px;
        padding: 20px 0;
        background-color: #fff;
    }

    .blog-header {
        text-align: center;
        padding: 20px 0;
        background: #f4f4f4;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .blog-header h2 {
        color: #24292e;
    }

    .blog-posts {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .blog-post {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: calc(33.333% - 20px);
        box-sizing: border-box;
    }

    .blog-post img {
        max-width: 100%;
        border-radius: 5px;
    }

    .blog-post h3 {
        color: #24292e;
        margin-top: 10px;
    }

    .blog-post p {
        color: #6a737d;
    }

    .blog-post a {
        color: #49c5b6;
        text-decoration: none;
    }

    .blog-post a:hover {
        color: #2b7a78;
    }


    ul.social-icons {
        padding: 0;
        display: flex;
        justify-content: center;
        list-style: none;
        margin-top: 10px;
    }

    ul.social-icons li {
        margin: 0 10px;
    }

    ul.social-icons a {
        color: #fff;
        font-size: 18px;
    }

    ul.social-icons a:hover {
        color: #ffdd57;
    }
    </style>
</head>

<body>
    @include('public.layout.menu')

    <main>
        <div class="container">
            <!-- Blog Header -->
            <section class="blog-header">
                <h1>Tin tức</h1>
                <p>Chào mừng đến với tin tức cuộc sống của chúng tôi, nơi chúng tôi chia sẻ những hiểu biết, mẹo và câu
                    chuyện về cuộc sống hàng ngày, sức khỏe và thể chất..</p>
            </section>

            <!-- Blog Posts -->
            <section class="blog-posts">
                <div class="blog-post">
                    <img src="https://cdn-i.vtcnews.vn/resize/th/upload/2024/07/20/anh-nem-cha-1-18265375.jpg" alt="">
                    <a href="{{'chitiet'}}">
                        <p class="text-info">Khởi tố kẻ đâm người trọng thương vì cạnh tranh mối bán hàng</p>
                    </a>
                    <p>Lượt xem: 10</p>
                    <em>
                        <p>Ngày đăng: 20/07/2024</p>
                    </em>
                    <!-- <a href="#">Read More</a> -->
                </div>
                <div class="blog-post">
                    <img src="https://cdn-i.vtcnews.vn/resize/th/upload/2024/07/20/chim-cano-17503909-18012321.jpg"
                        alt="">
                    <a href="{{'chitiet'}}">
                        <p class="text-info">Cano chìm ở đảo Cù Lao Chàm, 23 người thoát chết</p>
                    </a>
                    <p>Lượt xem: 12</p>
                    <em>
                        <p>Ngày đăng: 20/07/2024</p>
                    </em>
                </div>
                <div class="blog-post">
                    <img src="https://static-images.vnncdn.net/vps_images_publish/000001/000003/2024/7/20/fb-img-1721455396891-1469.jpg?width=0&s=fDfWB7p74vXZgptm99RaXA"
                        alt="Blog Post 3">
                    <a href="{{'chitiet'}}">
                        <p class="text-info">60 phút cứu du khách Mỹ bị ngã dưới hố sâu ở Phú Thọ</p>
                    </a>
                    <p>Tác giả: 20</p>
                    <em>
                        <p>Ngày đăng: 20/07/2024</p>
                    </em>
                </div>
                <div class="blog-post">
                    <img src="https://bcp.cdnchinhphu.vn/thumb_w/777/334894974524682240/2024/7/19/20namvnu-by-buituan-49-17214004689661799722356.jpg"
                        alt="Blog Post 4">
                    <a href="{{'chitiet'}}">
                        <p class="text-info">Một sự nghiệp vĩ đại được dẫn dắt bởi một con người bình dị</p>
                    </a>
                    <p>Lượt xem: </p>
                    <em>
                        <p>Ngày đăng: 20/07/2024</p>
                    </em>
                </div>
                <div class="blog-post">
                    <img src="https://image.sggp.org.vn/w820/Uploaded/2024/dufkxmeyxq/2024_07_20/20240720-1721452046-790-5088.jpeg.webp"
                        alt="Blog Post 5">
                    <a href="{{'chitiet'}}">
                        <p class="text-info">Sập cầu trong mưa xối xả, 11 người chết, hơn 30 người mất tích</p>
                    </a>
                    <p>Luượt xem: 8</p>
                    <em>
                        <p>Ngày đăng: 20/07/2024</p>
                    </em>
                </div>
                <div class="blog-post">
                    <img src="https://cdnmedia.baotintuc.vn/Upload/rGkvwNpj74Z1EcpzQ6ltA/files/2024/07/tuan5/vieng-20724.jpg"
                        alt="Blog Post 6">
                    <a href="{{'chitiet'}}">
                        <p class="text-info">Tổng Bí thư, Chủ tịch Trung Quốc Tập Cận Bình viếng Tổng Bí thư Nguyễn Phú
                            Trọng</p>
                    </a>
                    <p>Lượt xem: 6</p>
                    <em>
                        <p>Ngày đăng: 20/07/2024</p>
                    </em>
                </div>
            </section>
        </div>
    </main>

    @include('public.layout.footer')
</body>

</html>