<div class="dayNight day">&nbsp;</div><a id="spotlight" href="//sf.smartgr.ru/?section=about"><img src="/img/night.jpg" width="950" alt="Каменный цветок"><img class="day" src="/img/day.jpg" width="950" alt="Каменный цветок"></a>
<script type="text/javascript">
	$(document).ready(function () {
		$( ".dayNight").click(function() {
			$( "#spotlight .day").fadeToggle();
			$(this).toggleClass("day");
		});
	});
</script>