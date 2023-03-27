<?php
	require_once("includes/header.php");
	require_once('includes/konekcija.php');
	$vozilo_id = $_GET["id"];
	
	$stmt = $con->prepare("SELECT * FROM auto WHERE vozilo_id=:vozilo_id");
	$stmt->bindParam(":vozilo_id", $vozilo_id);
	$stmt->execute();		
	
	if ($row = $stmt->fetch()) {
	echo "<div class='box'>
	<form method='POST'>
	<h1>Izmijenite info</h1>
	<div class='textbox'>
		<input type='text' name='marka' value='". $row["marka"] ."' />
	</div>
	<div class='textbox'>
		<input type='text' name='model' value='". $row["model"] ."' />
	</div>
	<div class='textbox'>
		<input type='number' name='cijena' value='". $row["cijena"] ."' />
	</div>
	<div class='textbox'>
		<input type='number' name='godiste' value='". $row["godiste"] ."' min='1900' max='2025' />
	</div>
	<div class='textbox'>
		<input type='text' name='karoserija' value='". $row["karoserija"] ."' >
	</div>
	<div class='textbox'>
		<input type='text' name='gorivo' value='". $row["gorivo"] ."' >
	</div>
	<div class='textbox'>
		<input type='text' name='lokacija' value='". $row["lokacija"] ."' >
	</div>
	<input class='btn' formaction='includes/izmijeni.php?id=" . $vozilo_id . "' type='submit' value='Izmijeni'>

	</form>
</div>";
	}

	require_once("includes/footer.php")
?>	