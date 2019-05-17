<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">



<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/basic-style.css">


<link href="css/4-col-portfolio.css" rel="stylesheet">

 

</head>

<body>

 <?php include("./include/nav_bar.php"); ?>



    <?php 
            
            $dbname = "host=localhost";
            $port = "port=5432";
            $host = "host =localhost";
            $credentials = "user=postgres password = senha";

            $conectabd = pg_connect("$host $port $dbname $credentials");
            $id = $_GET["id"];

            if($conectabd) {
                
                $pesq = pg_query("SELECT * FROM produto WHERE '{$id}' = codp");

                $prod = pg_fetch_row($pesq);
            }
        ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $prod[1]; ?></h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="<?php echo $prod[10];?>" alt="">
            </div>

            <div class="col-md-4">
                <p><?php echo $prod[2];?></p>
                <p><strong><?php echo $prod[7];?></strong></p>
                <h3>Detalhes de produto</h3>
                <?php
                    echo "<ul>";
                        echo "<li> Cor: $prod[3]</li>";
                        echo "<li>Peso do pacote: $prod[5]</li>";
                        echo "<li>Marca: $prod[8]</li>";                    
                    echo "</ul>";

                ?>
                <a href="compra.php?" class="btn btn-primary btn-lg active" role="button">Comprar</a>
            </div>

        </div>


        <hr>

        

    </div>

    <!-- footer area -->
        <?php include("./include/footer.php"); ?>
        <!-- #end footer area -->



</body>

</html>