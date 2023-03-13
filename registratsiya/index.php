<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"deletelaterReg",
	Array(
		"AUTH" => "Y",
		"COMPONENT_TEMPLATE" => "deletelaterReg",
		"REQUIRED_FIELDS" => array(0=>"NAME",),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(),
		"SUCCESS_PAGE" => "",
		"USER_PROPERTY" => array(0=>"UF_CHOSEN_GROUP",),
		"USER_PROPERTY_NAME" => "UF_CHOSEN_GROUP",
		"USE_BACKURL" => "Y"
	)
);?><br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.registration",
	"mysisreg",
	Array(
		"AUTH" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"REQUIRED_FIELDS" => array(0=>"NAME",),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(),
		"SUCCESS_PAGE" => "",
		"USER_PROPERTY" => array(0=>"UF_CHOSEN_GROUP",),
		"USER_PROPERTY_NAME" => "UF_CHOSEN_GROUP",
		"USE_BACKURL" => "Y"
	)
);?><br>
 <br>
 <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>