<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $templateData */
/** @var @global CMain $APPLICATION */
global $APPLICATION;
if (isset($templateData['TEMPLATE_THEME']))
{
	$APPLICATION->SetAdditionalCSS($templateData['TEMPLATE_THEME']);
}

$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/section.js');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/catalog_grid.css');
?>