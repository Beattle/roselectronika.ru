
$(document).ready(function(){
	$(compareIDs).attr('checked','checked');
	
	$('.compare.checkbox').each(function(){
		$(this).find('label').click(function(){
			pID = $(this).prev().attr('id').toString().replace('prc_','');
			
			// DELET form compare
			if($(this).prev().attr('checked') == 'checked'){
				$(this).prev().removeAttr('checked');
				url = '?action=DELETE_FROM_COMPARE_LIST&id='+pID;
				$.get(url, function( data ) {
					$('.fp_compare').html($(data).find('.fp_compare').html());
				});
			}
			// ADD to compare
			else{
				$(this).prev().attr('checked','checked');
				
				itemObj = window["ItemJsCompare_"+pID];
				
				strPict = itemObj['productImg'];
				strName = itemObj['productName'];
				
				title = "<div class='title'>"+BX.message('C_TITLE')+"</div>";
				strContent = '<img src="'+strPict+'"><p class="product-name">'+strName+'</p>';
				buttons = "<p><a href="+BX.message('C_BTN_LINK')+" class='btn bt1 bt-medium'>"+BX.message('C_BTN_TEXT')+"</a></p>";
				buttons += "<p><a href='javascript:void(0);' onclick='$.fancybox.close()'>"+BX.message('C_BTN_CONTINUE')+"</a></p>";
				
				//openFB1(title,strContent,buttons)
				
				url = '?action=ADD_TO_COMPARE_LIST&id='+pID;
				
				$.get(url, function( data ) {
					$('.fp_compare').html($(data).find('.fp_compare').html());
				});
			}
			return false;
		});
	});
	
});
