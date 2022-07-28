<?php
		require "connexion.php";
    $mail=$_GET['name'];
    echo "<link rel='stylesheet' type='text/css' href='css/info.css'>";
		$query="select * from utilisateur where Email ='$mail';";
		$result = mysqli_query($connect,$query);
    
		
		
while($inf=mysqli_fetch_row($result))
{
echo"
<div class=col-xl-8 order-xl-1>
          <div class=card bg-secondary shadow>
            <div class=card-header bg-white border-0>
              <div class=row align-items-center>
                <div class=col-8>
                  <h3 class=mb-0>Ma session</h3>
                </div>
       
              </div>
            </div>
            <div class=card-body>
              <form>
                <h6 class=heading-small text-muted mbmail>Information de l'utilisateur</h6>
                <div class=pl-lg-4>
                <div class=row>
                <div class=col-lg-6>
                  <div class=form-group>
                    <label class=form-control-label for=input-email>Id</label>
                    <input type=text value=$inf[0] class=form-control form-control-alternative >
                  </div>
                </div>
              </div>

                  <div class=row>
                  <div class=col-lg-6>
                      <div class=form-group>
                        <label class=form-control-label for=input-email>Email address</label>
                        <input type=email id=input-email value=$inf[2] class=form-control form-control-alternative placeholder=@example.com>
                      </div>
                    </div>
                  </div>
                    
                  <div class=row>
                    <div class=col-lg-6>
                      <div class=form-group focused>
                        <label class=form-control-label for=input-first-name>Nom complet</label>
                        <input type=text id=input-first-name  value=$inf[1] class=form-control form-control-alternative placeholder=First name value=Lucky>
                      </div>
                    </div>
                    <div class=row>
                    <div class=col-lg-6>
                      <div class=form-group>
                        <label class=form-control-label for=input-email>Date d'inscription</label>
                        <input type=date value=$inf[4] >
                      </div>
                    </div>
                  </div>
                   
                 
                  </div>
                </div>
                <hr class=my-4>";
}



                ?>