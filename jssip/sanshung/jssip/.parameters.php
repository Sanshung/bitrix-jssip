<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentParameters = array(
	"GROUPS" => array(),
	"PARAMETERS" => array(
		"WS_SERVER" => array(
			"PARENT" => "BASE",
			"NAME" => "Адрес сервера",
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "you-server.com",
			"REFRESH" => "N",
		),
		"USER_SIP" => array(
			"PARENT" => "BASE",
			"NAME" => "ID SIP пользователя",
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "alice@example.com",
			"REFRESH" => "N",
		),
		"USER_PASSWORD" => array(
			"PARENT" => "BASE",
			"NAME" => "Пароль SIP пользователя",
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "",
			"REFRESH" => "N",
		),
		"OUTBOUND_PROXY" => array(
			"PARENT" => "BASE",
			"NAME" => "Outbound Proxy",
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "",
			"REFRESH" => "N",
		)
	),
);
?>