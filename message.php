<?php include("header.php")?>
    <?php include("nav.php") ?>
    </head>
<body>
    <main>
        <!-- BANNER -->
        <?php include("banner.php")?>
                <div class="page-title">
                    <h2>常見問題</h2>
                </div>
            </section>
        </article>
        <!-- BANNER END -->
        <!-- 訪客留言 -->
         <article class="bg_page" >
            <section class="page">
                <div class="container center-menu">            
                    <div class="row">
                        <div class="col-lg-12 vertical-nav" id="menuToggle" role="navigation" data-aos="fade-right">
                            <div class="left-menu">選單</div>
                            <input type="checkbox" />
                            <span class="menu-span"></span>
                            <span class="menu-span"></span>
                            <span class="menu-span"></span>
                            <!-- 當頁需加 class="nav__list-li" -->
                            <!-- 自訂一層分類-->
                            <ul id="menu" class="nav__list">
                                <li><a href="qa.php">常見問題</a></li>
                                <li class="nav__list-li"><a href="message.php">訪客留言</a></li>
                                <li><a href="guidebook.php">問答總覽</a></li>
                            </ul>
                        </div>
                        <!-- 訪客留言，參考大豐：https://www.dafon.com.tw/question.php -->
                        <div class="col-12 mb-5" data-aos="fade-up">
                            <div class="form-box">
                                <div class="title_line">
                                    <p class="color02 mb-3">* 為必填欄位</p>
                                    <form class="forms-group mt-4">
                                        <dl>
                                            <dd class="d-sm-flex align-items-center">
                                                <label class="col-sm-2 p-0">聯絡姓名<sup>*</sup></label>
                                                <input type="text" name="name" required="">
                                            </dd>
                                            <dd class="d-sm-flex align-items-center">
                                                <label class="col-sm-2 p-0">聯絡電話</label>
                                                <input type="text" name="phone">
                                            </dd>
                                            <dd class="d-sm-flex align-items-center">
                                                <label class="col-sm-2 p-0">E-mail</label>
                                                <input type="text" name="email">
                                            </dd>
                                            <dd class="d-sm-flex align-items-start">
                                                <label class="col-sm-2 p-0">詢問內容<sup>*</sup></label>
                                                <textarea name="message" required=""></textarea>
                                            </dd>
                                            <dd class="d-sm-flex align-items-start">
                                                <label class="col-sm-2 p-0">頭貼上傳</label>
                                                <div class="col-md-6 col-sm-10 p-0 input-group">
                                                    <!--<input type="hidden" id="img_path_past" name="img_path_past" >-->
                                                    <!-- 檔案上傳參考https://ntwda.org.tw/car.php -->
                                                    <input type="file" class="hidden col-12 mb-2" id="upload_img" name="upload_img[]" multiple="" accept=".gif, .jpg, .jpeg, .png">
                                                    <span>( 允許上傳副檔名：gif,jpg,jpeg,png )</span>
                                                </div>
                                                <div class="col-12 p-0 img-preview"></div>
                                            </dd>
                                            <dd class="d-flex flex-wrap align-items-center">
                                                <label class="col-sm-2 p-0">驗證碼<sup>*</sup></label>
                                                <input id="xcode" type="text" name="captcha_word" class="mr-2" required="">
                                                <img id="imgcode" src="imgcode/securimage_show.jpg">
                                            </dd>
                                            <dd class="text-right">
                                                <button type="reset" class="m-1 btn_reset">清除重填</button>
                                                <button type="submit" class="m-1 btn_submit">確認送出</button>
                                            </dd>
                                        </dl>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <!-- 訪客留言end -->

    </main>
    <?php include("footer.php")?>
    <script>
        (function($) {
            $('.accordion > li:eq(0) .faqname').addClass('active').next().slideDown();

            $('.accordion .faqname').click(function(j) {
                var dropDown = $(this).closest('li').find('.open');

                $(this).closest('.accordion').find('.open').not(dropDown).slideUp();

                if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                } else {
                    $(this).closest('.accordion').find('.faqname.active').removeClass('active');
                    $(this).addClass('active');
                }

                dropDown.stop(false, true).slideToggle();

                j.preventDefault();
            });
        })(jQuery);
    </script>
</body>
</html>