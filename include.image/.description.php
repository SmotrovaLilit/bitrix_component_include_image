<?
use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

Loc::loadMessages(__FILE__);

$arComponentDescription = array(
	"NAME" => Loc::getMessage('COMP_INCLUDE_FILE_TITLE'),
	"DESCRIPTION" => Loc::getMessage('COMP_ICLUDE_FILE_DESCR'),
);
?>