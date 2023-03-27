<?php
	require_once('konekcija.php');
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password = md5($password);
	
	if(isset($_POST['username']) && isset($_POST['password'])){
		$stmt = $con->prepare("SELECT * FROM korisnik WHERE username=:username AND password=:password");
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":password",$password);
		$stmt->execute();
		
		$row = $stmt->fetch();	
		if($row){
			session_start();
			$_SESSION["username"] = $row["username"];
			$_SESSION["ime"] = $row["ime"];
			$_SESSION["korisnik_id"] = $row["korisnik_id"];
			header('Location: ../pocetna.php');
		}
		else {
			header('Location: ../loginstrana.php');
		}
	}
?>