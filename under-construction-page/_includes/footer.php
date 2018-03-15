<?php
	function ewd_copyright($startYear) {
		$currentYear = date('Y');
		if ($startYear < $currentYear) {
			$currentYear = date('y');
			return "&copy; $startYear&ndash;$currentYear";
		} else {
			return "&copy; $startYear";
		}
	}
?>
<footer>
	<div id="left">
		<p>Creative Counseling of Evergreen</p>
	</div>
	<div id="center">
		<p><i class="fa fa-map-marker"></i> 2922 Evergeen Pkwy, Ste 325, Evergreen, CO 80439</p>
	</div>
	<div id="right">
		<p><i class="fa fa-phone-square"></i> <a class="tel" tabIndex="-1" href="tel:(720) 504-7296">720.504.7296</a></p>
		<!-- <p><a class="emailus" href="mailto:email@yourdomain.com"><i class="fa fa-envelope-o"></i> Email Us</a></p> -->
	</div>
	<div class="copyright">
		<p><?= ewd_copyright(2018); ?> Creative Counseling of Evergreen | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p>
	</div>
</footer>