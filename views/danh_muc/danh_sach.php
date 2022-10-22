<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/template/css/list.css">
</head>

<body>
    <div class="danh__sach">
        <div class="ds__title">
            <h2>Danh sách danh mục</h2>
        </div>

        <div class="button__active">
            <button><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=them_danh_muc">Thêm mới</a></button>
            <button><a href="#">Chọn tất cả</a></button>
            <button><a href="#">Bỏ chọn tất cả</a></button>
        </div>

        <table style="width: 100%;" class="content__table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã loại</th>
                    <th>Tên loại loại</th>
                    <th>Active</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ds_dm as $key => $value) : ?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?= $value['ma_loai']  ?></td>
                        <td><?= $value['ten_loai']  ?></td>
                        <td>
                            <button> <a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=xoa_danh_muc&id=<?= $value['ma_loai'] ?>" onclick="return confirm('Bạn có muốn xoá không?')">Xoá</a></button>
                            <button> <a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=form_sua_danh_muc&id=<?= $value['ma_loai'] ?>">Sửa</a></button>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>


        </table>
        
    </div>

</body>

</html>