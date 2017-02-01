<?php
$to = "test@yandex.ru";
$phone = $_POST['phone'];
$subject = 'Заказ с сайта мой носок';
$formname = $_POST['nametovar'];
$price = $_POST['price'];
// if($formname == 'callmesuccess'){
// 	$subject  = "Заказал обратный звонок";
// }
// elseif($formname == 'ordersuccess'){

// 	$subject  = "Оформил заказ";
// }
// elseif($formname == 'questionsuccess'){
	
// 	$subject  = "Задал вопрос менеджеру";
// }
// elseif($formname == 'otziv'){
	
// 	$subject  = "Оставил отзыв";
// }
// else{
// 	$subject  = "Заказ с сайта";
// }

// Формирование заголовка письма

$headers  = "From: info@starlight.space" . "\r\n";
$headers .= "Reply-To: info@starlight.space".  "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body>";
$msg .= "<h2>Новое сообщение</h2>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>Общее количество товара:</strong> ".$totalpricecol."</p>\r\n";
$msg .= "<p><strong>Общая цена товара:</strong> ".$totalprice."</p>\r\n";
$msg .= "<p><strong>Наименование товара</strong> ".$formname."</p>\r\n";
$msg .= "<p><strong>Цена</strong> ".$price."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
@mail($to, $subject, $msg, $headers);

?>
