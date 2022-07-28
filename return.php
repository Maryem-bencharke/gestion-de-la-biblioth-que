<?php
require "connexion.php";
$t= $_GET['titre'];
echo $t;

$query = "delete from pret where titre like '%$t%'"; 
$query2= "update ouvrage set disponibilite='oui' where titre like '%$t%'";

mysqli_query($connect , $query);
mysqli_query($connect , $query2);
mysqli_close($connect);
header('location:ouvrage.php');

?>