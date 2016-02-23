<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (IntVal($arResult["NUM_PRODUCTS"])>0)
{
?>
	<a href="<?=$arParams["PATH_TO_BASKET"]?>"><?echo GetMessage('YOUR_CART')?></a>
	<span><?echo intval($arResult["NUM_PRODUCTS"])?></span>
<?
}
else
{
?>
	<a href="<?=$arParams["PATH_TO_BASKET"]?>"><?echo GetMessage('YOUR_CART_EMPTY')?></a><span>0</span>
<?
}
?>