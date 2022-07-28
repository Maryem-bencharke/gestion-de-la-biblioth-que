<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/table.css">
    </head>

<body>

<?php
require_once 'connexion.php';
$query = "select * from utilisateur where 1";
$result = mysqli_query($connect , $query);
echo "
        <section>
        <div id=wrapper>
    
      
      <div class=tbl-header>
      <table cellpadding=0 cellspacing=0 border=0>
        <thead>
          <tr>
        
            <th><span>Id</span></th>
            <th><span>Nom complet</span></th>
            <th><span>Email</span></th>
            <th><span>Tel</span></th>
            <th><span>Date d'inscription</span></th>
           
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
        //echo "<form action='deluser.php' method='POST'>";
        //echo "<td> <h4><input type='checkbox' name='$pr[0]' value='$pr[0]'></h4></td> ";
        echo "<td>" . $pr[0] . "</td>";
        echo "<td>" . $pr[1] . "</td>";
        echo "<td>" . $pr[2] . "</td>";
        echo "<td>" . $pr[3] . "</td>";
        echo "<td>" . $pr[4] . "</td>";
        
        echo "</tr>";

    }
echo "</tbody>  </table></div>
</section>"; 
//echo "<input type=image  align =right src=del.png height=60px width=60px>";
//echo "</form>";
mysqli_close($connect);
?>

</body>

</html>