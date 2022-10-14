<?php
    include("kontrollimi.php");	
?>

<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php include_once("konfigurimi.php"); ?>
<html>
	<head>
		<title>Uebaplikacioni per Menaxhimin e Dhurimit te GJakut</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<?php include_once("FillimiFaqes.php"); ?>

				<!-- Nav -->
					<?php include_once("meny.php"); ?>
					
				<!-- Main -->
					<div id="main">

					

			
					

						
							<section id="content" class="main">
								<p style="text-align:right;">Përshëndetje, <em><?php  echo $hyerje_perdoruesit;?>!</em></p>
										<h2 style="text-align: center; font-family: bold;">Moduli Administratorit</h2>
										<div class="box">
											<p>Ky modul mundeson menaxhimin e te dhenave te webaplikacionit (Moduli Perdoruesit & Moduli i Administratorit)</p>


										
			</div>
			</section>
		</div>

				<!-- Footer -->
				<?php include_once("FundiFaqes.php"); ?>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>