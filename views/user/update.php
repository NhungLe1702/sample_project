<head>
    <link rel="stylesheet" href="views/template/css/add.css">
</head>

<body>
    <div class="add">
        <div class="add__title">
            <h2>Cập Nhật</h2>

        </div>

        <div class="add_link">
            <a class="add_link" href="index.php?url=trang_chu">Trở về trang chủ</a>
        </div>

        <form action="index.php?url=update_user_info" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="ma_kh" value="<?= $user['ma_kh'] ?>">
            
            <div class="form__div">
                <label>Họ tên</label>
                <input type="text" name="full_name" value="<?= $user['ho_ten'] ?>">
            </div>

            <div class="form__div">
                <label>Tên đăng nhập</label>
                <input type="text" name="user_name" value="<?= $user['ma_kh'] ?>">
            </div>

            <div class="form__div">
                <label>Mật khẩu</label>
                <input type="password" name="password" value="<?= $user['mat_khau'] ?>">
            </div>

            <div class="form__div">
                <label>Email</label>
                <input type="email" name="email" value="<?= $user['email'] ?>">
            </div>
            <div class="form__btn">
                <input class="save" type="submit" name="update" value="Cập Nhật">
                <input type="reset" name="btn_reset" value="Reset">
            </div>
            <?php
            if (isset($alert)) {
                echo "<h3>$alert</h3>";
            }
            ?>
            
        </form>

    </div>
</body>