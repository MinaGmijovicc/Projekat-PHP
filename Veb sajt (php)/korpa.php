<?php
	require_once("includes/header.php");
	require_once('includes/konekcija.php');

	if (isset($_SESSION["username"])) {
	$korisnik_id = $_SESSION["korisnik_id"];$admin = $USER["admin"];}else{$korisnik_id=0;$admin = 0;}
	
	
	$sql = "SELECT * FROM auto JOIN porudzbina ON auto.vozilo_id = porudzbina.vozilo_id JOIN korisnik ON korisnik.korisnik_id = porudzbina.korisnik_id WHERE porudzbina.korisnik_id = $korisnik_id";
	$result = $con->query($sql);
	echo "<form method='POST'>";
	echo "<div class='korpa'><h2>Auta ce stici na vasu adresu kroz par dana</h2></div>";
	while ($row = $result->fetch()) {
		echo "<div class='product'>
		<ul>
		<li>
		<div class='product2'>
		<h3>" . $row["model"] . "</h3>
		<p class='postavio'> Cijena: " . $row["cijena"] ."</p>";
		echo "<input class='pogledaj' formaction='pogledajstrana.php?id=" . $row["vozilo_id"] . "' type='submit' value='Pogledaj'>";		
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