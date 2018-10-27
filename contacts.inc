<?php
if (isset($_POST['name']) && isset($_POST['contact']) && isset($_POST['text'])) {
		$formname = htmlspecialchars($_POST['name']);
		$formcontact = htmlspecialchars($_POST['contact']);
		$formtext = htmlspecialchars($_POST['text']);

		if (empty($formname) || empty($formcontact) || empty($formtext)) {
			$formstat = '<div id="formstat" class="formstat error">Заполнены не все поля.</div>';
		} else {
			if (mail('smart@smartgr.ru', 'SmartGroup. Форма на сайте', $formname."\r\n".$formcontact."\r\n".$formtext)){
				$formstat = '<div id="formstat" class="formstat sucess">Ваше сообщение отправлено. Спасибо за обращение!</div>';
				$formname = '';
				$formcontact = '';
				$formtext = '';
			} else $formstat = '<div id="formstat" class="formstat error">Ошибка сервере. Приносим извинения.</div>';
		}
} else {
	$formstat = '';
	$formname = '';
	$formcontact = '';
	$formtext = '';
}
?><script type="text/javascript">
	function formSubmit(){
		var formstat = document.getElementById("formstat");
		if (formstat) formstat.style.display = 'none';
		document.getElementById("buttons").style.display = 'none';
		document.getElementById("loading").style.display = 'block';
	}
</script><div id="address"><h1>Контакты</h1>
	<p><b>Телефон:</b> +7 912 611 97 67</p>
	<p><b>E-mail:</b> <a href="mailto:smart@smartgr.ru">smart@smartgr.ru</a></p>
	<p><b>Адрес:</b> 620075, г.Екатеринбург, ул.Малышева, д.51, Бизнес центр Высоцкий, оф.45/07</p>
	<div id="YMapsID"></div>
</div>
<form id="contactForm" name="contactForm" action="/?section=contacts" method="POST" onsubmit="formSubmit()"><h1>Свяжитесь с нами</h1>
	<p>Для связи с нами вы можете воспользоваться формой ниже. Напишите сообщение и не забудте оставить свои координаты.</p>
	<?php echo $formstat; ?><img id="loading" src="img/loading.gif" width="50" height="50"><input type="text" name="name" placeholder="Ваше имя" value="<?php echo $formname; ?>" required>
    <input type="text" name="contact" placeholder="Координаты для связи" value="<?php echo $formcontact; ?>" required>
	<textarea name="text" placeholder="Сообщение" required><?php echo $formtext; ?></textarea>
	<div id="buttons"><input type="submit" value="Отправить"><input type="reset" value="Очистить"></div>
</form>
<script src="/placeholders.min.js"></script>
<script src="http://api-maps.yandex.ru/2.1-dev/?lang=ru-RU&load=package.full" type="text/javascript"></script>
<script type="text/javascript">
		ymaps.ready(function () {
		    var myMap = new ymaps.Map('YMapsID', {
		        center: [56.836081, 60.614368],
		        zoom: 16,
		        controls: []
		    });

		    myMap.geoObjects.add(new ymaps.Placemark(
		    	[56.836081, 60.614368],
		    	{ balloonContent: '<strong>Офис SMARTGROUP</strong><br/><br/>' },
		    	{ preset: 'islands#dotIcon', iconColor: '#611' }
		    ));
		});
	</script>
