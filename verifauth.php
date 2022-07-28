<?php
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	require 'connexion.php';
	$pwd = md5($pass);
	$query = "select count(*) from login where email='$email' and password='$pwd'";
	$droit= "select droit from login where email='$email'";
	$result=mysqli_query($connect , $query);
	$result2=mysqli_query($connect,$droit);
	$data = mysqli_fetch_row($result);
	$data2 = mysqli_fetch_row($result2);
	if ($data[0] =='1'){
		session_start();
		$_SESSION['user']=$email;
		$_SESSION['LAT']=time();
		$_SESSION['droit']=$data2[0];
		header('location:ouvrage.php');
	}
	else
		header('location:auth.php');

?>
	
