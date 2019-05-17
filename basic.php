<?php
    session_start();

?>
<!DOCTYPE html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Aqui Vende-se</title>
  <meta name="description" content="Site de vendas em que você pode confiar">
  <meta name="keywords" content="">

  <!-- Mobile viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <!-- Fontes do google  - www.google.com/fonts.!-->
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Ubuntu' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="js/flexslider/flexslider.css">
  <link rel="stylesheet" href="css/basic-style.css">
  <script src="js/libs/modernizr-2.6.2.min.js"></script>
 <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
-->
</head>

<body id="home">
  
<!-- header area -->
<?php include("./include/nav_bar.php"); ?>    
<!-- end header -->
 
 
<!-- hero area (the grey one with a slider -->
    <section id="hero" class="clearfix">    
    <!-- responsive FlexSlider image slideshow -->
    <div class="wrapper">
       <div class="row"> 
        <div class="grid_5">
            <h1>Promoções</h1>
            <p>O Aqui vende-se oferece as melhores promoções e descontos pra você.<br>Para ter um maior proveito e melhor experiencia em nosso site recomendamos que faça o cadastro para que assim no momento da compra seja tudo o mais facil e pratico possivel!
            </p>
            <p><a href="register.php" class="buttonlink">Cadastro</a> <a href="promo.php" class="buttonlink">Mais promoções</a></p>
        </div>
        <div class="grid_7 rightfloat">
              <div class="flexslider">
                  <ul class="slides">
                      <li>
                          <a href="#"> <img src="imagens/basic-pic1.jpg" /></a>
                          <p class="flex-caption">Compre agora seu notebook novo. Clique e saiba mais.</p>
                      </li>
                      <li>
                          <a href="#"><img src="imagens/basic-pic2.jpg" /></a>
                          <p class="flex-caption">Muita diversão para sua familia. Clique aqui e adquira já!</p>
                      </li>
                      <li>
                          <img src="imagens/basic-pic3.jpg" />
                          <p class="flex-caption">Precisa de um smartphone novo? Confira aqui.</p>
                      </li>
                      <li>
                          <img src="imagens/basic-pic4.jpg" />
                          <p class="flex-caption">Placas de Video com o melho desempenho para seus games.</p>
                      </li>
                  </ul>
                </div><!-- FlexSlider -->
              </div><!-- end grid_7 -->
        </div><!-- end row -->
       </div><!-- end wrapper -->
    </section><!-- end hero area -->





<!-- main content area -->   
<div id="main" class="wrapper">

<?php
  $var = "computadores";
  $var1 = "consoles";
  $var2 = "smartphones";
                    
?>
    
    
<!-- content area -->    
	<section id="content" class="wide-content">
      <div class="row">	
        
        <div class="grid_4">
          <h1 class="first-header">Computadores</h1>
          <?php echo "<a href='produtos.php?pesq=$var'>"; ?>
            <img src="imagens/basic-pic1.jpg" /></a>
            <p>Seção de Computadores</p>
        </div>
        
        
        
        <div class="grid_4">
          <h1 class="first-header">Entretenimento</h1>
          <?php echo "<a href='produtos.php?pesq=$var1'>"; ?>
            <img src="imagens/basic-pic2.jpg" /></a>
            <p>Seção onde voce encontra produtos destinados a lazer e entretenimento</p>
        </div>
        
        
        
        <div class="grid_4">
          <h1 class="first-header">Smartphones</h1>
          <?php echo "<a href='produtos.php?pesq=$var2'>"; ?>
            <img src="imagens/basic-pic3.jpg" /></a>
            <p>Seção onde voce encontra o smartphone ideal pra voce</p>
        </div>
        
	  </div><!-- end row -->
	</section><!-- end content area -->   
      
      
    
    
      
  </div><!-- #end div #main .wrapper -->


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