<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
		<?if ($APPLICATION->GetCurPage(true) == SITE_DIR."index.php" || !strpos($APPLICATION->GetCurPage(true),"catalog")):?>			
			</div>
		<?endif?>
					</div>
		</section>
		
	</div>
</div>
<footer>
	<div id="footer-in" class="maxwidth">
		<div class="clearfix">
			<div class="footer-l">
				<div class="clearfix">
					<div class="f-text border-b">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer_text.php"), false);?>
					</div>
					<div class="f-text">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/copyright.php"), false);?>
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/copyright2.php"), false);?>
					</div>
				</div>
			</div>
			
			<div class="footer-c">
				<div class="footer-menu">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer_menu.php"), false);?>
				</div>
				
				<div class="footer-menu">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer_menu2.php"), false);?>
				</div>
			</div>
			
			<div class="footer-r">
				<div class="inline clearfix">
					<div class="f-buy-methods">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer_payments.php"), false);?>
					</div>
					<div class="f-socials">
					<?
					$facebookLink = $APPLICATION->GetFileContent($_SERVER["DOCUMENT_ROOT"].SITE_DIR."include/socnet_facebook.php");
					$twitterLink = $APPLICATION->GetFileContent($_SERVER["DOCUMENT_ROOT"].SITE_DIR."include/socnet_twitter.php");
					$googlePlusLink = $APPLICATION->GetFileContent($_SERVER["DOCUMENT_ROOT"].SITE_DIR."include/socnet_google.php");
					$vkLink = $APPLICATION->GetFileContent($_SERVER["DOCUMENT_ROOT"].SITE_DIR."include/socnet_vk.php");
					?>
					<div class="title"><?=GetMessage("FOOTER_SOC_TITLE")?></div>
						<ul>
						<?if ($facebookLink):?>
						<li class="fb"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/socnet_facebook.php"), false);?></li>
						<?endif?>
						<?if ($twitterLink):?>
						<li class="tw"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/socnet_twitter.php"), false);?></li>
						<?endif?>
						<?if ($googlePlusLink):?>
						<li class="gp"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/socnet_google.php"), false);?></li>
						<?endif?>
						<?if (LANGUAGE_ID=="ru" && $vkLink):?>
						<li class="vk"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/socnet_vk.php"), false);?></li>
						<?endif?>
					</ul>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</footer>

<a id="up_btn" href="#"></a>

</body>
</html>