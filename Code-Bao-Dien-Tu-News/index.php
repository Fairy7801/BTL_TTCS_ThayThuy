

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
                                    <form>
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
                                <a href="singlenews.php"><img src="img/bg-img/new1.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="singlenews.php" class="post-title">
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
                                <a href="singlenews.php"><img src="img/bg-img/new2.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="singlenews.php" class="post-title">
                                    <h6>Vua nhiếp ảnh kiến thức cô đọng, chụp ảnh tài ba, ảnh đẹp cự phách</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-date"><a href="#">3 ngày trước</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-4 d-flex align-items-center mb-50">
                            <div class="post-thumb">
                                <a href="singlenews.php"><img src="img/bg-img/new3.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="singlenews.php" class="post-title">
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

    <!-- ##### Tin mới & Nổi bật trong tuần Start ##### -->

    <!-- ##### Tin mới ##### -->
    <div class="featured-post-area">
        <div class="container">
            <div class="row">



                <!--Hiển thị 3-4 bài viết nổi bật nhất trong tuần qua-->

                <div class="col-8 col-md-6 col-lg-4">
                    <div class="popular-news-widget mb-30">
                        <h3>Nổi bật trong tuần</h3>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="singlenews.php">
                                <h6><span>1.</span> Kết nối chuyên gia quốc tế, thúc đẩy trí tuệ nhân tạo ở Việt Nam... .</h6>
                            </a>
                            <p>14 tháng 5 2019</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="singlenews.php">
                                <h6><span>2.</span> Kết nối chuyên gia quốc tế, thúc đẩy trí tuệ nhân tạo ở Việt Nam... .</h6>
                            </a>
                            <p>14 tháng 5 2019</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="singlenews.php">
                                <h6><span>3.</span> Kết nối chuyên gia quốc tế, thúc đẩy trí tuệ nhân tạo ở Việt Nam... .</h6>
                            </a>
                            <p>14 tháng 5 2019</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="singlenews.php">
                                <h6><span>4.</span> Kết nối chuyên gia quốc tế, thúc đẩy trí tuệ nhân tạo ở Việt Nam... </h6>
                            </a>
                            <p>14 tháng 5 2019</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <?php include 'connect.php';
                    $search = '';
                    if(isset($_GET['search'])){
                        $search = $_GET['search'];
                    }
                    $sql = "select *from news_detail where news_detail.title like '%$search%'";
                    $result = mysqli_query($connect, $sql);
                    $total_news = mysqli_num_rows($result);
                    $page_size = 3;
                    $total_page = ceil($total_news / $page_size);
                    $current_page = 1;
                    if(isset($_GET['page'])){
                        $current_page = $_GET['page'];
                    }
                    $offset = ($current_page - 1) * $page_size;

                    $sql = "$sql limit $page_size offset $offset";
                    $result = mysqli_query($connect, $sql);
                    ?>

                    <div class="special-area ">
                        <div style="display: block; margin : auto;">

                            <?php foreach ($result as $each) : ?>
                                <div class="between">
                                    <a href="category.php?idNews=<?php echo $each['idNews'] ?>" style="font-size :20px; margin-bottom:10px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #FF0033;">
                                        <strong><?php echo $each['title'] ?></strong>
                                    </a>
                                    <br>
                                    <div style="margin-bottom: 10px;">
                                        <?php echo substr($each['description'], 0, 100) ?>
                                        <a href="category.php?idNews=<?php echo $each['idNews'] ?>"><i>...Xem them</i></a>
                                        <img src="<?php echo $each['image'] ?>" alt="" width="200px" height="200px" style="display: block;">
                                        <?php echo $each['author'] ?>
                                        <?php echo $each['createDate'] ?>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                        <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                            <div style="display: inline-block;">
                            <a href="?page=<?php echo $i ?>&search=<?php echo $search ?>" style="color: black; float:left; padding: 8px 16px; text-decoration:none">
                                <?php echo $i ?>
                            </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- ##### Tin mới & Nổi bật trong tuần END  ##### -->
            <!-- ##### Nổi Bật & Mới mỗi chuyên mục Start ##### -->
            <div class="popular-news-area section-padding-80-50">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="section-heading">
                                <h6>Tin mới mỗi chuyên mục</h6>
                            </div>

                            <div class="row">

                                <!-- Single Post -->
                                <div class="col-12 col-md-6 ">
                                    <div class="single-blog-post style-3">
                                        <div class="post-thumb">
                                            <a href="singlenews.php"><img src="img/bg-img/13.jpg" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="category.php" class="post-catagory">Bóng Đá</a>
                                            <a href="singlenews.php" class="post-title">
                                                <h6>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều...</h6>
                                            </a>
                                            <div class="post-meta d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>256</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>55</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Post -->
                                <div class="col-12 col-md-6 ">
                                    <div class="single-blog-post style-3">
                                        <div class="post-thumb">
                                            <a href="singlenews.php"><img src="img/bg-img/13.jpg" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="category.php" class="post-catagory">Bóng Đá</a>
                                            <a href="singlenews.php" class="post-title">
                                                <h6>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều...</h6>
                                            </a>
                                            <div class="post-meta d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>256</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>55</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Post -->
                                <div class="col-12 col-md-6 ">
                                    <div class="single-blog-post style-3">
                                        <div class="post-thumb">
                                            <a href="singlenews.php"><img src="img/bg-img/13.jpg" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="category.php" class="post-catagory">Bóng Đá</a>
                                            <a href="singlenews.php" class="post-title">
                                                <h6>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều...</h6>
                                            </a>
                                            <div class="post-meta d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>256</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>55</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Post -->
                                <div class="col-12 col-md-6 ">
                                    <div class="single-blog-post style-3">
                                        <div class="post-thumb">
                                            <a href="singlenews.php"><img src="img/bg-img/13.jpg" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="category.php" class="post-catagory">Bóng Đá</a>
                                            <a href="singlenews.php" class="post-title">
                                                <h6>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều...</h6>
                                            </a>
                                            <div class="post-meta d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>256</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>55</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Post -->
                                <div class="col-12 col-md-6 ">
                                    <div class="single-blog-post style-3">
                                        <div class="post-thumb">
                                            <a href="singlenews.php"><img src="img/bg-img/13.jpg" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="category.php" class="post-catagory">Bóng Đá</a>
                                            <a href="singlenews.php" class="post-title">
                                                <h6>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều...</h6>
                                            </a>
                                            <div class="post-meta d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>256</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>55</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Post -->
                                <div class="col-12 col-md-6 ">
                                    <div class="single-blog-post style-3">
                                        <div class="post-thumb">
                                            <a href="singlenews.php"><img src="img/bg-img/13.jpg" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="category.php" class="post-catagory">Bóng Đá</a>
                                            <a href="singlenews.php" class="post-title">
                                                <h6>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều...</h6>
                                            </a>
                                            <div class="post-meta d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>256</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>55</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Post -->
                                <div class="col-12 col-md-6 ">
                                    <div class="single-blog-post style-3">
                                        <div class="post-thumb">
                                            <a href="singlenews.php"><img src="img/bg-img/13.jpg" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="category.php" class="post-catagory">Bóng Đá</a>
                                            <a href="singlenews.php" class="post-title">
                                                <h6>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều...</h6>
                                            </a>
                                            <div class="post-meta d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>256</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>55</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Post -->
                                <div class="col-12 col-md-6 ">
                                    <div class="single-blog-post style-3">
                                        <div class="post-thumb">
                                            <a href="singlenews.php"><img src="img/bg-img/13.jpg" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="category.php" class="post-catagory">Bóng Đá</a>
                                            <a href="singlenews.php" class="post-title">
                                                <h6>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều...</h6>
                                            </a>
                                            <div class="post-meta d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>256</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>55</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Post -->
                                <div class="col-12 col-md-6 ">
                                    <div class="single-blog-post style-3">
                                        <div class="post-thumb">
                                            <a href="singlenews.php"><img src="img/bg-img/13.jpg" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="category.php" class="post-catagory">Bóng Đá</a>
                                            <a href="singlenews.php" class="post-title">
                                                <h6>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều...</h6>
                                            </a>
                                            <div class="post-meta d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>256</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>55</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Post -->
                                <div class="col-12 col-md-6">
                                    <div class="single-blog-post style-3">
                                        <div class="post-thumb">
                                            <a href="#"><img src="img/bg-img/13.jpg" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="#" class="post-catagory">Bóng Đá</a>
                                            <a href="#" class="post-title">
                                                <h6>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều...</h6>
                                            </a>
                                            <div class="post-meta d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>120</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>7</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Tin nổi bật mỗi chuyên mục Start-->
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- Single Featured Post -->
                            <div class="section-heading">
                                <h6> Nổi bật mỗi chuyên mục</h6>
                            </div>
                            <div class="row section-padding-0-0">
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

                            <!-- Single Featured Post -->


                        </div>
                    </div>


                    <!-- ##### Nổi Bật & Mới mỗi chuyên mục  END ##### -->
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