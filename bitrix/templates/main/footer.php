</div>
</div>
<div class="sb_sidebar">
<div class="sb_nav">
  <?$APPLICATION->IncludeComponent(
  	"bitrix:menu",
  	"vertical_multilevel",
  	Array(
  		"ALLOW_MULTI_SELECT" => "N",
  		"CHILD_MENU_TYPE" => "left",
  		"DELAY" => "N",
  		"MAX_LEVEL" => "1",
  		"MENU_CACHE_GET_VARS" => array(""),
  		"MENU_CACHE_TIME" => "3600",
  		"MENU_CACHE_TYPE" => "N",
  		"MENU_CACHE_USE_GROUPS" => "Y",
  		"ROOT_MENU_TYPE" => "left",
  		"USE_EXT" => "N"
  	)
  );?><br>
</div>
<br>

</div>
<div class="clearboth"></div>
</div>
</div>

<?php include_once($_SERVER['DOCUMENT_ROOT']."//bitrix/templates/.default/include/footer.php") ?>
</div>
</body>
</html>
