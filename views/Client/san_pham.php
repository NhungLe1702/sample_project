
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>

    <link rel="stylesheet" href="views/template/css/header.css">

    <link rel="stylesheet" href="views/template/icon/css/all.css">
    
</head>

<body>
    <section>
        <div class="container">
            <div class="row_layout">
                    <div class="product">
                        <div class="product-list">
                            <?php foreach($ds_sp as $key => $value) : ?>
                                <div class="product_box insert--sp">
                                    <div class="product_box_img">
                                        <img src="views/template/images/san_pham/<?php echo $value['hinh'] ?>" alt="">
                                    </div>
                                    <div class="product_box_footer">
                                        <h3>
                                            <a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=chi_tiet_sp&id=<?php echo $value['ma_hh']?>&id_loai=<?php echo $value['ma_loai']?>"><?php echo $value['ten_hh'] ?></a>
                                        </h3>
                                        <div class="product_price">
                                            <span class="price"><?php echo number_format($value['don_gia'])  ?>đ</span>
                                        </div>
                                        <div class="product_box_footer">
                                            <form>
                                                <a href="#" class="btn_add">THÊM VÀO GIỎ</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>    

                        </div>
                    </div>

                


                
            </div>
        </div>
    </section>

</body>

</html>