<?php
require_once("header.php");
require_once('konekcija.php');
$idTeme = $_GET["id"];
$stmt = $con->prepare("DELETE FROM `vlasnistvo` WHERE `vozilo_id` ='".$idTeme."'");
$stmt->bindParam(":id", $idTeme);
$stmt->execute();
$stmt = $con->prepare("DELETE FROM `auto` WHERE `vozilo_id` ='".$idTeme."'");
$stmt->bindParam(":id", $idTeme);
$stmt->execute();
$stmt = $con->prepare("DELETE FROM `slika` WHERE `vozilo_id` ='".$idTeme."'");
$stmt->bindParam(":id", $idTeme);
$stmt->execute();
header('Location: ../auto.php');
?>
