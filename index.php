<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--***** CSS *****-->
		<!-- bootstrap CSS -->
		<link href="libs/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
		<!-- Main CSS -->
		<link href="css/main.css" rel="stylesheet" />
		<link href="css/modal.css" rel="stylesheet" />
		<!--***** JS *****-->
		<!-- jquery JS -->
		<script src="libs/jquery/jquery.js" type="text/javascript"></script>
		<!-- bootstrap JS -->
		<script src="libs/bootstrap/dist/js/bootstrap.js" type="text/javascript"></script>
		<!-- main JS -->
		<script src="js/main.js" type="text/javascript"></script>
		<title>Versicherungs- & Finanzdienstleistungs GmbH Taurer</title>
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
			<div class="row navigation">
				<?php include ("navigation.php"); ?>
			</div>
			<!--MAIN_AREA-->
			<div class="row main">
				<div class="col-sm-12">
					<!--MAIN-->
					<div class="row">
						<div class="col-sm-12">
							<h2 style="text-align: center;">Willkommen bei der Versicherungs- & Finanzdienstleistungs GmbH Taurer!</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 bottomspace">
							<div class="col-sm-12 graybox">
								<img src="img/versicherung.jpg"/>
								<h3>Versicherung</h3>
								<p>Versicherungen gibt es viele! Doch beim Versicherungsb&uuml;ro Taurer in Spittal sind SIE an 1. Stelle!</p>
							</div>
						</div>
						<div class="col-sm-4 bottomspace">
							<div class="col-sm-12 graybox">
								<img src="img/finanzierung.jpg"/>
								<h3>Finanzierung</h3>
								<p>Die Erfahrung und die professionelle Abwicklung durch uns, das Versicherungs- Finanzierungsb&uuml;ro Taurer in Spittal sichern Ihnen qualifizierte Beratung und Service.</p>
							</div>
						</div>
						<div class="col-sm-4 bottomspace">
							<div class="col-sm-12 graybox">
								<img src="img/vorsorge.jpg"/>
								<h3>Vorsorge</h3>
								<p>Finanzielle Vorsorgema&szlig;nahmen mit Taurer in Spittal an der Drau - Gemeinsam sprechen wir &uuml;ber Ihre Zukunft</p>
							</div>
						</div>
					</div>
					<!--END MAIN-->
					<br/>
					<!--BEGIN MESSE SPITTAL-->
					<div class="row">
						<div class="col-sm-12">
							<h2 style="text-align: center;">Von 24. - 26. M&auml;rz 2017 sind wir auf der Messe Spittal vertreten.<br/>Kommen Sie vorbei und lassen Sie sich beraten.</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<img class="modalImage" style="max-width: 30%; display: block; margin: 0 auto;" src="img/MesseSpittal.png"/>
						</div>
					</div>
					<!--END MESSE SPITTAL-->
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
		document.getElementById("startseite").className = "active";
	</script>
	<script src="js/modal.js" type="text/javascript"></script>
</html>