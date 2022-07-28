<?php
require 'connexion.php';
require 'param.php';
$titre = $_POST['titre'];
$date_de_publication = $_POST['date_de_publication'];
$edition = $_POST['edition'];
$auteur = $_POST['auteur'];
$numclass = $_POST['numclass'];
$disponibilite = $_POST['disponibilite'];
$couverture =$_FILES['couverture'];


echo $_FILES['couverture']['type'];
if($_FILES['couverture']['size'] > $maxfilesize)
{
    echo "error";
}
else if($_FILES['couverture']['type'] != 'image/jpeg' and $_FILES['couverture']['type'] != 'image/jpg'){
    echo "error2";
}


else{
    $path = uniqid();
    
    move_uploaded_file($_FILES['couverture']['tmp_name'],'photo/'.$path.'.jpg');

    
	$quer = "select * from classification where 1";
	$res1 = mysqli_query($connect,$quer);
    //echo "$quer";
    $num = $numclass;
    echo"$num";
    $bar = $num;
    echo"$bar";
    $query = "update ouvrage set titre='$titre',date_de_publication='$date_de_publication', edition='$edition',auteur='$auteur',numclass='$bar',disponibilite='$disponibilite',couverture='$path' where id =". $_POST['id'];
                        
    mysqli_query($connect,$query);
    mysqli_close($connect);
}

header('location:ouvrage.php')
?>



