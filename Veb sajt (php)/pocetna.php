<?php
	require_once("includes/header.php");
?>
<h2 id="pocetna">Poslovni prostor auto shopa CarStar </h2>
<div id="slider">
	<div id="slider-box">
		<img src="img/vanka.jpg">
	</div>
	
	<!-- buttons for controls slider -->
	<input class="prew" type="button"  value="-" onclick="prewImage()">
	<input class="next" type="button" name=""  value="+" onclick="nextImage()">
</div><script type="text/javascript">
	
  	var slider_content = document.getElementById('slider-box');
	
  	// contain images in an array
    var image = ['img/vanka','img/spolja1', 'img/spolja2', 'img/spolja3','img/spolja4'];
	
    var i = image.length;
	
	
    // function for next slide 
	
    function nextImage(){
    	if (i<image.length) {
    		i= i+1;
			}else{
    		i = 1;
		}
		slider_content.innerHTML = "<img src="+image[i-1]+".jpg>";
	}
	
	
    // function for prew slide
	
    function prewImage(){
		
    	if (i<image.length+1 && i>1) {
    		i= i-1;
			}else{
    		i = image.length;
		}
		slider_content.innerHTML = "<img src="+image[i-1]+".jpg>";
		
	}
	
	
	// script for auto image slider
	
	setInterval(nextImage , 2000);
	
</script><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
	require_once("includes/footer.php");
?>