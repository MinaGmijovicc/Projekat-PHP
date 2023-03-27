<?php 
	require_once('konekcija.php');
    require_once('header.php');
	
	$korisnik_id = $_SESSION["korisnik_id"];
	
	if(isset($_POST['marka']) && isset($_POST['model']) && isset($_POST['cijena']) && isset($_POST['godiste']) && isset($_POST['karoserija']) && isset($_POST['gorivo']) && isset($_POST['lokacija'])){
        $marka = $_POST['marka'];
		$model = $_POST['model'];
		$cijena = $_POST['cijena'];
    	$godiste = $_POST['godiste'];
		$karoserija = $_POST['karoserija'];
		$gorivo = $_POST['gorivo'];
        $lokacija = $_POST['lokacija'];
		
        $stmt = $con->prepare("INSERT INTO auto (marka, model, cijena, godiste, karoserija,gorivo,lokacija) VALUES (:marka, :model, :cijena, :godiste, :karoserija, :gorivo, :lokacija)");
		$stmt->bindParam(":marka", $marka);
		$stmt->bindParam(":model", $model);
		$stmt->bindParam(":cijena", $cijena);
		$stmt->bindParam(":godiste", $godiste);
		$stmt->bindParam(":karoserija", $karoserija);
        $stmt->bindParam(":gorivo", $gorivo);
		$stmt->bindParam(":lokacija", $lokacija);
		
	 	$stmt->execute();
		
		$sql = "SELECT * FROM auto WHERE marka LIKE '".$marka."' AND `model` LIKE '".$model."' AND `cijena` LIKE '".$cijena."' AND `godiste` LIKE '".$godiste."' AND `karoserija` LIKE '".$karoserija."' AND `gorivo` LIKE '".$gorivo."' AND `lokacija` LIKE '".$lokacija."'";
		$result = $con->query($sql);
		if ($row = $result->fetch()) {
		$vozilo_id=$row["vozilo_id"];
		$stmt = $con->prepare("INSERT INTO vlasnistvo (korisnik_id, vozilo_id) VALUES (:korisnik_id, :vozilo_id)");
		$stmt->bindParam(":vozilo_id", $vozilo_id);
		$stmt->bindParam(":korisnik_id", $korisnik_id);
		
	 	$stmt->execute();
		}
		header('Location: ../auto.php');
	}
	
	
	
?>