<?php
require "connexion.php";

$id = $_POST['id'];
$name=$_POST['name'];

$Date_de_pret = $_POST['Date_de_pret'];
$Date_de_retour = $_POST['Date_de_retour'];

$quer_="select * from ouvrage where id = $id;";
$res_ = mysqli_query($connect,$quer_);
while($d = mysqli_fetch_row($res_))
    {
        if ($d[6]=='oui'){
       {

        $quer1="select titre from ouvrage where id = $id";
        $res1 = mysqli_query($connect,$quer1);
        while($tt = mysqli_fetch_row($res1))
            {
            $titre=$tt[0];
            }

        $quer2="SELECT `id` FROM `utilisateur` WHERE `Nom complet`='$name';";
        $res2 = mysqli_query($connect,$quer2);
        while($nn = mysqli_fetch_row($res2))
        {
        $id=$nn[0];
        }

        $quer = "insert into pret VALUES('$titre' , '$id' , '$Date_de_pret' , '$Date_de_retour');";
        //echo $quer;
        mysqli_query($connect , $quer);

        $query = "update ouvrage set disponibilite='non' where titre='$titre';";
        //echo $query;
        mysqli_query($connect , $query);

        mysqli_close($connect);
       }
    }
    else{
        echo 'L ouvrage est non disponible';
        
    }
}


header('location:ouvrage.php');
?>