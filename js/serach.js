$(document).ready(function() {
    $('.menu-icon').on('click', function(e) {
        e.stopPropagation();
        $('body').toggleClass("open-menu");
        $('.menu-icons').toggleClass("is-active")
    });
    $('.page').on('click', function() {
        $('body').removeClass("open-menu")
    });
    $('.mega-menu ul li:first-child').find(".mega-sub").show();
    $('.mega-menu ul li').hover(function() {
        $('.mega-menu ul li').removeClass("active");
        $(".mega-sub").hide();
        $(this).addClass("active");
        $(this).find(".mega-sub").show()
    }, function() {});
    $('.menu > ul > li.has-mega').hover(function() {
        $("body").addClass("show-overlay")
    }, function() {
        $("body").removeClass("show-overlay")
    });
    $('.page').on('click', function() {
        $('.search-wrap').removeClass("show")
    });
    $('.search-icon').on('click', function(e) {
        e.stopPropagation();
        $('.search-wrap').toggleClass("show")
    });
    $('.search-wrap .search-box').on('click', function(e) {
        e.stopPropagation()
    })
});