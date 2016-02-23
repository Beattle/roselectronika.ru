<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="login-form">
	<?
	ShowMessage($arParams["~AUTH_RESULT"]);
	ShowMessage($arResult['ERROR_MESSAGE']);
	?>
	
	<form name="form_auth" method="post" target="_top" action="<?=SITE_DIR?>auth/<?//=$arResult["AUTH_URL"]?>">
		<div class="field">
			<input class="input_text_style" placeholder="<?=GetMessage("AUTH_LOGIN")?>" type="text" name="USER_LOGIN" maxlength="255" value="<?=$arResult["LAST_LOGIN"]?>" />
		</div>
		<div class="field">
			<input class="input_text_style" placeholder="<?=GetMessage("AUTH_PASSWORD")?>" type="password" name="USER_PASSWORD" maxlength="255" />
		</div>
		
		<input type="hidden" name="AUTH_FORM" value="Y" />
		<input type="hidden" name="TYPE" value="AUTH" />
		<?if (strlen($arResult["BACKURL"]) > 0):?>
		<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
		<?endif?>
		<?foreach ($arResult["POST"] as $key => $value):?>
		<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
		<?endforeach?>

		<?if($arResult["SECURE_AUTH"]):?>
			<span class="bx-auth-secure" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
			</span>
			<noscript>
				<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
			</noscript>
			<script type="text/javascript">
				document.getElementById('bx_auth_secure').style.display = 'inline-block';
			</script>
		<?endif?>

		<?if($arResult["CAPTCHA_CODE"]):?>
			<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
			<?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:
			<input class="bx-auth-input" type="text" name="captcha_word" maxlength="50" value="" size="15" />
		<?endif;?>
		
		
		<?if ($arResult["STORE_PASSWORD"] == "Y"):?>
		<p class="checkbox">
			<input type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y" checked />
			<label class="rememberme" for="USER_REMEMBER"><?=GetMessage("AUTH_REMEMBER_ME")?></label>
		</p>
		
		<?endif?>
	
		<p class="tal"><input class="bt3" type="submit" name="Login" value="<?=GetMessage("AUTH_AUTHORIZE")?>" /></p>
		
		
			<?if ($arParams["NOT_SHOW_LINKS"] != "Y"):?>
			<noindex>
				<span class="forgotpassword"><a href="<?=SITE_DIR?>auth/?forgot_password=yes<?//=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a></span>
			</noindex>
			<?endif?>
		
	</form>
	<!--
	<?if($arResult["AUTH_SERVICES"]):?>
		<p class="tal"><strong><?echo GetMessage("AUTH_TITLE")?></strong></p>
	<?endif?>
	<?if($arResult["AUTH_SERVICES"]):?>
		<?$APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "",
			array(
				"AUTH_SERVICES"=>$arResult["AUTH_SERVICES"],
				"CURRENT_SERVICE"=>$arResult["CURRENT_SERVICE"],
				"AUTH_URL"=>$arResult["AUTH_URL"],
				"POST"=>$arResult["POST"],
			),
			$component,
			array("HIDE_ICONS"=>"Y")
		);?>
	<?endif?>
	-->
	
	<script type="text/javascript">
	<?if (strlen($arResult["LAST_LOGIN"])>0):?>
	try{document.form_auth.USER_PASSWORD.focus();}catch(e){}
	<?else:?>
	try{document.form_auth.USER_LOGIN.focus();}catch(e){}
	<?endif?>
	</script>
</div>
