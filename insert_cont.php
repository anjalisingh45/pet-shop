<?php

if(isset($_POST['submit'])) 

$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];

include("config.php");

$insert="insert into tbl_contact(`id`,`name`,`email`,`subject`,
`message`)
values('null','".$a."','".$b."','".$c."','".$d."')";
if(!mysql_query($insert,$con))
	
{
	echo"Data not inserted";
	
}
else
{
	echo "<h1>Thank you for Message &#x1F60A;...!</h1>";
	header("refresh:3;url=index.html");
	exit;
}
 mysql_close($con);
 ?>



