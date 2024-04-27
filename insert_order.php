<?php
if(isset($_POST['submit'])) 
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $_POST["d"];
    $e = $_POST["e"];
    $f = $_POST["f"];
    $g = $_POST["g"];
    $h = $_POST["h"];
    $i = $_POST["i"];
    $j = $_POST["j"];

    include("config.php");

    $insert="insert into  tbl_order (`id`, `full_name`, `email`, `phone_no`, `today_date`, `pin_code`, `age`, `breed`, `address`, `gender`,`for_delivery`)
    values ('NULL', '".$a.".', '".$b."', '".$c."', '".$d."', '".$e."', '".$f."', '".$g."', '".$h."', '".$i."', '".$j."')";

    if(!mysql_query($insert,$con)) {
        echo "Order not successful";
    } else {
        echo "<h1>Order Succesdfully &#x2705;</h1>";
		
        header("refresh:5;url=index.html");
        exit;
    }
    mysql_close($con);
?> 
 