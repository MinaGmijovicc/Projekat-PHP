<?php 
	require_once('konekcija.php');	
if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
        $username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);
    	$ime = $_POST['ime'];
		$prezime = $_POST['prezime'];
		$email = $_POST['email'];
        $admin =0;
    
        $stmt = $con->prepare("INSERT INTO korisnik (username, password, ime, prezime, email,admin) VALUES (:username, :password, :ime, :prezime, :email ,:admin)");
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":password", $password);
		$stmt->bindParam(":ime", $ime);
		$stmt->bindParam(":prezime", $prezime);
		$stmt->bindParam(":email", $email);
        $stmt->bindParam(":admin", $admin);

	 	$stmt->execute();
		header('Location: ../loginstrana.php');
	}
?>