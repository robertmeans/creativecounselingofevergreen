<?php require '_includes/head.php'; ?>

<body>
<div id="top-of-page"></div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<?php require "_includes/navigation.php" ?>

<div id="contact-page" class="cf">
<section id="location" class="cf">

	<div class="overlay" onClick="style.pointerEvents='none'"><!-- prevent wheel zoom over map --></div>
	<div id="map"></div>

	<div class="location">
		<p><span class="sm-gone"><i class="fa fa-map-marker"></i></span><a class="loc" tabIndex="-1" href="https://goo.gl/maps/fpQW7bEisYr" target="_blank">2922 Evergreen Pkwy<span class="sm-gone">, </span><br class="lg-gone">Evergreen, CO 80439</a></p>
		<p><span class="sm-gone"><i class="fa fa-phone-square"></i></span><a class="loc" href="tel:(720)%20504-7296">720.504.7296</a></p>
	</div>

</section><!-- #location -->
<img src="_images/divider.png" alt="divider">
<section id="contact" class="cf">
	
	<div id="contact-form">
		<div class="left-side">
			<h2>Contact</h2>
			<p>2922 Evergreen Parkway</p>
			<p>Suite 325</p>
			<p>Evergreen, CO 80439</p>
			<p>&nbsp;</p>
			<p>Phone: 720.504.7296</p>
			<!-- <p>Fax: 303.973.9358</p> -->
		</div>
		<div class="right-side">
			<?php require('_includes/contact-form-processing.php'); ?>  
	    </div>
	</div>

</section><!-- #contact -->
</div><!-- #contact-page -->

<?php require "_includes/footer.php" ?>

<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>