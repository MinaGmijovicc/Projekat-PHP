<?php
	require_once("includes/header.php")
?>
<?php
	if (isset($_SESSION["username"])) {
		echo "<div class='contact-box'>
		<form action='includes/posaljiporuku.php' method='POST'>
		<h1>Ostavite komentar</h1>
		<div class='contact-textbox'>
		<input type='text'  name='tema' placeholder='Tema' required/>
		</div>
		<div class='contact-textbox'>
		<textarea type='textarea' rows='4' cols='50' name='poruka' placeholder='Ukucajte Vasu poruku' required></textarea>
		</div>
		<input class='contact-btn' type='submit' value='Posalji' />
		</form>
		</div>";
		}else{echo"<p id='contact-upozorenje'>Prijavite se da bi ostavili komentar<p/>";
	}
?>
<div class="container">
	<div class="box2">
		<div class="icon">
			<i class="fa fa-map-marker"></i>
			<h4>Adresa</h4>
			<h3>Beograd, 11000, Srbija</h3>
		</div>
	</div>
	<div class="box2">
		<div class="icon">
			<i class="fa fa-phone"></i>
			<h4>Mobile</h4>
			<h3>+381 7443234</h3>
		</div>
	</div>
	<div class="box2">
		<div class="icon"><i class="fa fa-envelope"></i>
			<h4>Email</h4>
			<h3>carstarshop@gmail.com</h3>
		</div>
	</div>
</div>
<p id="mapa"><iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Milana%20Rakica%2080+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="900" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><p>
	<?php
		require_once("includes/footer.php")
	?>		
	
	