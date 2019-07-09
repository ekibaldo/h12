<h1>Тут будут выводиться FAQ</h1>
<?php

use Cake\ORM\TableRegistry;
$faq_table = TableRegistry::get('ad_faq');
$query = $faq_table->query();

$query = $faq_table
    ->find()
    ->select(['id', 'date_post', 'fio','q','a'])
    ->where(['status !=' => 0])
    ->order(['date_post' => 'DESC']);

foreach ($query as $faq):
?>
<!--
    <b>Дата:</b> <?= $faq->date_post ?> <br>
    <b>ФИО:</b> <?= $faq->fio ?> <br>
    <b>Вопрос:</b> <?= $faq->q ?> <br>
    <b>Ответ:</b> <?= $faq->a ?> <br>

    <hr>
-->
<?php
endforeach;
?>

