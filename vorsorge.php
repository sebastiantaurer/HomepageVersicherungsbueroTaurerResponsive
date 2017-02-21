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
							<h2>Vorsorge</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-1">
						</div>
						<div class="col-sm-6">
							<p>Wir nehmen uns Zeit für Sie um Ihren Bedarf an Absicherung Ihrer existenzbedrohenden Risiken gemeinsam zu erarbeiten.</p>
							<h4>Unter Vorsorgemanagement verstehen wir:</h4>
							<ul>
								<li>Absicherung der Arbeitskraft bei <b>Krankheit</b></li>
								<li>Absicherung der Arbeitskraft bei <b>Unfall</b></li>
								<li>Absicherung der Arbeitskraft bei <b>Tod</b></li>
								<li>Schließen Ihrer Pensionslücke</li>
							</ul>
						</div>
						<div class="col-sm-5">
							<img style="max-width:100%;" alt="vorsorge" src="img/vorsorge.jpg"/>
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
		document.getElementById("vorsorge").className = "active";
	</script>
	<script src="js/modal.js" type="text/javascript"></script>
</html>