<!DOCTYPE html>
<?php
	session_start();
	require_once('konekcija.php');
	$stmt = $con->prepare('SELECT * FROM korisnik WHERE username=:username');
	$stmt->bindParam(":username", $_SESSION['username']);
	$stmt->execute();
	$USER = $stmt->fetch(); 
	if (isset($_SESSION["username"])) {
	$id = $USER["korisnik_id"];}else{$id=0;}
?>
<html lang="en" dir="ltr">
	<head>
		<meta charse="utf-8">
		<title>CarStar</title>
		<link rel ="stylesheet" href="includes/style.css">
		<link rel="shortcut icon" type="image/png" href="favicon.png"/>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
	<body>
		
		<!---Nav Bar--->
		<nav class="navBar">
			<ul class="prt1">
				<?php
					if (($USER["ime"] ?? '') != "") {
						if($USER["admin"]==1){echo "<li><a class='logo' href='includes/logout.php'>Odjavi se - " . $USER['ime'] .
							" [Admin]</a></li>";
							}else{
							echo "<li><a class='logo' href='includes/logout.php'>Odjavi se - " . $USER['ime'] .
							"</a></li>";
						}
						}else{
						echo "<li><a class='logo' href='loginstrana.php'>Login</a></li>";
					}
				?>
			</ul>
			<ul class="prt2">
				<li><a class="active" href="pocetna.php">Početna</a></li>
				<li><a href="auto.php">Automobili</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
				
				<?php
					if (($USER["ime"] ?? '') != "") {
						echo "<li><a href='dodajAuto.php'>Dodaj Auto</a></li>";
						echo "<li><a href='korpa.php'>Korpa</a></li>";
						if($USER["admin"]==1){
							echo "<li><a href='korisnici.php'>Korisnici</a></li>";
						}}else{echo "<li><a href='registracija.php'>Registruj se</a></li>";}
				?>
			</ul>
		</nav>		
		
		<!---Slide Box--->
		<input type="checkbox" id="check">
		<label for="check">
			<i class="fas fa-bars" id="btn"></i>
			<i class="fas fa-times" id="cancel"></i>
		</label>
		<div class="sidebar">
			<header>CarStar App</header>
			<ul>
				<li><a href="pocetna.php"><i class="fas fa-home"></i> Početna</a></li>
				<li><a href="auto.php"><i class="fas fa-car"></i> Automobili</a></li>
				<li><a href="kontakt.php"><i class="fas fa-envelope"></i> Kontakt</a></li>
				
				<?php
					if (($USER["ime"] ?? '') != "") {
						echo "<li><a href='dodajAuto.php'><i class='fas fa-plus'> Dodaj Auto</i></a></li>";
						echo "<li><a href='korpa.php'><i class='fas fa-shopping-cart'> Korpa</i></a></li>";
						if($USER["admin"]==1){
							echo "<li><a href='korisnici.php'><i class='fas fa-users'> Korisnici</i></a></li>";
						}}else{echo "<li><a href='registracija.php'><i class='fas fa-user-plus'> Registruj se</i></a></li>";}
				?>
			</ul>
		</div>														