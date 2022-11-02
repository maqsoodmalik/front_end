/* ----------- Start Page-loader ----------- */
$(window).load(function() {
    $(".ttloading-bg").fadeOut("slow");
})
/* ----------- End Page-loader ----------- */
/* ------------ Start Content-width JS --------------- */
function contentwidth() {
	colsWidth = $('#column-right, #column-left').length;
	if($( window ).width() >= 1300) {
		$( "#content" ).addClass( "Cwidth" );
		$( "#column-left" ).addClass( "Lwidth" );
		$( "#column-right" ).addClass( "Rwidth" );
		if (colsWidth == 2) {
			$('.Cwidth').css('width', '60%');
			$('.Lwidth').css('width', '20%');
			$('.Rwidth').css('width', '20%');
		} else if (colsWidth == 1) {
			$('.Cwidth').css('width', '75%');
			$('.Lwidth').css('width', '25%');
			$('.Rwidth').css('width', '25%');
		} else {
			$('.Cwidth').css('width', '100%');
		}
	} else if($( window ).width() > 991) {
		$( "#content" ).addClass( "Cwidth" );
		$( "#column-left" ).addClass( "Lwidth" );
		$( "#column-right" ).addClass( "Rwidth" );
	if (colsWidth == 2) {
		$('.Cwidth').css('width', '60%');
		$('.Lwidth').css('width', '20%');
		$('.Rwidth').css('width', '20%');
		$("#column-left" ).addClass("Rtoggle" );
		$("#column-left h1.text-uppercase").click(function() {
			$(this).parent().toggleClass('active').find('.rightcolumn-toggle').slideToggle( "200" );
		});
	} else if (colsWidth == 1) {
		$('.Cwidth').css('width', '75%');
		$('.Lwidth').css('width', '25%');
		$('.Rwidth').css('width', '25%');
	} else {
		$('.Cwidth').css('width', '100%');
	}
	} else {
	$("#content").removeClass("Cwidth");
	$("#column-left").removeClass("Lwidth");
	$("#column-right").removeClass("Rwidth");
	$("#column-right" ).removeClass("Rtoggle" );
	$('#content').removeAttr("style");
	$('#column-left').removeAttr("style");
	$('#column-right').removeAttr("style");
	}
}
$(document).ready(function(){contentwidth();});
$(window).resize(function() {contentwidth();});

/* ------------ End Content-width JS --------------- */
$(document).ready(function() {

		$(".ttsearch_button").click(function() {
			$('.ttsearchtoggle').parent().toggleClass('active');
			$('.ttsearchtoggle').toggle('fast', function() {
				$( ".ttsearchtoggle .input-lg" ).focus();
			});
			$(".account-link-toggle").slideUp("slow");
			$(".header-cart-toggle").slideUp("slow");
			$(".currency-toggle").slideUp("slow");
			$(".language-toggle").slideUp("slow");
			$("body").removeClass("user-open");
			$("body").removeClass("cart-open");
			$("body").removeClass("language-open");
			$("body").removeClass("currency-open");
			$("body").toggleClass("search-open");
	 	});

		$("#form-currency button.dropdown-toggle").click(function(){
			$( ".currency-toggle" ).slideToggle( "2000" );
			$(".language-toggle").slideUp("slow");
			$(".account-link-toggle").slideUp("slow");
			$(".header-cart-toggle").slideUp("slow");
			$('.ttsearchtoggle').parent().removeClass("active");
			$('.ttsearchtoggle').hide('fast');
			$("body").removeClass("search-open");
			$("body").removeClass("user-open");
			$("body").removeClass("cart-open");
			$("body").removeClass("language-open");
			$("body").toggleClass("currency-open");
    	});

        $("#form-language button.dropdown-toggle").click(function(){
			$( ".language-toggle" ).slideToggle( "2000" );
			$(".currency-toggle").slideUp("fast");
			$(".account-link-toggle").slideUp("slow");
			$(".header-cart-toggle").slideUp("slow");
			$('.ttsearchtoggle').parent().removeClass("active");
			$('.ttsearchtoggle').hide('fast');
			$("body").removeClass("search-open");
			$("body").removeClass("user-open");
			$("body").removeClass("cart-open");
			$("body").removeClass("currency-open");
			$("body").toggleClass("language-open");
       	});

		$(".user-info a.dropdown-toggle").click(function(){
			$( ".account-link-toggle" ).slideToggle( "2000" );
			$(".currency-toggle").slideUp("slow");
			$(".language-toggle").slideUp("slow");
		   	$(".header-cart-toggle").slideUp("slow");
			$('.ttsearchtoggle').parent().removeClass("active");
			$('.ttsearchtoggle').hide('fast');
			$("body").removeClass("search-open");
			$("body").removeClass("cart-open");
			$("body").removeClass("language-open");
			$("body").removeClass("currency-open");
			$("body").toggleClass("user-open");
	  	});

		$("#cart button.dropdown-toggle").click(function(){
			$( ".header-cart-toggle" ).slideToggle( "fast" );
			$( "#cart" ).toggleClass( "open" );
		   	$(".account-link-toggle").slideUp("slow");
			$(".language-toggle").slideUp("slow");
			$(".currency-toggle").slideUp("slow");
			$('.ttsearchtoggle').parent().removeClass("active");
			$('.ttsearchtoggle').hide('fast');
			$("body").removeClass("search-open");
			$("body").removeClass("user-open");
			$("body").removeClass("language-open");
			$("body").removeClass("currency-open");
			$("body").toggleClass("cart-open");
   	    });
		/*---------------- Start cart ---------------- */
		jQuery(".ttsearchtoggle .close-search").on('click',function(e){
			jQuery('#search').removeClass('active');
			$(".ttsearchtoggle").slideUp("slow");
			$("body").removeClass("search-open");
		});

	/*---------------- End cart ---------------- */


	$(".option-filter .list-group-items a").click(function() {
		$(this).toggleClass('collapsed').next('.list-group-item').slideToggle();
	});

	$( "#content" ).addClass( "left-column" );

	$("ul.breadcrumb li:nth-last-child(1) a").addClass('last-breadcrumb').removeAttr('href');

	$("#column-left .products-list .product-thumb, #column-right .products-list .product-thumb").unwrap();
	$("#column-left .list-products .product-thumb, #column-right .list-products .product-thumb").unwrap();

	$("#content > h1, .account-wishlist #content > h2, .account-address #content > h2, .account-download #content > h2").first().addClass("page-title");

	$("#content > .page-title").wrap("<div class='page-title-wrapper'><div class='container'></div></div>");
	$(".page-title-wrapper .container").append($("ul.breadcrumb"));
	$(".page-title-wrapper").prependTo($(".header-content-title .parallex"));


	$('#column-left .product-thumb .image, #column-right .product-thumb .image').attr('class', 'image col-xs-4 col-sm-4 col-md-4');
	$('#column-left .product-thumb .thumb-description, #column-right .product-thumb .thumb-description').attr('class', 'thumb-description col-xs-8 col-sm-8 col-md-8');

		$('select.form-control').wrap("<div class='select-wrapper'></div>");
		$('input[type="checkbox"]').wrap("<span class='checkbox-wrapper'></span>");
		$('input[type="checkbox"]').attr('class','checkboxid');
		$('input[type="radio"]').wrap("<span class='radio-wrapper'></span>");
		$('input[type="radio"]').attr('class','radioid');

		$('#column-left .products-list .btn-cart').removeAttr('data-original-title');
		$( ".follow-us" ).insertAfter( ".footer-right-cms" );
		$(".footer_default #tttestimonial, .footer_default .newletter-subscribe").wrapAll("<div class='container'><div class='row'><div class='testi-news'></div></div></div>");
		$(".footer_default #tttestimonial .testimonial-user-title").each(function() {
			$(this).prependTo($(this).parent().parent().find(".testimonial-content"));
		});

		$(".product-options .Color, .product-options .Size").wrapAll("<div class='cosi'></div>");


		/*-------start go to top---------*/
	$( "body" ).append( "<div class='backtotop-img'><div class='goToTop ttbox'></div></div>" );
	$( "body" ).append( "<div id='goToTop' title='Top' class='goToTop ttbox-img'></div>" );
	$("#goToTop").hide();
/*-------end go to top---------*/
/*---------------------- Inputtype Js Start -----------------------------*/
$('.checkboxid').change(function(){
if($(this).is(":checked")) {
$(this).addClass("chkactive");
$(this).parent().addClass('active');
} else {
$(this).removeClass("chkactive");
$(this).parent().removeClass('active');
}
});

$(function() {
var $radioButtons = $('input[type="radio"]');
$radioButtons.click(function() {
$radioButtons.each(function() {
$(this).parent().toggleClass('active', this.checked);
});
});
});
/*---------------------- Inputtype Js End -----------------------------*/

/*------------- Slider -Loader Js Strat ---------------*/
$(window).load(function()
{
$(".ttloading-bg").fadeOut("slow");
})
/*------------- Slider -Loader Js End ---------------*/
/* Slider Load Spinner */
$(window).load(function() {
	$(".slideshow-panel .ttloading-bg").removeClass("ttloader");
});
/* --------------- Start Carousel Counter JS ---------------*/
	colsblogCarousel = $('#column-right, #column-left').length;
	if (colsblogCarousel == 2) {
		cBi=2;
	} else if (colsblogCarousel == 1) {
		cBi=3;
	} else {
		cBi=3;
	}

	colsCarousel = $('#column-right, #column-left').length;
	if (colsCarousel == 2) {
		ci=3;
	} else if (colsCarousel == 1) {
		ci=3;
	} else {
		ci=4;
	}

/* --------------- End Carousel Counter JS ---------------*/
var ttbestsellerproduct = $('#content .bestseller-carousel .bestseller-items.products-carousel').owlCarousel({
	items : 5, //1 items above 1000px browser width
	nav : true,
	dots : false,
	loop: false,
	autoplay:false,
	rtl:false,
	responsive: {
		0:{
			items:1
		},
		544:{
			items:2
		},
		768:{
			items:2
		},
		992:{
			items:3
		},
		1300:{
			items:3
		},
		1651:{
			items:5
		}
	}
});

var ttlatestproduct = $('#content .tt-latest-product .latest-carousel .latest-items.products-carousel').owlCarousel({
	items : 5, //1 items above 1000px browser width
	nav : false,
	dots : false,
	loop: false,
	autoplay:false,
	rtl:false,
	responsive: {
		0:{
			items:1
		},
		481:{
			items:2
		},
		768:{
			items:3
		},
		1200:{
			items:3
		},
		1310:{
			items:5
		}
	}
});


var ttfeatureproduct = $('#content .featured-carousel .featured-items.products-carousel').owlCarousel({
	items : 5, //1 items above 1000px browser width
	nav : false,
	dots : false,
	loop: false,
	autoplay:false,
	rtl:false,
	responsive: {
		0:{
			items:1
		},
		360:{
			items:2
		},
		768:{
			items:3
		},
		1250:{
			items:3
		},
		1550:{
			items:5
		}
	}
});

if (!$( "body" ).hasClass( "responsive_style2" )){
var ttspecialtab = $('#content .special-carousel.products-list .special-items.products-carousel').owlCarousel({
	items : 5, //1 items above 1000px browser width
	nav : true,
	dots : false,
	loop: false,
	autoplay:false,
	rtl:false,
	responsive: {
		0:{
			items:1
		},
		481:{
			items:2
		},
		640:{
			items:3
		},
		1200:{
			items:4
		},
		1400:{
			items:5
		}
	}
});
}

if ($( "body" ).hasClass( "responsive_style2" )){
	var ttspecialtab = $('#content .special-carousel.products-list .special-items.products-carousel').owlCarousel({
		items : 5, //1 items above 1000px browser width
		nav : true,
		dots : false,
		loop: false,
		autoplay:false,
		rtl:false,
		responsive: {
			0:{
				items:2
			},
			481:{
				items:2
			},
			640:{
				items:3
			},
			1200:{
				items:4
			},
			1400:{
				items:5
			}
		}
	});
}

if (!$( "body" ).hasClass( "responsive_style2" )){
	var ttcategorytab = $('.TTcategory-tab.products-carousel').owlCarousel({
		items : 5, //1 items above 1000px browser width
		nav : true,
		dots : false,
		loop: false,
		autoplay:false,
		rtl:false,
		responsive: {
			0:{
				items:1
			},
			360:{
				items:2
			},
			640:{
				items:3
			},
			1200:{
				items:4
			},
			1400:{
				items:5
			}
		}
	});
	}

	if ($( "body" ).hasClass( "responsive_style2" )){
		var ttcategorytab = $('.TTcategory-tab.products-carousel').owlCarousel({
			items : 5, //1 items above 1000px browser width
			nav : true,
			dots : false,
			loop: false,
			autoplay:false,
			rtl:false,
			responsive: {
				0:{
					items:2
				},
				360:{
					items:2
				},
				640:{
					items:3
				},
				1200:{
					items:4
				},
				1400:{
					items:5
				}
			}
		});
	}

/* ----------- SmartBlog Js Start ----------- */
	if (!$( "#blog_latest_new_home" ).is('.blog_style1, .blog_style2, .blog_style3')) {
		var ttblog = $('#ttsmartblog-carousel').owlCarousel({
			items : cBi, //1 items above 1000px browser width
			nav : true,
			dots : false,
			loop: false,
			autoplay:false,
			rtl:false,
			responsive: {
				0:{
					items:1
				},
				543:{
					items:1
				},
				544:{
					items:2
				},
				1200:{
					items:2
				},
				1450:{
					items:cBi
				}
			}
		});
	}
	var ttblog1 = $('.blog_style1 #ttsmartblog-carousel').owlCarousel({
		items : cBi, //1 items above 1000px browser width
		nav : true,
		dots : false,
		loop: false,
		autoplay:false,
		rtl:false,
		responsive: {
			0:{
				items:1
			},
			543:{
				items:1
			},
			544:{
				items:2
			},
			1200:{
				items:3
			},
			1600:{
				items:3
			}
		}
	});

	var ttblog2 = $('.blog_style2 #ttsmartblog-carousel').owlCarousel({
		items : cBi, //1 items above 1000px browser width
		nav : true,
		dots : false,
		loop: false,
		autoplay:false,
		rtl:false,
		responsive: {
			0:{
				items:1
			},
			544:{
				items:1
			},
			768:{
				items:1
			},
			992:{
				items:1
			},
			1200:{
				items:2
			}
		}
	});

	var ttblog3 = $('.blog_style3 #ttsmartblog-carousel').owlCarousel({
		items : cBi, //1 items above 1000px browser width
		nav : true,
		dots : false,
		loop: false,
		autoplay:false,
		rtl:false,
		responsive: {
			0:{
				items:1
			},
			543:{
				items:1
			},
			544:{
				items:2
			},
			1200:{
				items:3
			},
			1600:{
				items:3
			}
		}
	});
 /* ----------- SmartBlog Js End ----------- */
/*----------------- Testimonial Js Start ------------------------*/
	var tttestimonial = $('.testimonial-carousel').owlCarousel({
		items : 1, //1 items above 1000px browser width
		nav : true,
		dots : true,
		loop: false,
		autoplay:false,
		autoplaySpeed: 1000,
		autoplayHoverPause:true,
		smartSpeed:450,
		pagination:false,
		rtl:false
	});
/*----------------- Testimonial Js End ------------------------*/
	var ttservices = $("#ttcmsservices .block_content").owlCarousel({
        items: 4, //10 items above 1000px browser width
		nav : false,
		dots : false,
		responsive: {
			0:{
				items:1
			},
			480:{
				items:2
			},
			768:{
				items:3
			},
			1200:{
				items:4
			}
		}
    });
	var ttgallery = $("#cmsgallery .image-content").owlCarousel({
        items: 6, //10 items above 1000px browser width
		nav : false,
		dots : false,
		autoplay: true,
		responsive: {
			0:{
				items:2
			},
			480:{
				items:2
			},
			640:{
				items:3
			},
			1200:{
				items:5
			},
			1300:{
				items:6
			}
		}
    });
/*-------------------------- Countdown js start ------------------------------ */
$('.tt-special-countdown .product-thumb').each(function(){
var $desc = jQuery(this).find('.thumb-description .progress');
var $qty = jQuery(this).find('#quantity');
var $pbar = jQuery(this).find('.progress-bar');
var $progress = $desc;
var $progressBar = $pbar;
var $quantity = $qty.html();
var currentWidth = parseInt($progressBar.css('width'));
var allowedWidth = parseInt($progress.css('width'));
var addedWidth = currentWidth + parseInt($quantity);
if (addedWidth > allowedWidth) {
addedWidth = allowedWidth;
}
var progress = (addedWidth / allowedWidth) * 100;
$progressBar.animate({width: progress + '%' }, 100);
});


$('#content .image-additional img').on('click',function(event) {
    var img_wrap = $(this).closest( ".product-thumb" );
    $(img_wrap).find('.special-image img').attr('src',$(event.target).data('image-large-src'));
    $('.selected').removeClass('selected');
    $(event.target).addClass('selected');
    $(img_wrap).find('.product-image img').prop('src', $(event.currentTarget).data('image-large-src'));
});

var ttspecialcountdown = $('#content .tt-special-countdown .special-countdown.products-carousel').owlCarousel({
	items : 2, //1 items above 1000px browser width
	nav : true,
	dots : false,
	loop: false,
	autoplay:false,
	rtl:false,
	responsive: {
		0:{
			items:1
		},
		320:{
			items:1
		},
		680:{
			items:1
		},
		991:{
			items:1
		},
		1500:{
			items:2
		}
	}
});

$('#column-left .products-list .products-carousel').owlCarousel({
	items:1,
	itemsDesktop: [1199,1],
	itemsDesktopSmall: [991,1],
	itemsTablet: [767,1],
	itemsMobile: [480,1],
	nav: true,
	dots: false,
	autoPlay: true,
	stopOnHover  : true,
	pagination: false
});

var ttcatlist = $('.category-list ul').owlCarousel({
	items : 4, //1 items above 1000px browser width
	nav : false,
	dots : false,
	loop: false,
	autoplay:false,
	rtl:false,
	responsive: {
	0:{
		items:2
	},
	481:{
		items:3
	},
	767:{
		items:4
	},
	992:{
		items:4
	},
	1300:{
		items:4
	}
	}
});

var ttspecialadditional = $('#content .special-additional-images').owlCarousel({
		items : 2, //1 items above 1000px browser width
		nav : true,
		dots : false,
		loop: false,
		autoplay:false,
		rtl:false,
		responsive: {
			0:{
				items:1
			},
			320:{
				items:2
			},
			480:{
				items:2
			},
			544:{
				items:2
			},
			768:{
				items:2
			},
			992:{
				items:2
			},
			1200:{
				items:2
			}
		}
});

$("#column-left .tt-special-countdown .item-countdown, #column-right .tt-special-countdown .item-countdown").each(function() {
    $(this).insertAfter($(this).parent().parent().parent().find(".button-group"));
});
/*-------------------------- Countdown js End ------------------------------ */
var cat_feature = $('.category-feature.tt-carousel').owlCarousel({
	items : 4, //1 items above 1000px browser width
	nav : false,
	dots : false,
	loop: true,
	autoplay:false,
	rtl:false,
	responsive: {
		0:{
			items:1
		},
		480:{
			items:1
		},
		543:{
			items:2,
			center: false,
		},
		768:{
			items:3
		},
		1200:{
			items:4
		}
	}
});

if (!$( "body" ).hasClass( "responsive_style2" )){
	var ttrelatedproduct = $('.related-carousel .related-items.products-carousel').owlCarousel({
			items : 4, //1 items above 1000px browser width
			nav : true,
			dots : false,
			loop: false,
			autoplay:false,
			rtl:false,
			responsive: {
				0:{
					items:1
				},
				360:{
					items:2
				},
				640:{
					items:3
				},
				1300:{
					items:4
				},
				1650:{
					items:4
				}
			}
		});
	}

if ($( "body" ).hasClass( "responsive_style2" )){
	var ttrelatedproduct = $('.related-carousel .related-items.products-carousel').owlCarousel({
			items : 4, //1 items above 1000px browser width
			nav : true,
			dots : false,
			loop: false,
			autoplay:false,
			rtl:false,
			responsive: {
				0:{
					items:2
				},
				320:{
					items:2
				},
				640:{
					items:3
				},
				1300:{
					items:4
				},
				1650:{
					items:4
				}
			}
		});
	}

if ($( "body" ).hasClass( "responsive_style2" )){
	$("#content .products-list .products-carousel").owlCarousel({
		items : ci, //1 items above 1000px browser width
		nav : true,
		dots : false,
		addClassActive: true,
		loop: false,
		autoplay:false,
		autoplayHoverPause:true,
		responsive: {
			1400: {
				items: ci
			},
			1300: {
				items: 4
			},
			1200: {
				items: 4
			},
			640: {
				items: 3
			},
			480: {
				items: 2
			},
			0:   {
				items:2
			}
		}
	});
	}

// product Carousel

initialize_owl($('#owl1'));
$('a[href="#tab-latest-0"]').on('shown.bs.tab', function () {
	initialize_owl($('#owl1'));
}).on('hide.bs.tab', function () {
	destroy_owl($('#owl1'));
});

$('a[href="#tab-featured-0"]').on('shown.bs.tab', function () {
	initialize_owl($('#owl2'));
}).on('hide.bs.tab', function () {
	destroy_owl($('#owl2'));
});

$('a[href="#tab-bestseller-0"]').on('shown.bs.tab', function () {
	initialize_owl($('#owl3'));
}).on('hide.bs.tab', function () {
	destroy_owl($('#owl3'));
});

$('a[href="#tab-special-0"]').on('shown.bs.tab', function () {
	initialize_owl($('#owl4'));
}).on('hide.bs.tab', function () {
	destroy_owl($('#owl4'));
});
/* ------------ Start avocadotheme Parallax JS ------------ */

	var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
	if(!isMobile) {
		if($(".parallex").length){  $(".parallex").sitManParallex({  invert: false });};
		}else{
		$(".parallex").sitManParallex({  invert: true });
	}

/* ------------ End avocadotheme Parallax JS ------------ */

/* Go to Top JS START */
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 150) {
				$('.goToTop').fadeIn();
			} else {
				$('.goToTop').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('.goToTop').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 1000);
			return false;
		});
	});
	/* Go to Top JS END */

	var prevScrollpos = window.pageYOffset;
	window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;
		if (prevScrollpos > currentScrollPos) {
			document.getElementById("header_sticky_on").style.top = "0";
		} else {
			document.getElementById("header_sticky_on").style.top = "-160px";
		}
		prevScrollpos = currentScrollPos;
	}

	$('.tt-collection-slider-wrap .category-detail-content > .category-title > .cat-content:first-child > a').addClass('active');
	$('.tt-collection-slider-wrap .cat-featured-content > .collection_cat_item:first-child').css('display', 'block');

});
// Documnet.ready() over....
function cattab(evt, catName) {
	var i, collection_cat_item, collection_title;
	collection_cat_item = document.getElementsByClassName("collection_cat_item");
	for (i = 0; i < collection_cat_item.length; i++) {
	  collection_cat_item[i].style.display = "none";
	}
	collection_title = document.getElementsByClassName("collection_title");
	for (i = 0; i < collection_title.length; i++) {
	  collection_title[i].className = collection_title[i].className.replace(" active", "");
	}
	document.getElementById(catName).style.display = "block";
	evt.currentTarget.className += " active";
  }
/* --------------- Start Sticky-header JS ---------------*/
function header() {
	if (jQuery(window).width() > 1199){
		if (jQuery(this).scrollTop() > 1000)
		   {
			   jQuery('.header_sticky_on .full-header').addClass("fixed");

		   }else{
			jQuery('.header_sticky_on .full-header').removeClass("fixed");
		   }
	   } else {
		 jQuery('.header_sticky_on .full-header').removeClass("fixed");
		 }
}

$(document).ready(function(){header();});
jQuery(window).resize(function() {header();});
jQuery(window).scroll(function() {header();});

/* --------------- End Sticky-header JS ---------------*/

function initialize_owl(el) {
    el.owlCarousel({
        items : ci, //1 items above 1000px browser width
		nav : true,
		dots : false,
		loop: false,
		autoplay:false,
		autoplayHoverPause:true,
		navRewind: false,
		responsive: {
			1400: {
				items: ci
			},
			1300: {
				items: 4
			},
			1200: {
				items: 4
			},
			640: {
				items: 3
			},
			480: {
				items: 2
			},
			0:   {
				items:1
			}
		}
    });
}

function destroy_owl(el) {
    if(typeof el.data('owlCarousel') != 'undefined') {
		el.data('owlCarousel').destroy();
		el.removeClass('owl-carousel');
	}
}

/* ------ left-column  sticky js ---*/
function stickyleft() {
   if ($(document).width() <= 1199) {
			jQuery('#content, #column-left, #column-right').theiaStickySidebar({
	  additionalMarginBottom: 30,
	  additionalMarginTop: 60
	});
		} else if ($(document).width() >= 1200) {
			jQuery('#content, #column-left, #column-right').theiaStickySidebar({
	  additionalMarginBottom: 30,
	  additionalMarginTop: 160
	});
		}
	}
	$(document).ready(function() {
		stickyleft();
	});
	$(window).resize(function() {
		stickyleft();
	});
/* ---  end left-column stick js---*/

/*****************start animation script*******************/
function hb_animated_contents() {
	$(".hb-animate-element:in-viewport").each(function (i) {
	var $this = $(this);
	if (!$this.hasClass('hb-in-viewport')) {
	setTimeout(function () {
	$this.addClass('hb-in-viewport');
	}, 180 * i);
	}
	});
	}
	$(window).scroll(function () {
	hb_animated_contents();
	});
	$(window).load(function () {
	hb_animated_contents();
});
/*****************end animation script*******************/

/* FilterBox - Responsive Content*/
function optionFilter(){
	if ($(window).width() <= 991) {
		$('#column-left .option-filter-box').appendTo('.row #content .category-description');
		$('#column-right .option-filter-box').appendTo('.row #content .category-description');
	} else {
		$('.row #content .category-description .option-filter-box').appendTo('#column-left .option-filter');
		$('.row #content .category-description .option-filter-box').appendTo('#column-right .option-filter');
	}
}
$(document).ready(function(){ optionFilter(); });
$(window).resize(function(){ optionFilter(); });
/*category filter js*/

function footerToggle() {

	if($( window ).width() < 992) {
		$(".footer_style2 footer .footer-links").appendTo(".footer-container > .container > .row");
		$(".footer_style1 footer .footer-bottom .footer-links").prependTo(".footer-container > .container > .row");

		$("footer .footer-column h5").addClass( "toggle" );
		$("footer .footer-column1 h5").addClass( "toggle" );
		$("footer .footer-column h5.toggle").unbind("click");
			var Accordions = function(el, multiple) {
				this.el = el || {};
				this.multiple = multiple || false;

				// Variables privadas
				var link = this.el.find('.toggle');
				// Evento
				link.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
			}

			Accordions.prototype.dropdown = function(e) {
				var $el = e.data.el;
				$this = $(this),
				$next = $this.next();

				$next.slideToggle();
				$this.parent().toggleClass('active');

				if (!e.data.multiple) {
				$el.find('ul.list-unstyled').not($next).slideUp().parent().removeClass('active');
				};
			}

			var accordions = new Accordions($('.footer-column'), false);

	} else {

		$("footer .footer-column h5.toggle").unbind("click");
		$("footer .footer-column h5").removeClass('toggle');

		$(".footer_style2 footer .footer-container .footer-links").insertBefore(".footer-bottom > .container > .bottom-block .footer-bottom-link");
		$(".footer_style1 footer .footer-container .footer-links").insertBefore(".footer-bottom > .container .footer-bottom-link");
	}
}

$(document).ready(function() {footerToggle();});
$(window).resize(function() {footerToggle();});

function columnToggle() {
	if($( window ).width() < 992) {
		$("#column-left .panel-heading").addClass( "toggle" );
		$("#column-left .list-group").css( 'display', 'none' );
		$("#column-left .panel-default.active .list-group").css( 'display', 'block' );
		$("#column-left .panel-heading.toggle").unbind("click");
		$("#column-left .panel-heading.toggle").click(function() {
		$(this).parent().toggleClass('active').find('.list-group').slideToggle( "fast" );
		});

		$("#column-left .box-heading").addClass( "toggle" );
		$("#column-left .products-carousel").css( 'display', 'none' );
		$("#column-left .products-list.active .products-carousel").css( 'display', 'block' );
		$("#column-left .box-heading.toggle").unbind("click");
		$("#column-left .box-heading.toggle").click(function() {
		$(this).parent().toggleClass('active').find('.products-carousel').slideToggle( "fast" );
		});

		$("#column-right .panel-heading").addClass( "toggle" );
		$("#column-right .list-group").css( 'display', 'none' );
		$("#column-right .panel-default.active .list-group").css( 'display', 'block' );
		$("#column-right .panel-heading.toggle").unbind("click");
		$("#column-right .panel-heading.toggle").click(function() {
		$(this).parent().toggleClass('active').find('.list-group').slideToggle( "fast" );
		});

		$("#column-right .box-heading").addClass( "toggle" );
		$("#column-right .products-carousel").css( 'display', 'none' );
		$("#column-right .products-list.active .products-carousel").css( 'display', 'block' );
		$("#column-right .box-heading.toggle").unbind("click");
		$("#column-right .box-heading.toggle").click(function() {
		$(this).parent().toggleClass('active').find('.products-carousel').slideToggle( "fast" );
		});

	} else {
		$("#column-left .panel-heading").unbind("click");
		$("#column-left .panel-heading").removeClass( "toggle" );
		$("#column-left .list-group").css( 'display', 'block' );

		$("#column-left .box-heading").unbind("click");
		$("#column-left .box-heading").removeClass( "toggle" );
		$("#column-left .products-carousel").css( 'display', 'block' );

		$("#column-right .panel-heading").unbind("click");
		$("#column-right .panel-heading").removeClass( "toggle" );
		$("#column-right .list-group").css( 'display', 'block' );

		$("#column-right .box-heading").unbind("click");
		$("#column-right .box-heading").removeClass( "toggle" );
		$("#column-right .products-carousel").css( 'display', 'block' );

	}
}

$(document).ready(function() {columnToggle();});
$(window).resize(function() {columnToggle();});

/* Category List - Tree View */
function categoryListTreeView() {
	$(".category-treeview li.category-li").find("ul").parent().prepend("<div class='list-tree'></div>").find("ul").css('display','none');

	$(".category-treeview li.category-li.category-active").find("ul").css('display','block');
	$(".category-treeview li.category-li.category-active").toggleClass('active');
}
$(document).ready(function() {categoryListTreeView();});


/* Category List - TreeView Toggle */
function categoryListTreeViewToggle() {
	$(".category-treeview li.category-li .list-tree").click(function() {
		$(this).parent().toggleClass('active').find('ul').slideToggle();
	});
}
$(document).ready(function() {categoryListTreeViewToggle();});


/* Animate effect on Review Links - Product Page */
$(".product-total-review, .product-write-review").click(function() {
    $('html, body').animate({ scrollTop: $(".product-tabs").offset().top }, 1000);
});

function responsivecolumn()
{
	if ($(window).width() <= 991)
	{
		$('#page > .container > .row > #column-left').appendTo('#page > .container > .row');
		$('#page > .container > .row > #column-right').appendTo('#page > .container > .row');

		$('#page > .container-fluid > .row > #column-left').appendTo('#page > .container-fluid > .row');
		$('#page > .container-fluid > .row > #column-right').appendTo('#page > .container-fluid > .row');
	}
	else if($(window).width() >= 992)
	{
		$('#page > .container > .row > #column-left').prependTo('#page > .container > .row');
		$('#page > .container > .row > #column-right').appendTo('#page > .container > .row');

		$('#page > .container-fluid > .row > #column-left').prependTo('#page > .container-fluid > .row');
		$('#page > .container-fluid > .row > #column-right').appendTo('#page > .container-fluid > .row');
	}
}
$(window).resize(function(){responsivecolumn();});
$(window).ready(function(){responsivecolumn();});
/*category filter js end*/
