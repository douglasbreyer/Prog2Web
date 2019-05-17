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
<link rel="stylesheet" href="js/flexslider/flexslider.css">
<link rel="stylesheet" href="css/basic-style.css">


<link href="css/register2.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/4-col-portfolio.css" rel="stylesheet">

<script src="js/libs/modernizr-2.6.2.min.js"></script>


</head>

<body id="home">

    <?php include("./include/nav_bar.php"); ?>


    <div class="container">
        <h1 class="well">Dados Complementares</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form id="register-form" action="php/insert_register_final.php" method="post" role="form">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Nome</label>
                                <input type="text" name="nome" id="nome" value="<?php echo $_SESSION['nome']; ?>" class="form-control">
                            </div>       
                        </div>     


                        <div class="row">
                            <div class="col-sm-8 form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" value="<?php echo $_SESSION['email']?>" class="form-control">
                            </div>  
                            <div class="col-sm-4 form-group">
                                <label>Senha</label>
                                <input type="password" name="senha" id="senha" value="<?php echo $_SESSION['senha']?>"  class="form-control">
                            </div>     
                        </div>     



                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Rua</label>
                                <input type="text" name="rua" id="rua" maxlength="50" placeholder="Entre com o nome da sua rua.." class="form-control">
                            </div>  
                            <div class="col-sm-4 form-group">
                                <label>Cidade</label>
                                <input type="text" name="cidade" id="cidade" maxlength="20" placeholder="Entre com o nome de sua cidade.." class="form-control">
                            </div>  
                            <div class="col-sm-2 form-group">
                                <label>Estado/Sigla</label>
                                <input type="text" name="estado" id="estado" maxlength="20" placeholder="Entre com o nome do seu estado.." class="form-control">
                            </div>      
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>CEP</label>
                                <input type="text" name="cep" id="cep" placeholder="Entre com seu CEP.." class="form-control">
                            </div>      
                            <div class="col-sm-6 form-group">
                                <label>Numero</label>
                                <input type="text" name="num" id="num" maxlength="5" placeholder="Entre com o numero de sua casa.." class="form-control">
                            </div>  
                        </div>                      
                        <div class="form-group">
                            <label>CPF</label>
                            <input type="text" name="cpf" id="cpf" maxlength="11" placeholder="Entre com seu CPF.." class="form-control">
                        </div>      
                       


                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="btn btn-lg btn-info" value="Register Now">
                            </div>
                        </div>




                    </div>
                </form> 
            </div>
        </div>
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
