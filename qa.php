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
        <!-- 常見問題 -->
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
                                <li class="nav__list-li"><a href="qa.php">常見問題</a></li>
                                <li><a href="message.php">訪客留言</a></li>
                                <li><a href="guidebook.php">問答總覽</a></li>
                            </ul>
                        </div>
                        <div class="col-12 mb-5" data-aos="fade-up">
                                <ul class="accordion">
                                    <!--start-->
                                    <li>
                                        <div class="faqname">
                                            <!--問題標題文字-->
                                            <h4>最低訂購量4何?</h3>
                                        </div>
                                        <div class="open">
                                            <div class="open-all">
                                                <div class="open-text">
                                                    <!--問題回答編輯器區-->
                                                    <div class="editor qa_editor"> 
                                                        <p>
                                                        此為編輯器區，可於後台編寫說明文字，此為編輯器區，可於後台編寫說明文字。</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--end-->   
                                    <li>
                                        <div class="faqname">
                                            <h4>常見問題標題文字常見問題標題文字?</h4>
                                        </div>
                                        <div class="open">
                                            <div class="open-all">
                                                <div class="open-text">
                                                    <div class="editor qa_editor">
                                                        <p>此為編輯器區，可於後台編寫說明文字</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faqname">
                                            <h4>常見問題標題文字常見問題標題文字?</h4>
                                        </div>
                                        <div class="open">
                                            <div class="open-all">
                                                <div class="open-text">
                                                    <div class="editor qa_editor">
                                                        <p>此為編輯器區，可於後台編寫說明文字</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faqname">
                                            <h4>常見問題標題文字常見問題標題文字?</h4>
                                        </div>
                                        <div class="open">
                                            <div class="open-all">
                                                <div class="open-text">
                                                    <div class="editor qa_editor">
                                                        <p>此為編輯器區，可於後台編寫說明文字</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                </div>
            </section>
        </article>
        <!-- 常見問題end -->

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