
<?php
require "connexion.php";
$query="select * from classification where 1";
$result = mysqli_query($connect,$query);
//header('location:add.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script>
      	function validation() {
        
        if (document.forms['form'].titre.value == "")
            {
                alert("Attention, le champ titre  est vide!");
                return false;
            }
            if (document.forms['form'].edition.value == "")
            {
                alert("Attention, le champ edition est vide!");
                return false;
            }
            if (document.forms['form'].auteur.value == "" )
            {
                alert("Attention, le champ de l'auteur n'est pas remplie!");
                return false;
            }
        return true;
      }
    </script>
    <link rel="stylesheet" href="css/table.css">
    <script language=javascript>
    
        $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({'padding-right':scrollWidth});
        }).resize();
    </script>
    <title>ajouter un livre</title>
		
	</head>

	<body>
		<form action=add.php method="POST" enctype="multipart/form-data" name="form" onsubmit="return validation()">
		<table>
			<tr><td  width=10%><th ALIGN="LEFT">titre</th></td><td><input type="text" name="titre" option='required'></td></tr>
			<br>
			<tr><td ><th ALIGN="LEFT">Date de publication</th></td><td><input type="date" name="date_de_publication"></textarea></td></tr>
			<tr><td><th ALIGN="LEFT">edition</th></td><td><input type="text" name="edition"></textarea></td></tr>
			<tr><td><th ALIGN="LEFT">auteur</th></td><td><input type="text" name="auteur"></textarea></td></tr>
            <tr>
			<tr><td><th ALIGN="LEFT">Classification</th></td>
			<td>
			<select name="numclass">
            	<option value="0"> choisir</option>
			<?php
		                $query = "select * from classification";
		                $result = mysqli_query($connect,$query);
		                while( $cat=mysqli_fetch_row($result)){
		                    echo "<option value=$cat[0]>$cat[1]</opion>";
		                }
			?>
			</select></td>
			<tr><td><th ALIGN="LEFT">disponibilite</th></td><td>oui<input type="radio" name="disponibilite" value="oui" checked="Yes"></td>
			<td>non<input type="radio" name="disponibilite" value="non"></td></tr>
			<tr><td  width=10%><th ALIGN="LEFT">couverture</th></td><td><input type="file" name="couverture" ></td></tr>
			<tr><td><th ALIGN="LEFT"><input type="Submit" value="validation"></th></td>
				<td><th><input type="reset" value="Annulation"></th></td></tr>

        
		</table>
		
	</body>
</html>
