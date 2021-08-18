<?php
$title = "Xu Hướng";
$link = "css/xu_huong.css";
include 'inc/header_full.php';
?>


<article>
    <section class="tin_xuHuong">
        <div class="anh_tin">
            <a href="bai_viet.html"> <img src="./images/xu_huong/photo-92222.png" alt=""></a>
        </div><!-- ảnh tin-->
        <div class="noidung_tin">
            <a href="bai_viet.html">
                <h3>Thời trang đẹp không có chỗ chê của mỹ nhân hàng đầu </h3>
            </a>
            <p class="date">28, Tháng Tư, 2016 10:15 Sáng</p>
            <p class="noidung_short">Không chỉ được mệnh danh là "Mỹ nhân đẹp nhất Philippines", nữ diễn viên Marian Rivera còn
                gây ấn tượng trong lòng công chúng bởi gu thời trang. Cô luôn giữ hình ảnh đẹp với những món
                đồ tinh tế, trong thời gian mang bầu cô cũng được đánh giá là mặc đẹp nhất trong giới giải
                trí nước này.</p>
        </div>
        <!--noi dung tin-->

    </section>
    <hr>
    <section class="tin_xuHuong">
        <div class="anh_tin">
            <a href=""> <img src="./images/xu_huong/photo-92222.png" alt=""></a>
        </div><!-- ảnh tin-->
        <div class="noidung_tin">
            <a href="">
                <h3>Thời trang đẹp không có chỗ chê của mỹ nhân hàng đầu </h3>
            </a>
            <p class="date">28, Tháng Tư, 2016 10:15 Sáng</p>
            <p class="noidung_short">Không chỉ được mệnh danh là "Mỹ nhân đẹp nhất Philippines", nữ diễn viên Marian Rivera còn
                gây ấn tượng trong lòng công chúng bởi gu thời trang. Cô luôn giữ hình ảnh đẹp với những món
                đồ tinh tế, trong thời gian mang bầu cô cũng được đánh giá là mặc đẹp nhất trong giới giải
                trí nước này.</p>
        </div>
        <!--noi dung tin-->

    </section>
    <hr>
    <?php
    $i=0;
    while($i<=7){
        $i++; ?>
    <section class="tin_xuHuong">
        <div class="anh_tin">
            <a href="bai_viet.html"> <img src="./images/xu_huong/photo-92222.png" alt=""></a>
        </div><!-- ảnh tin-->
        <div class="noidung_tin">
            <a href="bai_viet.html">
                <h3>Thời trang đẹp không có chỗ chê của mỹ nhân hàng đầu </h3>
            </a>
            <p class="date">28, Tháng Tư, 2016 10:15 Sáng</p>
            <p class="noidung_short">Không chỉ được mệnh danh là "Mỹ nhân đẹp nhất Philippines", nữ diễn viên Marian Rivera còn
                gây ấn tượng trong lòng công chúng bởi gu thời trang. Cô luôn giữ hình ảnh đẹp với những món
                đồ tinh tế, trong thời gian mang bầu cô cũng được đánh giá là mặc đẹp nhất trong giới giải
                trí nước này.</p>
        </div>
        <!--noi dung tin-->

    </section>
    <?php } ?>
    <hr>
   <hr>

    <!-- end col1 trending -->
    <section class="list_page">
        <ul>
            <li class="page_active"><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fas fa-chevron-right"></i></a></li>
        </ul>
    </section>
</article>

<!-- aside bar -->
<aside>
    <!-- side bar -->
    <?php include_once 'inc/sidebar.php' ?>
</aside>


<!--phần chân trang footer -->

<?php
include 'inc/footer_full.php';
?>