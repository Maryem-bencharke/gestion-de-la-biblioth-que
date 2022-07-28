<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/table.css">
    </head>

<body>

<?php
require_once 'connexion.php';

$er = "select * from utilisateur where 1";
$res1 = mysqli_query($connect , $er);
while($pro = mysqli_fetch_row($res1))
{
    if ($pro[2]==$_GET['name']) {
        $id=$pro[0];
    }
}

$query = "select * from pret where id=$id";
$result = mysqli_query($connect , $query);
echo "
        <section>
        <div id=wrapper>
    
      
      <div class=tbl-header>
      <table cellpadding=0 cellspacing=0 border=0>
        <thead>
          <tr>
            <th><span>Select</span></th>
            <th><span>Titre du livre non disponible</span></th>
            <th><span>Date de prêt</span></th>
            <th><span>Date de retour</span></th>
            <th><span>Retour</span></th>
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
            echo "<tr>";
            echo "<form action='returnall.php' method='POST'>";
            echo "<td> <h4><input type='checkbox' name='$pr[0]' value='$pr[0]'></h4></td> ";
            echo "<td>" . $pr[0] . "</td>";
            echo "<td>" . $pr[2] . "</td>";
            echo "<td>" . $pr[3] . "</td>";
            echo "<td><a href='return.php?titre=$pr[0]'><img align=center src=return.png height=30px width=30px/></a></td>";
            echo "</tr>";
        }
echo "</tbody>  </table></div>
</section>"; 

 echo "<input type=image  align =right src=return.png height=60px width=60px>";
 echo "</form>";
 
mysqli_close($connect);
?>
        
</body>
        
</html>