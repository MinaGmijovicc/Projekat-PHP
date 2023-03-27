<?php
	require_once("includes/header.php");
?>
<div class="box">
	 <form action="includes/login.php" method="POST">
	<h1>Ulogujte se</h1>
	<div class="textbox">
		<i class="fa fa-user" aria-hidden="true"></i>
		<input type="text"  name="username" placeholder="Username" required/>
	</div>
	<div class="textbox">
		<i class="fa fa-lock" aria-hidden="true"></i>
		<input type="password" name="password" placeholder="Password" required/>
	</div>
	<input class="btn" type="submit" value="Log in" />
	<br>
	<br>
	<a href="registracija.php">Nemate nalog? Registrujte se</a>
	</form>
</div>

<?php
	require_once("includes/footer.php")
?>