<?php
	require_once("header.php");
	require_once('konekcija.php');
	$vozilo_id = $_GET["id"];
	
	$marka = $_POST['marka'];
	$model = $_POST['model'];
	$cijena = $_POST['cijena'];
	$godiste = $_POST['godiste'];
	$karoserija = $_POST['karoserija'];
	$gorivo = $_POST['gorivo'];
	$lokacija = $_POST['lokacija'];
	
	
    $stmt = $con->prepare(" UPDATE auto SET marka = '".$marka."', model = '".$model."', cijena = '".$cijena."' , godiste = '".$godiste."', karoserija = '".$karoserija."',gorivo = '".$gorivo."', lokacija = '".$lokacija."'   WHERE vozilo_id ='".$vozilo_id."'");
	
    
	$stmt->bindParam(":marka", $marka);
	$stmt->bindParam(":model", $model);
	$stmt->bindParam(":cijena", $cijena);
	$stmt->bindParam(":godiste", $godiste);
	$stmt->bindParam(":karoserija", $karoserija);
	$stmt->bindParam(":gorivo", $gorivo);
	$stmt->bindParam(":lokacija", $lokacija);
	$stmt->execute();
	
	header('Location: ../auto.php');
?>
