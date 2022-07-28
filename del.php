<?php
require "connexion.php";
$m = $_GET['num'];

$query = "delete from ouvrage where id = $m"; 
//$result = mysqli_query($connect , $query);
mysqli_query($connect , $query);
mysqli_close($connect);
header('location:ouvrage.php');

?>