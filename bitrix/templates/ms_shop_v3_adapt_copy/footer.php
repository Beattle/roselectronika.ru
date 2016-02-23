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
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter32419550 = new Ya.Metrika({id:32419550,
                    webvisor:true,
                    clickmap:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/32419550" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Google.Analytics counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67435926-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- /Google.Analytics counter -->
</body>
</html>