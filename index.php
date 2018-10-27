<?php

$sections = array('about'      => 'О компании',
				  'completed'  => 'Воплощенные проекты',
				  'during'     => 'Строящиеся объекты',
				  'ideas'      => 'Идеи',
				  'suppliers'  => 'Поставщикам и субподрядчикам',
				  'contacts'   => 'Контакты');

if (isset($_GET['section'])) {
	$section = preg_replace('/\W+/i','',$_GET['section']);
} else $section = 'index';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="MSThemeCompatible" content="no">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<title>SmartGroup<?php
		if (array_key_exists($section,$sections)) echo ' - ' . $sections[$section];
		?></title>
	<link href='http://fonts.googleapis.com/css?family=Cuprum|Roboto+Condensed&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<link href="smartgroup.css" rel="stylesheet" type="text/css" media="screen">
	<!--[if lte IE 8]><script src="/IE9.js">IE7_PNG_SUFFIX=".png";</script><![endif]-->
</head>
<body>
<div class="wrapper">
<div class="header"><a class="logo" href="/">SMARTGROUP</a><span>От идеи до воплощения мечты</span><div>Телефон: +7 912 611 97 67<br>E-mail: <a href="mailto:smart@smartgr.ru">smart@smartgr.ru</a></div></div>
<div class="mainMenu"><?php foreach ($sections as $key => $value) echo '<a'.(($key==$section)?' class="active"':'').' href="/?section='.$key.'"><span>'.$value.'</span></a>';
?></div><div class="content"><?php
	if (array_key_exists($section,$sections)) require('./'.$section.'.inc');
	else require('./index.inc');
 ?></div></div>
<div class="footer">
	<div>Разработка:&nbsp;<a href="mailto:d@ajaw.it">Wisdman</a></div>
	<a class="logo" href="/">SMARTGROUP</a><span>&copy;&nbsp;2013-2017 Группа компаний Смарт Групп</span>
</div>
</body>
</html>
