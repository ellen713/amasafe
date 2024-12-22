<?php include("header.php")?>

    <link rel="stylesheet" type="text/css" href="css/prphoto.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.min2.css">
    <link rel="stylesheet" type="text/css" href="css/easyzoom.css">
    <?php include("nav.php") ?>
    </head>
<body>
    <main>
        <!-- 門市位置內頁 -->
         <article class="top-all bg_page">
            <section class="page">
                <div class="container">
                    <div class="top-alla row">
                        <!-- 1. 門市位置 -->
                        <div class="col-12 store-info">
                            <div class="col-lg-5 p-0" data-aos="fade-up">
                                <div class="imgbox">
                                    <!-- 自訂圖片 建議尺寸 850x600 -->
                                    <img src="upload/store01.jpg" alt="">
                                </div>
                            </div> 
                            <div class="col-lg-7" data-aos="fade-up">
                                <div class="page_title"><h2 class="pb-2 mb-4">台北重慶展示中心</h2></div>
                                <div class="page_info">
                                    <ul>
                                        <li>
                                            <p class="f18"><i class="demo-icon icon-phone"></i><a href="tel:0800-808020">0800-808020</a></p>
                                        </li>
                                        <li>
                                            <p class="f18"><i class="demo-icon icon-location"></i><a href="" target="_blank">台北市大同區重慶北路三段43號</a></p>
                                        </li>
                                        <li>
                                            <p class="f18"><i class="demo-icon icon-clock"></i>星期一至星期五，9點至12點、13點至18點（六日及國定假日公休）</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- 門市位置 END -->
                        
                        <!-- 2.門市資訊區 -->
                        <div class="col-12 mt-4">
                            <div class="title_line">
                                <h3>門市資訊</h3>
                                <hr>
                            </div>
                            <div class="col-12 px-0 mt-4 mb-2" data-aos="fade-up">
                                <div class="editor">
                                    <p>/*此為據點介紹編輯器區，可於後台自行編寫文字介紹與上傳圖片*/</p>
                                    <p>
                                    門市介紹文字內容，門市介紹文字門市介紹文字，門市介紹文字門市介紹文字門市介紹文字門市介紹文字門市介紹文字，門市介紹文字門市介紹文字門市介紹文字門市介紹文字門市介紹文字門市，門市介紹文字門市介紹文字門市介紹文字，門市介紹文字門市介紹文字，門市介紹文字門市介紹文字，門市介紹文字門市介紹文字門市介紹文字門市介紹文字門市介紹文字，門市介紹文字。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 門市資訊區 end -->
                        
                        <!-- 3.推薦商品區，各據點的推薦商品不同，可參考昀佳：https://www.ipca.com.tw/  -->
                        <div class="col-12">
                            <div class="row mt-5 mb-4 recommend">
                                <div class="col-12 title_line">
                                    <h3>推薦產品</h3>
                                    <hr>
                                </div>
                                <div class="product-page col-12">
                                    <div class="swiper-container" data-aos="fade-up">
                                        <div class="swiper-products03">
                                            <div class="swiper-wrapper">
                                                <!--start -->
                                                <div class="swiper-slide">
                                                    <a href="product_detail.php" class="producta">
                                                        <div class="product">
                                                            <div class="imgbox">
                                                                <!-- 帶產品封面圖 -->
                                                                <img src="upload/p01.png" alt="" title="">
                                                            </div>
                                                            <div class="textbox text-center pt-3 pb-3">
                                                                <!-- 帶產品標題 -->
                                                                <h4>產品標題文字產品標題文字</h4>
                                                                <!-- 帶產品簡述 -->
                                                                <p class="color03 pt-2">裝有再鎖設計，當受外力破壞時，保險櫃內部將自動鎖死的一個反破壞的功能，讓竊賊無所適從。</p>
                                                            </div>
                                                            <div class="btnbox">
                                                                <button value="" onclick="location.href='product_detail.php'"><p>產品詳情</p></button>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>    
                                                <!--end-->
                                                <div class="swiper-slide">
                                                    <a href="product_detail.php" class="producta">
                                                        <div class="product">
                                                            <div class="imgbox">
                                                                <img src="upload/p02.png" alt="" title="">
                                                            </div>
                                                            <div class="textbox text-center pt-3 pb-3">
                                                                <h4>產品標題文字產品標題文字2</h4>
                                                                <p class="color03 pt-2">裝有再鎖設計，當受外力破壞時，保險櫃內部將自動鎖死的一個反破壞的功能，讓竊賊無所適從。</p>
                                                            </div>
                                                            <div class="btnbox">
                                                                <button value="" onclick="location.href='product_detail.php'"><p>產品詳情</p></button>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="product_detail.php" class="producta">
                                                        <div class="product">
                                                            <div class="imgbox">
                                                                <img src="upload/p03.png" alt="" title="">
                                                            </div>
                                                            <div class="textbox text-center pt-3 pb-3">
                                                                <h4>產品標題文字產品標題文字3</h4>
                                                                <p class="color03 pt-2">裝有再鎖設計，當受外力破壞時，保險櫃內部將自動鎖死的一個反破壞的功能，讓竊賊無所適從。</p>
                                                            </div>
                                                            <div class="btnbox">
                                                                <button value="" onclick="location.href='product_detail.php'"><p>產品詳情</p></button>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="product_detail.php" class="producta">
                                                        <div class="product">
                                                            <div class="imgbox">
                                                                <img src="upload/p04.png" alt="" title="">
                                                            </div>
                                                            <div class="textbox text-center pt-3 pb-3">
                                                                <h4>產品標題文字產品標題文字4</h4>
                                                                <p class="color03 pt-2">裝有再鎖設計，當受外力破壞時，保險櫃內部將自動鎖死的一個反破壞的功能，讓竊賊無所適從。</p>
                                                            </div>
                                                            <div class="btnbox">
                                                                <button value="" onclick="location.href='product_detail.php'"><p>產品詳情</p></button>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="product_detail.php" class="producta">
                                                        <div class="product">
                                                            <div class="imgbox">
                                                                <img src="upload/p05.png" alt="" title="">
                                                            </div>
                                                            <div class="textbox text-center pt-3 pb-3">
                                                                <h4>產品標題文字產品標題文字5</h4>
                                                                <p class="color03 pt-2">裝有再鎖設計，當受外力破壞時，保險櫃內部將自動鎖死的一個反破壞的功能，讓竊賊無所適從。</p>
                                                            </div>
                                                            <div class="btnbox">
                                                                <button value="" onclick="location.href='product_detail.php'"><p>產品詳情</p></button>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div> 
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!-- 推薦商品 END -->
                        
                        <div class="col-12 text-center mt-4 mb-4 d-flex justify-content-center">
                            <button value="" onclick="location.href='store.php'" class="btn_back"><p>上一頁</p></button>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
    <?php include("footer.php")?>
    <script src='js/swiper.min2.js'></script>
    <script src='js/easyzoom.js'></script>
    <script src="js/product-swiper.js"></script>
    <script src='js/swiper.min.js'></script>
    <?php include("index-swiper.php")?>
    
</body>
</html>