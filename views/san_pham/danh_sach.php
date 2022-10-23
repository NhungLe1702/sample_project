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
    <!-- <style> 
        .search_product {
            text-align: center;
            margin-bottom: 20px;
        }

        .search_product input {
            line-height: 30px;
            border-radius: 10px;
            border: 1px solid #0066cc;
            
        }

        .search_product select {
            padding: 8px 0px;
            border-radius: 10px;
            border: 1px solid #0066cc;
            color: #0066cc;
        }

        .search_product .btn_submit {
            padding: 0 15px;
            background-color: #ffffff;
            color: #0066cc;
        }
    </style> -->
</head>

<body>
    

    <div class="danh__sach">
        <div class="ds__title">
            <h2>Danh sách sản phẩm</h2>
        </div>
        
        <div class="button__active">
            <button><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=them_san_pham">Thêm mới</a></button>
            
        </div>
        
        <div class="search_product">
            <form class="search_product" action="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=loc_san_pham_theo_dm" method="post">
                <input type="text" name="loai">
                <select name="id_loai" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php foreach (layDSDanhMuc() as $key => $value) { ?>
                        <option value="<?php echo $value["ma_loai"] ?>"><?php echo $value["ten_loai"] ?></option>
                    <?php } ?>
                </select>
                <input class="btn_submit" type="submit" name="listOk" value="GO">
            </form>
        </div>
        

        <table class="content__table">
            <thead>
                <tr class="title__table">
                   
                    <td>Mã </td>
                    <td>Tên</td>
                    <td>Giá</td>
                    <td>Sale</td>
                    <td>Hình ảnh</td>
                    <td>Ngày nhập</td>
                    <td>Mô tả</td>
                    <td>Đặc biệt</td>
                    <td>Lượt xem</td>
                    <td>Mã loại</td>
                    <td>Active</td>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($ds_sp as $key => $value) : ?>
                    <tr>
                        
                        <td><?= $value['ma_hh']  ?></td>
                        <td><?= $value['ten_hh']  ?></td>
                        <td><?= $value['don_gia']  ?></td>
                        <td><?= $value['giam_gia']  ?></td>
                        <td><img src="views/template/images/san_pham/<?php echo $value['hinh'] ?>" alt=""></td>
                        <td><?= $value['ngay_nhap']  ?></td>
                        <td class="mo_ta"><?= $value['mo_ta']  ?></td>
                        <td><?= $value['dac_biet']  ?></td>
                        <td><?= $value['so_luot_xem']  ?></td>
                        <td><?= $value['ma_loai']  ?></td>
                        <td>
                            <button><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=xoa_san_pham&id=<?= $value['ma_hh'] ?>" onclick="return confirm('Bạn có muốn xoá không?')">Xoá</a></button>
                            <button><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=form_sua_san_pham&id=<?= $value['ma_hh'] ?>">Sửa</a></button>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>

        
    </div>

</body>

</html>