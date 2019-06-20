<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$town = $_POST["town"];
	$message = $_POST['message'];
	$error = '';
	if(!$town) {$error .= 'Вкажіть місто. ';}
	if(!$message || strlen($message) < 1) {$error .= 'Введіть повідомлення. ';}
	if(!$error) {
		$address = "@gmail.com";
		$mes = "Місто: " .$town."\n\nПовідомлення: ".$message."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\n");
		if($send) {echo '<div class="ok">Повідомлення відправлено!</div>';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>