$(document).ready(function () {

     /*---------- 01. On Load Function ----------*/
     $(window).on("load", function () {
        $(".preloader").fadeOut();
    });

    var explode = function(){
        $(".preloader").css("display", "none")
      };

    setTimeout(explode, 1000);

    /*---------- 02. Preloader ----------*/
   /* if ($(".preloader").length > 0) {
        $(".preloaderCls").each(function () {
            $(this).on("click", function (e) {
                e.preventDefault();
                $(".preloader").css("display", "none");
            });
        });
    } */

    $('.header__burger').click(function() {
        $('.header__menu-nav').addClass('menu-nav-open');
    });

    $('.header__menu-close').click(function() {
        $('.header__menu-nav').removeClass('menu-nav-open');   
     });

     $(".footer__button-up").addClass("footer__button-up-hide");
     $(window).scroll(function () {
     if ($(this).scrollTop() === 0) {
         $(".footer__button-up").addClass("footer__button-up-hide")
     } else {
         $(".footer__button-up").removeClass("footer__button-up-hide")
     }
   });

   $(".menu-item-has-children").click(function(){ // задаем функцию при нажатии на элемент 
    $(this).children('ul').toggleClass('sub-menu-open'); // добавляем элементу  по которому произведен клик класс
   });
   
    /*---------- 05. Scroll To Top ----------*/
    if ($('.footer__button-up').length > 0) {

      var scrollTopbtn = document.querySelector('.footer__button-up');
      var progressPath = document.querySelector('.footer__button-up path');
      var pathLength = progressPath.getTotalLength();
      progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
      progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
      progressPath.style.strokeDashoffset = pathLength;
      progressPath.getBoundingClientRect();
      progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
      var updateProgress = function () {
          var scroll = $(window).scrollTop();
          var height = $(document).height() - $(window).height();
          var progress = pathLength - (scroll * pathLength / height);
          progressPath.style.strokeDashoffset = progress;
      }
      updateProgress();
      $(window).scroll(updateProgress);
      var offset = 50;
      var duration = 750;
      jQuery(window).on('scroll', function () {
          if (jQuery(this).scrollTop() > offset) {
              jQuery(scrollTopbtn).addClass('show');
          } else {
              jQuery(scrollTopbtn).removeClass('show');
          }
      });
      jQuery(scrollTopbtn).on('click', function (event) {
          event.preventDefault();
          jQuery('html, body').animate({
              scrollTop: 0
          }, duration);
          return false;
      })
  }


  
	// Mouse cursor area start here ***
	function mousecursor() {
		if ($("body")) {
			const e = document.querySelector(".cursor-inner"),
				t = document.querySelector(".cursor-outer");
			let n,
				i = 0,
				o = !1;
			(window.onmousemove = function (s) {
				o ||
					(t.style.transform =
						"translate(" + s.clientX + "px, " + s.clientY + "px)"),
					(e.style.transform =
						"translate(" + s.clientX + "px, " + s.clientY + "px)"),
					(n = s.clientY),
					(i = s.clientX);
			}),
				$("body").on("mouseenter", "a, button", function () {
					e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
				}),
				$("body").on("mouseleave", "a, .cursor-pointer", function () {
					($(this).is("a") && $(this).closest(".cursor-pointer").length) ||
						(e.classList.remove("cursor-hover"),
						t.classList.remove("cursor-hover"));
				}),
				(e.style.visibility = "visible"),
				(t.style.visibility = "visible");
		}
	}

	$(function () {
		mousecursor();
	});
	// Mouse cursor area end here ***


    $('.header__button, .homeonas__button, .single__service-button').on("click", function() {
        $('.popup').addClass('popup-open');
    });

    $('.popup__close').on("click", function() {
        $('.popup').removeClass('popup-open');   
      });
      $('.cart__catalog-button, .single__catalog-button').on("click", function() {
        $('.popup-zak').addClass('popup-open');
    });

      $('.popup-zak__close').on("click", function() {
        $('.popup-zak').removeClass('popup-open');   
      });
     
 });