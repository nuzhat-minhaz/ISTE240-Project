<?php
    $title="Nuzhat's Project | Your Thoughts!";
	$page="askaway";
    $path='../';
    
	include($path.'assets/inc/header.php');
	include($path.'assets/inc/nav.php');
?>
    <div class="askheader">
        Share Your Thoughts!
        <h2>Below, you can provide suggestions, thoughts, and feedback on this website
             so that I can find better ways to explain my culture to you, and make it a more enjoyable experience!
            <br>*Note, this form will not submit if you do not answer one or more fields.<h2>
    </div>
    <div class="ask-container"> 
    
        <div class="askform">
        <h2>Enter your responses here: </h2>
            <div class="askbox">
                
                <form name="ask-form" method="post" action="form-process.php">
                Your Name: <br>
                &nbsp;&nbsp;<input name="name" type="text" id="name1"> <br>
                Which country are you from?: <br>
                &nbsp;&nbsp;<input name="country" type="text" id="country1"> <br>
                Any comments, suggestions or feedback for this website?: <br>
                &nbsp;&nbsp;<input name="comment" type="text" id="comment1"> <br>
                What are your thoughts on Bangladeshi culture?: <br>
                &nbsp;&nbsp;<input name="views" type="text" id="views1"> <br>
                Which part of my culture are you eager to know more about?: <br>
                &nbsp;&nbsp;<input name="eager" type="text" id="eager1"> <br>

                <p>
                    <input type="submit" onclick="validateForm();" name="Submit"  value="Send Form" id="sendbtn">
                </p>
                </form>
            </div>
        </div>
        
    </div>
    <?php
     
     $page = "askoutput";
         //path to header
     $path = './';
     //include $path.'../assets/inc/header.php';
     //include $path.'../assets/inc/nav.php';
     //include $path.'askaway.php';

     $link = mysqli_connect("localhost", "nxm1137", "lasthuman", "nxm1137");

         if (!$link){
             echo "Error: Unable to connect to mySQL." . PHP_EOL;
             echo "Debugging errno. " . mysqli_connect_errno() . PHP_EOL;
             echo "Debugging errno. " . mysqli_connect_errno() . PHP_EOL;
             exit;
         }


     $query = "SELECT * FROM `askaway`";
     $result = mysqli_query($link, $query) or die(mysqli_error($con));
?>
        <div class="container1">
        <h2> Check out what others have written:</h2>
        <?php
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                $name = $row['name'];
                $country = $row['country'];
                $comment = $row['comment'];
                $views = $row['views'];
                $eager = $row['eager'];

                
                echo "<div class='feedback1'>";
                echo "<span id='title2'>" . "What " . $name . " shared with us:"."</span>". "<br>";
                echo "1. Name: " . "<span id='name'>" . $name . "</span>" . "<br>";
                echo "2. Country: ". "<span id='country'>" . $country ."</span>" . "<br>";
                echo "3. Feedback on this Website: " . "<br>". "<span id='comment'>" . $comment . "</span>" . "<br>";
                echo "4. Thoughts on Bangladeshi Culture: " . "<br>" ."<span id='views'>" . $views . "</span>". "<br>";
                echo "5. What " . $name . " Would Like To Know More About: " ."<br>" . "<span id='eager'>" . $eager . "</span>" ."<br>";
                echo "</div>";
            }
        ?>
        </div>
<?php 
//path to footer 
include $path.'../assets/inc/footer.php';
?>


