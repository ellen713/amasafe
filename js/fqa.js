(function($){$('.accordion .faqname').click(function(j){var dropDown=$(this).closest('li').find('.open');$(this).closest('.accordion').find('.open').not(dropDown).slideUp();if($(this).hasClass('active')){$(this).removeClass('active')}else{$(this).closest('.accordion').find('.faqname.active').removeClass('active');$(this).addClass('active')}dropDown.stop(false,true).slideToggle();j.preventDefault()})})(jQuery);