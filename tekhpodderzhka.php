<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Техподдержка");
$APPLICATION->SetPageProperty("keywords", "Техподдержка, i3a.by, мониторинг");
$APPLICATION->SetPageProperty("description", "техподдержка i3a.by");
$APPLICATION->SetTitle("Техподдержка");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"user-template-info",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CHECK_RIGHTS" => "N",
		"COMPONENT_TEMPLATE" => "user-template-info",
		"SEND_INFO" => "N",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => ""
	)
);?><br>
 Тут будет фрейм из Hesk<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>