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
            <h2>Thống kê sản phẩm</h2>
        </div>

        <div class="button__active">
            <button><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=bieu_do_thong_ke">Biểu đồ thống kê</a></button>
        </div>

        <table class="content__table">
            <thead>
                <tr class="title__table">
                    <td>Mã loại</td>
                    <td>Loại hàng</td>
                    <td>Số lượng</td>
                    <td>Giá cao nhất</td>
                    <td>Giá thấp nhất</td>
                    <td>Giá trung bình</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($thong_ke as $tk) : extract($tk) ?>

                    <tr>
                        <td><?php echo $ma_loai ?></td>
                        <td><?php echo $ten_loai ?></td>
                        <td><?php echo $so_luong ?></td>
                        <td><?php echo number_format($gia_min)  ?></td>
                        <td><?php echo number_format($gia_max)  ?></td>
                        <td><?php echo number_format($gia_avg)  ?></td>
                    </tr>
                <?php endforeach  ?>   
            </tbody>
        </table>
    </div>
</body>

</html>
</body>
</html>