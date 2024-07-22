<style>
footer {
    background-color: #3A98B9;
    color: #fff;
    padding-top: 20px;
    text-align: center;

}

.footer-content {
    display: flex;
    /* flex-wrap: wrap; */
    /* justify-content: space-between; */
}

.footer-section {
    flex: 1 1 300px;
    margin-bottom: 20px;
}

.footer-section h3 {
    font-size: 18px;
    margin-bottom: 15px;
}

.footer-section p {
    font-size: 14px;
    line-height: 1.6;
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

.footer-section ul {
    padding: 0;
    list-style: none;
}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-section ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 14px;
}

.footer-section ul li a:hover {
    color: #ffdd57;
}

.footer-bottom {
    margin-top: 20px;
    border-top: 1px solid #fff;
    padding-top: 10px;
}

.footer-bottom p {
    margin: 0;
    font-size: 14px;
}
</style>
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-section about">
                <h3>Về chúng tôi</h3>
                <p>Chào mừng bạn đến với Blog làm đẹp, nơi chia sẻ các bí quyết làm đẹp và tin tức thời trang mới
                    nhất.</p>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>

            <div class="footer-section links">
                <h3>Liên kết nhanh</h3>
                <ul>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Sắc đẹp</a></li>
                    <li><a href="#">Thời trang</a></li>
                </ul>
            </div>

            <div class="footer-section contact">
                <h3>Liên hệ</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Địa chỉ: 116 Nguyễn Huy Tưởng, Hoà An, Cẩm Lệ, Đà Nẵng
                    </li>
                    <li><i class="fas fa-envelope"></i> Email: info@example.com</li>
                    <li><i class="fas fa-phone"></i> Điện thoại: +123456789</li>
                </ul>
            </div>
        </div>
    </div>
</footer>


</body>

</html>
<script>
$('.carousel').carousel()
</script>