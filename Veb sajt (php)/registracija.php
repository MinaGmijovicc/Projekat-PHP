<?php
	require_once("includes/header.php");
	if (isset($_SESSION["username"])) {
		/*header('Location: glavnastrana.php');*/
	}
?>
<div class="box">
	<form method="POST">
	<h1>Registruj se</h1>
	<div class="textbox">
		<i class="fa fa-info" aria-hidden="true"></i>
		<input type="text" name="ime" placeholder="Ime*" required/>
	</div>
	<div class="textbox">
		<i class="fa fa-info" aria-hidden="true"></i>
		<input type="text" name="prezime" placeholder="Prezime*" required/>
	</div>
	<div class="textbox">
		<i class="fa fa-user" aria-hidden="true"></i>
		<input type="text" name="username" placeholder="Username*" required/>
	</div>
	<div class="textbox">
		<i class="fa fa-lock" aria-hidden="true"></i>
		<input type="password" name="password" placeholder="Password*" required/>
	</div>
	<div class="textbox">
		<i class="fa fa-envelope" aria-hidden="true"></i>
		<input type="email" name="email" placeholder="E-mail" required>
	</div>
	<input class="btn" formaction="includes/registruj.php" type="submit" value="Sign in">
	<br>
	<br>
	<a href="loginstrana.php">Posedujete nalog? Idite na login</a>
	</form>
</div>
<?php
	require_once("includes/footer.php")
?>