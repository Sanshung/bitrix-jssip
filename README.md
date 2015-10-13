# bitrix-jssip
Компонент для битрикса включающий в себя библиотеку jssip http://jssip.net/

Установка:
Распакуйте в папку /bitrix/components/

Поставьте код вызова компонента на нужную страницу
Укажите ваши параметры подлючения

<?$APPLICATION->IncludeComponent(
	"sanshung:jssip",
	".default",
	Array(
		"WS_SERVER" => "sip.localhost.Asterisk",
		"USER_SIP" => "*****@sip.localhost.Asterisk",
		"USER_PASSWORD" => "*****",
		"OUTBOUND_PROXY" => ""
	)
);?>
