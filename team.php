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
									<p>Mobil: <a href="tel:+4369918795427">0699/18 79 54 27</a></p>
									<p>E-Mail: <a href="mailto:michael.taurer@taurer.eu">michael.taurer@taurer.eu</a></p>
								</div>
							</div>
							<br/>
							<!--Karoline Taurer-->
							<div class="row">
								<div class="col-sm-1"><br/></div>
								<div class="col-sm-3">
									<img class="modalImage" alt="Karoline Taurer" src="img/karolinetaurer.jpg"/>
								</div>
								<div class="col-sm-8">
									<h1>Frau Karoline Taurer</h1>
									<h2>Kundenbetreuung</h2>
									<h3>Staatlich gepr. Versicherungsmaklerin</h3>
									<p>Tel.: <a href="tel:+43476233880">04762/33 880</a></p>
									<p>Mobil: <a href="tel:+436606549242">0660/654 9242</a></p>
									<p>E-Mail: <a href="mailto:karoline.taurer@taurer.eu">karoline.taurer@taurer.eu</a></p>
								</div>
							</div>
							<br/>
							<!--Sandra Perauer-->
							<div class="row">
								<div class="col-sm-1"><br/></div>
								<div class="col-sm-3">
									<img class="modalImage" alt="Sandra Perauer" src="img/sandraperauer.jpg"/>
								</div>
								<div class="col-sm-8">
									<h1>Frau Sandra Perauer</h1>
									<h2>Backoffice</h2>
									<p>Tel.: <a href="tel:+43476233880">04762/33 880</a></p>
									<p>E-Mail: <a href="mailto:sandra.perauer@taurer.eu">sandra.perauer@taurer.eu</a></p>
								</div>
							</div>
							<br/>
							<!--Michelle Berger-->
							<div class="row">
								<div class="col-sm-1"><br/></div>
								<div class="col-sm-3">
									<img class="modalImage" alt="Michelle Berger" src="img/anonymuswhite.png"/>
								</div>
								<div class="col-sm-8">
									<h1>Frau Michelle Berger</h1>
									<h2>Backoffice</h2>
									<p>Tel.: <a href="tel:+43476233880">04762/33 880</a></p>
									<p>E-Mail: <a href="mailto:michelle.berger@taurer.eu">michelle.berger@taurer.eu</a></p>
								</div>
							</div>
							<br/>
							<!--Barbara Morgenstern-->
							<div class="row">
								<div class="col-sm-1"><br/></div>
								<div class="col-sm-3">
									<img class="modalImage" alt="Barbara Morgenstern" src="img/barbaramorgenstern.jpg"/>
								</div>
								<div class="col-sm-8">
									<h1>Frau Barbara Morgenstern</h1>
									<h2>Backoffice</h2>
									<p>Tel.: <a href="tel:+43476233880">04762/33 880</a></p>
									<p>E-Mail: <a href="mailto:barbara.morgenstern@taurer.eu">barbara.morgenstern@taurer.eu</a></p>
								</div>
							</div>
							<br/>
							<!--Sebastian Taurer-->
							<div class="row">
								<div class="col-sm-1"><br/></div>
								<div class="col-sm-3">
									<img class="modalImage" alt="Sebastian Taurer" src="img/sebastiantaurer.jpg"/>
								</div>
								<div class="col-sm-8">
									<h1>Herr Sebastian Taurer</h1>
									<h2>IT Administrator</h2>
									<p>Tel.: <a href="tel:+43476233880">04762/33 880</a></p>
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