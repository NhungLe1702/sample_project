<head>
    <link rel="stylesheet" href="views/template/css/add.css">
</head>

<body>
    <div class="add">
        <div class="add__title">
            <h2>Đăng nhập</h2>

        </div>

        <div class="add_link">
                <p>Chưa có tài khoản ?</p>
                <a class="link" href="index.php?url=dang_ky">Đăng Ký</a>
            </div>

        <form action="index.php?url=dang_nhap" method="POST" enctype="multipart/form-data">

            <div class="form__div">
                <label>Tên đăng nhập</label>
                <input type="text" name="user_name">
            </div>

            <div class="form__div">
                <label>Mật khẩu</label>
                <input type="password" name="password">
            </div>

            <div class="form__btn">
                <input class="save" type="submit" name="login" value="Đăng Nhập">
                <input type="reset" name="btn_reset" value="Reset">
            </div>
            
            
        </form>

    </div>
</body>