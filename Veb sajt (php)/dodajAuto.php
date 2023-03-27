<?php
	require_once("includes/header.php");
	if (isset($_SESSION["username"])) {
		/*header('Location: glavnastrana.php');*/
	}
?>
<div class="box">
	<form method="POST">
	<h1>Dodajte auto</h1>
	<div class="textbox">
		<i class="fa fa-info" aria-hidden="true"></i>
		<input type="text" name="marka" placeholder="Marka*" required/>
	</div>
	<div class="textbox">
		<i class="fa fa-car" aria-hidden="true"></i>
		<input type="text" name="model" placeholder="Model*" required/>
	</div>
	<div class="textbox">
		<i class="fa fa-credit-card" aria-hidden="true"></i>
		<input type="number" name="cijena" placeholder="Cijena*" required/>
	</div>
	<div class="textbox">
		<i class="fa fa-calendar aria-hidden="true"></i>
		<input type="number" name="godiste" placeholder="Godiste*" min="1900" max="2025" required/>
	</div>
	<div class="textbox">
		<i class="fa fa-info" aria-hidden="true"></i>
		<input type="text" name="karoserija" placeholder="Karoserija*" required>
	</div>
	<div class="textbox">
		<i class="fa fa-info" aria-hidden="true"></i>
		<input type="text" name="gorivo" placeholder="Tip goriva*" required>
	</div>
	<div class="textbox">
		<i class="fa fa-map-marker" aria-hidden="true"></i>
		<input type="text" name="lokacija" placeholder="Lokacija*" required>
	</div>
	<input class="btn" formaction="includes/dodaj.php" type="submit" value="Prijavi">

	</form>
</div>
<?php
	require_once("includes/footer.php")
?>