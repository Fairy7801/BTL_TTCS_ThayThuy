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
            <div class="classy-nav-container breakpoint-offz">
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
    <div class="paging" style="display:flexbox; width: 1100px; margin : auto;">
        <?php
        $categoryID = $_GET['categoryID'];
        $connect = mysqli_connect('localhost', 'root', '', 'website');
        $sql = "select *from news_detail join category on category.idNews = news_detail.categoryID where category.idNews = $categoryID";
        $result = mysqli_query($connect, $sql);
        ?>
        <?php foreach ($result as $each) { ?>
            <a href="singlenews.php?idNews=<?php echo $each['idNews'] ?>">
                <h1 style="font-family: 'Times New Roman', Times, serif; color: #FF0033">
                    <?php echo $each['title'] ?>
                </h1>
            </a>
            <p style="font-size: 13px; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                <?php echo $each['author'] ?>
                <?php echo $each['createDate'] ?>
            </p>
            <p style="font-family:'Times New Roman', Times, serif; font-size: 19px; color:black">
                <?php echo $each['description'] ?>
                <img src="<?php echo $each['image'] ?>" alt="" style="display: block; margin:auto;" height="200px" width="1100px">
            </p>
        <?php } ?>
        <?php mysqli_close($connect); ?>
    </div>
    <!-- ##### Hero Area Start ##### -->
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Tin mới & Nổi bật trong tuần Start ##### -->

    <!-- ##### Tin mới ##### -->
    <!-- ##### Tin mới & Nổi bật trong tuần END  ##### -->
    <!-- ##### Nổi Bật & Mới mỗi chuyên mục Start ##### -->


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