<!DOCTYPE html>
<html>

    <head>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/info.css">

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

	<title>Library</title>
                
    </head>

    <body >


    <meta charset="utf-8" />

    <?php
        require "connexion.php";
        $query = "select * from ouvrage where 1";
        $result = mysqli_query($connect , $query);
        require 'param.php'; 
        session_start();
        if (!isset ($_SESSION['user']))
            header('location:auth.php');
        
        if (time()- $_SESSION['LAT'] > $w)
            header('location:deconnexion.php');
        else
            $_SESSION['LAT']=time();


    echo "<h3 align=right>".'Welcome'.' '.$_SESSION['user']."</h3>"."<a href='deconnexion.php'><img align=right src=dec.png height=60px width=60px/></a>";
    if($_SESSION['droit']=='AD'){
        echo "<a href='user.php'><img align=right src=user.png height=60px width=60px/></a>";
        echo "<a href='pret.php'><img align=right src=pret.png height=60px width=60px/></a>";
        echo  "<a href='form.php'><img align=right src=add.jpg height=60px width=60px/></a>";
    }
    if($_SESSION['droit']=='U'){
      echo "<a href=infouser.php?name=".$_SESSION['user']."><img align=right src=user.jpg height=60px width=60px/></a>";
        echo "<a href=mespret.php?name=".$_SESSION['user']."><img align=right src=pret.png height=60px width=60px/></a>";

    }
    ?>

    <br>
    <center>
    <div class="footer-contact-form">
            <form class="contact-form" method="GET" action="recherche.php">
    
            <div class="contact-form__input">
            <tr><td><input type="text" name="recherche" placeholder="Rechercher" size="15">
            </div>
            <input type="submit" value="Rechercher" alt="Lancer la recherche!" class="submit-button"></td></tr>
            </form>
    </div>
    </center>   
    <br>


<?php  
if($_SESSION['droit']=='AD'){
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
        <th><span>Edit</span></th>
        <th><span>Delete</span></th>
      </tr>
    </thead>
    </table>
  </div>";
  echo"
  <div class=tbl-content>
      <table cellpadding=0 cellspacing=0 border=0>
      <tbody>
      <tr>";

    while($ouv=mysqli_fetch_row($result))
        {
          $clss = "select * from classification where 1";
          $res0 = mysqli_query($connect , $clss);
          while($pro = mysqli_fetch_row($res0))
          {
              if ($pro[0]==$ouv[5]) {
                  $class=$pro[1];
              }
          } 
            //echo "<td><input type='checkbox' name='prod[0]' value='$ouv[0]'/> <br /></td>";

            echo "<td>" . $ouv[0] . "</td>";

            echo "<td>" . $ouv[1] . "</td>";
    
            echo "<td>" . $ouv[2] . "</td>";
    
            echo "<td>" . $ouv[3] . "</td>";
    
            echo "<td>" . $ouv[4] . "</td>";
        
            echo "<td>" . $class  . "</td>";

            echo "<td>" . $ouv[6] . "</td>";
    
            echo "<td><img src=photo/$ouv[7].jpg height=100px width=100px ></td>";

            echo "<td><a href='edit.php?num=$ouv[0]'><img src=edit.png height=30px width=30px /></a></td>";
            echo "<td><a href='del.php?num=$ouv[0]'><img src=del.png height=30px width=30px /></a></td>";

            echo "</tr>";
        }

        echo "</tbody>  </table></div>
        </section>";  
}  

else{
  echo "<link rel='stylesheet' type='text/css' href='css/styleuser.css'>";

  echo "<div class=container><h3 class=title> Ouvrages </h3></div>";

    $em=$_SESSION['user'];
    //echo '<hr WIDTH="100%" SIZE="2" ALIGN="left" NOSHADE>';
    $nm = "select * from utilisateur where 1";
    $res = mysqli_query($connect , $nm);
    while($pro = mysqli_fetch_row($res))
    {
        if ($pro[2]==$em) {
            $name=$pro[1];
            }
    }
    
    while($vr=mysqli_fetch_row($result))
    {
      $clss = "select * from classification where 1";
      $res0 = mysqli_query($connect , $clss);
      while($pro = mysqli_fetch_row($res0))
      {
          if ($pro[0]==$vr[5]) {
              $class=$pro[1];
          }
      }

        

      echo"

      <div class=container>

   

   <div class=products-container>

      <div class=product data-name=p-1>";
      if ($vr[6]=='oui'){
        //$Date_de_pret = date('d-m-y h:i:s');
        //echo $Date_de_pret;
      echo "<a href='formbu.php?num=$vr[0] & name=$name'><img src=add2.png height=50px width=50px align=right /></a>";
    }
    echo"
        <img src=photo/$vr[7].jpg align=left height=300px width=300px>
        <h2><i><u>Informations de l ouvrage</u></i><h2>
        <br>
        <h3>Id: $vr[0]</h3>
				<h3>Titre:$vr[1]</h3>
        <h3>Date de publication: $vr[2]</h3>
        <h3>Edition:$vr[3]</h3>
        <h3>Auteur:$vr[4]</h3>
        <h3>Classification:$class</h3>
        <h3>Disponibilite:$vr[6]</h3>

         
      </div>
   </div>

</div>";


   
   
}
}

?>

</body>

</html>