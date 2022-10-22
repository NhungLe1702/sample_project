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
            <h2>Tạo mới sản phẩm</h2>
        </div>

        <div class="add_link">
            <a class="link" href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=ds_san_pham">Danh sách</a>
        </div>

        <form action="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=them_san_pham" method="POST" enctype="multipart/form-data">

            <div class="form__div">
                <label>Tên hàng hoá</label>
                <input type="text" name="name">
            </div>

            <div class="form__div">
                <label>Đơn giá</label>
                <input type="number" name="don_gia">
            </div>

            <div class="form__div">
                <label>Giảm giá</label>
                <input type="number" name="giam_gia">
            </div>

            <div class="form__div">
                <label>Image</label>
                <input type="file" name="img_upload">
            </div>

            <div class="form__div">
                <label>Ngày nhập</label>
                <input type="date" name="ngay_nhap">
            </div>

            <div class="form__div">
                <label>Mô tả</label>

                <textarea name="mo_ta"></textarea>
            </div>

            <div class="form__div">
                <label>Đặc biệt</label>
                <input type="number" name="dac_biet">
            </div>

            <div class="form__div">
                <label>Số lượt xem</label>
                <input type="number" name="luot_xem">
            </div>

            <div class="form__div">
                <label>Loại</label>
                <select name="ma_loai">
                    <?php foreach (layDSDanhMuc() as $key => $value) { ?>
                        <option value="<?php echo $value["ma_loai"] ?>"><?php echo $value["ten_loai"] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form__btn">
                <input class="save" type="submit" name="btn_save" value="Save">
                <input type="reset" name="btn_reset" value="Reset">
            </div>

        </form>
    </div>
</body>

</html>