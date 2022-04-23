<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title -->
    <title>FITNEWS</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/iconweb.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">



</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                            </div>

                            <!-- Login Search Area -->
                            <div class="login-search-area d-flex align-items-center">
                                 <!-- Search Form -->
                                 <div class="search-form">
                                        <form action="#" method="post">
                                            <input type="search" name="search" class="form-control" placeholder="Tìm kiếm">
                                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                <!-- Login -->
                                <?php session_start() ?>
                                <?php
                                if(isset($_SESSION['userName'])){

                                
                                ?>
                                <div class="logined">
                                   <a href="#"><h3><?php echo $_SESSION['userName'] ?></h3></a>
                                </div>
                                <div class="avatar-dropdown d-flex">
                                    <a href="#" class="account" >
                                        <img src="img/bg-img/miniavatar-thanh.jpg" class="profile-circle"/>
                                        </a>
                                        <div class="submenu" style="display: none; ">
                                            <ul class="root">
                                                <li>
                                                    <a href="logout.php">Đăng Xuất</a>
                                                </li>
                                            </ul>
                                        </div>
                                </div>
                                <?php } else{ ?>
                                <div class="login d-flex">
                                        <a href="dangnhap.php">Đăng nhập</a>
                                        <a href="dangky.php">Đăng ký</a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newspaperNav">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="./index.php">Trang chủ</a></li>
                                    <li class="active"><a href="./index.php">Trang chủ</a></li>
                                    <?php include 'connect.php';
                                    $sql = "select *from category";
                                    $result = mysqli_query($connect, $sql);
                                    ?>
                                    <?php foreach ($result as $each) : ?>
                                        <li class="active">
                                            <a href="./paging.php?categoryID=<?php echo $each['idNews'] ?>">
                                                <?php echo $each['name'] ?>
                                            </a>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-slides owl-carousel">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-4 d-flex align-items-center mb-50">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/new1.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6>Thời điểm các cặp đôi thường ngoại tình</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-date"><a href="#">2 Ngày trước</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-4 d-flex align-items-center mb-50">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/new2.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6>Vua nhiếp ảnh kiến thức cô đọng, chụp ảnh tài ba, ảnh đẹp cự phách</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-date"><a href="#">3 ngày trước</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-3 d-flex align-items-center mb-50">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/new3.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6>Điều Khiển Màu Sắc Với 6 Cách Phối Màu Cơ Bản</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-date"><a href="#">2 Ngày trước</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### CATEGORY ##### -->

       
    <!-- <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                    <div class="col-12 col-lg-8">

                        <!-- Single news Start (in the right)-->
                        <div class="single-news mt-50">
                                <!-- Single Featured Post -->
                               <div class="single-blog-post featured-post single-post">
                                       <div class="post-data">
                                               <a href="#" class="post-catagory">Công nghệ</a>
                                               <a href="#" class="post-title">
                                                   <h6>Ly Na Trang khoe nhan sắc ‘mỏng manh tựa sương mai’ trong tà áo dài truyền thống</h6>
                                               </a>
                                               
                                               <div class="post-meta ">
                                                    <p><a style="display:inline" href="#" class="post-author">Lee NA</a> Ngày đăng<a href="#" class="post-date"> 2022-03-13 07:12:25</a></p>
                                                    <div class="bold-p">
                                                            <p class="bold-p">Phó giám đốc mảng nghiên cứu màn hình của Samsung đã xác nhận hãng đang phát triển camera đặt dưới màn hình và có thể ra thị trường sau 2 năm nữa.</p>
                                                    </div>   
                                                    <p>Lúc này, các hãng điện thoại đang tìm cách cải tiến màn hình và thiết kế. 
                                                        Để đạt được thiết kế tràn viền nhất có thể, các hãng phải điều chỉnh vị trí 
                                                        cụm camera trước, dẫn đến những thiết kế camera pop-up, khoét lỗ, giọt nước 
                                                        và thậm chí là camera trượt. Tuy nhiên, chưa có phương án nào thực sự tối ưu.
                                                    </p>
                                                    <p>Gần đây, báo chí Hàn Quốc cho biết Samsung đang trong quá trình sáng tạo công 
                                                        nghệ màn hình “tràn viền tuyệt đối”. Ông Yang Buyng-duk, Phó Giám đốc mảng nghiên
                                                         cứu màn hình của hãng, cũng đã xác nhận thông tin này vài tuần trước.
                                                    </p>
                                                    <p>Khi những tin đồn về việc Samsung đặt cảm biến và camera bên dưới màn hình bắt đầu xuất hiên, nhiều người đã tưởng tượng nó sẽ mang lại một không gian hiển thị liền mạch. Nhưng kết quả vẫn chỉ dừng lại ở màn hình Infinity-O như chúng ta thấy hiện nay.

                                                    </p>
                                                    <div class="post-thumb mb-30">
                                                            <a href="#"><img src="img/bg-img/samsum.jpg" alt=""></a>
                                                    </div>
                                                    <p>Ngay cả chính Samsung cũng thừa nhận rằng việc “khoan” một lỗ trên màn hình OLED là vô cùng khó khăn, song đây là lựa chọn tốt nhất của hãng ở thời điểm bấy giờ. Tuy nhiên, với mục tiêu xoá bỏ "tai thỏ" và "lỗ khoét", tất cả những linh kiện ở mặt trước sẽ được mang xuống dưới tấm nền hiển thị. Việc này giúp Samsung có được màn hình đạt 100% tỷ lệ mặt trước mà vẫn đảm bảo trải nghiệm nhìn hoàn hảo cho thiết bị.

                                                    </p>
                                                    <p>Màn hình vẫn sẽ dùng để hiển thị thông tin như bình thường. Nhưng khi tính năng chụp ảnh được kích hoạt, 
                                                        tấm nền hiển thị sẽ trở nên trong suốt, cho phép người dùng có thể chụp ảnh bằng camera bên dưới.
                                                    </p>
                                                    <p>
                                                            “Tuy chưa thể thương mại hoá trong 1-2 năm tới, công nghệ này vẫn hứa hẹn có thể tiến xa hơn tới khi nào lỗ khoét camera biến mất hoàn toàn”, ông Yang nói.
                                                    </p>
                                                    <p>
                                                            Ông cũng cho biết Samsung đang phát triển màn hình OLED Crystal Sound, gộp chung tấm nền hiển thị với loa ngoài như cách LG đã làm trên chiếc G8 ThinQ. Các smartphone trong tương lai cũng sẽ có khả năng quét vân tay siêu âm ở bất cứ đâu trên màn hình, thay vì bị giới hạn ở một vài vị trí nhất định.
                                                    </p>
                                                    <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                                            <!-- Tags -->
                                                            <div class="newspaper-tags d-flex">
                                                                <span>Thẻ:</span>
                                                                <ul class="d-flex">
                                                                    <li><a href="#">Công nghệ,</a></li>
                                                                    <li><a href="#">Giải trí,</a></li>
                                                                   
                                                                </ul>
                                                            </div>
                    
                                                            <!-- Post Like & Post Comment -->
                                                            <div class="d-flex align-items-center post-like--comments">
                                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                                            </div>
                                                     </div>
                                                </div>
                                               
                                               

                           </div>
                           
                     </div>
                       <!-- Comment Area Start -->
                       <div class="comment_area ">
                            <h5 class="title">3 Bình luận</h5>

                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/miniavatar.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author">Hoài Thi</a>
                                            <a href="#" class="post-date">Ngày 3 tháng 5, 2019</a>
                                            <p>Samsum sẽ sớm bị các hãng china làm trước ý tưởng này thôi.</p>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="single_comment_area">
                                            <!-- Comment Content -->
                                            <div class="comment-content d-flex">
                                                <!-- Comment Author -->
                                                <div class="comment-author">
                                                    <img src="img/bg-img/miniavatar.jpg" alt="author">
                                                </div>
                                                <!-- Comment Meta -->
                                                <div class="comment-meta">
                                                        <a href="#" class="post-author">Hoài Thi</a>
                                                        <a href="#" class="post-date">Ngày 3 tháng 5, 2019</a>
                                                        <p>Samsum sẽ sớm bị các hãng china làm trước ý tưởng này thôi.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/miniavatar.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                                <a href="#" class="post-author">Hoài Thi</a>
                                                <a href="#" class="post-date">Ngày 3 tháng 5, 2019</a>
                                                <p>Samsum sẽ sớm bị các hãng china làm trước ý tưởng này thôi.</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <div class="post-a-comment-area section-padding-80-0">
                            <h4>Để lại bình luận</h4>
                            
                            <!-- Reply Form -->
                            <div class="contact-form-area">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <input type="text" class="form-control" id="Tên" placeholder="Tên*">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <input type="email" class="form-control" id="email" placeholder="Email*">
                                        </div>
                                        
                                        <div class="col-12">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Bình luận"></textarea>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class="btn newspaper-btn mt-30 w-100" type="submit">Gửi bình luận</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                      </div>
                    </div>
                
                
                 
         </div>
                    
                        
                        


               
         <!--Các tin phổ biến (in the left) -->
                <div class="col-12  col-lg-4">
                        <div class="popular-news-widget mt-100">
                                <h3>Nổi bật trong tuần</h3>
        
                                <!-- Single Popular Blog -->
                                <div class="single-popular-post">
                                    <a href="#">
                                        <h6><span>1.</span> Kết nối chuyên gia quốc tế, thúc đẩy trí tuệ nhân tạo ở Việt Nam...                                         .</h6>
                                    </a>
                                    <p>14 tháng 5 2019</p>
                                </div>
        
                                <!-- Single Popular Blog -->
                                <div class="single-popular-post">
                                    <a href="#">
                                        <h6><span>2.</span> Kết nối chuyên gia quốc tế, thúc đẩy trí tuệ nhân tạo ở Việt Nam...                                           .</h6>
                                    </a>
                                    <p>14 tháng 5 2019</p>
                                </div>
        
                                <!-- Single Popular Blog -->
                                <div class="single-popular-post">
                                    <a href="#">
                                        <h6><span>3.</span> Kết nối chuyên gia quốc tế, thúc đẩy trí tuệ nhân tạo ở Việt Nam...                                           .</h6>
                                    </a>
                                    <p>14 tháng 5 2019</p>
                                </div>
        
                                <!-- Single Popular Blog -->
                                <div class="single-popular-post">
                                    <a href="#">
                                        <h6><span>4.</span> Kết nối chuyên gia quốc tế, thúc đẩy trí tuệ nhân tạo ở Việt Nam... </h6>
                                    </a>
                                    <p>14 tháng 5 2019</p>
                                </div>
                        </div>
                        <div class="section-heading style-2">
                                <h6> Nổi bật mỗi chuyên mục</h6>
                            </div>
                            
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Xã Hội</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Thời tiếng ngày 6/5: Miền Bắc và Trung nóng mức nàot ngày 22/4: Miền Bắc và Trung nóng mức nào</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 Sáng</span> | <span>14 tháng tu</span></p>
                                    </div>
                                </div>
                            </div>
        
                           
                             <!-- Single Featured Post -->
                             <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Thời tiết</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Thời tiếng ngày 6/5: Miền Bắc và Trung nóng mức nàot ngày 22/4: Miền Bắc và Trung nóng mức nào</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 Sáng</span> | <span>14 tháng tu</span></p>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Featured Post -->
                             <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Thời tiết</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Thời tiếng ngày 6/5: Miền Bắc và Trung nóng mức nàot ngày 22/4: Miền Bắc và Trung nóng mức nào</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 Sáng</span> | <span>14 tháng tu</span></p>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Featured Post -->
                             <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Thời tiết</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Thời tiếng ngày 6/5: Miền Bắc và Trung nóng mức nàot ngày 22/4: Miền Bắc và Trung nóng mức nào</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 Sáng</span> | <span>14 tháng tu</span></p>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Featured Post -->
                             <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Thời tiết</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Thời tiếng ngày 6/5: Miền Bắc và Trung nóng mức nàot ngày 22/4: Miền Bắc và Trung nóng mức nào</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 Sáng</span> | <span>14 tháng tu</span></p>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Featured Post -->
                             <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Thời tiết</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Thời tiếng ngày 6/5: Miền Bắc và Trung nóng mức nàot ngày 22/4: Miền Bắc và Trung nóng mức nào</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 Sáng</span> | <span>14 tháng tu</span></p>
                                    </div>
                                </div>
                            </div>
                         </div>
        
        
           
        </div>
    <!-- </div> --> -->
    

    <!-- Footer -->
<footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="#"> FITNEWS</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->



    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
