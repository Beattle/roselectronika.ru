<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин");
?>

<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/icons_menu.php"), false);?>	

<div class="tabs" id="home-tabs">
	<ul class="no-marker h_tabs_ctrl clearfix">
		<li><a href="#t_home_recommend">Советуем</a></li>
		<li><a href="#t_home_new">Новинки</a></li>
		<li><a href="#t_home_sl">Хиты продаж</a></li>
	</ul>

	<div class="ms_tab" id="t_home_recommend">
	<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top", 
	"ms_catalog_top", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "#CATALOG_IBLOCK_ID#",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "name",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_NAME" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"ELEMENT_COUNT" => "12",
		"LINE_ELEMENT_COUNT" => "4",
		"PROPERTY_CODE" => array(
			0 => "NEWPRODUCT",
			1 => "SALELEADER",
			2 => "SPECIALOFFER",
			3 => "ARTNUMBER",
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "MORE_PHOTO",
			1 => "PHONE_COLOR",
			2 => "RAM",
			3 => "PIC",
			4 => "ARTNUMBER",
			5 => "MEMORY_SIZE",
			6 => "COLOR_REF",
			7 => "SIZES_SHOES",
			8 => "SIZES_CLOTHES",
			9 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFERS_LIMIT" => "0",
		"VIEW_MODE" => "SECTION",
		"TEMPLATE_THEME" => "site",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"LABEL_PROP" => "-",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"MESS_BTN_BUY" => "В корзину",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "180",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_COMPARE" => "N",
		"CACHE_FILTER" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "#SITE_DIR#personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id_section",
		"USE_PRODUCT_QUANTITY" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRODUCT_PROPERTIES" => array(
		),
		"OFFERS_CART_PROPERTIES" => array(
			0 => "PHONE_COLOR",
		)
	),
	false
);?>
	</div>
	<div class="ms_tab" id="t_home_new">
<?
global $arrFilterNew;
$arrFilterNew = array(
    "PROPERTY_NEWPRODUCT_VALUE" => "да"
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top",
	"ms_catalog_top",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "#CATALOG_IBLOCK_ID#",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "name",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_NAME" => "arrFilterNew",
		"HIDE_NOT_AVAILABLE" => "N",
		"ELEMENT_COUNT" => "12",
		"LINE_ELEMENT_COUNT" => "4",
		"PROPERTY_CODE" => array(
			0 => "NEWPRODUCT",
			1 => "SALELEADER",
			2 => "SPECIALOFFER",
			3 => "ARTNUMBER",
		),
		"OFFERS_FIELD_CODE" => array("NAME",""),
		"OFFERS_PROPERTY_CODE" => array("Test","TEST2","MORE_PHOTO","PHONE_COLOR","COLOR_REF","RAM","PIC","ARTNUMBER","MEMORY_SIZE","SIZES_SHOES","SIZES_CLOTHES",""),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFERS_LIMIT" => "0",
		"VIEW_MODE" => "SECTION",
		"TEMPLATE_THEME" => "site",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"LABEL_PROP" => "-",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"MESS_BTN_BUY" => "В корзину",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "180",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_COMPARE" => "N",
		"CACHE_FILTER" => "N",
		"PRICE_CODE" => array("BASE"),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "#SITE_DIR#personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id_section",
		"USE_PRODUCT_QUANTITY" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRODUCT_PROPERTIES" => array(),
		"OFFERS_CART_PROPERTIES" => array("Test","TEST2","PHONE_COLOR","COLOR_REF"),
		"OFFER_ADD_PICT_PROP" => "-",
		"OFFER_TREE_PROPS" => array("PHONE_COLOR","COLOR_REF","Test","TEST2")
	)
);?>
	</div>
	<div class="ms_tab" id="t_home_sl">
<?
global $arrFilterSaleLeader;
$arrFilterSaleLeader = array(
    "PROPERTY_SALELEADER_VALUE" => "да"
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top", 
	"ms_catalog_top", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "#CATALOG_IBLOCK_ID#",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "name",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_NAME" => "arrFilterSaleLeader",
		"HIDE_NOT_AVAILABLE" => "N",
		"ELEMENT_COUNT" => "12",
		"LINE_ELEMENT_COUNT" => "4",
		"PROPERTY_CODE" => array(
			0 => "NEWPRODUCT",
			1 => "SALELEADER",
			2 => "SPECIALOFFER",
			3 => "ARTNUMBER",
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "MORE_PHOTO",
			1 => "PHONE_COLOR",
			2 => "RAM",
			3 => "PIC",
			4 => "ARTNUMBER",
			5 => "MEMORY_SIZE",
			6 => "COLOR_REF",
			7 => "SIZES_SHOES",
			8 => "SIZES_CLOTHES",
			9 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFERS_LIMIT" => "0",
		"VIEW_MODE" => "SECTION",
		"TEMPLATE_THEME" => "site",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"LABEL_PROP" => "-",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"MESS_BTN_BUY" => "В корзину",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "180",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_COMPARE" => "N",
		"CACHE_FILTER" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "#SITE_DIR#personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id_section",
		"USE_PRODUCT_QUANTITY" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRODUCT_PROPERTIES" => array(
		),
		"OFFERS_CART_PROPERTIES" => array(
			0 => "PHONE_COLOR",
		)
	),
	false
);?>
	</div>
</div>

<div class="after-text">
	<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/index_text.php"), false);?>	
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>