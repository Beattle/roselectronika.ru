<? /*AddEventHandler("sale", "OnBasketAdd", Array("MyBasketClass", "OnBasketAdd"));
AddEventHandler("sale", "OnBasketUpdate", Array("MyBasketClass", "OnBasketUpdate"));
AddEventHandler("sale", "OnBasketDelete", Array("MyBasketClass", "OnBasketDelete"));
AddEventHandler("main", "OnBeforeProlog", Array("MyBasketClass", "OnBeforeProlog"));

class MyBasketClass
{
   function OnBasketAdd($ID, $arFields)
   {
      unset($_SESSION["YAM_CACHE"]["BASKET"]);
   }
   
   function OnBasketUpdate($ID, $arFields)
   {
      unset($_SESSION["YAM_CACHE"]["BASKET"]);
   }

   function OnBasketDelete($ID, $arFields)
   {
      unset($_SESSION["YAM_CACHE"]["BASKET"]);
   }

   function OnBeforeProlog()
   {
      // Не запускаем для админки
      if (defined("ADMIN_SECTION"))
         return false;

      if (empty($_SESSION["YAM_CACHE"]["BASKET"]))
      {
         $_SESSION["YAM_CACHE"]["BASKET"]["ITEMS"] = array();
         $productCount = $totalCount = $totalSum = $totalSumDiscount = 0;

         if (CModule::IncludeModule("sale") && CModule::IncludeModule("currency"))
         {
            $dbBaket = CSaleBasket::GetList(
               array("NAME" => "ASC"),
               array("FUSER_ID" => CSaleBasket::GetBasketUserID(), "LID" => SITE_ID, "ORDER_ID" => "NULL")
            );
            $arItems = array();
            while ($arBasket = $dbBaket->GetNext())
            {
               // Отложенные и прочие товары не учитываем
               if ($arBasket["DELAY"]=="N" && $arBasket["CAN_BUY"]=="Y")
               {
                  $arBasket["PRICE_FORMATED"] = SaleFormatCurrency($arBasket["PRICE"], $arBasket["CURRENCY"]);
                  $_SESSION["YAM_CACHE"]["BASKET"]["ITEMS"][$arBasket["ID"]] = $arBasket;
               }            
            }

            if (!empty($_SESSION["YAM_CACHE"]["BASKET"]["ITEMS"]) && CModule::IncludeModule("currency"))
            {
               $baseCurrency = CCurrency::GetBaseCurrency();

               foreach ($_SESSION["YAM_CACHE"]["BASKET"]["ITEMS"] as $arBasketItem)
               {
                  $productCount++; // Число товаров
                  $totalCount += $arBasketItem["QUANTITY"]; // Число товаров с учетом количества каждого товара

                  // Корвертация валюты всех товаров в корзине к базовой
                  if ($arBasketItem["CURRENCY"] != $baseCurrency)
                     $arBasket["PRICE"] = CCurrencyRates::ConvertCurrency($arBasketItem["PRICE"], $arBasketItem["CURRENCY"], $baseCurrency);

                  $totalSum += $arBasketItem["QUANTITY"] * $arBasketItem["PRICE"]; // Общая цена
                  
                  // учет скидок
                  if ($arBasketItem["DISCOUNT_PRICE"] > 0)
                     $totalSumDiscount += $arBasketItem["QUANTITY"] * $arBasketItem["DISCOUNT_PRICE"];
                  else
                     $totalSumDiscount += $arBasketItem["QUANTITY"] * $arBasketItem["PRICE"];
               }
            }

            $_SESSION["YAM_CACHE"]["BASKET"] = array(
                  "PRODUCT_COUNT" => $productCount, // Количество товаров в корзине
                  "ITEMS_COUNT" =>  $totalCount, // Количество товаров в козире (с учетом кол-ва каждого товара)
                  "TOTAL_SUM" => $totalSum, // Общая сумма всех товаров в корзине 
                  "CURRENCY" => $baseCurrency, // Валюта всех товаров
                  "TOTAL_SUM_FORMATED" => SaleFormatCurrency($totalSum, $baseCurrency), // Общая сумма всех товаров в корзине (в формате валюты)
                  "TOTAL_DISCOUNT" => $totalSumDiscount, // Сумма всех товаров в корзине с учетом скидки
               );
         }
      }      
   }
}*/?>
<?
/*AddEventHandler("sale", "OnBeforeBasketAdd", "addinside"); 
function addinside($fields)
{ 
 //LocalRedirect("/");
}*/

AddEventHandler('sale', 'OnBeforeBasketAdd', 'IBElementCreateAfterHandler');
function IBElementCreateAfterHandler(&$arFields) {
       $cntBasketItems = CSaleBasket::GetList(
		   array(),
		   array( 
			  "FUSER_ID" => CSaleBasket::GetBasketUserID(),
			  "LID" => SITE_ID,
			  "ORDER_ID" => "NULL"
		   ), 
		   array()
		);
		if ($cntBasketItems == 100){
			?>
				<style>
					.error{
						display: block;
					}
				</style>
			<?
			
			/*function OnAfterUserAuthorizeHandler()
				{
				  $path='/profile/';//путь к профилю
				  LocalRedirect($path);
				} */
			//LocalRedirect("/k-sozhaleniyu-prevyshen-limit-zakaza-v-100-pozitsiy/");
	

			// window.location.href = ;
			
		
			die;
		}
			
    // if ( $arFields["QUANTITY"] == 8 ):
			//AddMessage2Log($arFields["QUANTITY"], "my_module_id");
		//	die;
	//endif;
}

AddEventHandler ( "iblock", "OnAfterIBlockElementAdd", array (
		"MyIblockChange",
		"OnIblockChangeHandler"
));
AddEventHandler ( "iblock", "OnAfterIBlockElementUpdate", array (
		"MyIblockChange",
		"OnIblockChangeHandler"
) );
class MyIblockChange
{
	function OnIblockChangeHandler(&$arFields) {
		if ($arFields ["IBLOCK_ID"] != 3)
			return;

		if ($arFields ["IBLOCK_ID"] == 3) :

			$IBLOCK_ID = $arFields ["IBLOCK_ID"];
			$ID = $arFields ["ID"];
			$res = CIBlockElement::GetByID($ID);
			if($ar_res = $res->GetNext())
			{
				if(!empty($ar_res["XML_ID"]))
				{
					CIBlockElement::SetPropertyValuesEx ( $ID, $IBLOCK_ID, array (
						"ID" => $ar_res["XML_ID"]
					));
				}
			}
			
			//$print1 = print_r($arFields, true);
			//AddMessage2Log($print1);

		endif; // $arFields["IBLOCK_ID"] == 3
	}
}


?>