<?php
	
	$title="Nuzhat's Project | About";
	$page="grading";
    $path='../';
    
	include($path.'assets/inc/header.php');
	include($path.'assets/inc/nav.php');

?>

<div class="grade-container">

    <div class="gradeleftheader">
        <h1>Grading Criteria I've Fulfilled</h1>
        <h2>
            1) CRAP Design Principles:
            <br> - Good Contrast: white text on black background, and only colors are in the images and logo and divider between nav and body. 
            <br><br>
            2) Organization and Information:
            <br> - All text is in similar format with corresponding images next to it. Consistent grouping of information. 
            <br><br>
            3) Use of PHP: 
            <br> - external php header/footer/all pages use php to make te site modular.
            <br> - successfully inserts and shows data from myPhpAdmin database and shows output!!
            <br><br>
            4) 2 Pages with PHP/Database Insert/pull: 
            <br> - The Food Page (asks user about recipes they want to know more about, and shows what others have entered right below it) 
            and Share With Us Page (form, also shows user the output)
            <br><br>
            5) Navigation:
            <br> - Simple navigation with only white text separated by space and a line divider.
            <br><br>
            6) Form Validation:
            <br> - javaScript validation, and php requires values for the form to be submitted.
            <br><br>
            7) Reference Page and About Page Updated
            <br><br>
            8) Original jS Animation / setTimeOut:
            <br> - When you press the play button for any music, a text with typewriter effect shows up below which uses a setTimeOut() function.
            <br><br>
            9) Original DHTML Component:
            <br> - Audio Play and Pause Buttons, Images on Food Page.
            <br><br>
            10) Spelling errors:
            <br> - Fixed them!
            <br><br>
            <br><br>
            
           
    </div>
    <div class="graderightheader">
<h1> Additional Criteria Fulfilled:</h1>
<h2>- Map is in the history page
<br>- Page has current navigation title + red underline shows on nav bar to indicate which page user is on
<br>- CSS3 animations: modal images and nav bar have on-hover effects
<br>- CSS and jS files have comments
<br>- Updated grading page
<br>- CSS files validate
<br>- proper file/directory organization structure
<br>
<h1> Screenshot of phpMyAdmin database being used:
    <img src="../assets/images/screenshot.jpg">
    <img src="../assets/images/screenshot2.png">
<h1> Issues with my page:</h1>
<br> - No media queries
<br> - The html validator doesn't work for .php files, and the php validator showed there arent errors. 
<br>
<br>
<br>

</h2>
    </div>

</div>

<?php
	include($path.'assets/inc/footer.php');
?>