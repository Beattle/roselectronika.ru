<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var string $this $templateFolder */
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
global $APPLICATION;
switch ($arParams['VIEW_MODE'])
{
	case 'BANNER':
		$APPLICATION->AddHeadScript($templateFolder.'/banner/script.js');
		$APPLICATION->SetAdditionalCSS($templateFolder.'/banner/style.css');
	case 'SLIDER':
	case 'SECTION':
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/section.js');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/catalog_grid.css');	
	default:
		$APPLICATION->AddHeadScript($templateFolder.'/section/script.js');
		$APPLICATION->SetAdditionalCSS($templateFolder.'/section/style.css');
		break;
}
if (isset($templateData['TEMPLATE_THEME']))
{
	//$APPLICATION->SetAdditionalCSS($templateData['TEMPLATE_THEME']);
}
?>