<?
$module_id = "ms.shop";
$RIGHT_W = $RIGHT_R = $USER->IsAdmin();
if($RIGHT_R || $RIGHT_W) :

IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"].BX_ROOT."/modules/main/options.php");
IncludeModuleLangFile(__FILE__);

$by = "id";
$sort = "asc";

$arSites = array();
$db_res = CSite::GetList($by , $sort ,array("ACTIVE"=>"Y"));
while( $res = $db_res->Fetch() ){
	$arSites[] = $res;
}

$arMainOptions = array(
	array("theme_changer", GetMessage("ONCLOUD_THEME_CHANGER"), array("checkbox", "N")),
	array(
		"color_theme",
		GetMessage("ONCLOUD_THEME")." ",
		array(
			"selectbox",
			array(
				"theme1" => GetMessage("ONCLOUD_THEME_1"),
				"theme2" => GetMessage("ONCLOUD_THEME_2"),
				"theme3" => GetMessage("ONCLOUD_THEME_3"),
			),
		),
	),
	array(
		"template_type",
		GetMessage("ONCLOUD_TYPE")." ",
		array(
			"selectbox",
			array(
				"type1" => GetMessage("ONCLOUD_TYPE_1"),
				"type2" => GetMessage("ONCLOUD_TYPE_2"),
			),
		),
	),
);

$arTabs = array();
foreach( $arSites as $key => $arSite ){
	$arTabs[] = array(
		"DIV" => "edit".($key+1), 
		"TAB" => GetMessage("MAIN_OPTIONS", array("#SITE_NAME#" => $arSite["NAME"], "#SITE_ID#" => $arSite["ID"])), 
		"ICON" => "settings", 
		"TITLE" => GetMessage("MAIN_OPTIONS_TITLE"),
		"PAGE_TYPE" => "site_settings",
		"SITE_ID" => $arSite["ID"],
		"OPTIONS" => $arMainOptions
	);	
}

$tabControl = new CAdminTabControl("tabControl", $arTabs);

CModule::IncludeModule($module_id);

if (
	$_SERVER["REQUEST_METHOD"] === "POST"
	&& (
		isset($_REQUEST["Update"])
		|| isset($_REQUEST["Apply"])
		|| isset($_REQUEST["RestoreDefaults"])
	)
	&& $RIGHT_W
	&& check_bitrix_sessid()
)

{
	if (isset($_REQUEST["RestoreDefaults"]))
	{
		COption::RemoveOption($module_id);
	}
	else
	{
		foreach( $arTabs as $arTab ){
			foreach ($arTab["OPTIONS"] as $arOption)
			{
				$name = $arOption[0]."_".$arTab["SITE_ID"];
				$val = trim($_REQUEST[$name], " \t\n\r");
				if ($arOption[2][0] == "checkbox" && $val != "Y")
					$val = "N";
				COption::SetOptionString($module_id, $name, $val, $arOption[1], $arTab["SITE_ID"]);
			}
		}
	}

	if (isset($_REQUEST["back_url_settings"]))
	{
		if(
			isset($_REQUEST["Apply"])
			|| isset($_REQUEST["RestoreDefaults"])
		)
			LocalRedirect($APPLICATION->GetCurPage()."?mid=".urlencode($module_id)."&lang=".urlencode(LANGUAGE_ID)."&back_url_settings=".urlencode($_REQUEST["back_url_settings"])."&".$tabControl->ActiveTabParam());
		else
			LocalRedirect($_REQUEST["back_url_settings"]);
	}
	else
	{
		LocalRedirect($APPLICATION->GetCurPage()."?mid=".urlencode($module_id)."&lang=".urlencode(LANGUAGE_ID)."&".$tabControl->ActiveTabParam());
	}
}

?>
<form method="post" action="<?echo $APPLICATION->GetCurPage()?>?mid=<?=urlencode($module_id)?>&amp;lang=<?=LANGUAGE_ID?>">
<?
$tabControl->Begin();

	foreach($arTabs as $arTab) {
	$tabControl->BeginNextTab();
	foreach($arTab["OPTIONS"] as $arOption) {
		$arOption[0] =  $arOption[0]."_".$arTab["SITE_ID"];
		$val = COption::GetOptionString($module_id, $arOption[0], "", $arTab["SITE_ID"]);
		$type = $arOption[2];
	?>
	<tr>
		<td width="40%" nowrap <?if($type[0]=="textarea") echo 'class="adm-detail-valign-top"'?>>
			<label for="<?echo htmlspecialcharsbx($arOption[0])?>"><?echo $arOption[1]?>:</label>
		<td width="60%">
			<?if($type[0]=="checkbox"):?>
				<input type="checkbox" name="<?echo htmlspecialcharsbx($arOption[0])?>" id="<?echo htmlspecialcharsbx($arOption[0])?>" value="Y"<?if($val=="Y")echo" checked";?>>
			<?elseif($type[0]=="text"):?>
				<input type="text" size="<?echo $type[1]?>" maxlength="255" value="<?echo htmlspecialcharsbx($val)?>" name="<?echo htmlspecialcharsbx($arOption[0])?>" id="<?echo htmlspecialcharsbx($arOption[0])?>">
			<?elseif($type[0]=="textarea"):?>
				<textarea rows="<?echo $type[1]?>" cols="<?echo $type[2]?>" name="<?echo htmlspecialcharsbx($arOption[0])?>" id="<?echo htmlspecialcharsbx($arOption[0])?>"><?echo htmlspecialcharsbx($val)?></textarea>
			<?elseif($type[0]=="selectbox"):
				?><select name="<?echo htmlspecialcharsbx($arOption[0])?>"><?
					foreach($type[1] as $key => $value):
						?><option value="<?echo htmlspecialcharsbx($key)?>"<?if($key==$val) echo ' selected="selected"'?>><?echo htmlspecialcharsEx($value)?></option><?
					endforeach;
				?></select><?
			endif?>
		</td>
	</tr>
	<? } ?>
	<? } ?>
	
<?$tabControl->Buttons();?>
	<input <?if(!$RIGHT_W) echo "disabled" ?> type="submit" name="Update" value="<?=GetMessage("MAIN_SAVE")?>" title="<?=GetMessage("MAIN_OPT_SAVE_TITLE")?>" class="adm-btn-save">
	<input <?if(!$RIGHT_W) echo "disabled" ?> type="submit" name="Apply" value="<?=GetMessage("MAIN_OPT_APPLY")?>" title="<?=GetMessage("MAIN_OPT_APPLY_TITLE")?>">
	<?if(strlen($_REQUEST["back_url_settings"])>0):?>
		<input <?if(!$RIGHT_W) echo "disabled" ?> type="button" name="Cancel" value="<?=GetMessage("MAIN_OPT_CANCEL")?>" title="<?=GetMessage("MAIN_OPT_CANCEL_TITLE")?>" onclick="window.location='<?echo htmlspecialcharsbx(CUtil::addslashes($_REQUEST["back_url_settings"]))?>'">
		<input type="hidden" name="back_url_settings" value="<?=htmlspecialcharsbx($_REQUEST["back_url_settings"])?>">
	<?endif?>
	<input <?if(!$RIGHT_W) echo "disabled" ?> type="submit" name="RestoreDefaults" title="<?echo GetMessage("MAIN_HINT_RESTORE_DEFAULTS")?>" onclick="return confirm('<?echo AddSlashes(GetMessage("MAIN_HINT_RESTORE_DEFAULTS_WARNING"))?>')" value="<?echo GetMessage("MAIN_RESTORE_DEFAULTS")?>">
	<?=bitrix_sessid_post();?>
<?$tabControl->End();?>

</form>
<?endif;?>
