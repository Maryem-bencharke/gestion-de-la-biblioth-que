<!DOCTYPE html>
<html>
<head>
<title>Resultat de la recherche</title>
</head>
<body>
<head>
<link rel="stylesheet" href="css/table.css">
    </head>
<?php

require "connexion.php";

session_start();
$query = "select * from ouvrage where 1";
$result = mysqli_query($connect , $query);
if($_SESSION['droit']=='AD'){
    if (isset($_GET['recherche'])){

        $recherche = $_GET['recherche'];
        $query = "select * from ouvrage where ((titre LIKE '%$recherche%') OR (auteur LIKE '%$recherche%')) ";
        $result = mysqli_query($connect , $query);
        echo "
        <section>
        <div id=wrapper>
    
      
      <div class=tbl-header>
      <table cellpadding=0 cellspacing=0 border=0>
        <thead>
          <tr>
            <th><span>Id</span></th>
            <th><span>Titre</span></th>
            <th><span>Date de publication</span></th>
            <th><span>Edition</span></th>
            <th><span>Auteur</span></th>
            <th><span>Classification</span></th>
            <th><span>Disponibilite</span></th>
            <th><span>Couverture</span></th>
          </tr>
        </thead>
        </table>
      </div>";
      echo"
      <div class=tbl-content>
          <table cellpadding=0 cellspacing=0 border=0>
          <tbody>
          <tr>";
        while ($prod=mysqli_fetch_row($result))
        {
                /*$nm = "select * from pret where 1";
                $res = mysqli_query($connect , $nm);
            
                while($pro = mysqli_fetch_row($res))
                {
                    $id_user = $pro[1];
                }
                */
           
            echo "<td>" . $prod[0] . "</td>";
            echo "<td>" . $prod[1]. "</td>"; 
            echo "<td>" . $prod[2] . "</td>";    
            echo "<td>" . $prod[3] . "</td>";
            echo "<td>" . $prod[4] . "</td>";
            echo "<td>" . $prod[5] . "</td>";
            echo "<td>" . $prod[6] . "</td>";
            echo "<td><img src=photo/$prod[7].jpg height=60px width=60px ></td>";
  
            
                
            echo "</tr>";
            }   
        }
        
        echo "</tbody>  </table></div>
        </section>";  

        //$result = mysqli_query($connect , $query);

    }


$quer = "select * from ouvrage where 1";
$res1 = mysqli_query($connect , $quer);
if($_SESSION['droit']=='U'){
    if (isset($_GET['recherche'])){
        $recherche = $_GET['recherche'];
        $quer = "select * from ouvrage  where ((titre LIKE '%$recherche%') OR (auteur LIKE '%$recherche%'))";
        $res1 = mysqli_query($connect , $quer);
        echo "
        <section>
        <div id=wrapper>
    
      
      <div class=tbl-header>
      <table cellpadding=0 cellspacing=0 border=0>
        <thead>
          <tr>
            <th><span>Id</span></th>
            <th><span>Titre</span></th>
            <th><span>Date de publication</span></th>
            <th><span>Edition</span></th>
            <th><span>Auteur</span></th>
            <th><span>Classification</span></th>
            <th><span>Disponibilite</span></th>
            <th><span>Couverture</span></th>

          </tr>
        </thead>
        </table>
      </div>";
      echo"
      <div class=tbl-content>
          <table cellpadding=0 cellspacing=0 border=0>
          <tbody>
          <tr>";
        while ($prod=mysqli_fetch_row($res1))
            {
            
                echo "<tr>";
                echo "<td>" . $prod[0] . "</td>";
                echo "<td>" . $prod[1]. "</td>"; 
                echo "<td>" . $prod[2] . "</td>";    
                echo "<td>" . $prod[3] . "</td>";
                echo "<td>" . $prod[4] . "</td>";
                echo "<td>" . $prod[5] . "</td>";
                echo "<td>" . $prod[6] . "</td>";
                echo "<td><img src=photo/$prod[7].jpg height=60px width=60px ></td>";
                
                echo "</tr>";
            }
            
        }
        echo "</tbody>  </table></div>
        </section>";  
    
}


?>
</table>
</body>
</html>