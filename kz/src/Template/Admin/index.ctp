<?php

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . date("r"));

$this->assign('title', 'Панель администратора');


if(isset($_POST['title_ru'])){

	file_put_contents("../../globals/title_ru.txt", $_POST['title_ru']);
	file_put_contents("../../globals/title_kz.txt", $_POST['title_kz']);

	file_put_contents("../../globals/keywords_ru.txt", $_POST['keywords_ru']);
	file_put_contents("../../globals/keywords_kz.txt", $_POST['keywords_kz']);

	file_put_contents("../../globals/description_ru.txt", $_POST['description_ru']);
	file_put_contents("../../globals/description_kz.txt", $_POST['description_kz']);	
}

$url = "http://".$_SERVER['SERVER_NAME']."/";

?>

<style type="text/css">

	.cont {
		width: 90%;
		margin: 0 auto;
	}

</style>

<div class="cont">

	<form action='/ru/admin/' method="POST">

	<table>

		<tr>
			<td><label>Заголовок RU</label>
				<textarea name='title_ru'><?= file_get_contents($url."/globals/title_ru.txt"); ?></textarea></td>
			<td><label>Заголовок KZ</label>
				<textarea name='title_kz'><?= file_get_contents($url."/globals/title_kz.txt"); ?></textarea></td>
		</tr>
		
		<tr>
			<td><label>Ключевые слова RU</label>
				<textarea name='keywords_ru'><?= file_get_contents($url."/globals/keywords_ru.txt"); ?></textarea></td>
			<td><label>Ключевые слова KZ</label>
				<textarea name='keywords_kz'><?= file_get_contents($url."/globals/keywords_kz.txt"); ?></textarea></td>
		</tr>
		
		<tr>
			<td><label>Описание RU</label>
				<textarea name='description_ru'><?= file_get_contents($url."/globals/description_ru.txt"); ?></textarea></td>
			<td><label>Описание KZ</label>
				<textarea name='description_kz'><?= file_get_contents($url."/globals/description_kz.txt"); ?></textarea></td>
		</tr>

	</table>
	<button>Сохранить</button>

	</form>

</div>