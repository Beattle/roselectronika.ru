/* Simple jQuery Equal Heights  1.5.1 (c) 2013 Matt Banks */
(function($) {
	$.fn.equalHeights = function() {
		var maxHeight = 0,
		$this = $(this);
		$this.each( function() {
			var height = $(this).outerHeight();
			if ( height > maxHeight ) { maxHeight = height; }
		});
		return $this.css('height', maxHeight);
	};

	// auto-initialize plugin
	$('[data-equal]').each(function(){
		var $this = $(this),
		target = $this.data('equal');
		$this.find(target).equalHeights();
	});
})(jQuery);

function openFB1(title,content,buttons){
	//alert("123");
	$.fancybox({
		'content':'<div class="add2cart_popup_in">'+
		title+content+buttons+
		'</div>',
		'wrapCSS': 'add2cart_popup',
		'padding':15,
		'type':'inline',
		'helpers':{
			overlay:{locked:false}
		}
	});
};

$(document).ready(function(){

	//$('html').removeClass('bx-no-touch').addClass('bx-touch');

	$('.fancybox').fancybox({
		padding:22,
		fitToView:false,
		helpers:{
			overlay:{locked: false}
		}
	});
	
$(function(){
	$('.bx_catalog_grid .bx_catalog_item, .bx_catalog_carousel .bx_catalog_item').hover(function(){
		$('#container-in').addClass('z-hover');
	},function(){
		$('#container-in').removeClass('z-hover');
	});

	$('input, textarea').placeholder();
	
	function removeHash () { 
		var scrollV, scrollH, loc = window.location;
		if ("pushState" in history)
			history.pushState("", document.title, loc.pathname + loc.search);
		else {
			scrollV = document.body.scrollTop;
			scrollH = document.body.scrollLeft;
			loc.hash = "";
			document.body.scrollTop = scrollV;
			document.body.scrollLeft = scrollH;
		}
	}
	
	$('.side_menu li').each(function(){
		if($(this).find('ul').length){
			$(this).addClass('hassub');
		}
	});

	// CATALOG-GRID
	if($('.bx_catalog_grid').length){
		function setCatalogHeight(reset){
			$('.bx_catalog_grid:visible').each(function(){
				var $catalogGrid = $(this).find('.bx_catalog_item');
				var prevItemTop = $catalogGrid.first().position().top;
				
				if(reset===true){
					$catalogGrid.removeAttr('style');
				}

				$catalogGrid.equalHeights();

				/*
				$catalogGrid.each(function(i){
					if(prevItemTop < $(this).position().top){
						console.log(prevItemTop);
						console.log($(this).position().top);
						for(var j = 0; j < $catalogGrid.length-1; j+=i){
							$catalogGrid.slice(j, j+i).equalHeights();
							
						}
					}
					else{
						$catalogGrid.equalHeights();
					}

					prevItemTop = $(this).position().top;
				});
				*/

			});
		}
		setCatalogHeight();
		
		$(window).resize(function(){
			setTimeout(function(){
				setCatalogHeight(true);
			},500);
		});
		
		$('.bx_catalog_grid .bx_catalog_item .bx_catalog_item_container').mouseleave(function(){
			$('.sku_dd .bx_size').hide();
		});
		
	}
	
	$("#home-tabs .ms_tab").each(function(){
		if(!$(this).find('.bx_catalog_grid').length){
			$(".h_tabs_ctrl li a[href=#"+$(this).attr('id')+"]").parent().hide();
		}
	});

	$("#home-tabs").tabs({
		activate:function( event, ui){
			setCatalogHeight(true);
		}
	});

	// PRODUCT-PAGE
	if($('.product-page').length){
/*		if($('#pp_store_amount').length){
			var pp_store_amount = $('#pp_store_amount').detach();
			$('.tabcontent').append('<div class="tab" id="tab-store">'+pp_store_amount.html()+'</div>');
			$('.tabsblock .tabs').append('<a href="#store">'+storesTitle+'</a>'); // EDIT
		}*/
	
		// купить в 1 клик 
		$('.buy1click').fancybox({
			type:'ajax',
			padding:[15,25,15,25],
			fitToView:false,
			helpers:{
				overlay:{locked: false}
			},
			afterShow:function(){
				if(window.location.hash == '#product_request'){
					removeHash();
				}
			}
		});
		
		if(window.location.hash == '#product_request'){
			$('.buy1click').click();
		}
		
		$('.link-to-props a').click(function(){
			tabs = $('.product-page .tabsblock');
			setTab(tabs,'#props');
			
			$('html, body').animate({scrollTop: tabs.offset().top-30}, 1000);
		});
	
		
	}
	
	
	// SKU Drop Down
	$('.sku_dd, .select_dropdown').each(function(){
		$(this).find('>ul').css('margin-left','0').find('>li:not(".bx_missing"):first').click();
	});
	$('.sku_dd, .select_dropdown').each(function(){
		$(this).find('.dd_label').click(function(){
			$(this).next().fadeToggle(200);
			$(this).parents('.sku_dd, .select_dropdown').toggleClass('open');
			return false;
		});
		
		$(this).find('li').click(function(){
			$(this).parents('.bx_size').hide();
			$(this).parents('.sku_dd, .select_dropdown').removeClass('open');
		});
		
	});
	$(document).click(function(){
		$('.sku_dd .bx_size, .select_dropdown .dd').fadeOut(200);
		$('.sku_dd, .select_dropdown').removeClass('open');
	});
	
	
	// CALLBACK
	$('.auth-reg .auth-link').click(function(e){
		$('.login-form').fadeToggle(500);
		e.preventDefault();
		e.stopImmediatePropagation();
	});
	
	$(document).click(function(e){
		if($('.login-form').is(":visible") && !$('.login-form').is(e.target) && $(e.target).parents('.login-form').length == 0){
			$('.login-form').fadeOut(500);
		}
	});

	$('.login-form').click(function (e) {
		e.stopPropagation();    
	});
	
	// logoCarousel
	$(function(){
		$('.logoCarousel').each(function(){
			var logoCarouselWrap = $(this);
			var logoCarousel = $(this).find('.jcarousel');
			
			function jcControl(count){
				logoCarouselWrap
					.find('.jcarousel-control-prev')
					.on('jcarouselcontrol:active', function() {
						$(this).removeClass('inactive');
					})
					.on('jcarouselcontrol:inactive', function() {
						$(this).addClass('inactive');
					})
					.jcarouselControl({
						target: '-='+count
					});

				logoCarouselWrap
					.find('.jcarousel-control-next')
					.on('jcarouselcontrol:active', function() {
						$(this).removeClass('inactive');
					})
					.on('jcarouselcontrol:inactive', function() {
						$(this).addClass('inactive');
					})
					.jcarouselControl({
						target: '+='+count
					});
			}
			
			
			logoCarousel.on('jcarousel:reload jcarousel:create', function () {
				logoCarouselWrap.removeClass('disabled');
				var width = logoCarousel.innerWidth();
				var count = 1;
				
				if (width >= 840) {
					count = 5;
				}
				else if (width >= 672) {
					count = 4;
				}
				else if (width >= 504) {
					count = 3;
				}
				else if (width >= 336) {
					count = 2;
				}
				
				width = width / count;
				
				logoCarousel.jcarousel('items').css('width', width + 'px');
				
				if(count >= logoCarousel.jcarousel('items').length){
					logoCarouselWrap.addClass('disabled');
				}

				if(count<=2){
					jcControl(1);
				}
				else{
					jcControl(count-1);
				}

			});
			
			logoCarousel.jcarousel({
				wrap:'both',
				animation: 500
			});

		});
	});


	// productsCarousel
	$(function(){
		$('.productsCarousel').each(function(){
			var productsCarouselWrap = $(this);
			var productsCarousel = $(this).find('.jcarousel');
			
			function jcControl(count){
				productsCarouselWrap
					.find('.jcarousel-control-prev')
					.on('jcarouselcontrol:active', function() {
						$(this).removeClass('inactive');
					})
					.on('jcarouselcontrol:inactive', function() {
						$(this).addClass('inactive');
					})
					.jcarouselControl({
						target: '-='+count
					});

				productsCarouselWrap
					.find('.jcarousel-control-next')
					.on('jcarouselcontrol:active', function() {
						$(this).removeClass('inactive');
					})
					.on('jcarouselcontrol:inactive', function() {
						$(this).addClass('inactive');
					})
					.jcarouselControl({
						target: '+='+count
					});
			}
			
			
			productsCarousel.on('jcarousel:reload jcarousel:create', function () {
				productsCarouselWrap.removeClass('disabled');
				var width = productsCarousel.innerWidth();
				var count = 1;
				
				if($('#column-l').length == 1 && $('.bx_item_detail').length == 1){
					if (width >= 860) {
						count = 4;
					}
					else if (width >= 645) {
						count = 3;
					}
					else if (width >= 430) {
						count = 2;
					}
				}
				else{
					if (width >= 1100) {
						count = 5;
					}
					else if (width >= 880) {
						count = 4;
					}
					else if (width >= 660) {
						count = 3;
					}
					else if (width >= 440) {
						count = 2;
					}
				}

				width = width / count;
				
				productsCarousel.jcarousel('items').css('width', width + 'px');
				
				if(count >= productsCarousel.jcarousel('items').length){
					productsCarouselWrap.addClass('disabled');
				}

				if(count<=2){
					jcControl(1);
				}
				else{
					jcControl(count-1);
				}

			});
			
			productsCarousel.jcarousel({
				wrap:'both',
				animation: 600
			});

		});
	});
	
	// Side Adv
	$(function(){
		
		$('.side-adv').each(function(){
			var itemCarousel = $(this).find('.jcarousel');
			var saLength = itemCarousel.find('li').length;
			
			if(saLength>1){
				if($.cookie('s_adv_show') == undefined){
					$.cookie('s_adv_show', 0, { path: '/' });
					jcStart = 0;
				}
				else{
					newVal = parseInt($.cookie('s_adv_show')) + 1;
					if(newVal <= saLength-1){
						$.cookie('s_adv_show', newVal, { path: '/' });
						jcStart = newVal;
					}
					else{
					//	jcStart = Math.floor(Math.random()*saLength);
						$.cookie('s_adv_show', 0, { path: '/' });
						jcStart = 0;
					}
				}
			
				itemCarousel.on('jcarousel:reload jcarousel:create', function () {
					itemCarousel.jcarousel('items').css('width', itemCarousel.innerWidth() + 'px');
				});
				
				itemCarousel
				.on('jcarousel:createend', function() {
					// Arguments:
					// 1. The method to call
					// 2. The index of the item (note that indexes are 0-based)
					// 3. A flag telling jCarousel jumping to the index without animation
					$(this).jcarousel('scroll', jcStart, false);
				})
				.jcarousel({
					wrap:'circular',
					animation: 500
				})
				.jcarouselAutoscroll({
					interval: 4000,
					target: '+=1',
					autostart: false
				});
				
				/*
				Pagination initialization
				*/
				$('.jcarousel-pagination').show()
					.on('jcarouselpagination:active', 'a', function() {
						$(this).addClass('active');
					})
					.on('jcarouselpagination:inactive', 'a', function() {
						$(this).removeClass('active');
					})
					.jcarouselPagination({
						// Options go here
					});
				
			}
		});
	});
	
	

	// List - Table
	function catalogView(id){
		$.cookie("catalogView", id,{path: '/'});
		location.reload();
	}
	
	if(!$('#catalog').length){
		$('.c_toolbar').hide();
	}
	
	$('.catalog-view-ctrl a').click(function(){
		if(!$(this).hasClass('active')){	
			catalogView($(this).attr('href'));
		}
		return false;
	});
	
	$('.grid .product .preview-text').each(function(){
		if($(this).find('.preview-text-in').height() > $(this).height()){
			$(this).append('<span class="tc-v"></span>');
		}
	});
	
	if($('#slider > *').length > 1){
		$('#slider').nivoSlider({
		//	effect: 'boxRainGrow', // Specify sets like: 'fold,fade,sliceDown'
			effect: 'slideInLeft', // Specify sets like: 'fold,fade,sliceDown'
			slices: 8, // For slice animations
			boxCols: 6, // For box animations
			boxRows: 6, // For box animations
			animSpeed: 200, // Slide transition speed
			pauseTime: 5000, // How long each slide will show
			startSlide: 0, // Set starting Slide (0 index)
			directionNav: true, // Next & Prev navigation
			controlNav: true, // 1,2,3... navigation
			controlNavThumbs: false, // Use thumbnails for Control Nav
			pauseOnHover: true, // Stop animation while hovering
			manualAdvance: true, // Force manual transitions
			prevText: 'Prev', // Prev directionNav text
			nextText: 'Next', // Next directionNav text
			randomStart: false, // Start on a random slide
			beforeChange: function(){}, // Triggers before a slide transition
			afterChange: function(){}, // Triggers after a slide transition
			slideshowEnd: function(){}, // Triggers after all slides have been shown
			lastSlide: function(){}, // Triggers when last slide is shown
			afterLoad: function(){} // Triggers when slider has loaded
	    });
	}
	else{
		$('#slider').nivoSlider({
			startSlide: 0, // Set starting Slide (0 index)
			directionNav: false, // Next & Prev navigation
			controlNav: false, // 1,2,3... navigation
			controlNavThumbs: false, // Use thumbnails for Control Nav
			manualAdvance: true, // Force manual transitions
	    });
	}

	// popup Feedback
	$('.feedback-link a').fancybox({
		type:'ajax',
		padding:[15,25,15,25],
		fitToView:false,
		helpers:{
			overlay:{locked: true}
		}
	});
	
	
	// FIXED PANEL
	function pFixed(){
		var topLimit =  $('header').outerHeight(true);
	
		if($.browser.webkit) bodyelem = $("body")
		else bodyelem = $("html")
	
		function setCond(){
			if($(bodyelem).scrollTop() > topLimit) $('#fix-panel').addClass('panel-show');
			else $('#fix-panel').removeClass('panel-show');
		}
		
		setCond();
		
		$(window).scroll(function(){
			setCond();
		});
	}
	
	setTimeout(pFixed, 1000);
	
	
	
	
	/******************
	** SIDE MENU
	******************/
	var vMenu = $('.side-menu');
	var colsCount = 3;
	
	var menuMinH = $('.side-menu').height();
	vMenu.find('.dropdown .sub-container').css('min-height',menuMinH+'px')
	
	
	vMenu.find('.dropdown').each(function(e){
		var $ddEl = $(this);
		var $sourceUL = $ddEl.find('.sub-source > ul');
		var ddUlSize = $sourceUL.length;
		
		for(i=0; i <= ddUlSize-1; i=i+3){
			for(j=i; j<=i+2; j++){
				var el = $sourceUL.eq(j).detach();
				targCol = (-i+2+j)-2;
				$ddEl.find('.b').eq(targCol).append(el);
			}
		}
	});
	
	
	// TABS
	function setTab(tabC, id){
		if(id != 'undefined'){
			tabID = id.replace('#','#tab-')
			tabC.find('.tabs a').removeClass('active bt3');
			
			tabC.find('.tabcontent .tab').removeClass('active');
			
			if($('.tabsblock').hasClass('adaptiv')){
				tabC.find('.tabs a').addClass('bt2');
				tabC.find('.tabs a[href="'+id+'"]').removeClass('bt2').addClass('active bt3');
			}
			else{
				tabC.find('.tabs a[href="'+id+'"]').addClass('active');
			}
			
			tabC.find('.tabcontent .tab'+tabID).addClass('active');
		}
	}
	
	$('.tabsblock').each(function(){
		var tabC = $(this);
		tabC.find('.tabs a:first, .tabcontent .tab:first').addClass('active');
		
		tabC.find('.tabs a').click(function(){
			if( !$(this).hasClass('.active') ){
				setTab(tabC,$(this).attr('href'));
			}
			return false;
		});
	});
	
	
	defTabsW = 0;
	$('.tabs a').each(function(){
		defTabsW+= $(this).outerWidth(true);
	});
	
	function resizeTabs(){
		setTimeout(function(){
			if(defTabsW >= $('.tabsblock').width()){
				$('.tabsblock').removeClass('not_adaptiv').addClass('adaptiv');
				
				$('.tabsblock .tabs a').not('.active').addClass('bt2');
				$('.tabsblock .tabs a.active').addClass('bt3');
			}
			else{
				$('.tabsblock').removeClass('adaptiv').addClass('not_adaptiv');
				$('.tabsblock .tabs a').removeClass('bt2 bt3 ');
			}
		},400);
	}
	
	setTimeout(function(){
		resizeTabs();
	},400);
	
	// FOOTER
	function footerBottom(){
		setTimeout(function(){
			var footerH = $('footer').height();
			$('#container-in').css('padding-bottom',footerH+60+'px')
			$('#container').css('margin-bottom','-'+footerH+'px')
		},400);
	}
	footerBottom();
	
	
	$(window).resize(function(){
		
		pFixed();
		
		resizeTabs();
		
		footerBottom();
	});
	
	
	// COMPARE RESULT
	if($('.catalog-compare-result').length){
		$('.breadcumbs').hide();
		
		setTimeout(function(){
			// Eq Height
			var catalog = $('.compare_table tbody tr');
			
			catalog.each(function(){
				$(this).find('>*').equalHeights();
			});
			
		},200);
		
		$('.ct_del').click(function(){
			$(this).next().attr('checked','checked');
			$(this).parents('form').submit();
		});
		
		$('.ct_remove_all').click(function(){
			$('.compare_table input[type="checkbox"]').attr('checked','checked');
			$(this).parents('form').submit();
		});
	}
	

	if($('.catalog.list').length){
		$('.catalog.list .props_show').click(function(){
			$(this).next().slideToggle();
			return false;
		});

	}

	
	// UP Button
	$('#up_btn').click(function(){
		$('#up_btn').addClass('anim').fadeOut(200);
		$('html,body').animate({scrollTop:0}, '800',function(){
			$('#up_btn').removeClass('anim');
		});
	});
	
	$(window).scroll(function(){
		if(!$('#up_btn').hasClass('anim')){
			if($('html').scrollTop() > 0)
				st = $('html').scrollTop();
			
			else if($('body').scrollTop() > 0)
				st = $('body').scrollTop();
			
			else
				st = 0;
			
			if(st > 500){
				$('#up_btn').fadeIn(200);
			}
			else{
				$('#up_btn').fadeOut(200);
			}
		}
	});
	
});
});
