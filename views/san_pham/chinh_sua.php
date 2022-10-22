<?php

?>


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
            <h2>Sửa sản phẩm</h2>
        </div>

        <div class="add__link">
            <a class="link" href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=ds_san_pham">Danh sách</a>
        </div>

        <form action="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=update_san_pham" method="POST" enctype="multipart/form-data">

            <div class="form__div">
                <label>Mã hàng hoá</label>
                <input type="text" value="<?php echo $lay_sp['ma_hh']; ?>" name="ma_hh">
            </div>

            <div class="form__div">
                <label>Tên hàng hoá</label>
                <input type="text" value="<?php echo $lay_sp['ten_hh']; ?>" name="name">
            </div>

            <div class="form__div">
                <label>Đơn giá</label>
                <input type="number" value="<?php echo $lay_sp['don_gia']; ?>" name="don_gia">
            </div>

            <div class="form__div">
                <label>Giảm giá</label>
                <input type="number" value="<?php echo $lay_sp['giam_gia']; ?>" name="giam_gia">
            </div>

            <div class="form_div">
                <label>Image</label>
                <div class="img">
                    <img src="views/template/images/san_pham/<?php echo $lay_sp['hinh'] ?>">
                </div>
            </div>

            <div class="form__div">
                <label>Image</label>
                <input type="file" name="img_upload">
            </div>

            <div class="form__div">
                <label>Ngày nhập</label>
                <input type="date" value="<?php echo $lay_sp['ngay_nhap']; ?>" name="ngay_nhap">
            </div>

            <div class="form__div">
                <label>Mô tả</label>
                <input type="text" value="<?php echo $lay_sp['mo_ta']; ?>" name="mo_ta">
            </div>

            <div class="form__div">
                <label>Đặc biệt</label>
                <input type="number" value="<?php echo $lay_sp['dac_biet']; ?>" name="dac_biet">
            </div>

            <div class="form__div">
                <label>Số lượt xem</label>
                <input type="number" value="<?php echo $lay_sp['so_luot_xem']; ?>" name="luot_xem">
            </div>

            <div class="form__div">
                <label>Loại</label>
                <select name="ma_loai">
                    <?php foreach (layDSDanhMuc() as $key => $value) { ?>
                        <option value="<?php echo $value["ma_loai"] ?>" <?php echo ($value["ma_loai"] == $lay_sp['ma_loai']) ? 'selected' : "" ?>>
                            <?php echo $value["ten_loai"] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="form__btn">
                <input type="hidden" name="id" value="<?php echo $lay_sp['ma_hh'] ?>">
                <input class="save" type="submit" name="btn_save" value="Edit">
                <!-- <input type="reset" name="btn_reset" value="Reset"> -->
            </div>

        </form>
    </div>
</body>

</html>