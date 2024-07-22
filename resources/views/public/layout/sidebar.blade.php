<style>
.sidebar {
    padding: 20px;
    color: #333;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-height: 100vh;
    overflow-y: auto;
}

.sidebar::-webkit-scrollbar {
    width: 10px;
}

.sidebar::-webkit-scrollbar-track {
    background: #3A98B9;
    border-radius: 10px;
}

.sidebar::-webkit-scrollbar-thumb {
    background: #3A98B9;
    border-radius: 10px;
}

.sidebar::-webkit-scrollbar-thumb:hover {
    background: #ff4b3a;
}

.sidebar p {
    font-size: 1.2em;
    color: #555;
    background-color: #f0f0f0;
    border-radius: 5px;
    text-align: center;
}

.bv {

    border-left: 5px solid #007bff;
    border-radius: 5px;

}

.sidebar-content {
    margin-bottom: 30px;
}

.sidebar-content h3 {
    font-size: 1.5em;
    margin-bottom: 15px;
    color: #333;
}

.sidebar-content ul {
    list-style-type: none;
    padding: 0;
}

.sidebar-content ul li {
    margin-bottom: 10px;
}

.sidebar-content ul li a {
    color: #007bff;
    text-decoration: none;
    font-size: 1.1em;
}

.sidebar-content ul li a:hover {
    text-decoration: underline;
}

.sidebar-content img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
}

.sidebar-content form {
    display: flex;
    flex-direction: column;
}


.sidebar-content button {
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #ff6f61;
    color: #ffffff;
    font-size: 1em;
    cursor: pointer;
}

.sidebar-content button:hover {
    background-color: #ff4b3a;

}

.sidebar-content img {
    height: 200px;
}
</style>
<aside class="sidebar">
    <p>Thông tin bổ sung</p>
    <hr>
    <div class="sidebar-content">
        <p class="bv">Bài viết</p>
        <ul>
            <li><a href="#">Bài viết gần đây 1</a></li>
            <li><a href="#">Bài viết gần đây 2</a></li>
            <li><a href="#">Bài viết gần đây 3</a></li>
        </ul>
        <p class="bv">Danh mục</p>
        <ul>
            <li><a href="#">Danh mục 1</a></li>
            <li><a href="#">Danh mục 2</a></li>
            <li><a href="#">Danh mục 3</a></li>
        </ul>
    </div>
    <div class="sidebar-content">
        <!-- <img src="https://via.placeholder.com/300x250" alt="Ad"> -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://caodem.com/wp-content/uploads/2019/12/phong-nen-tin-tuc-thoi-su-caodem.com_.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://i.ytimg.com/vi/qxsqJwND3ss/maxresdefault.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://cntt.hunre.edu.vn/media/cntt/cache/data/ct2-cr-1200x630.jpg" class="d-block w-100"
                        alt="...">
                </div>
            </div>
        </div>
    </div>

</aside>
</aside>