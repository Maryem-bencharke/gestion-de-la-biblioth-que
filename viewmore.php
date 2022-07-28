<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slick.css">-->
	<title>Library</title>
</head>
<body>
    <style>
        *{
            margin:0;
            margin-bottom: 20px;
            padding:20;
            box-sizing:border-box;
        }
        body{
            font-size: 18px;
            background:white;
            font-family:"Calisto-MT";
            
        }
        @media (max-width: 1250px) {
        .container{
            width:96%;
            margin:20px auto;
        }
        .container:last-child {
        margin-right: 0; } 
        }

        .book{
            width:50%;
            float:left;
            background:5px;
            text-align: center;
            padding:10px;
            font-family: "Times New Roman", Times, serif;
            color : black;
        }
        .image{
            position: center;
            width: 15px;
            float:left;
        }
        table

        {

        border-style:solid;

        border-width:2px;

        border-color:#c18f59;

        }


    </style>
<section class="fh5co-books">
		<div class="site-container">
			<div class="books">
				<div class="single-book">
					<a href="#" class="single-book__img">
                        <?php
                        require "connexion.php";
                        $query = "select * from ouvrage where 1";
                        $result = mysqli_query($connect , $query);
                        
                        while($prod=mysqli_fetch_row($result)){
                            echo '<div class=container >';
                            echo '<div class=book >';
        

                            echo "<table>";
                            echo '<tr>';
                            
                            echo '<div class =image>';
                            echo "<td><a href='auth.php'><img src=photo/$prod[7].jpg height=200px width=200px alt=single book and cd></a>";
                            echo '</div>';
                            echo '<div class=content>';
                            echo "
                            <h4 >". $prod[1] . "</h4></td>";
                            echo '</tr>';
                            echo '</div>';
                            echo '</table>';
                            echo '</div>';
                            echo '</div>';
                            
                        }
                        

                       
                        ?>
				</div>
			</div>
		</div>
	</section>
</body>