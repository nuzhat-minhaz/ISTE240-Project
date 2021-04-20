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

    
    if(isset($_POST['country']) && $_POST['country']!=''){
        $country = $_POST['country'];
    }else{
        die("country not provided");
    }

    if(isset($_POST['comment']) && $_POST['comment']!=''){
        $comment = $_POST['comment'];
    }else{
        die("feedback not provided");
    }

    if(isset($_POST['views']) && $_POST['views']!=''){
        $views = $_POST['views'];
    }else{
        die("thoughts on culture not provided :(");
    }

    if(isset($_POST['eager']) && $_POST['eager']!=''){
        $eager = $_POST['eager'];
    }else{
        die("'what are you eager to know more about' not provided");
    }

    $query = "INSERT INTO `askaway`(`id`, `name`, `country`, `comment`, `views`, `eager`) VALUES (NULL, '".$name."','".$country."','".$comment."','".$views."','".$eager."')";

    $result = mysqli_query($link, $query) or die(mysqli_error($con));
    header("Location: askaway.php");

?>
