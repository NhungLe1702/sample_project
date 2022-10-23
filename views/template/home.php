
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>

    <link rel="stylesheet" href="views/template/css/header.css">

    <link rel="stylesheet" href="views/template/icon/css/all.css">

    <script type="text/javascript">
        var counter = 0;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;

            if (counter > 4) {
                counter = 0;
            }
        }, 5000);
    </script>

</head>

<body>
    <div class="banner_slide">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio0">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="views/template/images/banner/0.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="views/template/images/banner/1.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="views/template/images/banner/2.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="views/template/images/banner/3.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="views/template/images/banner/4.jpeg" alt="">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn0"></div>
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>

            <div class="navigation-manual">
                <label for="radio0" class="manual-btn"></label>
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>
    </div>

    <section>
        <div class="container">

            <div class="row_layout">
                <article>
                    <div class="product">
                        <div class="product-list">
                            <?php foreach($ds_sp as $key => $value) : ?>
                                <div class="product_box">
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

                </article>


                <?php require('views/template/aside.php'); ?>
            </div>

            <div class="link_product_insert">
                <a href="index.php?url=san_pham">Xem thêm</a>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>

    </section>

</body>

</html>