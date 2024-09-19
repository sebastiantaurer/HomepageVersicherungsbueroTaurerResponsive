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
							<h2>Team</h2>
						</div>
					</div>
					<div class="row team">
						<div class="col-sm-12">
							<!--Michael Taurer-->
							<div class="row">
								<div class="col-sm-1"></div>
								<div class="col-sm-3">
									<img class="modalImage" alt="Michael Taurer" src="img/michaeltaurer.jpg"/>
								</div>
								<div class="col-sm-8">
									<h1>Herr Michael Taurer</h1>
									<h2>Gesch&auml;ftsf&uuml;hrung</h2>
									<h3>Akademischer Finanzdienstleister</h3>
									<h3>Staatlich gepr. Versicherungsmakler</h3>
									<h3>Versicherungsagent</h3>
									<p>Tel.: <a href="tel:+43476233880">04762/33 880</a></p>
									<p>Mobil: <a href="tel:+4369918795427">0699/18795427</a></p>
									<p>E-Mail: <a href="mailto:michael.taurer@taurer.eu">michael.taurer@taurer.eu</a></p>
								</div>
							</div>
							<br/>
							<!--Fabian Taurer-->
							<div class="row">
								<div class="col-sm-1"><br/></div>
								<div class="col-sm-3">
									<img class="modalImage" alt="Fabian Taurer" src="img/fabiantaurer.jpg"/>
								</div>
								<div class="col-sm-8">
									<h1>Herr Fabian Taurer</h1>
									<h2>Kundenbetreuung</h2>
									<h3>Staatlich gepr. Versicherungsmakler</h3>
									<h3>BÖV gepr. Versicherungsfachmann</h3>
									<p>Tel.: <a href="tel:+43476233880">04762/33 880</a></p>
									<p>Mobil: <a href="tel:+436648231298">0664/8231298</a></p>
									<p>E-Mail: <a href="mailto:fabian.taurer@taurer.eu">fabian.taurer@taurer.eu</a></p>
								</div>
							</div>
							<br/>
							<!--Johanna Pacher-->
							<div class="row">
								<div class="col-sm-1"><br/></div>
								<div class="col-sm-3">
									<img class="modalImage" alt="Johanna Pacher" src="img/johannapacher.jpg"/>
								</div>
								<div class="col-sm-8">
									<h1>Frau Johanna Pacher</h1>
									<h2>Backoffice</h2>
									<p>Tel.: <a href="tel:+43476233880">04762/33 880</a></p>
									<p>E-Mail: <a href="mailto:johanna.pacher@taurer.eu">johanna.pacher@taurer.eu</a></p>
								</div>
							</div>
							<br/>
							<!--Stefanie Klump-->
							<div class="row">
								<div class="col-sm-1"><br/></div>
								<div class="col-sm-3">
									<img class="modalImage" alt="Stefanie Klump" src="img/stefanieklump.jpg"/>
								</div>
								<div class="col-sm-8">
									<h1>Frau Stefanie Klump</h1>
									<h2>Backoffice</h2>
									<p>Tel.: <a href="tel:+43476233880">04762/33 880</a></p>
									<p>E-Mail: <a href="mailto:office.taurer@taurer.eu">office.taurer@taurer.eu</a></p>
								</div>
							</div>
							<br/>
							<!--Jimmy-->
							<div class="row">
								<div class="col-sm-1"><br/></div>
								<div class="col-sm-3">
									<img class="modalImage" alt="Jimmy" src="img/jimmy.jpg"/>
								</div>
								<div class="col-sm-8">
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