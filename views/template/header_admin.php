<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/template/css/header.css">

    <link rel="stylesheet" href="views/template/icon/css/all.css">
</head>
<body>
<header>
        <div class="header__top">
            <div class="ps-container">
                <div class="container_box">
                    <div class="header__logo">
                        <a class="logo" href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=trang_chu">
                            <img src="views/template/images/Screen Shot 2022-10-03 at 23.38.40.png" alt="">
                        </a>
                    </div>

                    <?php if (isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                    ?>
                        <?php if ($vai_tro == 1) { ?>
                            <nav>
                                <div class="header__menu">
                                <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=ds_san_pham">Sản phẩm</a></li>
                                <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=ds_danh_muc">Danh mục</a></li>
                                <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=ds_khach_hang">Khách hàng</a></li>
                                <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=binh_luan">Bình luận</a></li>
                                <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=thong_ke">Thống kê</a></li>
                                </div>
                            </nav>
                        <?php } else {?>
                            <nav>
                                <div class="header__menu">
                                    <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=trang_chu">Trang chủ</a></li>
                                    <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=san_pham">Sản phẩm</a></li>
                                    <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=gioi_thieu">Giới thiệu</a></li>
                                    <!-- <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=lien_he">Liên hệ</a></li> -->
                                    <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=hoi_dap">Hỏi đáp</a></li>
                                    
                                </div>
                            </nav>
                        <?php  } ?>
                    <?php } else { ?>
                            <nav>
                                    <div class="header__menu">
                                        <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=trang_chu">Trang chủ</a></li>
                                        <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=san_pham">Sản phẩm</a></li>
                                        <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=gioi_thieu">Giới thiệu</a></li>
                                        <!-- <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=lien_he">Liên hệ</a></li> -->
                                        <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=hoi_dap">Hỏi đáp</a></li>
                                       
                                    </div>
                                </nav>
                    <?php }?>    

                    <div class="header__tool">
                        <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                        <div class="bag">
                            <i class="fa-solid fa-bag-shopping"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>