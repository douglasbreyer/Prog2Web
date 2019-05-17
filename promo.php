<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Promoções</title>

    <!--*********************************-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="js/flexslider/flexslider.css">
    <link rel="stylesheet" href="css/basic-style.css">

    <script src="js/libs/modernizr-2.6.2.min.js"></script>
 


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- header area -->
    <?php include("./include/nav_bar.php"); ?>    
    <!-- end header -->
 

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Promoções do Dia
                    <small>Até o fim do estoque</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->


        <?php 
            
            $dbname = "host=localhost";
            $port = "port=5432";
            $host = "host =localhost";
            $credentials = "user=postgres password = senha";

            $conectabd = pg_connect("$host $port $dbname $credentials");

            if($conectabd) {
                
                $pesq = pg_query("SELECT * FROM produto WHERE promocao = '1'");


                while($prod = pg_fetch_array($pesq)){

                    echo "<div class='row'>";
                        echo "<div class='col-md-7'>";
                            echo "<a href='#'>";
                                echo "<img class='img-responsive' src='$prod[11]' alt=''>";
                            echo "</a>";
                        echo "</div>";
                        echo "<div class='col-md-5'>";
                            echo "<h3>$prod[1]</h3>";
                            
                            echo "<p>$prod[2]</p>";

                            echo "<a class='btn btn-primary' href='#''>Compre Agora <span class='glyphicon glyphicon-chevron-right'></span></a>";
                        echo "</div>";
                    echo "</div>";

                    echo "<hr>";                    
                }
            }
        ?>

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>


    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js">\x3C/script>')</script>

    <script defer src="js/flexslider/jquery.flexslider-min.js"></script>

    <!-- fire ups - read this file!  -->   
    <script src="js/main.js"></script>

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

<!-- footer area -->  
        <?php include("./include/footer.php"); ?>

        <!-- #end footer area --> 


</html>
