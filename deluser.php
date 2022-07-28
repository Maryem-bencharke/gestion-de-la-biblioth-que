<?php
require "connexion.php";

foreach($_POST as $id)
	{
		$query="DELETE FROM utilisateur WHERE id=$id";
        $query_="DELETE FROM login WHERE id=$id";
        $rr = "select * from pret where 1";
        $res = mysqli_query($connect , $rr);
        while($pro = mysqli_fetch_row($res))
            {
                if ($pro[1]==$id) {
                    $titre=$pro[0];
                }
                $query3="update ouvrage set disponibilite='oui' where titre= '$titre'";
                mysqli_query($connect,$query3);

            }

        $query2="DELETE FROM pret WHERE id=$id";
        mysqli_query($connect,$query2);
		mysqli_query($connect,$query);
        mysqli_query($connect,$query_);

	}
mysqli_close($connect);
header('location:ouvrage.php');

?>