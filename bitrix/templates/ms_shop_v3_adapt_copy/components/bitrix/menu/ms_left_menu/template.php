<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult["ALL_ITEMS"]))
	return;

$menuBlockId = "catalog_menu_".rand();
?>
<div class="side-block side-menu-dd" id="<?=$menuBlockId?>">
	<div class="side-block-in">
		<ul id="ul_<?=$menuBlockId?>" class="side-menu">
		<?foreach($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):?>     <!-- first level-->
			<?$existPictureDescColomn = ($arResult["ALL_ITEMS"][$itemID]["PARAMS"]["picture_src"] || $arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"]) ? true : false;?>
			<li class="bx_hma_one_lvl <?if($arResult["ALL_ITEMS"][$itemID]["SELECTED"]):?>current<?endif?><?if (is_array($arColumns) && count($arColumns) > 0):?> dropdown<?endif?>">
				<a href="<?=$arResult["ALL_ITEMS"][$itemID]["LINK"]?>" data-description="<?=$arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"]?>">
					<?=$arResult["ALL_ITEMS"][$itemID]["TEXT"]?>
				</a>
			<?if (is_array($arColumns) && count($arColumns) > 0):?>
				<div class="sub-source">
					
						<?foreach($arColumns as $key=>$arRow):?>
							
							<?foreach($arRow as $itemIdLevel_2=>$arLevel_3):?>  <!-- second level-->
							<ul>
								<li class="parent">
									<a href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]?>" data-picture="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["PARAMS"]["picture_src"]?>" data-description="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["PARAMS"]["description"]?>">
										<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"]?>
									</a>
								</li>
								
								<?if (is_array($arLevel_3) && count($arLevel_3) > 0):?>
								<?foreach($arLevel_3 as $itemIdLevel_3):?>	<!-- third level-->
									<li>
										<a href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["LINK"]?>" data-picture="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["PARAMS"]["picture_src"]?>" data-description="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["PARAMS"]["description"]?>"><?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["TEXT"]?></a>
									</li>
								<?endforeach;?>
								<?endif?>
							</ul>
							<?endforeach;?>
							
						
						<?endforeach;?>
						
						
				</div>
				
				<div class="sub-container b<?=($existPictureDescColomn) ? count($arColumns)+1 : count($arColumns)?>">
					<div class="sub-container-in clearfix">
						<div class="b"></div>
						<div class="b"></div>
						<div class="b"></div>
					</div>
				</div>
			<?endif?>
			</li>
		<?endforeach;?>
		</ul>
	</div>
	<div style="clear: both;"></div>
</div>