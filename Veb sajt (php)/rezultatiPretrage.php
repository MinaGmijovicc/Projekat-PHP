<?php
	require_once("includes/header.php")
?><?php
	
	if(isset($_POST['marka']) || isset($_POST['model']) ||  isset($_POST['cijena']) ||  isset($_POST['godiste']) ||  isset($_POST['karoserija']) ||  isset($_POST['gorivo']) ||  isset($_POST['lokacija'])){
        $marka = $_POST['marka'];
		$model = $_POST['model'];
		$cijena = $_POST['cijena'];
    	$godiste = $_POST['godiste'];
		$karoserija = $_POST['karoserija'];
		$gorivo = $_POST['gorivo'];
        $lokacija = $_POST['lokacija'];
		
		
		$sql = "SELECT * FROM auto WHERE marka LIKE '".$marka."%' AND `model` LIKE '".$model."%'";
		$result = $con->query($sql);
		echo "<form method='POST'>";
		echo "<div class='rezultatP'><h2>Rezultati vase pretrage</h2></div>";
		echo "<div class='vrati'><input class='dodaj' formaction='pretraga.php' type='submit' value='Pretrazi opet'></div>";
		while ($row = $result->fetch()) {
			echo "<div class='rezultat2'>
			<ul>
			<li>
			<div class='product2'>
			<h3>" . $row["model"] . "</h3>
			<p class='postavio'>Cijena: " . $row["cijena"]. "</p>";	
			echo "</div>
			</li>
			</ul>
			</div>
			";
		}echo "</form>";
	}
	

	require_once("includes/footer.php")
?>