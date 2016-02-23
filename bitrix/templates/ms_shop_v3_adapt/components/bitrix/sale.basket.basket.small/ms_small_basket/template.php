<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$this->setFrameMode(true);?>

<?
if ($arResult["READY"]=="Y" || $arResult["DELAY"]=="Y" || $arResult["NOTAVAIL"]=="Y" || $arResult["SUBSCRIBE"]=="Y")
{
	if ($arResult["READY"]=="Y")
	{
		$ids = '';
		$i = 1;
		
		$newIds = array();

		foreach ($arResult["ITEMS"] as &$v)
		{
			if ($v["DELAY"]=="N" && $v["CAN_BUY"]=="Y")
			{
				if($i==1){
					$ids = $ids.'.p_id_'.$v["PRODUCT_ID"];
				}
				else{
					$ids = $ids.', .p_id_'.$v["PRODUCT_ID"];
				}

				array_push($newIds, $v["PRODUCT_ID"]);

				$i++;
			}
		}
		if (isset($v))
			unset($v);
	}
}
$inCartJsArr = json_encode($newIds);
?>

<script type="text/javascript">
	//var inCartIDs = '<?=$ids?>';
	var inCartIDs = <?=$inCartJsArr?>;

	if(inCartIDs == null || typeof inCartIDs == 'undefined'){
		console.log('undefined');
		
		var inCartIDs = [];
	}
	
	//console.log('inCartIDs2');
	//console.log(inCartIDs);

	BX.message({
		BTN_INCART: '<? echo GetMessageJS('BTN_INCART') ?>'
	});
</script>