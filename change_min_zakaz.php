<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?>Выберите подраздел:
<span style="    width: 304px;">
<?$APPLICATION->IncludeComponent("bitrix:menu", "ms_catalog_sidebar_by_ko", Array(
						"ROOT_MENU_TYPE" => "catalog",	// Тип меню для первого уровня
						"MENU_THEME" => "site",	// Тема меню
						"MENU_CACHE_TYPE" => "A",	// Тип кеширования
						"MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
						"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
						"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
						"MAX_LEVEL" => "3",	// Уровень вложенности меню
						"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
						"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						"DELAY" => "N",	// Откладывать выполнение шаблона меню
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
						),
						false
					);?>
</span>
 <br> <br>Раздел
 <input type="text" id="section_name" value="">
 <br> <br>
 Символьный код раздела
 <input type="text" id="section_code" value="">
 <br/> <br>
 Значение минимального заказа: <input type="text" id="value_min_zakaz" placeholder="Значение минимального заказа"><br>
 <br> <br>
 <input type="button" id="set_min_zakaz" value="Установить">


<?
/*CModule::IncludeModule("catalog");
CModule::IncludeModule("iblock");
$_REQUEST["section_code"] = "test";
$_REQUEST["value_min_zakaz"] = 1;
if ($_REQUEST["section_code"] <> "" && $_REQUEST["value_min_zakaz"] <> ""){
 $i = 0;
  $arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM");
  $arFilter = Array('IBLOCK_ID'=>3, 'ACTIVE'=>'Y', 'SECTION_CODE'=>$_REQUEST["section_code"]);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
	while($ob = $res->GetNextElement())
	{
	 $arFields = $ob->GetFields();
	 		$i++;

		//echo '<PRE>';print_r($arFields);echo '</PRE>';
	}
}*/
  
  
  
//  $db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
// while($ar_result = $db_list->GetNext())
 // {
//	CIBlockElement::SetPropertyValueCode($ar_result["ID"], "MIN_ZAKAZ", $_REQUEST["value_min_zakaz"]);	
 //   //echo $ar_result['ID'].' '.$ar_result['NAME'].': '.$ar_result['ELEMENT_CNT'].'<br>';
 // }
 // echo $_REQUEST["section_code"];
 // echo $db_list->NavPrint($arIBTYPE["SECTION_NAME"]);
//}
/*$cntBasketItems = CSaleBasket::GetList(
   array(),
   array( 
      "FUSER_ID" => CSaleBasket::GetBasketUserID(),
      "LID" => SITE_ID,
      "ORDER_ID" => "NULL"
   ), 
   array()
);
print_r($cntBasketItems);
	
?>

<?
//CModule::IncludeModule("catalog");
CModule::IncludeModule("sale");
$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM");
$arFilter = Array("IBLOCK_ID"=>3, "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>100), $arSelect);
while($ob = $res->GetNextElement())
{
 $arFields = $ob->GetFields();
 //Add2BasketByProductID($arFields["ID"]);
}
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
		
	if ($cntBasketItems == 101){
		echo 100;
	}else{
		echo 0;
	}
*/
?> <br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => ".default",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>