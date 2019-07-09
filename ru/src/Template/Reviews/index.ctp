<h1>Это отзывы</h1>

<?php

use Cake\ORM\TableRegistry;
$reviews_table = TableRegistry::get('ad_reviews');
$query = $reviews_table->query();

$query = $reviews_table
    ->find()
    ->select(['date','fio', 'phone', 'email', 'message','status'])
    ->where(['status !=' => 0])
    ->order(['date' => 'DESC']);

foreach ($query as $review):
    ?>

    <b>date:</b> <?= date('d.m.Y', strtotime($review->date)) ?> <br>
    <b>fio:</b> <?= $review->fio ?> <br>
    <b>phone:</b> <?= $review->phone ?> <br>
    <b>email:</b> <?= $review->email ?> <br>
    <b>message:</b> <?= $review->message ?> <br>

    <hr>

<?php
endforeach;
?>