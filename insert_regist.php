User
<?php
if(isset($_POST['submit'])) 
    // Get form data
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $_POST["d"];
    $e = $_POST["e"];
    $f = $_POST["f"];
    $g = $_POST["g"];


    include("config.php");

    // Insert query
    $insert = "insert into  tbl_regist (`id`, `name`, `email`,`phone`, `pet_type`, `service`, `payment`, `additional_info`)
               values ('null', '".$a."', '".$b."', '".$c."', '".$d."', '".$e."', '".$f."', '".$g."')";
    
    // Execute query
    if(!mysql_query($insert, $con)) {

        echo "Registration failed. Please try again.";
        
    } else {
       
        echo "<h1>Order Succesdfully Registered &#x2705;</h1>";
        header("refresh:5;url=index.html");
        exit;
    }
    
    // Close connection
    mysql_close($con);

?>