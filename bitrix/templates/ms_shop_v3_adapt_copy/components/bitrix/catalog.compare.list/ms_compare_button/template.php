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

<div class="fp_compare" id="<?echo $containerId?>">
	<?$frame = $this->createFrame($containerId)->begin('');?>
		
		<i></i>
		<a class="dotted" href="<?=$arParams["COMPARE_URL"]?>"><?=GetMessage("CATALOG_COMPARE_ELEMENTS")?></a>
		<b><?=count($arResult)?></b>
		
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
		
	
	<?$frame->end();?>
</div>

<script type="text/javascript">
BX.message({
	C_TITLE: '<? echo GetMessageJS('C_TITLE') ?>',
	C_BTN_TEXT: '<? echo GetMessageJS('C_BTN_TEXT') ?>',
	C_BTN_LINK: '<?=$arParams["COMPARE_URL"]?>',
	C_BTN_CONTINUE: '<?=GetMessage("C_BTN_CONTINUE")?>'
});

</script>