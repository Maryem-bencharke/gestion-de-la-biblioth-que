<?php
require 'connexion.php';
require 'param.php';
//print_r($_POST);
$titre = $_POST['titre'];
$date_de_publication = $_POST['date_de_publication'];
$edition = $_POST['edition'];
$auteur = $_POST['auteur'];
$numclass = $_POST['numclass'];
$disponibilite = $_POST['disponibilite'];
$couverture =$_FILES['couverture'];


//echo $_FILES['couverture']['type'];
if($_FILES['couverture']['size'] > $maxfilesize)
{
    echo "error";
}
else if($_FILES['couverture']['type'] != 'image/jpeg' and $_FILES['couverture']['type'] != 'image/jpg'){
    echo "error2";
}
else{
    $path = uniqid();
    $quer = "select * from classification where 1";
	$res1 = mysqli_query($connect,$quer);
    $num = $numclass;
    $bar = $num;
    move_uploaded_file($_FILES['couverture']['tmp_name'], 'photo/'.$path.'.jpg');
    $query = "insert into ouvrage values (null , '$titre' , '$date_de_publication ' ,'$edition' , '$auteur', '$bar','$disponibilite','$path')";
    mysqli_query($connect , $query);
    mysqli_close($connect);
}

header('location:ouvrage.php')
?>


