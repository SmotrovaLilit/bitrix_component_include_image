<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

?>
<?
$APPLICATION->IncludeComponent(
	"ws:include.file", 
	"", 
	array(
		"FILE_SRC" => "/static/i/bg_0.jpg",
		"COMPONENT_TEMPLATE" => "promo.block.background"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
