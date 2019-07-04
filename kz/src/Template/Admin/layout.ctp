<?php


$url = "http://".$_SERVER['SERVER_NAME']."/";


if(isset($_POST['header_ru'])){

	file_put_contents("../../globals/header_ru.txt", $_POST['header_ru']);
	file_put_contents("../../globals/footer_ru.txt", $_POST['footer_ru']);	
	file_put_contents("../../globals/contacts_ru.txt", $_POST['contacts_ru']);
	file_put_contents("../../globals/contacts_kz.txt", $_POST['contacts_kz']);	
}

?>


<br>
<div style="width: 70%; margin: 0 auto;">

<form action="/ru/admin/layout/" method="POST">	
	<label><b>Хедер</b></label>
	<textarea rows="10" name="header_ru"><?= file_get_contents($url."/globals/header_ru.txt"); ?></textarea>
	<hr>

	<label><b>Футер</b></label>
	<textarea  rows="10"   name="footer_ru"><?= file_get_contents($url."/globals/footer_ru.txt"); ?></textarea>
	<hr>

	<label><b>Контакты RU</b></label>
	<textarea  rows="10"   name="contacts_ru"><?= file_get_contents($url."/globals/contacts_ru.txt"); ?></textarea>
	<hr>

	<label><b>Контакты KZ</b></label>
	<textarea  rows="10"   name="contacts_kz"><?= file_get_contents($url."/globals/contacts_kz.txt"); ?></textarea>
	<hr>


	<button>СОХРАНИТЬ</button>
</form>


</div>