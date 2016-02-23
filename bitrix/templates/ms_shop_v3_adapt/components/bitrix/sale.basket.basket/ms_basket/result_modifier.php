<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
foreach($arResult["ITEMS"]["AnDelCanBuy"] as $key => $arItem) {
	$recomendResult = CIBlockElement::GetList(
		Array(), 
		array("ID" => $arItem["PRODUCT_ID"]), 
		false, 
		Array(), 
		array(
			"PROPERTY_RECOMMEND"
		)
	);
	
	$recommendProducts = array();
	
	while($arRecommend = $recomendResult->GetNextElement())
	{
		$arElement = $arRecommend->GetFields();
		if(!empty($arElement["PROPERTY_RECOMMEND_VALUE"])) {
			$arResult["ITEMS"]["RECOMMEND"][] = $arElement["PROPERTY_RECOMMEND_VALUE"];
		}
	}
	
	$arResult["ITEMS"]["PARENT_PRODUCTS_IDS"][] = $arItem["PRODUCT_ID"];
}

// echo '<pre>'.print_r($arResult["GRID"]["ROWS"],true).'</pre>';
// echo '<pre>'.print_r($arResult['ITEMS']['AnDelCanBuy'],true).'</pre>';
foreach ($arResult["GRID"]["ROWS"] as $k => &$arItem){

    $res = CIBlockElement::GetProperty(3,$arItem['PRODUCT_ID'],array(),array('ID'=>30));
    if ($ob = $res->GetNext())
    {
        $arItem['NAME'] = "$ob[VALUE] $arItem[NAME]";
    }
}





?>