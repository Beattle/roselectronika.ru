<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="bx_forgotpassword_page">
	<form name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
		<h1><?=GetMessage("FORGOT_TITLE")?></h1>
		
		<?ShowMessage($arParams["~AUTH_RESULT"]);?>
		
		<?if (strlen($arResult["BACKURL"]) > 0):?>
			<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
		<?endif;?>
		<input type="hidden" name="AUTH_FORM" value="Y">
		<input type="hidden" name="TYPE" value="SEND_PWD">

		<p><?=GetMessage("AUTH_FORGOT_PASSWORD_1")?></p>

		<h3><?=GetMessage("AUTH_GET_CHECK_STRING")?></h3>

		
		<div class="field">
			<label for="USER_CONFIRM_PASSWORD"><strong><?=GetMessage("AUTH_LOGIN")?></strong></label><br />
			<input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" class="input_text_style" />
		</div>
		
		<div class="field">
			<strong><?=GetMessage("AUTH_OR")?></strong>
		</div>
		
		<div class="field">
			<label for="USER_CONFIRM_PASSWORD"><strong><?=GetMessage("AUTH_EMAIL")?></strong></label><br />
			<input type="text" name="USER_EMAIL" maxlength="255" class="input_text_style" />
		</div>
		
		<p>
			<input type="submit" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>" class="btn bt-medium bt1"/>
		</p>
		
		<p><a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a></p>
	</form>
</div>
<script type="text/javascript">
document.bform.USER_LOGIN.focus();
</script>
