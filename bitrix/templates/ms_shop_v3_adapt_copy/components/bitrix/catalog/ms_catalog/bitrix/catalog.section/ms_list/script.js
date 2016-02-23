$(document).ready(function(){
	$('.bx_catalog_list .bx_catalog_item .props_show').click(function(){
		$(this).next().slideToggle(300);
		return false;
	});
});