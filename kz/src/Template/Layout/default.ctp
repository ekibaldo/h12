<?php
    

    if($_COOKIE['admin'] <> "welcome") {
       header("Location: /ru/login.php");
       exit();
    }

 

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = $this->fetch('title');
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">

        <div class="top-bar-section">
            <ul class="left" style="padding: 0px 10px;">        
                <li style="border-left: 1px solid #fff;"><a href="/ru/categories/">Меню</a></li>
                <li><a href="/ru/pages/">Страницы</a></li>
                <li><a href="/ru/AdSlider1/">Слайдер <b>[ru]</b></a></li>
                <li><a href="/ru/AdSlider2/">Слайдер <b>[kz]</b></a></li>
                <li style="border-right: 1px solid #fff;"><a href="/ru/AdSlider3/">Партнёры</a></li>
                <li><a href="/ru/AdNews/">Новости</a></li>
                <li><a href="/ru/states/">Отделения</a></li>
                <li><a href="/ru/doctors/">Специалисты</a></li>
                <li><a href="/ru/admins/">Администрация</a></li>
                <li style="border-right: 1px solid #fff;"><a href="/ru/servs/">Услуги</a></li>
                <li><a href="/ru/admin/">Настройки</a></li>
                <li><a href="/ru/admin/layout/">Шаблон</a></li>
                <li style="border-right: 1px solid #fff; border-left: 1px solid #fff;"><a href="/ru/fm/dialog.php" target="_blank">Файловый менеджер</a></li>
            </ul>    

            <ul class="right">
                <!--
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
                -->
                <li><a href="/ru/logout.php">Выход</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
