<?
IncludeModuleLangFile(__FILE__);

// include functions
require_once __DIR__ .'/php/functions.php';

class CMSSHOP
{
	public static function OnBasketChange($ID, $arFields = false)
	{
		if(isset($_SESSION["SALE_BASKET_NUM_PRODUCTS"][SITE_ID]))
		{
			$num_products = $_SESSION["SALE_BASKET_NUM_PRODUCTS"][SITE_ID];
		}
		else
		{
			if(!CModule::IncludeModule("sale"))
			{
				return;
			}
			$fUserID = CSaleBasket::GetBasketUserID(True);
			$fUserID = IntVal($fUserID);
			$num_products = 0;
			if ($fUserID > 0)
			{
				$dbRes = CSaleBasket::GetList(
					array(),
					array(
						"FUSER_ID" => $fUserID,
						"LID" => SITE_ID,
						"ORDER_ID" => "NULL",
						"CAN_BUY" => "Y",
						"DELAY" => "N",
						"SUBSCRIBE" => "N"
					)
				);
				while ($arItem = $dbRes->GetNext())
				{
					if (!CSaleBasketHelper::isSetItem($arItem))
						$num_products++;
				}
			}
			$_SESSION["SALE_BASKET_NUM_PRODUCTS"][SITE_ID] = intval($num_products);
		}

		echo "<script>
			if (document.getElementById('bx_cart_num'))
				document.getElementById('bx_cart_num').innerHTML = '".(($num_products > 0) ? " (".$num_products.")" : "")."';
			</script>";
	}

	function ShowPanel()
	{
		if ($GLOBALS["USER"]->IsAdmin() && COption::GetOptionString("main", "wizard_solution", "", SITE_ID) == "ms_shop")
		{
			$GLOBALS["APPLICATION"]->SetAdditionalCSS("/bitrix/wizards/bitrix/ms_shop/css/panel.css"); 

			$arMenu = Array(
				Array(		
					"ACTION" => "jsUtils.Redirect([], '".CUtil::JSEscape("/bitrix/admin/wizard_install.php?lang=".LANGUAGE_ID."&wizardSiteID=".SITE_ID."&wizardName=bitrix:ms_shop&".bitrix_sessid_get())."')",
					"ICON" => "bx-popup-item-wizard-icon",
					"TITLE" => GetMessage("STOM_BUTTON_TITLE_W1"),
					"TEXT" => GetMessage("STOM_BUTTON_NAME_W1"),
				)
			);

			$GLOBALS["APPLICATION"]->AddPanelButton(array(
				"HREF" => "/bitrix/admin/wizard_install.php?lang=".LANGUAGE_ID."&wizardName=bitrix:ms_shop&wizardSiteID=".SITE_ID."&".bitrix_sessid_get(),
				"ID" => "ms_shop_wizard",
				"ICON" => "bx-panel-site-wizard-icon",
				"MAIN_SORT" => 2500,
				"TYPE" => "BIG",
				"SORT" => 10,	
				"ALT" => GetMessage("SCOM_BUTTON_DESCRIPTION"),
				"TEXT" => GetMessage("SCOM_BUTTON_NAME"),
				"MENU" => $arMenu,
			));
		}
	}
}
?>