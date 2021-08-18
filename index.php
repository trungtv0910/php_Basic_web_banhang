<!DOCTYPE html>
<html lang="en">
<?php 
    require "database.php";
    $sql="SELECT * from sanpham limit 12";
    $result= $db-> query($sql);

    $sql2="SELECT * from sanpham order by maSP DESC limit 4";
    $result2= $db-> query($sql2);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/1.css">
    <link rel="stylesheet" href="./plugin/fontawesome/css/all.css">
  
    <title>Home</title>
</head>

<body>
    <div class="wraper">
         <!-- mở đầu phần header -->
         <?php include_once 'inc/header.php' ?>
       <!-- end header -->
     

        <!-- phần banner  -->
        <section class="banner  mg_top">
            <img src="./images/slider8.png" alt="">
        </section>

        <!-- phần main chính trang web -->
        <main class="container">
            <section class="intro">
                <ul>
                    <li>
                        <button class="btn_intro bg1">Free ship nội thành</button>
                        <div class="icon ic1"><i class="fas fa-shopping-cart"></i></div>
                    </li>
                    <li>
                        <button class="btn_intro bg2">Tặng thẻ thành viên</button>
                        <div class="icon ic2"><i class="fas fa-gift"></i></div>
                    </li>
                    <li>
                        <button class="btn_intro bg3">Giảm giá 20% cuối tuần</button>
                        <div class="icon ic3"><i class="fab fa-telegram-plane"></i></div>
                    </li>
                </ul>
            </section>
            <!--intro-->



            <!-- col1 slide_trending -->
            <section class="col1 slide_trending">
                <p class="title">SẢN PHẦM NỔI BẬC</p>

                <ul class="product">
            <?php
                while($rs2=$result2->fetch()){
            ?>
                 <li>
                        <div class="img_product">
                          <img src="./images/<?php echo $rs2['image'] ?>" alt="">
                         <!-- hiệu ứng khi hover vào ảnh -->
                           <div class="xem_them">
                             <a href="product_detail.php?maSP=<?php echo $rs2['maSP'] ?>">Xem Sản Phẩm</a>
                            <div class="nen_den"></div>
                           </div> <!--hover vào xuất hiên xem thêm-->
                        </div>
                        <p class="title_product"><?php echo $rs2['tenSP'] ?></p>
                        <p class="price_product"><?php echo number_format($rs2['donGia']) ?> VNĐ</span></p>
                       <a href="addcart.php?maSP=<?php echo $rs2['maSP'] ?>"> <button class="btn_product">THÊM GIỎ HÀNG</button></a>
                </li>
            <?php } ?>

                    
                </ul>
                <!-- nút slide trái và phải -->
                <div class="all_nut">
                    <div id="nut_trai" class="nut_trai">
                        <img src="./images/left.png" alt="">
                    </div>
                    <div id="nut_phai" class="nut_phai">
                        <img src="./images/right.png" alt="">
                    </div>
                </div>

            </section>
            <!-- end col1 trending -->


            <!-- col2 thời trang thu đông -->
            <section class="col2 ">
                <p class="title">THỜI TRANG THU ĐÔNG</p>

                <ul class="product">

                <?php 
                while($rs=$result->fetch()){
                ?>
                    <li>
                       <div class="img_product">
                        <img src="./images/<?php echo $rs['image']?>" alt="">
                        <div class="xem_them">
                                <a href="product_detail.php?maSP=<?php echo $rs['maSP'] ?>">Xem Sản Phẩm</a>
                               <div class="nen_den"></div>
                              </div> <!--hover vào xuất hiên xem thêm-->
                        </div>
                        <p class="title_product"><?php echo $rs['tenSP']?></p>
                        <p class="price_product"><?php echo number_format($rs['donGia'])?> VNĐ</p>

                        <a href="addcart.php?maSP=<?php echo $rs['maSP']?>"><button class="btn_product">THÊM GIỎ HÀNG</button></a>
                        
                    </li>
                <?php } ?>
                   
                </ul>


            </section>
            <!-- end col2 thời trang thu đông-->

            <!-- start col3 xu hướng -->

            <section class="col3 xu_huong">
                <p class="title">XU HƯỚNG</p>
                <ul class="col3_list_hot">
                    <li>
                        <div class="img_hot">
                            <img src="./images/tamara-bellis-189599.png" alt="">
                        </div>
                        <p class="title_product">Phong cách thời trang cơ bản mà bạn nên biết?</p>
                        <p class="content_product">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum
                            molestias obcaecati consequuntur aperiam. Excepturi voluptate rem consequuntur porro soluta
                            ratione </p>
                    </li>
                    <li>
                        <div class="img_hot">
                            <img src="./images/brooke-cagle-39376.png" alt="">
                        </div>
                        <p class="title_product">Phong cách thời trang cơ bản mà bạn nên biết?</p>
                        <p class="content_product">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum
                            molestias obcaecati consequuntur aperiam. Excepturi voluptate rem consequuntur porro soluta
                            ratione </p>
                    </li>
                    <li>
                        <div class="img_hot">
                            <img src="./images/doodoosonic-97679.png" alt="">
                        </div>
                        <p class="title_product">Phong cách thời trang cơ bản mà bạn nên biết?</p>
                        <p class="content_product">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum
                            molestias obcaecati consequuntur aperiam. Excepturi voluptate rem consequuntur porro soluta
                            ratione </p>
                    </li>
                </ul>

            </section>
            <!-- end col3 xu hướng -->

        </main>
        <section class="col4 khuyen_mai">
            <div class="container">
                <h3>ĐĂNG KÝ ĐỂ NHẬN KHUYẾN MÃI</h3>
                <p>Đăng ký để nhận thêm thông tin khuyến mãi mới nhất</p>


                <div id="input_dk">
                    <form>
                        <input type="text" placeholder="NHẬP EMAIL CỦA BẠN">
                        <!-- <br /> -->
                        <input type="submit" style="float: right;">
                    </form>
                </div>

            </div>
        </section>
        <!--col4 đăng ký để nhận khuyến mãi-->

        <!-- footer -->
        <?php include_once'inc/footer.php' ?>
        <!-- end footer -->

    </div>
    <!--wraper-->


    <script src="js/js.js"></script>
    <script>
        // hiệu ứng javascript slide 
        var slide=document.getElementsByClassName('product')[0];

        var nut_trai=document.getElementById('nut_trai');
        var nut_phai=document.getElementById('nut_phai');

        //  hiệu ứng khi click vào nút phải
        nut_phai.addEventListener('click',click_nutPhai);
        function click_nutPhai() {
         var child=slide.children[0];
        slide.removeChild(child);
        slide.appendChild(child);   
        };

//  hiệu ứng khi click vào nút trái
        nut_trai.addEventListener('click',click_nutTrai);
        function click_nutTrai(){
        var child=slide.children[3];
        var next_child=slide.children[0];
            slide.removeChild(child);
            slide.insertBefore(child,next_child);
}
// chế độ tự động chạy khi không click
// setInterval(function(){ click_nutTrai(); }, 3000);
    </script>
</body>

</html>