<?php
	require_once("includes/header.php");
	require_once('includes/konekcija.php');
	$vozilo_id = $_GET["id"];
	
	$stmt = $con->prepare("SELECT * FROM auto WHERE vozilo_id=:vozilo_id");
	$stmt->bindParam(":vozilo_id", $vozilo_id);
	$stmt->execute();	
	
	$stmt2 = $con->prepare('SELECT * FROM slika WHERE vozilo_id=:vozilo_id');
	$stmt2->bindParam(':vozilo_id', $vozilo_id);
	$stmt2->execute();
	
		echo "<form method='POST'>";
		echo "<div class='podaciK'><h2>Podaci o korisnicima</h2></div>";
		while ($row = $stmt->fetch()) {
			echo "<div class='product'>
			<ul>
			<li>";if ($row2 = $stmt2->fetch()) {
			echo "<div class='product2'><div class='slika'><img src='". $row2["slika"] ."'></div>";}
			echo "<h3>Model: ". $row["model"] ."</h3>
			<p class='postavio'> Marka: " . $row["marka"] ."</p><br>";
			echo "<p class='postavio'> Cijena: " . $row["cijena"] ."</p><br>
			<p class='postavio'> Godiste: " . $row["godiste"] ."</p><br>
			<p class='postavio'> Karoserija: " . $row["karoserija"] ."</p><br>
			<p class='postavio'> Gorivo: " . $row["gorivo"] ."</p><br>
			<p class='postavio'> Lokacija: " . $row["lokacija"] ."</p><br>";
			
			echo "</div>
			</li>
			</ul>
			</div>
			";
		}echo "</form>";
		
		require_once("includes/footer.php")	;
	?>		