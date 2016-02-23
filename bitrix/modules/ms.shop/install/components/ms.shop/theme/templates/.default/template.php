<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
$this->setFrameMode(true);
?>

<?
//print_r($arResult);

$current_theme = $arResult["COLOR_THEME"];
$currentTemplateType = $arResult["TEMPLATE_TYPE"];
?>

<?//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/themes/'.$current_theme.'/colors.css');?>

<link href="<? echo SITE_TEMPLATE_PATH; ?>/themes/<? echo $current_theme; ?>/colors.css" rel="stylesheet" type="text/css"/>

<? if($arResult["ACTIVE"] == "Y") { ?>
<link href="<? echo $this->getFolder(); ?>/theme-changer.css" rel="stylesheet" type="text/css"/>
<script src="<? echo $this->getFolder(); ?>/tc.js" type="text/javascript"></script>

<div id="theme_changer" class="<?=$tc?>">
	<div class="item">
		<div class="title">ШАБЛОН САЙТА</div>
		<ul>
			<li <?if($currentTemplateType == "type1"):?> class="active"<?endif?>><a id="tcl_horizontal" href="?template_type=type1">Горизонтальный</a></li>
			<li <?if($currentTemplateType == "type2"):?> class="active"<?endif?>><a id="tcl_vertical" href="?template_type=type2">Вертикальный</a></li>
		</ul>
	</div>
	<div class="item">
		<div class="title">ЦВЕТОВАЯ СХЕМА</div>
		<ul>
			<li <?if($current_theme == "theme1"):?>class="active"<?endif?>><a id="theme1" href="?color=theme1">Тема 1</a></li>
			<li <?if($current_theme == "theme2"):?>class="active"<?endif?>><a id="theme2" href="?color=theme2">Тема 2</a></li>			
			<li <?if($current_theme == "theme3"):?>class="active"<?endif?>><a id="theme3" href="?color=theme3">Тема 3</a></li>			
		</ul>
	</div>
	
	<div id="tc_x"></div>
</div>
<a id="tc_gear" href="#"></a>
<? } ?>