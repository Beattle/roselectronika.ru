<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$active = COption::GetOptionString("ms.shop", "theme_changer_".SITE_ID, "", SITE_ID);
$templateType = COption::GetOptionString("ms.shop", "template_type_".SITE_ID, "", SITE_ID);
$colorTheme = COption::GetOptionString("ms.shop", "color_theme_".SITE_ID, "", SITE_ID);

//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/themes/'.$currentColor.'/colors.css', true);

//echo ms::sayHello();

if($active == "Y") {
	if(!isset($_REQUEST["color"]) && !isset($_SESSION["color"])) {
		$_SESSION["color"] = $colorTheme;
	}

	$currentColor = $_SESSION["color"];

	if(isset($_REQUEST["color"])) {
		$_SESSION["color"] = $_REQUEST["color"];
		$currentColor = $_REQUEST["color"];
	}

	if(!isset($_REQUEST["template_type"]) && !isset($_SESSION["template_type"])) {
		$_SESSION["template_type"] = $templateType;
	}

	$currentTemplateType = $_SESSION["template_type"];

	if(isset($_REQUEST["template_type"])) {
		$_SESSION["template_type"] = $_REQUEST["template_type"];
		$currentTemplateType = $_REQUEST["template_type"];
	}
} else {
	$currentColor = $colorTheme;
	$currentTemplateType = $templateType;
}

//echo "<pre>";
//print_r($_SESSION["color"]);
//echo "</pre>";

/* if($active == "Y") {
	$this->IncludeComponentTemplate();
} */

$arResult = array(
	"COLOR_THEME" => $currentColor,
	"TEMPLATE_TYPE" => $currentTemplateType,
	"ACTIVE" => $active,
);

$this->IncludeComponentTemplate();

return $arResult;