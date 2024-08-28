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
							<h4 style="text-align: center;">Das unabhängige Dienstleistungsunternehmen seit 2005!</h4>
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
					<div class="row">
						<div class="col-sm-12">
							<h4> Weitere Produkte: <h4>
							<ul>
								<li><a href="https://www.uniqa.at/direktvertrieb/commlaunch/ReiseBuendel?refValue=tCUGhs2fZT8DGrcEZ8n2GA">UNIQA Reiseversicherung Rundumschutz</a></li>
								<li><a href="https://www.uniqa.at/direktvertrieb/commlaunch/ReiseKv?refValue=tCUGhs2fZT8DGrcEZ8n2GA">UNIQA Auslandsreise-Krankenversicherung</a></li>
								<li><a href="https://www.uniqa.at/direktvertrieb/commlaunch/ReiseStorno?refValue=tCUGhs2fZT8DGrcEZ8n2GA">UNIQA Reisestorno-Versicherung</a></li>
								<li><a href="https://www.uniqa.at/direktvertrieb/commlaunch/Eura?refValue=tCUGhs2fZT8DGrcEZ8n2GA">UNIQA Reise-Krankenversicherung für ausländische Gäste</a></li>
							</ul>
						</div>
					</div>
					<!--END MAIN-->
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