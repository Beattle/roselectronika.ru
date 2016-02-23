 <?
//$arFile = $_REQUEST[""];
//CIBlockElement::SetPropertyValueCode(384159, "MIN_ZAKAZ", $arFile);
?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("catalog");
CModule::IncludeModule("iblock");
if ($_REQUEST["section_code"] <> "" && $_REQUEST["value_min_zakaz"] <> ""){
  $i = 0;
  $arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM");
  $arFilter = Array('IBLOCK_ID'=>3, 'ACTIVE'=>'Y', 'SECTION_CODE'=>$_REQUEST["section_code"]);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
	while($ob = $res->GetNextElement())
	{
	 $arFields = $ob->GetFields();
	 		$i++;
		CIBlockElement::SetPropertyValueCode($arFields["ID"], "MIN_ZAKAZ", $_REQUEST["value_min_zakaz"]);
		//echo '<PRE>';print_r($arFields);echo '</PRE>';
	}
	echo $i;
 // echo $db_list->NavPrint($arIBTYPE["SECTION_NAME"]);
}
?>