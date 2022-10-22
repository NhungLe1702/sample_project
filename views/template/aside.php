<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="views/template/css/header.css">

    <link rel="stylesheet" href="views/template/icon/css/all.css">
    <style>
        aside {
            min-height: 1500px;
        }
    </style>
</head>
<body>
    <aside>
        <div class="account">
            <div class="title">
                <p>Tài khoản</p>
            </div>

            <form class="form-login">
                <div class="form-group">
                    <legend>Tên đăng nhập</legend>
                    <input type="text">
                </div>

                <div class="form-group">
                    <legend>Mật khẩu</legend>
                    <input type="password">
                </div>


                <div class="save_account">
                    <input type="checkbox" name="" id="">
                    <label>Ghi nhớ tài khoản</label>
                </div>

                <button>Đăng nhập</button>

                <div class="forget-account">
                    <li><a href="#">Quên mật khẩu</a></li>
                    <li><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=dang_ky">Đăng kí thành viên</a></li>
                </div>
            </form>
        </div>

        <div class="search_pro">
            <div class="title">
                <p>Tìm kiếm</p>
            </div>

            <div class="aside-list">
                <form action="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=tim_kiem_san_pham" method="post">
                    <div class="box_search">
                        <input type="text" name="tu_khoa">
                    </div>
                   
                    <div class="btn_search">
                        <input type="submit" name="tim_kiem" value="Search">
                    </div>
                    
                </form>
                
            </div>
        </div>

        <div class="category">
            <div class="title">
                <p>Danh mục</p>
            </div>
            <div class="aside-list">
                <?php foreach (layDSDanhMuc() as $key => $value) { ?>
                    
                    <li>
                        <a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=ds_san_pham_theo_dm&id=<?php echo $value['ma_loai'] ?>">
                            <?php echo $value['ten_loai'] ?>
                        </a>
                    </li>
                <?php } ?>
            </div>
        </div>

        <div class="favorite_product">
            <div class="title">
                <p>Top 10 sản phẩm yêu thích</p>
            </div>
            <div class="aside-list">
                <?php foreach (top10SanPham() as $key => $value) { ?>   
                    <li>
                        <a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=chi_tiet_sp&id=<?php echo $value['ma_hh'] ?>&id_loai=<?php echo $value['ma_loai']?>">
                            <?php echo $value['ten_hh'] ?>
                        </a>
                    </li>
                <?php } ?>
            </div>
        </div>
    </aside>
</body>
</html>