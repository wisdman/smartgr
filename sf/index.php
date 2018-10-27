<?php

$sections = array('about'      => 'О проекте',
				  'dynamics'   => 'Динамика строительства',
				  'programs'   => 'Программы приобретения',
				  'apartments' => 'Квартиры',
				  'office'     => 'Офис продаж',
				  'faq'        => 'Часто задаваемые вопросы');

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
	<title>Каменный цветок премиум<?php
		if (array_key_exists($section,$sections)) echo ' - ' . $sections[$section];
		?></title>
	 <meta name="keywords" content="купить квартиру в сысерти, новостройка в сысерти, новые квартиры в сысерти, жилой комплекс каменный цветок, каменный цветок, новостройка от застройщика, купить квартиру в свердловской области">
	<link href='http://fonts.googleapis.com/css?family=Cuprum|Roboto+Condensed&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="smartgroup.css" rel="stylesheet" type="text/css" media="screen">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<script src="smartgroup.js" type="text/javascript"></script>
	<!--[if lte IE 8]><script src="/IE9.js">IE7_PNG_SUFFIX=".png";</script><![endif]-->
</head>
<body>
<div class="wrapper">
<div class="header"><a class="logo" href="/">Каменный цветок премиум</a><span>Новый жилой комплекс от группы компаний <a href="//smartgr.ru">СмартГрупп</a></span><div>+7 912 611 97 67<br>Ирина Юрьевна<br>E-mail: <a href="mailto:2060616@mail.ru">2060616@mail.ru</a></div></div>
<div class="mainMenu"><?php foreach ($sections as $key => $value) echo '<a'.(($key==$section)?' class="active"':'').' href="/?section='.$key.'"><span>'.$value.'</span></a>';
?></div><div class="content"><?php
	if (array_key_exists($section,$sections)) require('./'.$section.'.inc');
	else require('./index.inc');
 ?></div></div>
<div class="footer">
	<div>Разработка:&nbsp;<a href="mailto:d@ajaw.it">Wisdman</a></div>
	<a class="logo" href="//smartgr.ru">SMARTGROUP</a><span>&copy;&nbsp;2013-2017 Группа компаний Смарт Групп</span>
	<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t25.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: number of visitors for today is"+
" shown' "+
"border='0' width='88' height='15'><\/a>")
//--></script><!--/LiveInternet-->
</div>
</body>
</html>
