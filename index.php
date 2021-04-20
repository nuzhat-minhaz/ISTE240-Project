<?php
	
	$title="Nuzhat's Project | Travel HomePage";
	$page="home";
	$path='./';
	include($path.'assets/inc/header.php');
	include($path.'assets/inc/nav.php');

?>
<!--<div id="loader"></div>
<div id="myDiv" class="animate-bottom"> -->
<div class="index-container" onload="myFunction()">
	<div class="leftheader">
			<h1> Welcome to Dhaka, <br>the capital city of Bangladesh.</h1>
			<h2> I was born and raised in a concrete jungle where children run from rooftop to rooftop to keep their kites afloat amidst the clouds,
			and where crows make homes out of tangled telephone wires hanging overhead. Let me show you all the colors in which my city celebrates and sustains life.
			And no, it is not like Chris Hemsworth's Netflix movie "Extraction"...
			</h2>
			<br><br>
			<h3> and before you go, listen to this soothing, timeless favourite from my country: </h3>

			<input type="button" value="Play" onclick="playAudio(), typeWriter()" id="playbtn">
			<input type="button" value="Pause" onclick="pauseAudio()" id ="pausebtn">
			<audio id="audio" src="assets/audio/tomar_jonno.mp3"></audio>
			<p id="demo"></p>
			
	</div>
	
	<div class="rightheader">
            <img id="header" src="assets/images/home1.png">
            
	</div>
</div>
<!--</div>-->

<?php
	include($path.'assets/inc/footer.php');
?>