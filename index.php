<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Интернет-магазин \"Росэлектроника\" рад предложить большой ассортимент электроники и электронных компонентов в наличии со склада в Уфе и под заказ");
$APPLICATION->SetPageProperty("keywords", "электроника уфа, интернет-магазин электроники, электронные компоненты, электроника цены в уфе");
$APPLICATION->SetPageProperty("title", "Росэлектроника - электроника и электронные компоненты в Уфе - Интернет магазин");
$APPLICATION->SetTitle("Интернет-магазин");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/icons_menu.php"
	)
);?>
<div class="tabs" id="home-tabs">
	<ul class="no-marker h_tabs_ctrl clearfix">
		<li><a href="#t_home_recommend">Распродажа со склада</a></li>
		<li><a href="#t_home_new">Новинки</a></li>
		<li><a href="#t_home_sl">Лидер продаж</a></li>
	</ul>
	<div class="ms_tab" id="t_home_recommend">
		 <?
global $arrFilterShowOnMain;
$arrFilterShowOnMain = array(
    "PROPERTY_SHOWONMAIN_VALUE" => "да"
);?>	
		 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top", 
	"ms_catalog_top", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "3",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "sort",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_NAME" => "arrFilterShowOnMain",
		"HIDE_NOT_AVAILABLE" => "N",
		"ELEMENT_COUNT" => "16",
		"LINE_ELEMENT_COUNT" => "4",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "NEWPRODUCT",
			2 => "SALELEADER",
			3 => "SPECIALOFFER",
			4 => "ARTNUMBER",
			5 => "MODEL",
			6 => "",
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
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id_section",
		"USE_PRODUCT_QUANTITY" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "N",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRODUCT_PROPERTIES" => array(
			0 => ",NEWPRODUCT,SALELEADER,SPECIALOFFER,ARTNUMBER,MODEL",
		),
		"OFFERS_CART_PROPERTIES" => array(
			0 => "PHONE_COLOR",
		),
		"COMPONENT_TEMPLATE" => "ms_catalog_top",
		"OFFER_ADD_PICT_PROP" => "-",
		"OFFER_TREE_PROPS" => array(
			0 => "-",
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
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top",
	"ms_catalog_top",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => 3,
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "name",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_NAME" => "arrFilterNew",
		"HIDE_NOT_AVAILABLE" => "N",
		"ELEMENT_COUNT" => "12",
		"LINE_ELEMENT_COUNT" => "4",
		"PROPERTY_CODE" => array(0=>"NEWPRODUCT",1=>"SALELEADER",2=>"SPECIALOFFER",3=>"ARTNUMBER",),
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
		"BASKET_URL" => "/personal/cart/",
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
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top",
	"ms_catalog_top",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => 3,
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "name",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_NAME" => "arrFilterSaleLeader",
		"HIDE_NOT_AVAILABLE" => "N",
		"ELEMENT_COUNT" => "12",
		"LINE_ELEMENT_COUNT" => "4",
		"PROPERTY_CODE" => array(0=>"NEWPRODUCT",1=>"SALELEADER",2=>"SPECIALOFFER",3=>"ARTNUMBER",),
		"OFFERS_FIELD_CODE" => array(0=>"NAME",1=>"",),
		"OFFERS_PROPERTY_CODE" => array(0=>"MORE_PHOTO",1=>"PHONE_COLOR",2=>"RAM",3=>"PIC",4=>"ARTNUMBER",5=>"MEMORY_SIZE",6=>"COLOR_REF",7=>"SIZES_SHOES",8=>"SIZES_CLOTHES",9=>"",),
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
		"PRICE_CODE" => array(0=>"BASE",),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id_section",
		"USE_PRODUCT_QUANTITY" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRODUCT_PROPERTIES" => array(),
		"OFFERS_CART_PROPERTIES" => array(0=>"PHONE_COLOR",)
	)
);?>
	</div>
</div>
<div class="after-text">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/index_text.php"
	)
);?>
</div>
 <br>
 <br>
 <br>
 <br>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu.sections", 
	"", 
	array(
		"IS_SEF" => "Y",
		"ID" => $_REQUEST["ID"],
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "3",
		"SECTION_URL" => "",
		"DEPTH_LEVEL" => "3",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"SEF_BASE_URL" => "/catalog/",
		"SECTION_PAGE_URL" => "/catalog/#SECTION_CODE_PATH#/",
		"DETAIL_PAGE_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>