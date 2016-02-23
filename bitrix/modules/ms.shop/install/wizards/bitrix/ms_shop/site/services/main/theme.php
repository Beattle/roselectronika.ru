<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if (!defined("WIZARD_TEMPLATE_ID"))
	return;

$templateDir = BX_PERSONAL_ROOT."/templates/".WIZARD_TEMPLATE_ID."/themes/";

CopyDirFiles(
	WIZARD_TEMPLATE_ABSOLUTE_PATH."/themes/",
	$_SERVER["DOCUMENT_ROOT"].$templateDir,
	$rewrite = true, 
	$recursive = true,
	$delete_after_copy = false,
	$exclude = "description.php"
);

COption::SetOptionString("main", "wizard_".WIZARD_TEMPLATE_ID."_theme_id", WIZARD_THEME_ID, "", WIZARD_SITE_ID);

COption::SetOptionString("ms.shop", "color_theme_".WIZARD_SITE_ID, WIZARD_THEME_ID, "", WIZARD_SITE_ID);
COption::SetOptionString("ms.shop", "template_type_".WIZARD_SITE_ID, "type1", "", WIZARD_SITE_ID);

//COption::SetOptionString("ms.shop", "color_theme2", "theme1", "", WIZARD_SITE_ID);
//COption::SetOptionString("ms.shop", "template_type2", "type1", "", WIZARD_SITE_ID);

//Color scheme for main.interface.grid/form
require_once($_SERVER["DOCUMENT_ROOT"].BX_ROOT."/modules/main/classes/".strToLower($GLOBALS["DB"]->type)."/favorites.php");
CUserOptions::SetOption("main.interface", "global", array("theme" => WIZARD_THEME_ID), true);
?>