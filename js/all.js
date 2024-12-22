$(document).ready(function () {
    $(window).scroll(function () {
        200 < $(this).scrollTop()
        ? $(".go-top").fadeIn(200)
        : $(".go-top").fadeOut(200);
    }),
        $(".go-top").click(function (o) {
        o.preventDefault(), $("html, body").animate({ scrollTop: 0 }, 300);
        });
}),
  $(document).ready(function () {
    $(window).on("scroll", function () {
      $(window).scrollTop() < 100
        ? $(".all-right").removeClass("all-right-open")
        : $(".all-right").addClass("all-right-open"),
        $(window).scrollTop() < 100
          ? $(".shop-btn").removeClass("shop-btn-open")
          : $(".shop-btn").addClass("shop-btn-open");
    });
  }),
  $(document).ready(function () {
    $(".all-right-friend-click").click(function () {
      $(".all-right-friend ul").toggleClass("clicked");
    });
  });


$(function() {
	// 滑動超過高度時候 , header 縮小
	$(window).scroll(function() {
		if ($(this).scrollTop() > 150) {
			$('#faithNav').addClass('navscroll');
		} else {
			$('#faithNav').removeClass('navscroll');
		}
	});
});