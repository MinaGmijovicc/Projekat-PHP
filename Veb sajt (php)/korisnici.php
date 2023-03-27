<?php
	require_once("includes/header.php");
	require_once('includes/konekcija.php');
	
	if (isset($_SESSION["username"])) {
	$korisnik_id = $_SESSION["korisnik_id"];$admin = $USER["admin"];}else{$korisnik_id=0;$admin = 0;}
	
	
	$sql = "SELECT * FROM korisnik";
	$result = $con->query($sql);
	echo "<form method='POST'>";
	echo "<div class='podaciK'><h2>Podaci o korisnicima</h2></div>";
	while ($row = $result->fetch()) {
		echo "<div class='product'>
		<ul>
		<li>
		<div class='product2'>
		<h3>Ime i prezime: " . $row["ime"] ." ". $row["prezime"] ."</h3>
		<p class='postavio'> Email: " . $row["email"] ."</p><br>";
		echo "<p class='postavio'> Username: " . $row["username"] ."</p><br>";
		if( $row["admin"]==1 ){echo "<p class='postavio'> Admin: Jeste</p>";}else{echo "<p class='postavio'> Admin: Nije</p>";}
		
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