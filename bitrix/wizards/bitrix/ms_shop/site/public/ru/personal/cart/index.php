<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?><?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket", "ms_basket", Array(
	"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",	// Рассчитывать скидку для каждой позиции (на все количество товара)
	"COLUMNS_LIST" => array(	// Выводимые колонки
		0 => "NAME",
		1 => "PROPS",
		2 => "PRICE",
		3 => "QUANTITY",
		4 => "DELETE",
		5 => "DELAY",
		6 => "DISCOUNT",
	),
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"PATH_TO_ORDER" => "#SITE_DIR#personal/order/make/",	// Страница оформления заказа
	"HIDE_COUPON" => "N",	// Спрятать поле ввода купона
	"QUANTITY_FLOAT" => "N",
	"PRICE_VAT_SHOW_VALUE" => "Y",	// Отображать значение НДС
	"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
	"AJAX_OPTION_ADDITIONAL" => "",
	"OFFERS_PROPS" => array(	// Свойства торговых предложений для вывода в корзине
		0 => "SIZES_SHOES",
		1 => "SIZES_CLOTHES",
		2 => "COLOR_REF",
	)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>