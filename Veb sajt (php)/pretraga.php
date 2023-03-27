<?php
	require_once("includes/header.php");
	if (isset($_SESSION["username"])) {
		/*header('Location: glavnastrana.php');*/
	}
?>
<div class="box">
	<form method="POST">
	<h1>Pretrazite auta</h1>
	<div class="textbox">
		<i class="fa fa-info" aria-hidden="true"></i>
		<input type="text" name="marka" placeholder="Unesite marku*" />
	</div>
	<div class="textbox">
		<i class="fa fa-car" aria-hidden="true"></i>
		<input type="text" name="model" placeholder="Unesite model*" />
	</div>
	<div class="textbox">
		<i class="fa fa-credit-card" aria-hidden="true"></i>
		<input type="number" name="cijena" placeholder="Unesite cijenu*" />
	</div>
	<div class="textbox">
		<i class="fa fa-calendar aria-hidden="true"></i>
		<input type="number" name="godiste" placeholder="Unesite godiste*" min="1900" max="2025" />
	</div>
	<div class="textbox">
		<i class="fa fa-info" aria-hidden="true"></i>
		<input type="text" name="karoserija" placeholder="Unesite karoseriju*" >
	</div>
	<div class="textbox">
		<i class="fa fa-info" aria-hidden="true"></i>
		<input type="text" name="gorivo" placeholder="Unesite tip goriva*" >
	</div>
	<div class="textbox">
		<i class="fa fa-map-marker" aria-hidden="true"></i>
		<input type="text" name="lokacija" placeholder="Unesite lokacija*" >
	</div>
	<input class="btn" formaction="rezultatiPretrage.php" type="submit" value="Pretrazi">

	</form>
</div>
<?php
	require_once("includes/footer.php")
?>