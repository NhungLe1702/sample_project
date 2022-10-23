<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="views/template/css/detail.css">

    <link rel="stylesheet" href="views/template/icon/css/all.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="row_layout">
                <article>
                    <div class="product_sp1">
                        <div class="img_product">
                            <img src="views/template/images/san_pham/<?php echo $lay_sp['hinh'] ?>" alt="">
                        </div>

                        <div class="infor_product">
                            <div class="infor_display">

                                <div class="top_infor">
                                    <h2><?= $lay_sp['ten_hh'] ?></h2>
                                    <div class="star_product">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>

                                <div class="price_infor">
                                    <p>
                                        <span><?php echo number_format($lay_sp['don_gia']) ?>đ</span>
                                        <!-- <span>23.990.000</span> -->
                                    </p>

                                    <!-- <button>THÊM VÀO GIỎ HÀNG</button> -->
                                </div>

                                <div class="bottom_infor">
                                    
                                        <div class="gift_infor">
                                            <i class="fa-solid fa-gift"></i>
                                            <p>Thông tin khuyến mại</p>
                                            
                                        </div>
                                        <div class="sale_infor">
                                            <div class="sale_infor_detail">
                                                <div class="title_sale">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    <p>Ưu đãi thanh toán:</p>
                                                </div>

                                                <div class="sale_detail">
                                                    <p>1. Trả góp 0% qua thẻ tín dụng.</p>
                                                    <p>2. Giảm ngay 500.000đ khi thanh toán qua VNPAY</p>
                                                </div>
                                                    
                                            </div>

                                            <div class="sale_infor_detail">
                                                <div class="title_sale">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    <p>Ưu đãi khác:</p>
                                                </div>

                                                <div class="sale_detail">
                                                    <p>1. Hư gì đổi nấy 12 tháng</p>
                                                    <p>2. Bảo hành chính hãng 1 năm</p>
                                                    <p>3. Giao hàng nhanh toàn quốc</p>
                                                    <p>4. Gọi đặt mua 1900.6626 (7:30 - 22:00)</p>
                                                </div>                                                 
                                            </div>                                        
                                        </div>  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="description_product">
                        <div class="title_descrip">
                            <p>Thông tin sản phẩm</p>
                        </div>
                        
                        <div class="list_feature">
                            <p>
                                <?php echo $lay_sp['mo_ta'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="similar_product">
                        <div class="title_similar">
                            <p>Sản phẩm cùng loại</p>
                        </div>

                        <div class="list_similar_pro">
                            <?php foreach( $laysp_cung_loai as $key => $value) : ?>
                                <div class="similar_pro_box">
                                    <div class="similar_pro_img">
                                        <img src="views/template/images/san_pham/<?php echo $value['hinh'] ?>" alt="">
                                    </div>
                                    <div class="similar_pro_footer">
                                        <p>
                                            <a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=chi_tiet_sp&id=<?php echo $value['ma_hh'] ?>&id_loai=<?php echo $value['ma_loai']?>">
                                                <?php echo $value['ten_hh'] ?>
                                            </a>
                                        </p>
                                        <div class="similar_pro_price">
                                            <p class="price"><?php echo number_format($value['don_gia'])  ?>đ</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            <?php endforeach ?>   
                        </div>
                         
                    </div>

                    <div class="customer_comment">
                        <div class="title_cus">
                            <p>Bình luận</p>
                        </div>
                        
                        <div class="list_comment">
                            <div class="customer_name">
                                <form action="">
                                    
                                </form>
                            </div>
                        </div>
                    </div>

                </article>

                <?php require('views/template/aside.php'); ?>
            </div>
        </div>
    </section>
</body>

</html>