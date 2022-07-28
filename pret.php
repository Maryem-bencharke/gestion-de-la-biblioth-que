<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/table.css">
    </head>

<body>

<?php
require_once 'connexion.php';

$query = "select * from pret where 1";
$result = mysqli_query($connect , $query);
echo "
        <section>
        <div id=wrapper>
    
      
      <div class=tbl-header>
      <table cellpadding=0 cellspacing=0 border=0>
        <thead>
          <tr>

            <th><span>Titre du livre non disponible</span></th>
            <th><span>Nom complet</span></th>
            <th><span>Date de prêt</span></th>
            <th><span>Date de retour</span></th>
          </tr>
        </thead>
        </table>
      </div>";
      echo"
      <div class=tbl-content>
          <table cellpadding=0 cellspacing=0 border=0>
          <tbody>
          <tr>";


while($pr=mysqli_fetch_row($result))
        {
            $nm = "select * from utilisateur where 1";
            $res = mysqli_query($connect , $nm);
            while($pro = mysqli_fetch_row($res))
            {
                if ($pro[0]==$pr[1]) {
                    $name=$pro[1];
                }
            }
            echo "<tr>";
            echo "<form action='returnall.php' method='POST'>";
            //echo "<td> <h4><input type='checkbox' name='$pr[0]' value='$pr[0]'></h4></td> ";
            echo "<td>" . $pr[0] . "</td>";
            echo "<td>" . $name . "</td>";
            echo "<td>" . $pr[2] . "</td>";
            echo "<td>" . $pr[3] . "</td>";
            echo "</tr>";
        }
echo "</tbody>  </table></div>
</section>"; 
//echo "<input type=image  align =right src=return.png height=60px width=60px>";
 echo "</form>";
mysqli_close($connect);
?>

</body>

</html>