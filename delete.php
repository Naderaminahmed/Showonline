<?php

$namephoto=$_GET['namephoto'];


if(isset($_GET['namephoto'])){
$select="delete from photo where namephoto=$namephoto";
 $con1=mysqli_connect("localhost","root","","showonline");
mysqli_query($con1,$select);
header("location:http://localhost/webproject/manage.php");
die();

}

?>