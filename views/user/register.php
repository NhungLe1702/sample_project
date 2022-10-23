<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/template/css/add.css">
</head>
<body>
    <div class="add">   
        <div class="add__title">
            <h2>Đăng ký thành viên</h2>
        </div>

        <div class="add_link">
                <p>Đã có tài khoản ?</p>
                <a class="link" href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=dang_nhap">Đăng nhập</a>
        </div>
        
        <form action="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=dang_ky" method="POST" enctype="multipart/form-data">
            <div class="form__div">
                <label>Họ tên</label>
                <input type="text" name="full_name">
            </div>
            <div class="form__div">
                <label>Tên đăng nhập</label>
                <input type="text" name="user_name">
            </div>
            <div class="form__div">
                <label>Mật khẩu</label>
                <input type="password" name="password">
            </div>
            
            <div class="form__div">
                <label>Email</label>
                <input type="email" name="email">
            </div>
            <div class="form__btn">
                <input class="save" type="submit" name="register" value="Đăng Ký">
                <input type="reset" name="btn_reset" value="Reset">
            </div>
            
        </form>
    </div>
</body>
</html>