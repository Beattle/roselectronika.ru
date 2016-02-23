function inCart(checkID){
	if(inCartIDs !== null && typeof inCartIDs !== 'undefined'){
		if(checkID){
			isId = false;
			for (i = 0; i <= inCartIDs.length; i++) {
				if(checkID == inCartIDs[i]){
					isId = true;
					break;
				}
			}
			return isId;
		}
		else{
			$('.product').removeClass('incart');
			for (i = 0; i <= inCartIDs.length; i++) {
				$('[data-pid="'+inCartIDs[i]+'"]').addClass('incart').find('.bx_cart').removeClass('bt1').addClass('bt3').attr('href',cartURL).text(BX.message('BTN_INCART'));
			}
		}
	}
}

function inCartAdd(id){
	if(inCartIDs !== null && typeof inCartIDs !== 'undefined'){
		inCartIDs.push(id);
	}
}

$(document).ready(function(){
	inCart();
});	