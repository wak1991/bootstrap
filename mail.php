<?php

if (isset($_POST['name']) && isset($_POST['email'])) { 

	$name =	trim(htmlspecialchars($_POST['name']));
	$email = trim(htmlspecialchars($_POST['email']));

	$to = 'admin@pinskdrev.by';
	$subject = 'Заказ звонка';
	$message = 'Имя - ' .$name. '<br>E-mail - ' .$email. '<br><img src="https://pinskdrev.by/web/images/test/img/goods1.jpg" alt="https://pinskdrev.by/web/images/test/img/goods1.jpg">';
	$headers = 'From: web@pinskdrev.by' . "\r\n" .
	'Reply-To: admin@pinskdrev.by' . "\r\n" .
	'X-Priority: 2' . "\r\n" .
	'Content-Type: text/html;charset=utf-8' . "\r\n" .

	'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);


	echo json_encode($result);

}

?>