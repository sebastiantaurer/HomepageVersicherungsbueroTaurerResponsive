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
					<h2>Team</h2>
					<div class="row team">
						<div class="col-sm-12">
							<!--Michael Taurer-->
							<div class="row">
								<div class="col-sm-3">
									<img class="modalImage" alt="Michael Taurer" src="img/michaeltaurer.jpg"/>
								</div>
								<div class="col-sm-9">
									<h1>Herr Michael Taurer</h1>
									<h2>Gesch&auml;ftsf&uuml;hrung</h2>
									<h3>Akademischer Finanzdienstleister</h3>
									<h3>Staatlich gepr. Versicherungsmakler</h3>
									<h3>Versicherungsagent</h3>
									<p>Tel.: 04762/33 880</p>
									<p>Mobil: 0699/18 79 54 27</p>
									<p>E-Mail: michael.taurer@taurer.eu</p>
								</div>
							</div>
							<br/>
							<!--Karoline Taurer-->
							<div class="row">
								<div class="col-sm-3">
									<img class="modalImage" alt="Karoline Taurer" src="img/karolinetaurer.jpg"/>
								</div>
								<div class="col-sm-9">
									<h1>Frau Karoline Taurer</h1>
									<h2>Kundenbetreuung</h2>
									<h3>Staatlich gepr. Versicherungsmaklerin</h3>
									<p>Tel.: 04762/33 880</p>
									<p>Mobil: 0660/654 9242</p>
									<p>E-Mail: karoline.taurer@taurer.eu</p>
								</div>
							</div>
							<br/>
							<!--Eva Madritsch-->
							<div class="row">
								<div class="col-sm-3">
									<img class="modalImage" alt="Eva Madritsch" src="img/evamadritsch.jpg"/>
								</div>
								<div class="col-sm-9">
									<h1>Frau Eva Madritsch</h1>
									<h2>Kundenbetreuung</h2>
									<p>Tel.: 04762/33 880</p>
									<p>E-Mail: eva.madritsch@taurer.eu</p>
								</div>
							</div>
							<br/>
							<!--Sebastian Taurer-->
							<div class="row">
								<div class="col-sm-3">
									<img class="modalImage" alt="Sebastian Taurer" src="img/sebastiantaurer.jpg"/>
								</div>
								<div class="col-sm-9">
									<h1>Herr Sebastian Taurer</h1>
									<h2>IT Administrator</h2>
									<p>Tel.: 04762/33 880</p>
									<p>E-Mail: setaurer@edu.aau.at</p>
								</div>
							</div>
							<br/>
							<!--Jimmy-->
							<div class="row">
								<div class="col-sm-3">
									<img class="modalImage" alt="Jimmy" src="img/jimmy.jpg"/>
								</div>
								<div class="col-sm-9">
									<h1>Jimmy</h1>
									<h2>Unser Bürohund</h2>
								</div>
							</div>
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
		document.getElementById("team").className = "active";
	</script>
	<script src="js/modal.js" type="text/javascript"></script>
</html>