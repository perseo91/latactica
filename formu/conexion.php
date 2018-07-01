<?php
function conectar () {
$host ="localhost";
$user= "root";
$pass="";
$db="primeraweb";
$connect=new mysqli($host,$user ,$pass , $db)or die("error" .mysqli_errno($connect));
 }
 ?>