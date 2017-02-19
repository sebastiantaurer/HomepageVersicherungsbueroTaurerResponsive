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
			<div class="row">
				<?php include ("navigation.php"); ?>
			</div>
			<!--MAIN_AREA-->
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-12">
							<h2>Finanzierung</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-1">
						</div>
						<div class="col-sm-6">
							<p>Die Versicherungs- & Finanzdienst<wbr>leistungs GmbH Taurer in Spittal erarbeitet und beantwortet mit 
							Ihnen gemeinsam alle Fragen rund um Ihre Finanzierung.</p>
							<br/>
							<p>Die Erfahrung und die kompetente Abwicklung durch uns sichert Ihnen qualifizierte Beratung und Lösungen. </p>
							<br/>
							<p>Wir vermitteln Darlehen aller Art für den privaten
							Wohnbau, für den Kauf einer KFZ oder KFZ Leasing.</p>
						</div>
						<div class="col-sm-5">
							<img style="max-width:100%;" alt="finanzierung" src="img/finanzierung.jpg"/>
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
		document.getElementById("finanzierung").className = "active";
	</script>
	<script src="js/modal.js" type="text/javascript"></script>
</html>