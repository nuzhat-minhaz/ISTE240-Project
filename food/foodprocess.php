<?php

    $link = mysqli_connect("localhost", "nxm1137", "lasthuman", "nxm1137");

    if (!$link){
        echo "Error: Unable to connect to mySQL." . PHP_EOL;
        echo "Debugging errno. " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging errno. " . mysqli_connect_errno() . PHP_EOL;
        exit;
    }

    if(isset($_POST['name']) && $_POST['name']!=''){
        $name = $_POST['name'];
        }else{
            die("name not provided");
        }

    
    if(isset($_POST['email']) && $_POST['email']!=''){
        $email = $_POST['email'];
    }else{
        die("email not provided");
    }

    if(isset($_POST['recipe']) && $_POST['recipe']!=''){
        $recipe = $_POST['recipe'];
    }else{
        die("recipe title not provided");
    }

    $query = "INSERT INTO `food`(`id`, `name`, `email`, `recipe`) VALUES (NULL, '".$name."','".$email."','".$recipe."')";


    $result = mysqli_query($link, $query) or die(mysqli_error($con));
    header("Location: food.php");

?>