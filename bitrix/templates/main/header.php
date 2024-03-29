<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
 <?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>

  <link rel="stylesheet" href="/bitrix/templates/.default/template_style.css">

	<script type="text/javascript" src="/bitrix/templates/.default/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/functions.js"></script>
	<link rel="shortout icon" type="image/x-icon" href="/bitrix/templates/.default/favicon.ico">
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div class="wrap">
		<div class="hd_header_area">
		    <?php include_once($_SERVER['DOCUMENT_ROOT']."//bitrix/templates/.default/include/header.php") ?>
        <?$APPLICATION->IncludeComponent(
        	"bitrix:news.list",
        	"slider",
        	Array(
        		"ACTIVE_DATE_FORMAT" => "d.m.Y",
        		"ADD_SECTIONS_CHAIN" => "Y",
        		"AJAX_MODE" => "N",
        		"AJAX_OPTION_ADDITIONAL" => "",
        		"AJAX_OPTION_HISTORY" => "N",
        		"AJAX_OPTION_JUMP" => "N",
        		"AJAX_OPTION_STYLE" => "Y",
        		"CACHE_FILTER" => "N",
        		"CACHE_GROUPS" => "Y",
        		"CACHE_TIME" => "36000000",
        		"CACHE_TYPE" => "A",
        		"CHECK_DATES" => "Y",
        		"DETAIL_URL" => "",
        		"DISPLAY_BOTTOM_PAGER" => "Y",
        		"DISPLAY_DATE" => "Y",
        		"DISPLAY_NAME" => "Y",
        		"DISPLAY_PICTURE" => "Y",
        		"DISPLAY_PREVIEW_TEXT" => "Y",
        		"DISPLAY_TOP_PAGER" => "N",
        		"FIELD_CODE" => array("",""),
        		"FILTER_NAME" => "",
        		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
        		"IBLOCK_ID" => "5",
        		"IBLOCK_TYPE" => "Kontent",
        		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        		"INCLUDE_SUBSECTIONS" => "Y",
        		"MESSAGE_404" => "",
        		"NEWS_COUNT" => "10",
        		"PAGER_BASE_LINK_ENABLE" => "N",
        		"PAGER_DESC_NUMBERING" => "N",
        		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        		"PAGER_SHOW_ALL" => "N",
        		"PAGER_SHOW_ALWAYS" => "N",
        		"PAGER_TEMPLATE" => ".default",
        		"PAGER_TITLE" => "Новости",
        		"PARENT_SECTION" => "",
        		"PARENT_SECTION_CODE" => "",
        		"PREVIEW_TRUNCATE_LEN" => "",
        		"PROPERTY_CODE" => array("link",""),
        		"SET_BROWSER_TITLE" => "Y",
        		"SET_LAST_MODIFIED" => "N",
        		"SET_META_DESCRIPTION" => "Y",
        		"SET_META_KEYWORDS" => "Y",
        		"SET_STATUS_404" => "N",
        		"SET_TITLE" => "Y",
        		"SHOW_404" => "N",
        		"SORT_BY1" => "ACTIVE_FROM",
        		"SORT_BY2" => "SORT",
        		"SORT_ORDER1" => "DESC",
        		"SORT_ORDER2" => "ASC",
        		"STRICT_SECTION_CHECK" => "N"
        	)
        );?><br>


        <!--- // end slider area --->

        <div class="main_container homepage">

          <!-- events -->
          <div class="ev_events">
            <div class="ev_h">
              <h3>Ближайшие события</h3>
              <a href="" class="ev_allevents">Все мероприятия &rarr;</a>
            </div>
            <ul class="ev_lastevent">
              <li>
                <h4><a href="">29 августа 2012, Москва</a></h4>
                <p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
              </li>
              <li>
                <h4><a href="">30 августа 2012, Санкт-Петербург</a></h4>
                <p>Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</p>
              </li>
              <li>
                <h4><a href="">31 августа 2012, Краснодар</a></h4>
                <p>Открытие нового магазина в нашей дилерской сети.</p>
              </li>
            </ul>
            <div class="clearboth"></div>
          </div>
          <!-- // end events -->
          <div class="cn_hp_content">
            <div class="cn_hp_category">
              <ul>
                <li>
                  <img src="/bitrix/templates/.default/content/1.png" alt=""/>
                  <h2><a href="">Мягкая мебель</a></h2>
                  <p>Диваны, кресла и прочая мягкая мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                  <div class="clearboth"></div>
                </li>
                <li>
                  <img src="/bitrix/templates/.default/content/2.png" alt=""/>
                  <h2><a href="">Офисная мебель</a></h2>
                  <p>Диваны, столы, стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                  <div class="clearboth"></div>
                </li>
                <li>
                  <img src="/bitrix/templates/.default/content/3.png" alt=""/>
                  <h2><a href="">Мебель для кухни</a></h2>
                  <p>Полки, ящики, столы и стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                  <div class="clearboth"></div>
                </li>
                <li>
                  <img src="/bitrix/templates/.default/content/4.png" alt=""/>
                  <h2><a href="">Детская мебель</a></h2>
                  <p>Кровати, стулья, мягкая детская мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                  <div class="clearboth"></div>
                </li>
              </ul>
              <a href="" class="cn_hp_category_more">Все разделы каталога &rarr;</a>
            </div>
            <div class="cn_hp_post">
              <div class="cn_hp_post_new">
                <h3>Новинки</h3>
                <img src="/bitrix/templates/.default/content/7.png" alt=""/>
                <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                <div class="clearboth"></div>
              </div>
              <div class="cn_hp_post_action">
                <h3>Акции</h3>
                <img src="/bitrix/templates/.default/content/7.png" alt=""/>
                <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                <div class="clearboth"></div>
              </div>
              <div class="cn_hp_post_bestsellersn">
                <h3>Хиты продаж</h3>
                <img src="/bitrix/templates/.default/content/7.png" alt=""/>
                <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                <div class="clearboth"></div>
              </div>
            </div>
            <?$APPLICATION->IncludeComponent(
      	"bitrix:news.list",
      	"template1",
      	Array(
      		"ACTIVE_DATE_FORMAT" => "j F Y",
      		"ADD_SECTIONS_CHAIN" => "Y",
      		"AJAX_MODE" => "N",
      		"AJAX_OPTION_ADDITIONAL" => "",
      		"AJAX_OPTION_HISTORY" => "N",
      		"AJAX_OPTION_JUMP" => "N",
      		"AJAX_OPTION_STYLE" => "Y",
      		"CACHE_FILTER" => "N",
      		"CACHE_GROUPS" => "Y",
      		"CACHE_TIME" => "36000000",
      		"CACHE_TYPE" => "A",
      		"CHECK_DATES" => "Y",
      		"DETAIL_URL" => "",
      		"DISPLAY_BOTTOM_PAGER" => "N",
      		"DISPLAY_DATE" => "Y",
      		"DISPLAY_NAME" => "Y",
      		"DISPLAY_PICTURE" => "Y",
      		"DISPLAY_PREVIEW_TEXT" => "Y",
      		"DISPLAY_TOP_PAGER" => "N",
      		"FIELD_CODE" => array(0=>"",1=>"",),
      		"FILTER_NAME" => "",
      		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
      		"IBLOCK_ID" => $_REQUEST["ID"],
      		"IBLOCK_TYPE" => "news",
      		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
      		"INCLUDE_SUBSECTIONS" => "Y",
      		"MESSAGE_404" => "",
      		"NEWS_COUNT" => "20",
      		"PAGER_BASE_LINK_ENABLE" => "N",
      		"PAGER_DESC_NUMBERING" => "N",
      		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
      		"PAGER_SHOW_ALL" => "N",
      		"PAGER_SHOW_ALWAYS" => "N",
      		"PAGER_TEMPLATE" => ".default",
      		"PAGER_TITLE" => "Новости",
      		"PARENT_SECTION" => "",
      		"PARENT_SECTION_CODE" => "",
      		"PREVIEW_TRUNCATE_LEN" => "",
      		"PROPERTY_CODE" => array(0=>"",1=>"",),
      		"SET_BROWSER_TITLE" => "Y",
      		"SET_LAST_MODIFIED" => "N",
      		"SET_META_DESCRIPTION" => "Y",
      		"SET_META_KEYWORDS" => "Y",
      		"SET_STATUS_404" => "N",
      		"SET_TITLE" => "Y",
      		"SHOW_404" => "N",
      		"SORT_BY1" => "ACTIVE_FROM",
      		"SORT_BY2" => "SORT",
      		"SORT_ORDER1" => "DESC",
      		"SORT_ORDER2" => "ASC",
      		"STRICT_SECTION_CHECK" => "N"
      	)
      );?><br>
            <div class="clearboth"></div>
          </div>
        </div>

        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"carusel", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "reviews",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "position",
			1 => "link",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "carusel"
	),
	false
);?><br>
