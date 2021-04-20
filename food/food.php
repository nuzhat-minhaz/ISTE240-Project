<?php
	
	$title="Nuzhat's Project | Food";
	$page="food";
    $path='../';
    
	include($path.'assets/inc/header.php');
	include($path.'assets/inc/nav.php');

?>

<div class="food-container">

    <div class="foodleftheader">
        <h1>The Fooooooood!!</h1>
        <h2>
            Being a tropical country in South-East Asia that is characterized by lush greenery and many waterways due to its geographical location 
            by the Bay of Bengal, our food staples include fish and rice. Agricultural produce from the fertile lands of the delta
            make fresh ingredients for everyone to cook with. 
            
            A popular belief is that South-Asian food is spicy, but the truth is that it just contains a lot of spices: not the type to burn your tastebuds,
            but the type that gives you bursts of flavors in every bite. The ingredients naturally add color to the dish, and popular colorful spices 
            that are used in our cuisine include turmeric which is a bright shade of yellow, or red chilli powder that is a lovely shade of brick red.
            <br><br>
            Other than rice, flatbread is a breakfast staple with a side of whatever food item you think you'd like with it, be it sweet or savoury. 
            Our flatbreads are called "ruti" or "porota", the difference only being the way they're made. Universal pancakes, basically.
            
            And yes, we eat with our hands.
            <br><br>
        </h2>
    <h1>Desserts</h1>
        <h2>
            Be it rice pudding and cream or deep-fried sweets with syrup drizzled on top, my culture has the best sweets I've ever come across. 
            I have the biggest sweet
            tooth ever for which I've tried all kinds of desserts. Bangladeshi sweets are still my favourite.
            
            On special occasions, our moms get real creative with sweets by using wild combinations of ingredients, so you know there's a secret recipe in
            every household. The result is various versions of a mushy bite-sized sweet called Halwa. My best experience was with a bright pink heart-shaped one,
            that my mother named "Bubblegum Halwa", and I expected it
            to taste of strawberries. A bite later, I realized it tastes like coconut & eggs. Why did my mother make it pink? I don't have the answer to this day.
        </h2>


    </div>
    <div class="foodrightheader">
        <img src="../assets/images/food.png">
        
    </div>
    <div class="food-form">
        <h2>Let us know what dishes you would like the recipe to, and we will email it to you!</h2>
        <div class="foodbox">
            <form method="post" action="foodprocess.php" name="foodform">
                Your Name: <input name="name" type="text" id="name2"> <br>
                Your Email Address: <input name="email" type="text" id="email2"> <br>
                What Dish You Would Like the Recipe To: <input name="recipe" type="text" id="recipe2"> <br>

                <p>
                    <input type="submit"  name="Submit"  value="Send Form" onclick="validateForm2();" id="sendbtn">
                </p>
            </form>
        </div>
    </div>

    <?php
     
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


     $query = "SELECT * FROM `food`";
     $result = mysqli_query($link, $query) or die(mysqli_error($con));
?>
<div class="container3">
        <h2> Check out the recipes that others want to know:</h2>
        <?php
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                $name = $row['name'];
                $email = $row['email'];
                $recipe = $row['recipe'];
                
                echo "<div class='feedback2'>";
                echo "<span id='title3'>" . "The Recipe That " . $name . " Wanted to Know:"."</span>". "<br>";
                echo "Recipe Title: ". "<span id='name4'>" . $recipe ."</span>" . "<br>";
                echo "</div>";
            }
        ?>
</div>
    
    <div class="modal-container">
        <div class="space1">
            &nbsp;
        </div>
        <div class="space2">
            &nbsp;
        </div>
        <div class="header1">
            <h2> Popular Dishes From Our Cuisine:  </h2>
        </div>
            <div class="modal1">
            
                <img id="myImg1" onclick="imgOnClick()" src="../assets/images/fish.jpg" alt="Intolerance">

                <!-- The Modal -->
                <div id="myModal" class="modal">
                <span onclick="spanOnClick()" class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
                </div>
                <h3><i>Bengali Fish Curry</i>
                    <br> with turmeric and mustard
                </h3>

            </div>
            <div class="modal2">

                <img id="myImg2" onclick="imgOnClick2()" src="../assets/images/biriyani.jpg" alt="Hide">

                <div id="myModal2" class="modal">
                <span onclick="spanOnClick2()" class="close">&times;</span>
                <img class="modal-content" id="img02">
                <div id="caption"></div>
                </div>
                <h3><i>Classic Chicken Biriyani</i>
                    <br> made with basmati rice
                
                </h3>

            </div>
            <div class="modal3">
                <img id="myImg3" onclick="imgOnClick3()" src="../assets/images/payesh.jpg" alt="Peace">

                <!-- The Modal -->
                <div id="myModal3" class="modal">
                <span onclick="spanOnClick3()" class="close">&times;</span>
                <img class="modal-content" id="img03">
                <div id="caption"></div>
                </div>
                <h3><i>Payesh</i>
                    <br> rice pudding with cashews
                    
                </h3>
            
            </div>
        

    </div>
</div>


<?php
	include($path.'assets/inc/footer.php');
?>