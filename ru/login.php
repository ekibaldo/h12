



<?php

echo $_POST['login'];


?>

<title>Вход на сайт</title>

<form action="login.php" method="POST">

	<label><b>Логин:</b></label><br>
	<input type="text" name="login">
<br><br>

	<label><b>Пароль:</b></label><br>
	<input type="text" name="pass">
	<br><br>
	<input type="submit">



</form>

