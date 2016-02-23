<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<script>
<!--
function ChangeGenerate(val)
{
	if(val)
	{
		document.getElementById("sof_choose_login").style.display='none';
	}
	else
	{
		document.getElementById("sof_choose_login").style.display='block';
		document.getElementById("NEW_GENERATE_N").checked = true;
	}

	try{document.order_reg_form.NEW_LOGIN.focus();}catch(e){}
}
//-->
</script>
<table class="order-auth form">
	<tr>
		<!--<td>
			<form method="post" action="" name="order_auth_form">

				<h4><?echo GetMessage("STOF_2REG")?></h4>

				

				<?=bitrix_sessid_post()?>
				<?
				foreach ($arResult["POST"] as $key => $value)
				{
				?>
				<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
				<?
				}
				?>
				<div class="sale_order_full_table">
					<p><?echo GetMessage("STOF_LOGIN_PROMT")?></p>

					<div class="field">
						<label><?echo GetMessage("STOF_LOGIN")?> <span class="starrequired">*</span></label>
						<br />
						<input type="text" name="USER_LOGIN" maxlength="30" size="30" value="<?=$arResult["AUTH"]["USER_LOGIN"]?>">
					</div>

					<div class="field">
						<label><?echo GetMessage("STOF_PASSWORD")?> <span class="starrequired">*</span></label>
						<input type="password" name="USER_PASSWORD" maxlength="30" size="30">
					</div>
					
					<p>
						<a href="<?=$arParams["PATH_TO_AUTH"]?>?forgot_password=yes&back_url=<?= urlencode($APPLICATION->GetCurPageParam()); ?>"><?echo GetMessage("STOF_FORGET_PASSWORD")?></a>
					</p>
					<p>
						<input type="submit" class="btn bt1" value="<?echo GetMessage("STOF_NEXT_STEP")?>">
						<input type="hidden" name="do_authorize" value="Y">
					</p>
				</div>
			</form>
		</td>-->		
		<td>
		<?
			global $USER;
			$email = $USER->GetEmail();
			$fullname = $USER->GetFullName();
		//	$firstname = $USER->GetFirstName();	
			$lastname = $USER->GetLastName();

		?>
			<?//if($arResult["AUTH"]["new_user_registration"]=="Y"):?>
				
					<!--<h4><?//echo GetMessage("STOF_2NEW")?></h4>-->
					<?=bitrix_sessid_post()?>
					<?
					foreach ($arResult["POST"] as $key => $value)
					{
					?>
					<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
					<?
					}
					?>
					<div class="sale_order_full_table">
						<div class="field">
							<label>ФИО<?//echo GetMessage("STOF_LASTNAME")?> <span class="starrequired">*</span></label>
							<br />
							<input type="text" name="NEW_LAST_NAME" id="new_last_name1" size="40" value="<?=$arResult["AUTH"]["NEW_LAST_NAME"]?><?//=$lastname?>" required>
						</div>
						
						
						
						
						
						<div class="field">
							<label>E-Mail <span class="starrequired">*</span></label>
							<br />
							<input type="text" name="NEW_EMAIL" id="new_email1" size="40" value="<?=$arResult["AUTH"]["NEW_EMAIL"]?><?=$email?>" required>
						</div>
						
						<div class="field">
							<label>Телефон<?//echo GetMessage("STOF_NAME")?> <span class="starrequired">*</span></label>
							<br />
							<input type="text" name="NEW_NAME" id="new_name1" size="40" value="<?=$arResult["AUTH"]["NEW_NAME"]?><?//=$firstname?>" required
							>
						</div>
						<div class="field">
							<label>Город<?//echo GetMessage("STOF_NAME")?> <span class="starrequired">*</span></label>
							<br />
							<input type="text" name="NEW_CITY" id="new_city1" size="40" value="<?//=$arResult["AUTH"]["NEW_NAME"]?><?//=$firstname?>" required
							>
						</div>
                        
                        <div class="field">
                        	<div>
                        		<input type="radio" name="person_type" id="person_type_fiz" value="Физическое лицо" checked>
                                <label for="person_type_fiz">Физическое лицо</label>
                            </div>
                            <div>
                        		<input type="radio" name="person_type" id="person_type_yur" value="Юридическое лицо">
                                <label for="person_type_yur">Юридическое лицо</label>
                            </div>
						</div>
						
						<?/*if($arResult["AUTH"]["new_user_registration_email_confirmation"] != "Y"):?>
						<div class="radio">
							<input type="radio" id="NEW_GENERATE_N" name="NEW_GENERATE" value="N" OnClick="ChangeGenerate(false)"<?if ($_POST["NEW_GENERATE"] == "N") echo " checked";?>>
							<label for="NEW_GENERATE_N"><?echo GetMessage("STOF_MY_PASSWORD")?></label>
						</div>
						<?endif;*/?>

						<?if($arResult["AUTH"]["new_user_registration_email_confirmation"] != "Y"):?>
						<div id="sof_choose_login">
							<div class="field">
								<label><?echo GetMessage("STOF_LOGIN")?> <span class="starrequired">*</span></label>
								<br />
								<input type="text" name="NEW_LOGIN" size="30" value="<?=$arResult["AUTH"]["NEW_LOGIN"]?>">
							</div>
					
							<div class="field">
								<label><?echo GetMessage("STOF_PASSWORD")?> <span class="starrequired">*</span></label>
								<br />
								<input type="password" name="NEW_PASSWORD" size="30">
							</div>
					
							<div class="field">
								<label><?echo GetMessage("STOF_RE_PASSWORD")?> <span class="starrequired">*</span></label>
								<br />
								<input type="password" name="NEW_PASSWORD_CONFIRM" size="30">
							</div>
						</div>
						<?endif;?>


						<?if($arResult["AUTH"]["new_user_registration_email_confirmation"] != "Y"):?>
						<div class="radio">
							<!--<input type="radio" id="NEW_GENERATE_Y" name="NEW_GENERATE" value="Y" onclick="ChangeGenerate(true)"<?if ($POST["NEW_GENERATE"] != "N") echo " checked";?>>
							<label for="NEW_GENERATE_Y"><?echo GetMessage("STOF_SYS_PASSWORD")?></label>-->
							<script language="JavaScript">
							<!--
							ChangeGenerate(<?= (($_POST["NEW_GENERATE"] != "N") ? "true" : "false") ?>);
							//-->
							</script>
						</div>
						<?endif;?>

						<?
						if($arResult["AUTH"]["captcha_registration"] == "Y") //CAPTCHA
						{
							?>
							<b><?=GetMessage("CAPTCHA_REGF_TITLE")?></b>
							
							<input type="hidden" name="captcha_sid" value="<?=$arResult["AUTH"]["capCode"]?>">
							<img class="captcha_img" src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["AUTH"]["capCode"]?>" width="180" height="40" alt="CAPTCHA">
							
							<div class="field">
								<label><span class="starrequired">*</span> <?=GetMessage("CAPTCHA_REGF_PROMT")?>:</label>
								<br />
								<input type="text" name="captcha_word" size="30" maxlength="50" value="">
							</div>
							<?
						}
						?>
						
						<input type="submit" class="btn bt1" id="order_add" value="<?echo GetMessage("STOF_NEXT_STEP")?>">
						<!--<input type="hidden" name="do_register" value="Y">-->
					</div>
				
			<?//endif;?>
		</td>
	</tr>
</table>
<br /><br />
<?echo GetMessage("STOF_REQUIED_FIELDS_NOTE")?><br /><br />
<?if($arResult["AUTH"]["new_user_registration"]=="Y"):?>
	<?echo GetMessage("STOF_EMAIL_NOTE")?><br /><br />
<?endif;?>
<?//echo GetMessage("STOF_PRIVATE_NOTES")?>
<style>
#order_form_div{
	width: 380px;
	    margin-left: 500px;
}

</style>

<script>
/*$(document).on('ready', function(){
    $('#order_add').click(function(){
		var new_name = $("#new_name1").val();
		var new_last_name = $("#new_last_name1").val();
		var new_email = $("#new_email1").val();
		
		var product_name1 = $("#product_name1").val();
		var product_id1 = $("#product_id1").val();
		var product_count1 = $("#product_count1").val();
		
		var product_name2 = $("#product_name2").val();
		var product_id2 = $("#product_id2").val();
		var product_count2 = $("#product_count2").val();
		
		var product_name3 = $("#product_name3").val();
		var product_id3 = $("#product_id3").val();
		var product_count3 = $("#product_count3").val();
		
		var product_name4 = $("#product_name4").val();
		var product_id4 = $("#product_id4").val();
		var product_count4 = $("#product_count4").val();
		
		var product_name5 = $("#product_name5").val();
		var product_id5 = $("#product_id5").val();
		var product_count5 = $("#product_count5").val();
		
		var product_name6 = $("#product_name6").val();
		var product_id6 = $("#product_id6").val();
		var product_count6 = $("#product_count6").val();
		
		var product_name7 = $("#product_name7").val();
		var product_id7 = $("#product_id7").val();
		var product_count7 = $("#product_count7").val();
		
		var product_name8 = $("#product_name8").val();
		var product_id8 = $("#product_id8").val();
		var product_count8 = $("#product_count8").val();
		
		var product_name9 = $("#product_name9").val();
		var product_id9 = $("#product_id9").val();
		var product_count9 = $("#product_count9").val();
		
		var product_name10 = $("#product_name10").val();
		var product_id10 = $("#product_id10").val();
		var product_count10 = $("#product_count10").val();
		
		
		
		//alert(new_name);
		var success = 1;
		if (new_name === ""){
			success = 0;
			//alert(success);
		}
		if (new_last_name == ""){
			success = 0;
		}
		if (new_email === ""){
			success = 0;
		}
		
		if (success === 1){
			 $.ajax({
					//var NAME = 
				
                     url: "/bitrix/templates/ms_shop_v3_adapt/inc/add_order.php",
                     type: "POST",
                      dataType: "html",
                      data: "NAME=" + new_name + "&LAST_NAME=" + new_last_name + "&EMAIL=" +new_email + 
					  "&product_name1=" +product_name1 + "&product_id1=" +product_id1 + "&product_count1=" +product_count1 + 
					   "&product_name2=" +product_name2 + "&product_id2=" +product_id2 + "&product_count2=" +product_count2 + 
					    "&product_name3=" +product_name3 + "&product_id3=" +product_id3 + "&product_count3=" +product_count3 + 
						 "&product_name4=" +product_name4 + "&product_id4=" +product_id4 + "&product_count4=" +product_count4 + 
						  "&product_name5=" +product_name5 + "&product_id5=" +product_id5 + "&product_count5=" +product_count5+
						 
						 "&product_name6=" +product_name6 + "&product_id6=" +product_id6 + "&product_count6=" +product_count6 + 
					   "&product_name7=" +product_name7 + "&product_id7=" +product_id7 + "&product_count7=" +product_count7 + 
					    "&product_name8=" +product_name8 + "&product_id8=" +product_id8 + "&product_count8=" +product_count8 + 
						 "&product_name9=" +product_name9 + "&product_id9=" +product_id9 + "&product_count9=" +product_count9 + 
						  "&product_name10=" +product_name10 + "&product_id10=" +product_id10 + "&product_count10=" +product_count10,
                      success: function(out){
							//alert("Заказ оформлен. Наши менеджеры свяжутся с Вами в ближайшее время. Спасибо.");
                            window.location.href = "/personal/order/make/zakaz-uspeshno-oformlen/";
                      }

                    });
		}
       
  });
  
});*/

</script>

<?
$i = 0;
$all_summ = 0;
$arID = array();

$arBasketItems = array();

$dbBasketItems = CSaleBasket::GetList(
     array(
                "NAME" => "ASC",
                "ID" => "ASC"
             ),
     array(
                "FUSER_ID" => CSaleBasket::GetBasketUserID(),
                "LID" => SITE_ID,
                "ORDER_ID" => "NULL"
             ),
     false,
     false,
     array("ID", "CALLBACK_FUNC", "MODULE", "PRODUCT_ID", "QUANTITY", "PRODUCT_PROVIDER_CLASS")
             );
while ($arItems = $dbBasketItems->Fetch())
{
     if ('' != $arItems['PRODUCT_PROVIDER_CLASS'] || '' != $arItems["CALLBACK_FUNC"])
     {
          CSaleBasket::UpdatePrice($arItems["ID"],
                                 $arItems["CALLBACK_FUNC"],
                                 $arItems["MODULE"],
                                 $arItems["PRODUCT_ID"],
                                 $arItems["QUANTITY"],
                                 "N",
                                 $arItems["PRODUCT_PROVIDER_CLASS"]
                                 );
          $arID[] = $arItems["ID"];
     }
}
if (!empty($arID))
     {
     $dbBasketItems = CSaleBasket::GetList(
     array(
          "NAME" => "ASC",
          "ID" => "ASC"
          ),
     array(
          "ID" => $arID,
        "ORDER_ID" => "NULL"
          ),
        false,
        false,
        array("ID", "CALLBACK_FUNC", "MODULE", "PRODUCT_ID", "QUANTITY", "DELAY", "CAN_BUY", "PRICE", "WEIGHT", "PRODUCT_PROVIDER_CLASS", "NAME")
                );
while ($arItems = $dbBasketItems->Fetch())
{
    $arBasketItems[] = $arItems;
	$i++;
	//echo $arItems["ID"];
	$res = CIBlockElement::GetProperty(3,$arItems['PRODUCT_ID'],array(),array('ID'=>30));
    if ($ob = $res->GetNext())
    {
       $arItems['NAME'] = "$ob[VALUE] $arItems[NAME]";
	 // echo $ob["VALUE"];
	 //print_r($arItems);
	 $res2 = CIBlockElement::GetByID($arItems["PRODUCT_ID"]);
		if($ar_res = $res2->GetNext())
  			$link = $ar_res["DETAIL_PAGE_URL"];
    }
	?>
	<input type="hidden" value="<?=$i?>)" id="text<?=$i?>">
	<input type="hidden" value="<?=$arItems["NAME"]?>" id="product_name<?=$i?>">
	<input type="hidden" value="http://roselectronika.ru<?=$ar_res["DETAIL_PAGE_URL"]?>" id="product_id<?=$i?>">
	<input type="hidden" value="<?=$arItems["QUANTITY"]?>" id="product_count<?=$i?>">
<?}
}
// Печатаем массив, содержащий актуальную на текущий момент корзину
//echo "<pre>";
//print_r($arBasketItems);
//echo "</pre>";
?>
<?$APPLICATION->IncludeComponent(
					"bitrix:sale.basket.basket.line", 
					"ms_line_fp_by_ko", 
					array(
						"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
						"PATH_TO_PERSONAL" => SITE_DIR."personal/",
						"SHOW_PERSONAL_LINK" => "N",
						"BUY_URL_SIGN" => "action=ADD2BASKET",
						"SHOW_NUM_PRODUCTS" => "Y",
						"SHOW_TOTAL_PRICE" => "Y",
						"SHOW_EMPTY_VALUES" => "Y",
						"SHOW_AUTHOR" => "N",
						"PATH_TO_REGISTER" => SITE_DIR."login/",
						"PATH_TO_PROFILE" => SITE_DIR."personal/",
						"SHOW_PRODUCTS" => "N",
						"SHOW_DELAY" => "N",
						"SHOW_NOTAVAIL" => "N",
						"SHOW_SUBSCRIBE" => "N",
						"SHOW_IMAGE" => "Y",
						"SHOW_PRICE" => "Y",
						"SHOW_SUMMARY" => "Y",
						"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
						"POSITION_FIXED" => "N",
						"POSITION_HORIZONTAL" => "right",
						"POSITION_VERTICAL" => "bottom"
					),
					false
				);?>


