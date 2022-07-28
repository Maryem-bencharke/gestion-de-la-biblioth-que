<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Sign up</title>
</head>
<body>
	<style>
body {
  background-image: url("./images/quotes-bckg.jpg");

  background-size: 100% 100%;
}
.login{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background:#c18f59;  
        border-radius: 15px ;  
          
}    
label{  
    color:  white;  
    font-size: 17px;  
}  
#email{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: white;  
  
  
}  
span{  
    color: white;  
    font-size: 17px;  
}  
a{  
    float: right;  
    background-color: grey;  
}

.fh5co-quotes {
  position: relative;
  padding: 135px 0 172px;
  text-align: center;
  background-image: url("../images/quotes-bckg.jpg");
  background-position: center;
  background-size: cover; }
  .fh5co-quotes::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #000;
    opacity: 0.9; }
  .fh5co-quotes .site-container {
    position: relative;
    z-index: 1; }
  .fh5co-quotes .universal-h2 {
    padding-bottom: 20px;
    margin-bottom: 30px;
    color: #fff !important; }
  .fh5co-quotes p {
    width: 43%;
    margin: 0 auto 45px;
    color: #fff;
    line-height: 24px; }
    @media (max-width: 620px) {
      .fh5co-quotes p {
        font-size: 14px;
        line-height: 19px; } }
  .fh5co-quotes img {
    margin: 0 auto 5px; }
  .fh5co-quotes h4 {
    margin-bottom: 5px;
    font-size: 25px;
    color: #c18f59; }
  .fh5co-quotes .slick-arrow {
    bottom: -8%; }
  .fh5co-quotes .slick-prev {
    left: 45.5%; }
    @media (max-width: 1150px) {
      .fh5co-quotes .slick-prev {
        left: 34%; } }
  .fh5co-quotes .slick-next {
    right: 45.5%; }
    @media (max-width: 1150px) {
      .fh5co-quotes .slick-next {
        right: 34%; } }
  @media (max-width: 1150px) {
    .fh5co-quotes {
      padding: 75px 0 95px; }
      .fh5co-quotes p {
        width: 90%; } }

.site-container {
  width: 1115px;
  margin: 0 auto; }
  @media (max-width: 1250px) {
    .site-container {
      width: 90%; } }

.about-me-slider {
  position: relative; }
  .about-me-slider .slick-arrow {
    position: absolute;
    bottom: -18%; }
  .about-me-slider .slick-prev {
    left: 40%; }
    @media (max-width: 520px) {
      .about-me-slider .slick-prev {
        left: 34%; } }
  .about-me-slider .slick-next {
    right: 40%; }
    @media (max-width: 520px) {
      .about-me-slider .slick-next {
        right: 34%; } }
		.universal-h2 {
  font-size: 48px;
  text-align: center;
  color: #222; }
  @media (max-width: 1250px) {
.universal-h2 {
      font-size: 38px; } }
  @media (max-width: 668px) {
.universal-h2 {
      font-size: 30px; } }

.universal-h2-bckg {
  background-image: url("../images/double-line.svg");
  background-repeat: no-repeat;
  background-position: center bottom; }
	</style>



<section class="fh5co-quotes">
		<div class="site-container">
			<div class="about-me-slider">
			<h2 class="universal-h2 universal-h2-bckg">Sign up</h2>
				<div class="login">    
					<form action=adduser.php method=Post ALIGN=left>    
                        <label><b>Nom complet    
						</b>    
						</label>    
						<input type="text" name="name">    
						<br><br>
						<label><b>Email    
						</b>    
						</label>    
						<input type="text" name="email">    
						<br><br> 
                        <label><b>Tel    
						</b>    
						</label>    
						<input type="tel" name="tel">    
						<br><br>  
                        <label><b>Date d'inscription    
						</b>    
						</label>    
						<input type="date" name="date" value="<?php  echo date('Y-m-d'); ?>">    
						<br><br>     
						<label><b>Password     
						</b>    
						</label>    
						<input type=password name=pass>    
						<br><br>    
						<input type=Submit value=validation>       
						<br><br>        
					</form>    
					
				</div>
			</div>
		</div>
</section>