<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
/** @var array $arResult */
// echo '<pre>'.print_r($arResult,true).'</pre>';
?>
<h3>Аналоги</h3>
<div class="analog-list">
    <? foreach ($arResult['ITEMS'] as $key => $element):?>
        <div class="product el-list-<?=$key+1?>">
            <a href="<?=$element["DETAIL_PAGE_URL"]?>">
                <p class="name-cont">
                    <span class="model"><?=$element["PROPERTY_MODEL_VALUE"]?></span>
                    <span class="name"><?=$element["NAME"]?></span>
                </p>
                <img  width="100" height="100" src="<?=$element["PREVIEW_PICTURE"]["SRC"]?>">
            </a>
        </div>
    <?endforeach;?>
</div>
