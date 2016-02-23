/*
$(window).load(function(){
	// THEME CHANGER
	$('#theme-changer > a').click(function(){
		$(this).parents('#theme-changer').removeAttr('class');
		$(this).hide();
		$(this).next().fadeIn(400);
		$.cookie("tc","show",{path: '/'});
		return false;
	});
	
	$('#theme-changer .tc-x').click(function(){
		$(this).parents('#theme-changer').removeAttr('class');
		$(this).parent().fadeOut(400,function(){
			$('#theme-changer > a').show();
		});
		$.cookie("tc","hide",{path: '/'});
	});
	
	function changeTheme(id,bgImg){
	//	var imgPath = tplUrl+'/themes/'+id+'/images/';
		$('body').removeAttr('class').addClass('theme-'+id);
		// images
	//	$('#header-image img').attr('src',imgPath+'header.jpg').css('visibility','visible');
	//	$('#logo img').attr('src',imgPath+'logo.png').css('visibility','visible');
		// set active
		
		$('#background').append('<img />');
		
		$('#theme-changer ul li').removeClass('active');
		$('#theme-changer a#'+id).parent().addClass('active');
		
		$('#background img').hide();
		
		if(bgImg != undefined){
			var i = $('<img />').attr('src',bgImg).load(function(){
				$('#background img').attr('src', i.attr('src')).show();
			});
			$.cookie("theme-img", bgImg,{path: '/'});
		}
		else{
			$.cookie("theme-img", 'none',{path: '/'});
		}
		
		$.cookie("theme", id,{path: '/'});
		
	}
	
	// check cookie
	if($.cookie("theme") != null) var currThemeID = $.cookie("theme");
	else var currThemeID = 'default';
	
	if($('#'+currThemeID).data('bg') != '' && $('#'+currThemeID).data('bg') != undefined){
		changeTheme(currThemeID,$('#'+currThemeID).data('bg'));
	}
	else{
		changeTheme(currThemeID);
	}
	
	
	
	$('#theme-changer ul a').click(function(){
		if(!$(this).parent().hasClass('active')){
			var themeID = $(this).attr('id');	
			
			if($(this).data('bg') != '' && $(this).data('bg') != undefined){
				changeTheme(themeID,$(this).data('bg'));
			}
			else{
				changeTheme(themeID);
			}
		}
		return false;
	});
});
*/

$(document).ready(function(){
	var tc = $('#theme_changer'),
		tcGear = $('#tc_gear'),
		tcw = tc.width()+14;
		animSpeed = 300;
	
	function tcToggle(show){
		if(show){
			tcGear.animate({left: '-66px'},animSpeed,
			function(){
				tc.animate({left: '-1px'},animSpeed);
			});
		}
		else{
			tc.animate({left: '-'+tcw+'px'},animSpeed,
			function(){
				tcGear.animate({left: '-1px'},animSpeed);
			});
		}
	}
	
	tcGear.click(function(){
		tcToggle(1);
		$.cookie("tc","show",{path: '/'});
		return false;
	});
	
	$('#tc_x').click(function(){
		tcToggle();
		$.cookie("tc","hide",{path: '/'});
		return false;
	});
	
	if(!tc.hasClass('show')){
		tc.css('left','-'+tcw+'px');
	}
})
