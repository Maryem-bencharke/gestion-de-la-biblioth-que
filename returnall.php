<?php
require "connexion.php";

foreach($_POST as $titre)
	{
		$query="DELETE FROM pret WHERE titre='$titre'";
        
        $query2= "update ouvrage set disponibilite='oui' where titre like '%$titre%'";

		mysqli_query($connect,$query);
        mysqli_query($connect , $query2);
	}
mysqli_close($connect);
header('location:ouvrage.php');

?>