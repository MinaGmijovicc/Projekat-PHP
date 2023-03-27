<?php
	require_once("header.php");
	require_once('konekcija.php');
	$vozilo_id = $_GET["id"];
	$korisnik_id = $_SESSION["korisnik_id"];
	
	$stmt = $con->prepare("DELETE FROM `vlasnistvo` WHERE `vozilo_id` ='".$vozilo_id."'");
	$stmt->bindParam(":id", $vozilo_id);
	$stmt->execute();
	
	$stmt = $con->prepare("INSERT INTO porudzbina (korisnik_id,vozilo_id) VALUES (:korisnik_id, :vozilo_id)");
	$stmt->bindParam(":korisnik_id", $korisnik_id);
	$stmt->bindParam(":vozilo_id", $vozilo_id);
	$stmt->execute();
	header('Location: ../korpa.php');
	
?>