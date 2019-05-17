<?php
    session_start();

?>
<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Produtos</title>
<meta name="description" content="#">
<meta name="keywords" content="">

<!-- Mobile viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Ubuntu' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/basic-style.css">


<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/4-col-portfolio.css" rel="stylesheet">

<script src="js/libs/modernizr-2.6.2.min.js"></script>



</head>

<body id="home">

 <?php include("./include/nav_bar.php"); ?>


    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                <?php 
                    if(!$pesq) echo "Produtos"; 
                    else echo $pesq;      //NAO SEI PQ ISSO AQUI N ESTA FUNCCIONANDO '-'
                ?>

                </h1>
            </div>
        </div>





        <div class="row">
        <?php 
            $dbname = "host=localhost";
            $port = "port=5432";
            $host = "host =localhost";
            $credentials = "user=postgres password = senha";

            $conectabd = pg_connect("$host $port $dbname $credentials");
            
            if($conectabd){
                $promo = pg_query("SELECT * FROM produto WHERE promocao = '1'");

                $promo = pg_fetch_row($promo);                
            }


            echo "<div class='col-md-9'>";
                echo "<div class='col-md-7'>";
                    echo "<a href='#'>";
                        echo "<img class='img-responsive' src='$promo[11]' alt=''>";
                    echo "</a>";
                echo "</div>";
                echo "<div class='col-md-5'>";
                    echo "<h3>$promo[1]</h3>";
                       
                    echo "<p></p>";
                    echo "<a class='btn btn-primary' href='#'>Compre Agora <span class='glyphicon glyphicon-chevron-right'></span></a>";
                echo "</div>";
            echo "</div>";
        ?>
            <div class="col-md-3">
                <h2>Filtrar</h2>
                    <nav id="secondary-navigation">
                        <ul>
                            <?php
                                $var = "computadores";
                                $var1 = "consoles";
                                $var2 = "perifericos";
                                $var3 = "smartphones";

                                echo "<li><a href='produtos.php?pesq=$var'>Computadores</a></li>";
                                echo "<li><a href='produtos.php?pesq=$var1'>Consoles</a></li>";
                                echo "<li><a href='produtos.php?pesq=$var2'>Periféricos</a></li>";
                                echo "<li><a href='produtos.php?pesq=$var3'>Smartphones</a></li>";
                    
                            ?>
                        </ul>
                    </nav>

            </div>
        </div>
        <hr>


        <?php 
            
            $dbname = "host=localhost";
            $port = "port=5432";
            $host = "host =localhost";
            $credentials = "user=postgres password = senha";

            $conectabd = pg_connect("$host $port $dbname $credentials");

            if($conectabd) {

                $pesq = $_GET["pesq"];

                if(!$pesq) $pesq = pg_query("SELECT * FROM produto");
                else $pesq = pg_query("SELECT * FROM produto WHERE categoria = '$pesq'");
                



                $count = 0;

                while($prod = pg_fetch_array($pesq)){
                    if($count == 0){
                        echo "<div class='row'>";
                    }
                    echo "<div class='col-sm-3 col-lg-3 col-md-3'>";
                        echo "<a href='produto.php?id=$prod[0]'><div class='thumbnail'>";
                            echo "<img src='$prod[10]' alt='' id='img'>";
                                echo "<div class='caption'>";
                                    echo "<h4>$prod[1]</h4>";
                                    echo "<h4>$prod[7]</h4>";
                                    //echo "<p>$prod[2];.</p>";    
                                echo "</div>";
                            echo "</div></a>";
                        echo "</div>";
                    //echo "</div>";
                    
                    $count++;
                    if($count == 4){
                        $count = 0;
                        echo "</div>";
                    }
                }
            }
        ?>



        </div> 

        <!-- footer area -->
        <?php include("./include/footer.php"); ?>
        <!-- #end footer area -->

        <!-- jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js">\x3C/script>')</script>

        <script defer src="js/flexslider/jquery.flexslider-min.js"></script>

        <!-- fire ups - read this file!  -->
        <script src="js/main.js"></script>


</body>

</html>
