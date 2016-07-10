<? use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

Loc::loadMessages(__FILE__);
$ext = 'jpg,jpeg,png';
$arComponentParameters = array(
	"PARAMETERS" => array(
		"FILE_SRC" => Array(
			"NAME" => Loc::getMessage("FILE_SRC"),
			"TYPE" => "FILE",
			"FD_TARGET" => "F",
			"FD_EXT" => $ext,
			"FD_UPLOAD" => true,
			"FD_USE_MEDIALIB" => true,
		),
	),
);
?>