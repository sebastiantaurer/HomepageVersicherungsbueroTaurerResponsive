<!DOCTYPE html>
<html lang="de">
	<head>
		<?php include ("head.php"); ?>
	</head>
	<body>
		<div class="container content">
			<!--IMAGE MODAL-->
			<div class="row header">
				<?php include ("imageModal.php"); ?>
			</div>
			<!--HEADER-->
			<div class="row header">
				<?php include ("header.php"); ?>
			</div>
			<!--NAVIGATION-->
			<div class="row">
				<?php include ("navigation.php"); ?>
			</div>
			<!--MAIN_AREA-->
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-12">
							<h2>Gewinnspiel</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-1">
						</div>
						<div class="col-sm-6">
							<h3>Gewinnspielfrage:</h3>
							<h4>Seit wann besteht das Unternehmen <b>Versicherungs- & Finanzdienst<wbr>leistungs GmbH Michael Taurer</b>?</h4>
							
							<h6>(Hinweis: Jahreszahl ist auf der Homepage zu finden!)</h6>
							<br>
							<h5>Schicken Sie eine SMS oder E-Mail mit Ihrem <b>Namen</b> und der richtigen <b>Jahreszahl</b> als Antwort an:</h5>
							<p>Tel.nr.: 0699/18 79 54 27</p>
							<p>E-Mail.: <a href="mailto:michael.taurer@taurer.eu"> michael.taurer@taurer.eu</a></p>
							<br>
							<p>Aus allen richtigen Einsendungen verlosen wir 5 Tankgutscheine zu je  € 50,-</p>
							<p>Einsendeschluss ist der 1. Dezember 2017</p>
						</div>
						<div class="col-sm-5">
							<img style="max-width:100%;" alt="gewinnspiel" src="img/gewinnspiel.jpg"/>
						</div>
					</div>
				</div>
			</div>
			<!--FOOTER-->
			<div class="row footer">
				<?php include ("footer.php"); ?>
			</div>
		</div>
	</body>
	<!--SITE SCRIPT-->
	<script language="javascript" type="text/javascript">
		document.getElementById("gewinnspiel").className = "active";
	</script>
	<script src="js/modal.js" type="text/javascript"></script>
</html>