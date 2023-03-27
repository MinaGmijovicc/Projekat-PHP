<?php 
	require_once('konekcija.php');	
session_start();
if(isset($_POST['tema']) && isset($_POST['poruka'])){
        $tema = $_POST['tema'];
		$poruka = $_POST['poruka'];
        $korisnikId = $_SESSION["korisnik_id"];
    
        $stmt = $con->prepare("INSERT INTO komentar (tema,poruka, korisnik_id) VALUES (:tema,:poruka, :korisnikId)");
		$stmt->bindParam(":tema", $tema);
		$stmt->bindParam(":poruka", $poruka);
		$stmt->bindParam(":korisnikId", $korisnikId);

	 	$stmt->execute();
		/**header('Location: pocetna.php');*/
	}
?>