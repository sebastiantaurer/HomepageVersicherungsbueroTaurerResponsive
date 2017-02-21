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
							<h2>Versicherung</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-1">
						</div>
						<div class="col-sm-6">
							<p>Der Markt bietet eine große Anzahl an Angeboten. Kaum jemand hat die Zeit, die Kenntnis und das Verständnis das beste Produkt zu finden bzw. die Vielzahl an Angeboten zu vergleichen.</p>
							<h3>Fazit: die meisten Haushalte sind falsch oder zu teuer versichert!</h3>
							<p>Unser Ziel ist es Ihnen einen wirtschaftlichen Vorteil, das heißt eine Prämienersparnis, zu ermöglichen!</p>
							<p>Betreuung steht bei uns an erster Stelle.</p>
							<h4>Das Versicherungsbüro Taurer optimiert und aktualisiert Ihre Unterlagen:</h4>
							<ul>
								<li>Unfallversicherung</li>
								<li>Risikoversicherung</li>
								<li>Rechtschutzversicherung</li>
								<li>KFZ-Versicherung</li>
								<li>Lebensversicherung</li>
								<li>Eigenheimversicherung</li>
								<li>Haftpflichtversicherung</li>
								<li>Krankenversicherung</li>
								<li>Pensionsversicherung</li>
							</ul>
						</div>
						<div class="col-sm-5">
							<img style="max-width:100%;" alt="versicherung" src="img/versicherung.jpg"/>
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
		document.getElementById("versicherung").className = "active";
	</script>
	<script src="js/modal.js" type="text/javascript"></script>
</html>