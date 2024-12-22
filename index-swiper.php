<!--首頁大圖輪播-->
<script>
var swiper = new Swiper('.swiper-banner', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: true,
    speed: 2000,
    autoplay: true,
    autoplay: {
        delay: 4000,
        stopOnLastSlide: false,
        disableOnInteraction: true,
    },
});
</script>
<!-- 首頁大圖輪播END -->

<!--暢銷產品區-->
<script>
    let SwiperCondition_1 = {
        slidesPerView: 3,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // autoplay: {
        //     delay: 3000,
        //     disableOnInteraction: false,
        // },
        autoplay: false,
        loop: false,
    }
    if ($(window).width() > 991) {
        // 當視窗寬度>991px時執行
        SwiperCondition_1.slidesPerView = 3
        SwiperCondition_1.spaceBetween = 20
    } else if ($(window).width() > 768)  {
        SwiperCondition_1.slidesPerView = 3
        SwiperCondition_1.spaceBetween = 10
    }
    else if ($(window).width() > 575)  {
        SwiperCondition_1.slidesPerView = 2
        SwiperCondition_1.spaceBetween = 10
    }
    else {
        // 當視窗寬度<575px時執行
        SwiperCondition_1.slidesPerView = 1
        SwiperCondition_1.spaceBetween = 10
    }

    var swiper = new Swiper('.swiper-products', SwiperCondition_1);
</script>

<!-- 新品上市區 -->
<script>
    let SwiperCondition_2 = {
        slidesPerView: 4,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        loop: false,
    }
    if ($(window).width() > 991) {
        // 當視窗寬度>991px時執行
        SwiperCondition_2.slidesPerView = 3
        SwiperCondition_2.spaceBetween = 10
    } else if ($(window).width() > 768)  {
        SwiperCondition_2.slidesPerView = 2
        SwiperCondition_2.spaceBetween = 10
    }
    else if ($(window).width() > 575)  {
        SwiperCondition_2.slidesPerView = 2
        SwiperCondition_2.spaceBetween = 10
    }
    else {
        // 當視窗寬度<575px時執行
        SwiperCondition_2.slidesPerView = 1
        SwiperCondition_2.spaceBetween = 0
    }

    var swiper = new Swiper('.swiper-products02', SwiperCondition_2);
</script>

<!-- 產品內頁 推薦商品 -->
<script>
    let SwiperCondition_3 = {
        slidesPerView: 3,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        loop: false,
    }
    if ($(window).width() > 991) {
        // 當視窗寬度>991px時執行
        SwiperCondition_3.slidesPerView = 3
        SwiperCondition_3.spaceBetween = 20
    } else if ($(window).width() > 768)  {
        SwiperCondition_3.slidesPerView =  2
        SwiperCondition_3.spaceBetween = 10
    }
    else if ($(window).width() > 575)  {
        SwiperCondition_3.slidesPerView = 2
        SwiperCondition_3.spaceBetween = 10
    }
    else {
        // 當視窗寬度<575px時執行
        SwiperCondition_3.slidesPerView = 1
        SwiperCondition_3.spaceBetween = 0
    }

    var swiper = new Swiper('.swiper-products03', SwiperCondition_3);
</script>

<!--門市位置區-->
<script>
    let SwiperCondition_4 = {
        slidesPerView: 3,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // autoplay: {
        //     delay: 3000,
        //     disableOnInteraction: false,
        // },
        autoplay: false,
        loop: false,
    }
    if ($(window).width() > 991) {
        // 當視窗寬度>991px時執行
        SwiperCondition_4.slidesPerView = 3
        SwiperCondition_4.spaceBetween = 20
    } else if ($(window).width() > 768)  {
        SwiperCondition_4.slidesPerView = 2
        SwiperCondition_4.spaceBetween = 10
    }
    else if ($(window).width() > 575)  {
        SwiperCondition_4.slidesPerView = 2
        SwiperCondition_4.spaceBetween = 10
    }
    else {
        // 當視窗寬度<575px時執行
        SwiperCondition_4.slidesPerView = 1
        SwiperCondition_4.spaceBetween = 10
    }

    var swiper = new Swiper('.swiper-store', SwiperCondition_4);
</script>