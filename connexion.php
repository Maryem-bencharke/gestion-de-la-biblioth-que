<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','projet_web');

$connect = mysqli_connect(HOST,USER,PASS,DB);
if($connect == FALSE)
    {echo "probleme de connexion"; exit();}
?>
