$(document).ready(function () {
    $('.sub-menu-container').each(function () {
        var total_cols = 0;
        $(this).find('.sub-item2-content').each(function () {
            var cols = parseFloat($(this).data('cols'));
            if(total_cols == 0) {
                $(this).css('clear', 'left');
            }
            total_cols += cols;
            if(total_cols > 12) {
                $(this).css('clear', 'left');
                total_cols = cols;
            }
            if(total_cols == 12) {
                total_cols = 0;
            }
        });
    });

    $(".vertical-menu .tt-menu-bar").on("click" , function(){
        $("this").toggleClass("active");
        $("body").toggleClass("nav-open");
        $(".vertical-menu .tt-vertical-menu").toggleClass("active");
    });

    $(".vertical-menu .menu-close").on("click" , function(){
		$(".vertical-menu .tt-menu-bar").removeClass("active");
		$("body").removeClass("nav-open");
		$(".vertical-menu .tt-vertical-menu").removeClass("active");
	});


	// Menu
	$('.tt-menu .sub-menu-container').each(function() {
		var menu = $('.tt-menu').offset();
		var dropdown = $(this).parent().offset();

		var i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('.tt-menu').outerWidth());

		if (i > 0) {
			$(this).css('margin-left', '-' + (i + 10) + 'px');
		}
	});

});
function menuMore(){
	if($( window ).width() >= 992) {
		var max_items = 5;
		var liItems = $('header .main-category-list > .tt-menu-bar > ul.ul-top-items > li');
		var remainItems = liItems.slice(max_items, liItems.length);
		remainItems.wrapAll('<li class="li-top-item more-menu"><div class="flyout-menu-container sub-menu-container"><ul class="ul-second-items"></ul></div></li>');
		$('.more-menu').prepend('<a class="a-top-link" href="#"><span>More</span></a>');
	}
}
$(document).ready(function(){ menuMore(); });

function menuToggle() {
	if($( window ).width() < 992) {
		$(".main-category-list .horizontal-menu ul.ul-top-items").css('display', 'none');

		$(".vertical-menu .tt-vertical-menu > .ul-top-items > .li-top-item").appendTo(".main-category-list .horizontal-menu .ul-top-items");

		$(".main-category-list ul.ul-top-items li.li-top-item > i").remove();

		$(".main-category-list .TT-panel-heading").unbind("click");
		$('.main-category-list .TT-panel-heading').click(function(){
			$(this).parent().toggleClass('TTactive').find('ul.ul-top-items').slideToggle( "fast" );
		});

		$(".main-category-list ul.ul-top-items > li.li-top-item > a").after("<i class='material-icons'></i>");

		$(".main-category-list ul.ul-top-items > li.li-top-item > i").unbind("click");

		var Accordions = function(el, multiple) {
			this.el = el || {};
			this.multiple = multiple || false;

			// Variables privadas
			var link = this.el.find('i.material-icons');
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
			$el.find('.sub-menu-container').not($next).slideUp().parent().removeClass('active');
			};
		}

		var accordions = new Accordions($('.li-top-item'), false);

		$("#top .top-left").appendTo(".main-category-list ul.ul-top-items");
		$("header .top-right").appendTo(".main-category-list ul.ul-top-items");
		$(".header_style1 header .header-left").prependTo(".full-header > .container");

		$(".header_style2 .full-header .search").prependTo(".full-header .right-block");
	}
	else {
		$(".main-category-list .horizontal-menu ul.ul-top-items").css('display', 'block');
		$(".main-category-list ul.ul-top-items li.li-top-item > i").unbind("click");
		$(".main-category-list .TT-panel-heading").unbind("click");

		$(".main-category-list .horizontal-menu .ul-top-items > .li-top-item.over").appendTo(".vertical-menu .tt-vertical-menu > .ul-top-items");
		$(".main-category-list ul.ul-top-items .top-left").appendTo("#top");
		$(".main-category-list ul.ul-top-items .top-right").appendTo(".header-middle > .container .middle-content");

		$(".header_style1 .full-header .header-left").insertAfter("header .header-middle");

		$(".header_style2 .right-block .search").insertAfter(".full-header .header-left");
	}
}
$(document).ready(function() {menuToggle();});
$( window ).resize(function(){menuToggle();});

function verticalmenuToggle() {
	if($( window ).width() >= 992) {

		$(".header_style1 .vertical-menu ul.ul-top-items li.side-menu > i").remove();
		$(".header_style1 .vertical-menu ul.ul-top-items > li.side-menu > a").after("<i class='material-icons'></i>");
		$(".header_style1 .vertical-menu ul.ul-top-items > li.li-top-item > i").unbind("click");

		$(".header_default .vertical-menu ul.ul-top-items li.side-menu > i").remove();
		$(".header_default .vertical-menu ul.ul-top-items > li.side-menu > a").after("<i class='material-icons'></i>");
		$(".header_default .vertical-menu ul.ul-top-items > li.li-top-item > i").unbind("click");

		var Accordions = function(el, multiple) {
			this.el = el || {};
			this.multiple = multiple || false;

			// Variables privadas
			var link = this.el.find('i.material-icons');
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
			$el.find('.sub-menu-container').not($next).slideUp().parent().removeClass('active');
			};
		}

		var accordions = new Accordions($('.li-top-item'), false);
	}
}
$(document).ready(function() {verticalmenuToggle();});
$( window ).resize(function(){verticalmenuToggle();});
