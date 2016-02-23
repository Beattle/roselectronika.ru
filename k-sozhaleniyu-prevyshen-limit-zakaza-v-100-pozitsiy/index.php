<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("К сожалению превышен лимит заказа в 100 позиций");
?><h2 style="text-align: center">Превышен максимальный лимит позиций товаров в корзине - 100 позиций. Пожалуйста сначала <a href="/personal/order/make/">оформите текущий заказ</a>, а потом создайте новый. Спасибо.&nbsp;</h2><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>