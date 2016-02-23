<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(count($arResult["ITEMS"]) > 0): ?>
	<?
	$notifyOption = COption::GetOptionString("sale", "subscribe_prod", "");
	$arNotify = unserialize($notifyOption);
	?>
	
	
<div class="side-block side-prod">
	<div class="title"><?=GetMessage("TITLE")?></div>
	
	<div class="side-block-in catalog side-list">
	<?foreach($arResult["ITEMS"] as $key => $arItem):
		if(is_array($arItem))
		{
			$bPicture = is_array($arItem["PREVIEW_PICTURE"]);
			?><div class="product itembg R2D2">
				<div class="product-in" id="<?=$this->GetEditAreaId($arElement['ID']);?>">
					<div class="col-1">
						<?if ($bPicture):?>
							<a class="img" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img class="item_img" itemprop="image" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="100" alt="<?=$arElement["NAME"]?>" /></a>
						<?else:?>
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><div class="no-photo-div-big" style="height:130px; width:130px;"></div></a>
						<?endif?>
					</div>
					
					<div class="col-2">
						<div class="p-name"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="item_title" title="<?=$arItem["NAME"]?>">
							<span itemprop = "name"><?=$arItem["NAME"]?> <span class="white_shadow"></span></span>
						</a></div>
					
						<div class="price" itemprop = "offers" itemscope itemtype = "http://schema.org/Offer"><?
							if(is_array($arItem["OFFERS"]) && !empty($arItem["OFFERS"]))   //if product has offers
							{
								if (count($arItem["OFFERS"]) > 1)
								{
								?>
								   <span itemprop = "price" class="item_price">
								<?
									echo GetMessage("CR_PRICE_OT")."&nbsp;";
									echo $arItem["PRINT_MIN_OFFER_PRICE"];
								?>
									</span>
								<?
								}
								else
								{
									foreach($arItem["OFFERS"] as $arOffer):?>
										<?foreach($arOffer["PRICES"] as $code=>$arPrice):?>
											<?if($arPrice["CAN_ACCESS"]):?>
													<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
														<span itemprop = "discount-price" class="item_price"><?=$arPrice["PRINT_DISCOUNT_VALUE"]?></span>
														<span class="old-price"><?=$arPrice["PRINT_VALUE"]?></span>
														<?else:?>
														<span itemprop = "price" class="item_price price"><?=$arPrice["PRINT_VALUE"]?></span>
													<?endif?>
											<?endif;?>
										<?endforeach;?>
									<?endforeach;
								}
							}
							else // if product doesn't have offers
							{
								foreach($arItem["PRICES"] as $code=>$arPrice):
									if($arPrice["CAN_ACCESS"]):
										?>
											<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
												<span itemprop = "price" class="item_price discount-price"><?=$arPrice["PRINT_DISCOUNT_VALUE"]?></span>
												<span itemprop = "price" class="old-price"><?=$arPrice["PRINT_VALUE"]?></span>
											<?else:?>
												<span itemprop = "price" class="item_price price"><?=$arPrice["PRINT_VALUE"]?></span>
											<?endif;?>
										<?
									endif;
								endforeach;
							}
							?>
						</div>
						
					</div>

				</div>
			</div>
	<?
		}
	endforeach;
	?>
	</div>
</div>


<?elseif($USER->IsAdmin()):?>
<h3 class="hitsale"><span></span><?=GetMessage("CR_TITLE_".$arParams["FLAG_PROPERTY_CODE"])?></h3>
<div class="listitem-carousel">
	<?=GetMessage("CR_TITLE_NULL")?>
</div>
<?endif;?>

<script type="text/javascript">
	function setEqualHeight(columns){
        var tallestcolumn = 0;
        columns.each(function(){
            currentHeight = $(this).height();
            if(currentHeight > tallestcolumn){
                tallestcolumn = currentHeight;
            }
        });
        columns.height(tallestcolumn);
    }
    $(document).ready(function() {
        /*setEqualHeight($(".listitem li > h4"));
        setEqualHeight($("#foo_<?=ToLower($arParams["FLAG_PROPERTY_CODE"])?> > li > h4"));
        setEqualHeight($(".listitem li > .buy"));
        setEqualHeight($("#foo_<?=ToLower($arParams["FLAG_PROPERTY_CODE"])?> > li > .buy"));*/
       // setEqualHeight($("#foo_<?=ToLower($arParams["FLAG_PROPERTY_CODE"])?> .R2D2"));
        setEqualHeight($(".listitem .R2D2"));
    });
</script>
