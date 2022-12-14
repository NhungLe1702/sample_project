<?php

?>


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
            <h2>Thêm mới khách hàng</h2>
            
        </div>

        <div class="add_link">
             <a class="link" href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=ds_khach_hang">Danh sách</a>
        </div>

        <form action="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=them_khach_hang" method="POST" enctype="multipart/form-data">

            <div class="form__div">
                <label>Tên Khách hàng</label>
                <input type="text" name="name">
            </div>

            <div class="form__div">
                <label>Mật khẩu</label>
                <input type="number" name="mat_khau">
            </div>

            <div class="form__div">
                <label>Kích hoạt</label>
                <input type="number" name="kich_hoat">
            </div>

            <div class="form__div">
                <label>Ảnh đại diện</label>
                <input type="file" name="img_upload">
            </div>

            <div class="form__div">
                <label>Email</label></label>
                <input type="text" name="email">
            </div>

            <div class="form__div">
                <label>Vai trò</label>
                <input type="number" name="vai_tro">
            </div>


            <div class="form__btn">
                <input class="save" type="submit" name="btn_save" value="Save">
                <input type="reset" name="btn_reset" value="Reset">
            </div>

        </form>
    </div>
</body>

</html>