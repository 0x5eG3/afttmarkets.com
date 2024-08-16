$(document).ready(function () {	
	$(".header_bar ").click(function() {
	$("#header_bar").toggle();
	$("#header_bar2").toggle();
	$(".header_bar_cont").slideToggle();
	$(".logo").toggle();
	});
	$(".language_btn ").click(function() {
		$(".header_language").slideToggle();		
	});
	$("#header_language_close ").click(function() {
		$(".header_language").hide();		
	});


	 var banner = new Swiper('.banner .swiper-container', {
	slidesPerView: 1,
      slidesPerGroup: 1,
      loop: false,
	  autoplay: 5000,
	  speed:1300,
      loopFillGroupWithBlank: false,     
      pagination: '.banner .swiper-pagination',
	  paginationClickable: false,
	 
    });
	 var banner = new Swiper('.banner2 .swiper-container', {
	slidesPerView: 1,
      slidesPerGroup: 1,
      loop: true,
	  autoplay: 5000,
	  speed:1300,
      loopFillGroupWithBlank: true,     
      pagination: '.banner2 .swiper-pagination',
	  paginationClickable: true,
	 
    });
	
	var index_02 = new Swiper('.index_02 .swiper-container', {
	slidesPerView: 1,
      slidesPerGroup: 1,
      loop: true,
	  autoplay: 5000,
	  speed:1300,
      centeredSlides: true,
	  loop: true,
      pagination: {
        el: '.index_02 .swiper-pagination',
        clickable: true,
      },
    });
	var app_ys_phone = new Swiper('.app_ys_phone .swiper-container', {
      slidesPerView: 1,
      spaceBetween: 15,
      loop: true,
     autoHeight: true, 
	  pagination: {
        el: '.app_ys_phone .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

	

  });

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		$("#myBtn").css("display","block");
		$("#header").addClass('mini');
    } else {
		$("#myBtn").hide();
		$("#header").removeClass('mini');
    }
}



// 点击按钮，返回顶部
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}



;(function($, window, undefined) {    
    var $allDropdowns = $();
    $.fn.dropdownHover = function(options) {        
        $allDropdowns = $allDropdowns.add(this.parent());
       
        return this.each(function() {
            var $this = $(this).parent(),
                defaults = {
                    delay: 200,
                    instantlyCloseOthers: true,
                },
                data = {
                    delay: $(this).data('delay'),
                    instantlyCloseOthers: $(this).data('close-others'),
                },
                settings = $.extend(true, {}, defaults, options, data),
                timeout;

            $this.hover(function() {
                if(settings.instantlyCloseOthers === true){
                    $allDropdowns.removeClass('show');
                }

                window.clearTimeout(timeout);
                $(this).addClass('show').find(".dropdown-menu").addClass('show');
            }, function() {
                timeout = window.setTimeout(function() {
                    $this.removeClass('show').find(".dropdown-menu").removeClass('show');
                }, settings.delay);
            });
        });
    };

    $('[data-hover="dropdown"]').dropdownHover();
})(jQuery, this);


