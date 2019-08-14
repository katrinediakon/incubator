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


		<!-- <div id="panel"><?$APPLICATION->ShowPanel();?></div>-->
	<div class="wrap">
		<div class="hd_header_area">
			<?php include($_SERVER['DOCUMENT_ROOT']."/bitrix/templates/.default/include/header.php") ?>
		</div>

		<!--- // end header area --->
    <div class="bc_breadcrumbs">
			<ul>
        <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"nav", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "nav"
	),
	false
);?>
			</ul>
			<div class="clearboth"></div>
		</div>
		<div class="main_container page">
			<div class="mn_container">
				<div class="mn_content">
					<div class="main_post">
