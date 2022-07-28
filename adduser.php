<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>

	</head>
	<body>
		<?php
		require 'connexion.php';
		$Nom_complet = $_POST['name'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$date= $_POST['date'];
		$pass = $_POST['pass'];
        
		$query = "insert into utilisateur values('' , '$Nom_complet' , '$email' ,'$tel' , '$date');";
        $query2="insert into login values('','$email',md5('$pass'),'U');";
		//trace($query);
		mysqli_query($connect , $query);
        mysqli_query($connect , $query2);
		mysqli_close($connect);
		header('location:auth.php');
		?>
	</body>
</html>