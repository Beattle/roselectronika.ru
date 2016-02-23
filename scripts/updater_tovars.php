<?
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');
CModule::IncludeModule("catalog");
set_time_limit(0);

$i = 0;
$count = 250;
$res = CIBlockElement::GetList(array("ID" => "ASC"), array("IBLOCK_ID" => 3, ">ID" => (empty($_GET["last_id"]) ? 0 : $_GET["last_id"])));
while($ob = $res->GetNextElement())
{
	$arFields = $ob->GetFields();
	$el = new CIBlockElement;
	$arLoadProductArray = array(
	//  "ACTIVE"         => "N" 
	);
	$res1 = $el->Update($arFields['ID'], $arLoadProductArray);
	
	$arLoadProductArray = array();
	//CCatalogProduct::Update($arFields['ID'], $arLoadProductArray);
	
	echo $res1.' '.$arFields['ID'].'<br>';
	$i++;
	if($i > $count)
	{
		$APPLICATION->set_cookie("updater_tovars_last_id", $arFields['ID'], time()+60*60*24*30*12*2, "/ru/");
		LocalRedirect('/scripts/updater_tovars.php?last_id='.$arFields['ID']);
	};
}
echo "Обновлено: ".$i." товаров!";
?>