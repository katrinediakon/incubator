<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?><?php
echo $_SERVER['DOCUMENT_ROOT']."/bitrix/php_interface/function/functions-dump.php";
$a=array('as',12);
test_dump($a);
 ?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>