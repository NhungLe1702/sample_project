<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/template/css/header.css">
    <style>

        @font-face {
            font-family: worksansBold;
            src: url(../font/WorkSans-SemiBold.ttf);
        }
        .logo_servay img {
            width: 100px;
        }

        .logo_servay {
            text-align: center;
            margin-top: 100px;
        }

        .logo_servay p {
            font-size: 30px;
            font-family: worksansBold;
            margin-top: 10px;
        }

        .servay_box {
            margin:100px 230px;
            margin-top:30px;
            text-align: center;
        }

        .servay_box_feed {
            display: flex;
            justify-content: space-between;
            
        }

        .feedback_dv {
            background-color: #ffffff;
            width: 400px;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 0px 30px -16px rgb(0 0 0 / 50%);
        }

        
        .introduct {
            width: 700px;
            text-align: center;
            margin: 0 350px;
            line-height: 25px;
        }

        .feedback_icon i {
            font-size: 50px;
            color: #0066cc;
            margin: 20px 0;
        }

        .feedback_title .title_bold {
            font-family: worksansBold;
            font-size: 24px;
        }


    </style>
</head>

<body>
    <section>
        <div class="container">
            <div class="servay_customer">
                <div class="row_servay">
                    <div class="logo_servay">
                        <img src="views/template/images/Screen Shot 2022-10-03 at 23.38.40.png" alt="">
                        <p>Servay khách hàng</p>
                    </div>

                    <div class="servay_intro">
                        <div class="introduct">
                            <p>Đây là khảo sát để ghi nhận phản hồi của khách hàng về dịch vụ tại X Shop.
                                Mỗi ý kiến của quý khách đều vô cùng giá trị với sự phát triển của X Shop trong tương lai.
                                Tất cả thông tin đều được bảo mật và gửi trực tiếp cho Ban kiểm soát của X Shop.
                            </p>
                        </div>
                        
                    </div>

                    <div class="servay_box">
                        <div class="servay_box_feed">
                            <div class="feedback_dv">
                                <div class="feedback_icon">
                                    <i class="fa-solid fa-users"></i>
                                </div>

                                <div class="feedback_title">
                                    <p  class="title_bold">Feedback về dịch vụ</p>
                                    <p>Góp ý về dịch vụ của chúng tôi</p>
                                </div>
                            </div>

                            <div class="feedback_dv">
                                <div class="feedback_icon">
                                    <i class="fa-solid fa-desktop"></i>
                                </div>

                                <div class="feedback_title">
                                    <p class="title_bold">Feedback về Website</p>
                                    <p>Góp ý về Website của chúng tôi</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>

                    

                </div>
            </div>
        </div>
    </section>
</body>

</html>