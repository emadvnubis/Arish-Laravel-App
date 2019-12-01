// $(function () {
//   'user strict';
//
//   $('#menu').slicknav({
//     'label':'القائمة الرئيسية',
//     'duplicate': true,
//     'easingOpen': 'swing',
//     'prependTo': '.down_nav',
//     'showChildren': false
//   });
//
//
//   $('#menu_upper').slicknav({
//     'label':'أدوات مساعدة',
//     'duplicate': true,
//     'easingOpen': 'swing',
//     'prependTo': '.upper_nav',
//     'showChildren': false
//   });
//
//
//   // commenting down_nav
//
  $(window).scroll(function() {
    if ($(this).scrollTop() > 0) {
      $('.down_nav').slideUp();
    } else {
      $('.down_nav').slideDown();
    }
  });
//
//     // $('.live-title').keyup(function (){
//     //   $('.live-preview .captionone h3').text($(this).val());
//     // });
//
//     $('.live').keyup(function (){
//       $('.live-preview .captionone h3').text($(this).val());
//     });
//
//   // Dashboard
//
// 	// $('.toggle-info').click(function () {
//   //
// 	// 	$(this).toggleClass('selected').parent().next('.uk-card-body').fadeToggle(100);
//   //
//   //
//   //   if ($(this).hasClass('selected')) {
//   //
// 	// 		$(this).html('<i class="fas fa-plus fa-1x"></i>');
//   //
// 	// 	} else {
//   //
// 	// 		$(this).html('<i class="fas fa-minus fa-1x"></i>');
//   //
// 	// 	}
//   //
// 	// });
//
//   // $('.uk-navbar-nav li a').click( function() {
//   //
//   //     $(this).parent().addClass('acitve');
//   //     $(this).parent().siblings().removeClass('acitve');
//   //
//   // });
//
//   // Hide Placeholder On Form Focus
//
	$('[placeholder]').focus(function () {

		$(this).attr('data-text', $(this).attr('placeholder'));

		$(this).attr('placeholder', '');

	}).blur(function () {

		$(this).attr('placeholder', $(this).attr('data-text'));

	});

//});
//
// $('.dropdown-toggle').click(function(e) {
//   if ($(document).width() > 768) {
//     e.preventDefault();
//
//     var url = $(this).attr('href');
//
//
//     if (url !== '#') {
//
//       window.location.href = url;
//     }
//
//   }
//
//
//
// });
//
//
//
var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    autoplay: {
      delay: 3000,
    },
  });

//
//
//
//   window.addEventListener("load", function() {
//
// 	// store tabs variable
// 	var myTabs = document.querySelectorAll("ul.nav-tabs > li");
//
// 	function myTabClicks(tabClickEvent) {
//
// 		for (var i = 0; i < myTabs.length; i++) {
// 			myTabs[i].classList.remove("active_tab");
// 		}
//
// 		var clickedTab = tabClickEvent.currentTarget;
//
// 		clickedTab.classList.add("active_tab");
//
// 		tabClickEvent.preventDefault();
//
// 		var myContentPanes = document.querySelectorAll(".tab-pane");
//
// 		for (i = 0; i < myContentPanes.length; i++) {
// 			myContentPanes[i].classList.remove("active_tab");
// 		}
//
// 		var anchorReference = tabClickEvent.target;
// 		var activePaneId = anchorReference.getAttribute("href");
// 		var activePane = document.querySelector(activePaneId);
//
// 		activePane.classList.add("active_tab");
//
// 	}
//
// 	for (i = 0; i < myTabs.length; i++) {
// 		myTabs[i].addEventListener("click", myTabClicks)
// 	}
// });
//
//
//
//
// // for icons
// if (!('boxShadow' in document.body.style)) {
//     document.body.setAttribute('class', 'noBoxShadow');
// }
//
// document.body.addEventListener("click", function(e) {
//     var target = e.target;
//     if (target.tagName === "INPUT" &&
//         target.getAttribute('class').indexOf('liga') === -1) {
//         target.select();
//     }
// });
//
// (function() {
//     var fontSize = document.getElementById('fontSize'),
//         testDrive = document.getElementById('testDrive'),
//         testText = document.getElementById('testText');
//     function updateTest() {
//         testDrive.innerHTML = testText.value || String.fromCharCode(160);
//         if (window.icomoonLiga) {
//             window.icomoonLiga(testDrive);
//         }
//     }
//     function updateSize() {
//         testDrive.style.fontSize = fontSize.value + 'px';
//     }
//     fontSize.addEventListener('change', updateSize, false);
//     testText.addEventListener('input', updateTest, false);
//     testText.addEventListener('change', updateTest, false);
//     updateSize();
// }());







// product Gallery and Zoom

// activation carousel plugin
var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 5,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    breakpoints: {
        0: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 4,
        },
    }
});
var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    thumbs: {
        swiper: galleryThumbs
    },
});
// change carousel item height
// gallery-top
let productCarouselTopWidth = $('.gallery-top').outerWidth();
$('.gallery-top').css('height', productCarouselTopWidth);

// gallery-thumbs
let productCarouselThumbsItemWith = $('.gallery-thumbs .swiper-slide').outerWidth();
$('.gallery-thumbs').css('height', productCarouselThumbsItemWith);

// activation zoom plugin
var $easyzoom = $('.easyzoom').easyZoom();
