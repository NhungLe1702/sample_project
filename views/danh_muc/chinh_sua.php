<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/template/css/edit.css">
</head>

<body>
    <div class="add">
        <div class="add__title">
            <h2>Thêm mới danh mục</h2>

        </div>

        <div class="add__link">
            <a class="link" href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=ds_danh_muc">Danh sách</a>
        </div>

        <form action="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=update_danh_muc" method="POST" enctype="multipart/form-data">
            <div class="form__div">
                <label>Mã loại</label>
                <input type="text" value="<?php echo $lay_dm['ma_loai'] ?>" name="ma_loai">
            </div>

            <div class="form__div">
                <label>Tên loại</label>
                <input type="text" value="<?php echo $lay_dm['ten_loai'] ?>" name="name">
            </div>

            <div class="form__btn">
                <input type="hidden" name="id" value="<?php echo $lay_sp['ma_loai'] ?>">
                <input class="save" type="submit" name="btn_save" value="Save">
                <!-- <input type="reset" name="btn_reset" value="Reset"> -->
            </div>



        </form>
    </div>
</body>

</html>