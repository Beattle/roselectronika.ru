<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

$this->setFrameMode(true);

if (empty($arResult["ALL_ITEMS"]))
	return;

if (file_exists($_SERVER["DOCUMENT_ROOT"].$this->GetFolder().'/themes/'.$arParams["MENU_THEME"].'/colors.css'))
	$APPLICATION->SetAdditionalCSS($this->GetFolder().'/themes/'.$arParams["MENU_THEME"].'/colors.css');

$menuBlockId = "catalog_menu_".$this->randString();
?>
<div class="side_menu no-marker bx_<?=$arParams["MENU_THEME"]?>" id="<?=$menuBlockId?>" style="    width: 304px;">
	<div class="title"><?=GetMessage('SIDE_MENU_TITLE');?></div>
	<ul id="ul_<?=$menuBlockId?>">
	<!-- first level-->
	<?foreach($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):?>
		<li class="bx_hma_one_lvl <?if($arResult["ALL_ITEMS"][$itemID]["SELECTED"]):?>current<?endif?>">
            <?php
				//print_r($arResult["ALL_ITEMS"][$itemID]);
				//$res = str_replace("/catalog/","",$arResult["ALL_ITEMS"][$itemID]["LINK"]);
				//$res1 = str_replace("/","",$res);
				$res = explode("/",$arResult["ALL_ITEMS"][$itemID]["LINK"]);
				/*if ($res[3] <> ""){
					$res = $res[3];
				}else{
					$res = $res[2];
				}*/
                $link = $arResult["ALL_ITEMS"][$itemID]["TEXT"];
                $title = mb_strtoupper(mb_substr($link, 0, 1)).mb_strtolower(mb_substr($link, 1));
            ?>
			<a class="menu"  id="menu<?=$i?>" p_code="<?=$res[2]?>" p_name="<?=$arResult["ALL_ITEMS"][$itemID]["TEXT"]?>">
				<?=$title?>
			</a>
			
			<?if (is_array($arColumns) && count($arColumns) > 0):?>
				<ul>
				<?foreach($arColumns as $key=>$arRow):?>
					<?foreach($arRow as $itemIdLevel_2=>$arLevel_3):?>  <!-- second level-->
					<?
						//$res = str_replace("/catalog/","",$arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]);
						//$res2 = str_replace("/","",$res);
						$res = explode("/",$arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]);
						
					?>
					
						<li class="">
							<a class="menu"  p_code="<?=$res[3]?>" p_name="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"]?>" id="menu<?=$i?>">
								<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"]?>
							</a>
							
						<?if (is_array($arLevel_3) && count($arLevel_3) > 0):?>
							<ul>
							<?foreach($arLevel_3 as $itemIdLevel_3):?>	<!-- third level-->
							<?
								//$res = str_replace("/catalog/","",$arResult["ALL_ITEMS"][$itemIdLevel_3]["LINK"]);
								//$res3 = str_replace("/","",$res);
								$res = explode("/",$arResult["ALL_ITEMS"][$itemIdLevel_3]["LINK"]);
							?>
								<li>
									<a class="menu"  p_code="<?=$res[4]?>" p_name="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["TEXT"]?>" id="menu<?=$i?>"><?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["TEXT"]?></a>
								</li>
							<?endforeach;?>
							</ul>
						<?endif?>
						</li>
					<?endforeach;?>
				<?endforeach;?>
				</ul>

			<?endif?>
		</li>
	<?endforeach;?>
	</ul>
</div>
<script>
$(document).on('ready', function(){
    $('.menu').click(function(){
		$("#section_name").val($(this).attr("p_name"));
		$("#section_code").val($(this).attr("p_code"));
	//	alert("123");
		//$(".dropdown-menu").show();
  });
   
});
</script>