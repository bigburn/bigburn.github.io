<?php
	$theme = 'Сообщение от Засони';

	$letter = 'Данные сообщения:\r\n';
	$letter .='Имя ' .$_POST['client_name'] . '\r\n';
	$letter .='Телефон ' . $_POST['client_number'] . '\r\n';
	$letter .='Сообщение ' . $_POST['textarea'] . '\r\n';
	if (mail('bigburn2008@yandex.ru', $theme, $letter)){
    	header('Location:sucsess.html');
	} else {
		echo "Ошибка";
	}
?>


