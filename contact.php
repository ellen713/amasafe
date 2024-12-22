    <?php include("header.php")?>
    <link rel='stylesheet' href='css/jquery.fancybox.min.css'>
    <?php include("nav.php") ?>
    </head>
    <style>
        .demo-clock{
            width: 30px !important; 
        }
    </style>
<body>
    <main>
        <!-- BANNER -->
        <?php include("banner.php")?>
                <div class="page-title">
                    <h2>聯絡我們</h2>
                </div>
            </section>
        </article>
        <!-- BANNER END -->
        <!-- 聯絡我們 -->
        <article class="top-alla bg_page">
            <section class="page">
                <div class="container">
                    <div class="row">
                        <div class="contact col-12 d-flex flex-wrap align-items-center">
                            <div class="col-lg-5">
                                <div class="info-box">
                                    <!-- 同步footer **文字需可<br>斷行** -->
                                    <meta name="format-detection" content="telephone=no">
                                    <h3 class="mb-3 mb-sm-4">雅瑪保險櫃</h3>
                                    <p class="mr-3 mb-1"><i class="demo-icon icon-phone mr-1"></i><a href="tel:0800-808020"><span>0800-808020</span></a></p>
                                    <p class="mr-3 mb-1"><i class="demo-icon icon-mail-alt mr-1"></i><a href="mailto:amasafetw@gmail.com"><span>amasafetw@gmail.com</span></a></p>
                                    <p class="mr-3 mb-1"><i class="demo-icon icon-clock mr-1"></i><span>週一至週五09:00 am – 12:00 pm、13:00 pm – 18:00 pm　|　週六日及例假日暫停服務</span></p>
                                    <!-- 跟product_detail.php是同一顆 "私訊詢問產品詳情" 外部連結 -->
                                    <a href="https://www.facebook.com" target="_blank" class="mt-4 btn_fb">
                                        <div class="imgbox"><img src="img/r-messanger.svg" alt=""></div>
                                        <p>私訊詢問產品詳情</p>
                                    </a>
                                    <!--自訂圖片 上傳建議尺寸 500x270-->
                                    <div class="imgboxc mt-3">
                                        <img src="upload/contact01.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-box">
                                    <div class="title"><h3>聯絡表單</h3></div>
                                        <p class="color_gray l-h mt-3">若您有任何建議、或對我們產品及服務上的問題，歡迎填寫以下表單，我們會盡快與您聯繫，謝謝。</p>
                                        <form class="forms-group mt-3 mt-sm-4">
                                            <dl>
                                                <dd class="d-sm-flex align-items-center">
                                                    <label class="col-sm-3 col-xl-2 p-0">姓名<sup>*</sup></label>
                                                    <input type="text" name="name" required>
                                                </dd>
                                                <dd class="d-sm-flex align-items-center">
                                                    <label class="col-sm-3 col-xl-2 p-0">電話</label>
                                                    <input type="text" name="phone" required>
                                                </dd>
                                                <dd class="d-sm-flex align-items-center">
                                                    <label class="col-sm-3 col-xl-2 p-0">E-mail<sup>*</sup></label>
                                                    <input type="text" name="email" required>
                                                </dd>
                                                <dd class="d-sm-flex align-items-start">
                                                    <label class="col-sm-3 col-xl-2 p-0">詢問內容<sup>*</sup></label>
                                                    <textarea name="message" required></textarea>
                                                </dd>
                                                <dd class="d-flex flex-wrap align-items-center">
                                                    <label class="col-sm-3 col-xl-2 p-0">驗證碼<sup>*</sup></label>
                                                    <input id="xcode" type="text" name="captcha_word" class="mr-2" required>
                                                    <img id="imgcode" src="imgcode/securimage_show.png">
                                                </dd>
                                                <dd class="text-right">
                                                    <button type="reset" class="mr-2">清除重填</button>
                                                    <button type="submit">確認送出</button>
                                                </dd>
                                            </dl>
                                            
                                        </form>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <!-- 聯絡我們 END -->
    </main>
    <?php include("footer.php")?>
    <script src='js/jquery.fancybox.min.js'></script>
    <?php include("ajax/contact.php")?> 

</body>
</html>