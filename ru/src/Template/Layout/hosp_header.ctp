<?php

$url = "http://".$_SERVER['SERVER_NAME']."/";


$keys = file_get_contents($url."/globals/keywords_ru.txt");
$desc = file_get_contents($url."/globals/description_ru.txt");

?>

<!DOCTYPE html>

<html>
    <head>
        <title><?= $this->fetch('title') ?></title>
        <meta name="keywords" content="<?= $keys ?>" />
        <meta name="description" content="<?= $desc ?>" />

  
        <link href="/css/swiper.css" rel="stylesheet"> 

		<link href="/assets/css/mdb.min.css" rel="stylesheet">

		<link href="/assets/css/style.min.css" rel="stylesheet">	
		<link rel="stylesheet" href="/bvi/css/bvi.css" type="text/css">
		<link href="/css/m-menu.min.css" rel="stylesheet">   
		 
	    <link href="/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/my-bootstrap.min.css" rel="stylesheet">	 
		
        <link href="/css/cgkb.css" rel="stylesheet">
		


        <meta charset="utf-8" name="viewport"
          content="initial-scale=1,maximum-scale=1, width=device-width,  user-scalable=no"/>

        <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
        <link rel="manifest" href="/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#3E617A">

        <meta name="description" content="">
        <meta name="author" content="">
		
		<meta property="og:url" content="https://almaty-cgkb.kz//"/>
		<meta property="og:type" content="website"/>
		<meta property="og:title" content="Центральная городская клиническая больница. Тел. +7-727-228-03-03"/>
		<meta property="og:description" content="Мы рады приветствовать Вас на официальном сайте ГКП на ПХВ 'Центральная городская клиническая больница' Управления здравоохранения города Алматы. Вы можете оперативно получить полную и достоверную информацию о нашей деятельности, ознакомиться с её структурными подразделениями, узнать много полезного."/>
		<meta property="og:image" content="https://almaty-cgkb.kz/images/logo.png"/>
		
        <!--[if lt IE 9]>
        <script src="///cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
        <script src="///cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
        <![endif]-->
		
		<meta http-equiv='x-dns-prefetch-control' content='on'>
		<link rel='dns-prefetch' href='//akorda.kz'>
		<link rel='dns-prefetch' href='//mc.yandex.ru'>
		<link rel='dns-prefetch' href='//informer.yandex.ru'>
		<link rel='dns-prefetch' href='//metrika.yandex.ru'>
		<link rel='dns-prefetch' href='//instawidget.net'>
		<link rel='dns-prefetch' href='//facebook.com'>
		
    </head>
<body>


<?php

echo file_get_contents($url."/globals/header_ru.txt");

?>