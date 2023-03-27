<?php
	require_once("includes/header.php")
?>
<?php
	if (isset($_SESSION["username"])) {
	$korisnikId = $_SESSION["korisnik_id"];$admin = $USER["admin"];}else{$korisnikId=0;$admin = 0;}
	
	$sql = "SELECT * FROM auto JOIN vlasnistvo JOIN korisnik ON korisnik.korisnik_id = vlasnistvo.korisnik_id AND auto.vozilo_id = vlasnistvo.vozilo_id ORDER BY `auto`.`vozilo_id` DESC ";
	$result = $con->query($sql);
	echo "<form method='POST'>";
	echo "<div class='raspolozivo'><h2>Raspoloziva auta</h2></div>";
	
	if (isset($_SESSION["username"])) {
	echo "<div class='opcije'><input class='dodaj' formaction='dodajAuto.php' type='submit' value='Dodaj'>
	<input class='pretrazi' formaction='pretraga.php' type='submit' value='Pretrazi'></div>";
	}
	while ($row = $result->fetch()) {
		echo "<div class='product'>
		<ul>
		<li>
		<div class='product2'>
		<h3>" . $row["model"] . "</h3>
		<p class='postavio'>Cijena: " . $row["cijena"]. "</p>";
		echo "<input class='pogledaj' formaction='pogledajstrana.php?id=" . $row["vozilo_id"] . "' type='submit' value='Pogledaj'>";
		if (isset($_SESSION["username"]) && $row["korisnik_id"]!=$korisnikId  ) {echo "<input class='kupi' formaction='includes/kupi.php?id=" . $row["vozilo_id"] . "' type='submit' value='Kupi'>";}
		if($row["korisnik_id"]==$korisnikId || $admin==1 ){
			echo "<input class='obrisi' formaction='includes/obrisi.php?id=" . $row["vozilo_id"] . "' type='submit' value='Obrisi'>";
			echo "<input class='izmijeni' formaction='izmijenistrana.php?id=" . $row["vozilo_id"] . "' type='submit' value='Izmijeni'>";
		}
		
		
        echo "</div>
		</li>
		</ul>
		</div>
		";
	}echo "</form>";
?>
<?php
	require_once("includes/footer.php")
?>	