<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>

<i></i>
<a class="dotted" href="<?=$arParams["PATH_TO_BASKET"]?>"><?=GetMessage('FP_YOUR_CART')?></a>
<b><?=intval($arResult["NUM_PRODUCTS"])?></b>
<span><?=GetMessage('YOUR_CART_NA')?></span>
<b><?=$arResult['TOTAL_PRICE']?></b>
<a class="btn" href="<?=$arParams["PATH_TO_BASKET"]?>"><?=GetMessage('YOUR_CART_DETAIL')?></a>