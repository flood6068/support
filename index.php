<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "support, i3a, техподдержка, поддержка, заявка, ticket");
$APPLICATION->SetPageProperty("description", "Техническая поддержка i3a.by");
$APPLICATION->SetTitle("");
?> <?$APPLICATION->IncludeComponent(
	"altasib:support",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"ID" => $_REQUEST["ID"],
		"NUM_TICKETS" => "10",
		"PROFILE_PATH" => "",
		"SEF_FOLDER" => "/support/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("ticket_list"=>"","ticket_detail"=>"ticket/#ID#/","get_file"=>"ticket/#ID#/file/#FILE_HASH#/","desktop"=>"desktop/",),
		"SHOW_FILTER" => "Y",
		"SHOW_FULL_FORM" => "Y",
		"TICKET_LIST_URL" => "/support/"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>