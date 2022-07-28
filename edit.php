
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ajouter un livre</title>
		<link rel="stylesheet" href="css/table.css">
    <script language=javascript>
        // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
        $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({'padding-right':scrollWidth});
        }).resize();
    </script>
    <style>
        .footer-contact-form {
  width: 50%; }
  .footer-contact-form .contact-form__input {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px; }
    .footer-contact-form .contact-form__input input {
      width: 40%;
      padding: 20px;
      border: 1px solid #404040;
      background-color: #282828;
      color: #c18f59; }
      .footer-contact-form .contact-form__input input::placeholder {
        color: #aaa; }
      @media (max-width: 1250px) {
        .footer-contact-form .contact-form__input input {
          width: 45%; } }
      @media (max-width: 520px) {
        .footer-contact-form .contact-form__input input {
          width: 100%; } }
  .footer-contact-form textarea {
    box-sizing: border-box;
    height: 90px;
    width: 100%;
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #404040;
    background-color: #282828;
    resize: none;
    color: #c18f59; }
  .footer-contact-form .submit-button {
    padding: 19px 50px;
    text-transform: uppercase;
    font-size: 12px;
    color: #fff;
    background-color: #c18f59;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: 0.3s ease; }
    .footer-contact-form .submit-button:hover {
      background-color: #777; }
  @media (max-width: 1250px) {
    .footer-contact-form {
      width: 100%; } }

        
    </style>
		
	</head>

	<body style="text-align:center;">
	
    <?php
		require "connexion.php";
		$query="select * from ouvrage where id =". $_GET['num'];
		$result = mysqli_query($connect,$query);
		$ouv=mysqli_fetch_row($result);
		?> 
		<form action=update.php method="POST" enctype="multipart/form-data">
		<table>
            <tr><td  width=10%><th ALIGN="LEFT">id</th></td><td><input type="text" name="id" value="<?php echo $ouv[0]?>"></td></tr>
			<tr><td><th ALIGN="LEFT">titre</th></td><td><input type="text" name="titre" value="<?php echo $ouv[1]?>"></td></tr>
			<br>
			<tr><td><th ALIGN="LEFT">Date de publication</th></td><td><input type="date" name="date_de_publication" value="<?php echo $ouv[2]?>"></textarea></td></tr>
			<tr><td ><th ALIGN="LEFT">edition</th></td><td><input type="text" name="edition" value="<?php echo $ouv[3]?>"></textarea></td></tr>
			<tr><td><th ALIGN="LEFT">auteur</th></td><td><input type="text" name="auteur" value="<?php echo $ouv[4]?>"></textarea></td></tr>
			<tr><td><th ALIGN="LEFT">Classification</th></td>
			<td>
				<select name="numclass">
			<?php
						$query1 = "select categorie from classification where num=$ouv[5]";
						$result1 = mysqli_query($connect,$query1);
						$s=mysqli_fetch_row($result1);
						echo "<option value=$s[0]>$s[0]</option>";
						
		                $query = "select * from classification";
		                $result = mysqli_query($connect,$query);
		                while( $cat=mysqli_fetch_row($result)){
		                    echo "<option value=$cat[0]>$cat[1]</opion>";
		                }
			?>
			</select></td>
            <tr><td><th ALIGN="LEFT">disponibilite</th></td>
            <td><?php 
					if ($ouv[6]=='non'){
					echo "<input name=disponibilite value=oui type=radio>oui";
					echo "<input name=disponibilite value=non type=radio checked=yes>non";}
					else{
					
					echo "<input name=disponibilite value=oui type=radio checked=yes>oui";
          echo "<input name=disponibilite value=non type=radio>non";
					}
                        
                    ?>
                </td></tr>

			<tr><td  width=10%><th ALIGN="LEFT">couverture</th></td><td><input type="file" name="couverture"></td></tr>
			<tr><td><th ALIGN="LEFT"><input type="Submit" value="validation"></th></td>
				<td><th><input type="reset" value="Annulation"></th></td></tr>

		</table>
	</body>
</html>


