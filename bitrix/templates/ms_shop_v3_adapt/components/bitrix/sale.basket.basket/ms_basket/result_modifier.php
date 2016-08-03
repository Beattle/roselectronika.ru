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
	
	/* watermark */
	$res = CIBlockElement::GetList(array(), array("IBLOCK_ID" => 3, "ID" => $arItem["PRODUCT_ID"]));
	while($ob = $res->GetNextElement()){ 
		$arFields = $ob->GetFields();
		$arFields["PROPERTIES"] = $ob->GetProperties();
	}
	if($arFields["PROPERTIES"]["WATER_DETAIL"]["VALUE"] != "Да") continue;
	
	$arWaterMark = Array(
		array(
			"name" => "watermark",
			"position" => "center", // Положение
			"type" => "image",
			"size" => "real",
			"file" => $_SERVER["DOCUMENT_ROOT"].'/upload/watermark-small.png', // Путь к картинке
			"fill" => "exact",
		)
	);
	$arFileTmp = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width" => 178, "height" => 178), BX_RESIZE_IMAGE_PROPORTIONAL, true, $arWaterMark);
	$arItem["PREVIEW_PICTURE_SRC"] = $arFileTmp["src"];
}
?>