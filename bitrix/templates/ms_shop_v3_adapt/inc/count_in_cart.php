
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("sale");
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
		echo 100;
	}else{
		echo 0;
	}
?>