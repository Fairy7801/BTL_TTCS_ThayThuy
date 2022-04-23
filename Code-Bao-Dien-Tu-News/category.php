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
                                <div class="login d-flex">
                                    <a href="dangnhap.php">Đăng nhập</a>
                                    <a href="dangky.php">Đăng ký</a>
                                </div>

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
                                    <li class="active">
                                        <a href="index.php">Trang chủ</a>
                                        <?php include 'connect.php';
                                        $sql = "select *from category";
                                        $result = mysqli_query($connect, $sql);
                                        ?>
                                        <?php foreach ($result as $each) : ?>
                                    <li class="active">
                                        <a href="paging.php?categoryID=<?php echo $each['idNews'] ?>">
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
                        <div class="single-blog-post style-3 d-flex align-items-center mb-50">
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
    <div class="col-lg-8" style="display:flexbox; width: 1100px; margin : auto;">
        <?php include 'connect.php';
        $idNews = $_GET['idNews'];
        $sql = "select *from news_detail where idNews = $idNews";
        $result = mysqli_query($connect, $sql);
        ?>
        <div class="special-area ">
            <div style="display: block; margin : auto;">
                <?php foreach ($result as $each) : ?>
                    <div class="between">
                        <a href="category.php?idNews=<?php echo $each['idNews'] ?>" style="font-size :25px; margin-bottom:10px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #FF0033;">
                            <strong><?php echo $each['title'] ?></strong>
                        </a>
                        <br>
                        <p style="font-size: 15px; font-family:Arial, Helvetica, sans-serif;">
                            <?php echo $each['author'] ?>
                            <?php echo $each['createDate'] ?>
                        </p>
                        <div style="margin-bottom: 10px;">
                        <p style="font-size: 20px; font-family:'Times New Roman', Times, serif; color:black"> <?php echo $each['description'] ?></p>   
                            <img src="<?php echo $each['image'] ?>" alt="" width="1100px" height="200px" style="display: block; margin:auto">
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- ##### CATEGORY ##### -->


    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <!-- ##### Các tin trong 1 category ##### -->
                <div class="col-12  col-lg-8">
                    <div class="category-posts-area ">
                        <div class="section-heading mt-50">
                            <h6>Thể Thao - Bóng Đá Việt Nam</h6>

                        </div>
                        <div class=""></div>
                        <!-- Single blog post -->
                        <div class="single-blog-post style-3 box-shadow d-flex align-items-center">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/bg-img/13.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="singlenews.php" class="headline">
                                    <h5>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều</h5>
                                </a>
                                <p>Sau khi hoàn tất thủ tục visa để sang một số nước châu Âu “soi giò” các cầu thủ Việt kiều, HLV Park Hang Seo hôm nay (4/5) chính thức lên đường...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Hoai Thi</a> Ngày đăng <a href="#" class="post-date"> 4/5/2019 lúc 9:48 sa</a></p>
                                </div>
                            </div>

                        </div>
                        <!-- Single blog post -->
                        <div class="single-blog-post style-3 box-shadow d-flex align-items-center">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/bg-img/13.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="singlenews.php" class="headline">
                                    <h5>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều</h5>
                                </a>
                                <p>Sau khi hoàn tất thủ tục visa để sang một số nước châu Âu “soi giò” các cầu thủ Việt kiều, HLV Park Hang Seo hôm nay (4/5) chính thức lên đường...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="singlenews.php" class="post-author">Hoai Thi</a> Ngày đăng <a href="#" class="post-date"> 4/5/2019 lúc 9:48 sa</a></p>
                                </div>
                            </div>

                        </div>
                        <!-- Single blog post -->
                        <div class="single-blog-post style-3 box-shadow d-flex align-items-center">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/bg-img/13.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="singlenews.php" class="headline">
                                    <h5>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều</h5>
                                </a>
                                <p>Sau khi hoàn tất thủ tục visa để sang một số nước châu Âu “soi giò” các cầu thủ Việt kiều, HLV Park Hang Seo hôm nay (4/5) chính thức lên đường...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Hoai Thi</a> Ngày đăng <a href="#" class="post-date"> 4/5/2019 lúc 9:48 sa</a></p>
                                </div>
                            </div>

                        </div>
                        <div class="single-blog-post style-3 box-shadow d-flex align-items-center">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/bg-img/13.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="singlenews.php" class="headline">
                                    <h5>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều</h5>
                                </a>
                                <p>Sau khi hoàn tất thủ tục visa để sang một số nước châu Âu “soi giò” các cầu thủ Việt kiều, HLV Park Hang Seo hôm nay (4/5) chính thức lên đường...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Hoai Thi</a> Ngày đăng <a href="#" class="post-date"> 4/5/2019 lúc 9:48 sa</a></p>
                                </div>
                            </div>

                        </div>
                        <div class="single-blog-post style-3 box-shadow d-flex align-items-center">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/bg-img/13.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="singlenews.php" class="headline">
                                    <h5>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều</h5>
                                </a>
                                <p>Sau khi hoàn tất thủ tục visa để sang một số nước châu Âu “soi giò” các cầu thủ Việt kiều, HLV Park Hang Seo hôm nay (4/5) chính thức lên đường...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Hoai Thi</a> Ngày đăng <a href="#" class="post-date"> 4/5/2019 lúc 9:48 sa</a></p>
                                </div>
                            </div>

                        </div>
                        <div class="single-blog-post style-3 box-shadow d-flex align-items-center">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/bg-img/13.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="singlenews.php" class="headline">
                                    <h5>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều</h5>
                                </a>
                                <p>Sau khi hoàn tất thủ tục visa để sang một số nước châu Âu “soi giò” các cầu thủ Việt kiều, HLV Park Hang Seo hôm nay (4/5) chính thức lên đường...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Hoai Thi</a> Ngày đăng <a href="#" class="post-date"> 4/5/2019 lúc 9:48 sa</a></p>
                                </div>
                            </div>

                        </div>
                        <div class="single-blog-post style-3 box-shadow d-flex align-items-center">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/bg-img/13.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="singlenews.php" class="headline">
                                    <h5>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều</h5>
                                </a>
                                <p>Sau khi hoàn tất thủ tục visa để sang một số nước châu Âu “soi giò” các cầu thủ Việt kiều, HLV Park Hang Seo hôm nay (4/5) chính thức lên đường...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Hoai Thi</a> Ngày đăng <a href="#" class="post-date"> 4/5/2019 lúc 9:48 sa</a></p>
                                </div>
                            </div>

                        </div>
                        <div class="single-blog-post style-3 box-shadow d-flex align-items-center">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/bg-img/13.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>Thầy Park chính thức “vi hành” ở châu Âu, soi giò cầu thủ Việt kiều</h5>
                                </a>
                                <p>Sau khi hoàn tất thủ tục visa để sang một số nước châu Âu “soi giò” các cầu thủ Việt kiều, HLV Park Hang Seo hôm nay (4/5) chính thức lên đường...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Hoai Thi</a> Ngày đăng <a href="#" class="post-date"> 4/5/2019 lúc 9:48 sa</a></p>
                                </div>
                            </div>

                        </div>


                    </div>
                    <!-- nav 1 2 3 4 5..-->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-50">
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="#">7</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="#">8</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="#">9</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="#">10</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="#">11</a>
                            </li>
                        </ul>
                    </nav>
                </div>


                <!--Các tin phổ biến -->
                <div class="col-12  col-lg-4">
                    <div class="popular-news-widget mt-100">
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
                                <a href="singlenews.php" class="post-title">
                                    <h6>Thời tiếng ngày 6/5: Miền Bắc và Trung nóng mức nàot ngày 22/4: Miền Bắc và Trung nóng mức nào</h6>
                                </a>
                                <p class="post-date"><span>7:00 Sáng</span> | <span>14 tháng tu</span></p>
                            </div>
                        </div>
                    </div>


                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="singlenews.php"><img src="img/bg-img/19.jpg" alt=""></a>
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
                            <a href="singlenews.php"><img src="img/bg-img/19.jpg" alt=""></a>
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
                            <a href="singlenews.php"><img src="img/bg-img/19.jpg" alt=""></a>
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
                            <a href="singlenews.php"><img src="img/bg-img/19.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">Thời tiết</a>
                            <div class="post-meta">
                                <a href="singlenews.php" class="post-title">
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
                                <a href="singlenews.php" class="post-title">
                                    <h6>Thời tiếng ngày 6/5: Miền Bắc và Trung nóng mức nàot ngày 22/4: Miền Bắc và Trung nóng mức nào</h6>
                                </a>
                                <p class="post-date"><span>7:00 Sáng</span> | <span>14 tháng tu</span></p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

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