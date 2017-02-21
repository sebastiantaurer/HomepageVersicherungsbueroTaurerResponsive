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
							<h2>Kontakt</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-1">
						</div>
						<div class="col-sm-11 kontakt">
							<h2>Versicherungs- & Finanzdienst<wbr>leistungs GmbH Taurer</h2>
							<p>Feldstraße 5</p>
							<p>9800 Spittal an der Drau</p>
							<p>Telefon: 04762/33880</p>
							<p>Fax: 04762/33880 - 20</p>	
							<h3>E-Mail: <a href="mailto:michael.taurer@taurer.eu"> michael.taurer@taurer.eu</a></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-1">
						</div>
						<div class="col-sm-10">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2731.1546361303454!2d13.489717515163509!3d46.801259751254186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4770a351e5469f75%3A0xd1400a430c9d392a!2sVersicherungsb%C3%BCro+Michael+Taurer!5e0!3m2!1sde!2sde!4v1487518968785" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="col-sm-1">
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
		document.getElementById("kontakt").className = "active";
	</script>
	<script src="js/modal.js" type="text/javascript"></script>
</html>