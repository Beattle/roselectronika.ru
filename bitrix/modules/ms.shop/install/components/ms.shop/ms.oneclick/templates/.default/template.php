<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>

<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>

<div class="feedback-popup buy1clickform">
	<div class="title"><?=GetMessage("MFT_TITLE")?>
	<!--<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/feedback_title.php"), false);?>-->
	</div>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	ShowNote($arResult["OK_MESSAGE"]);
}
?>

<div class="personal">
<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
<div class="feedback-form">
	<div class="fields">
		<div class="field">
			<label class="field-title"><?=GetMessage("MFT_NAME")?></label><br>
			<input type="text" name="user_name" class="input_text_style" value="<?=$arResult["AUTHOR_NAME"]?>">
		</div>
		<div class="field">
			<label class="field-title"><?=GetMessage("MFT_PHONE")?></label><br>
			
			<?
				if($arResult["AUTHOR_PHONE"] == ''){
					$oldPhone = 'phoneplaceholder';
				}
				else{
					$oldPhone = $arResult["AUTHOR_PHONE"];
				}
				
			?>
			
			<input type="text" name="user_phone" class="input_text_style" data-oldval="<?=$oldPhone?>" value="<?=$arResult["AUTHOR_PHONE"]?>">
		</div>
		
		<textarea style="display:none;" name="MESSAGE" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
		
	
		<?if($arParams["USE_CAPTCHA"] == "Y"):?>
		<div class="field captcha-block">
		<label class="field-title"><?=GetMessage("MFT_CAPTCHA_CODE")?></label>
		<div class="form-input">
			<input class="input_text_style" type="text" name="captcha_word" size="30" maxlength="50" value="">
			<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		</div>	
		</div>
		<?endif;?>
	
		<div class="field field-button">
			<input type="submit" class="bt1 bt-medium" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
		</div>
	</div>
</div>	
</form>
</div>

<script type="text/javascript">
	var prodURL = window.location.href;
	if (prodURL.indexOf("?")>-1){
		prodURL = prodURL.substr(0,prodURL.indexOf("?"));
	}
	
	var prodName = $('h1>span').text();
	var prodID = $('.bx_item_detail').data('id');
	
	//var prodQuantity = $('.item_info_section .item_buttons_counter_block input').val()+' '+$('.item_info_section .item_buttons_counter_block span').text()+';';
	
	// SKU
	var ppSKU = '';
	$('.itemSKU > div').each(function(){
		skuName = $(this).find('.bx_item_section_name_gray').text();
		skuVal = $(this).find('.bx_item_section_name_gray').next().find('ul .bx_active a').text();
		if(skuName!='' && skuVal!='') ppSKU= ppSKU+skuName+': '+skuVal+'; ';
	});
	if(ppSKU!='') ppSKU = '\nПараметры товара \n'+ppSKU;
	
	$('.buy1clickform textarea').val('Номер телефона: '+$('.buy1clickform input[name="user_phone"]').data('oldval')+'; \nНазвание товара: '+prodName+'; \nID товара: '+prodID+'; '+ppSKU+' \nСтраница товара: '+prodURL+';');
	
	$('.buy1clickform').submit(function(){
		oldPhone = $('.buy1clickform input[name="user_phone"]').data('oldval');
		
		if($('.buy1clickform input[name="user_phone"]').val()!=''){
			newPhone = $('.buy1clickform input[name="user_phone"]').val();
		}
		else{
			newPhone = 'phoneplaceholder';
		}
		
		taOld = $('.buy1clickform textarea').val();
		
		taNew = taOld.replace(oldPhone,newPhone);
		$('.buy1clickform textarea').val(taNew);
	});
</script>

</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>