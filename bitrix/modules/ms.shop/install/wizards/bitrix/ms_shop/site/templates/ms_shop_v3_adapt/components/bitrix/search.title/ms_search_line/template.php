<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$INPUT_ID = trim($arParams["~INPUT_ID"]);
if(strlen($INPUT_ID) <= 0)
	$INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if(strlen($CONTAINER_ID) <= 0)
	$CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

if($arParams["SHOW_INPUT"] !== "N"):?>
<div class="item <?echo $CONTAINER_ID?>" id="<?echo $CONTAINER_ID?>">
	<div class="search-block">
		<form action="<?echo $arResult["FORM_ACTION"]?>">
			<input class="search-field" placeholder="<? echo GetMessage('CT_BST_SEARCH_BUTTON'); ?>" id="<?echo $INPUT_ID?>" type="text" name="q" value="" autocomplete="off" value=""/>
			<input class="search-btn" name="s" type="submit" value=""/>
		</form>
	</div>
</div>
<?endif?>