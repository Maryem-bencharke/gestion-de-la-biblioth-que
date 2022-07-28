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

	<body>
    
    
        <?php 
        $m = $_GET['num'];
        $s=$_GET['name'];
	
		?>
		<form action=addbu.php method="Post" name="form" onsubmit="return validation()">
		<table>
            <tr><td  width=10%><th ALIGN="LEFT">id de l'ouvrage</th></td><td><input type="text" name="id" value="<?php echo $m?>"></td></tr>
			<tr><td  width=10%><th ALIGN="LEFT">Nom complet</th></td><td><input type="text" name="name" value="<?php echo $s?>"></td></tr></textarea></td></tr>
			<tr><td ><th ALIGN="LEFT">Date de pret</th></td><td><input type="date" name="Date_de_pret" value="<?php  echo date('Y-m-d'); ?>" >
            <tr><td ><th ALIGN="LEFT">Date de retour</th></td><td><input type="date" name="Date_de_retour" value="<?php  echo date('Y-m-d' , strtotime(' + 15 days')); ?>"></textarea></td></tr>

			<tr><td><th ALIGN="LEFT"><input type="Submit" value="validation"></th></td>
				<td><th><input type="reset" value="Annulation"></th></td></tr>

        
		</table> 
		
	</body>
</html>
