<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$containerId = "catalog-compare-list".$this->randString();
?>

<?if(count($arResult) > 0):?>
	<?
	$ids = '';
	$i = 1;
	foreach($arResult as $key=>$arElement){
		if($i==1){
			$ids = $ids.'#prc_'.$arElement["ID"];
		}
		else{
			$ids = $ids.', #prc_'.$arElement["ID"];
		}
		$i++;
	}
	?>
	
	<script type="text/javascript">
		var compareIDs = '<?=$ids?>';
	</script>
<?endif;?>
