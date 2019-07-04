<?php

require_once "../mydata.php";
require_once "recaptchalib.php";
//секретный ключ
$secret = "6LdX9EQUAAAAADdDUhtL6wa1hjUCjhTJ6LkDgtia";
//ответ
$response = null;
//проверка секретного ключа
$reCaptcha = new ReCaptcha($secret);



if (!empty($_POST)) {
 
/*
	if(isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {
		$ip = $_SERVER['REMOTE_ADDR'];
		$response = $_POST['g-recaptcha-response'];
		$rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
		//var_dump($rsp);
		$arr = json_decode($rsp, TRUE);
		}
 */
	

	if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
        );
    }

    if ($response != null && $response->success && $_POST['login'] == $login && $_POST['pass'] == $pass) {
        setcookie("admin","welcome");
		header("Location: /ru/admin/");
    } else {
        header("Location: /ru/login.php");
    }
 
}



?>

<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<link href="/css/cgkb.css" rel="stylesheet">
<title>Вход на сайт</title>
</head>

<div class="my-box">
<form class="auth-box" action="login.php" method="POST">
	<label><b>Логин:</b></label><br>
	<input type="text" name="login">
	<div class="small_space"></div>
	<label><b>Пароль:</b></label><br>
	<input type="text" name="pass">
	<div class="small_space"></div>
	<div class="g-recaptcha" data-sitekey="6LdX9EQUAAAAAPNlyB3xJwlugI-MPeije8SUVeWG"></div>
	<div class="small_space"></div>
	<input type="submit" value="Войти">
	

</form>
</div>
