<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?><?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "mysisauth", Array(
	"FORGOT_PASSWORD_URL" => "/registratsiya/forgot.php",	// Страница забытого пароля
		"PROFILE_URL" => "",	// Страница профиля
		"REGISTER_URL" => "/registratsiya/index.php",	// Страница регистрации
		"SHOW_ERRORS" => "N",	// Показывать ошибки
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>