<div class="hd_header">
      <table>
        <tr>
          <td rowspan="2" class="hd_companyname">
            <h1><a href="">Мебельный магазин</a></h1>
          </td>
          <td rowspan="2" class="hd_txarea">
            <span class="tel">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_RECURSIVE" => "Y",
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/phone.php"
                )
              );?>
            </span>	<br/>
        <?php GetMessage("Working_time") ?> <span class="workhours">ежедневно с 9-00 до 18-00</span>
          </td>
          <td style="width:232px">
            <form action="">
              <div class="hd_search_form" style="float:right;">
                <input placeholder="Поиск" type="text"/>
                <input type="submit" value=""/>
              </div>
            </form>
          </td>
        </tr>
        <tr>
          <td style="padding-top: 11px;">
            <?$APPLICATION->IncludeComponent(
  	"bitrix:system.auth.form",
  	"auth",
  	Array(
  		"FORGOT_PASSWORD_URL" => "/polzovatel/",
  		"PROFILE_URL" => "/polzovatel/profil.php",
  		"REGISTER_URL" => "/polzovatel/registratsiya.php",
  		"SHOW_ERRORS" => "N"
  	)
  );?><br>  </td>
        </tr>
      </table>
      <?
      $APPLICATION->IncludeComponent(
	"bitrix:menu",
	"top_multi",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_multi"
	),
	false
);
      ?>

    </div>
