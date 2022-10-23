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
            <h2>Danh sách khách hàng</h2>
        </div>

        <!-- <div class="button__active">
            <button><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=them_khach_hang">Thêm mới</a></button> 
            <button><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=sua_khach_hang">Chỉnh sửa</a></button> 
        </div> -->
        
        <table class="content__table">
            <thead>
                <tr class="title__table">
                    <th>Mã khách hàng</th>
                    <th>Mật khẩu</th>
                    <th>Họ và tên</th>
                    <!-- <th>Kích hoạt</th>
                    <th>Hình</th> -->
                    <th>Email</th>
                    <th>Vai trò</th>
                    <th>Active</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ds_kh as $key => $value) : ?>
                    <tr>
                        <td><?= $value['ma_kh']  ?></td>
                        <td><?= $value['mat_khau']  ?></td>
                        <td><?= $value['ho_ten']  ?></td>
                        <!-- <td><?= $value['kich_hoat']  ?></td>
                        <td><img style="width: 30%;" src="views/template/images/khach_hang/<?= $value['hinh']  ?>"></td> -->
                        <td><?= $value['email']  ?></td>
                        <td><?= $value['vai_tro']  ?></td>
                        <td>
                            <button><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=xoa_khach_hang&id=<?= $value['ma_kh'] ?>" onclick="return confirm('Bạn có muốn xoá không?')">Xoá</a></button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        
    </div>
</body>
</html>