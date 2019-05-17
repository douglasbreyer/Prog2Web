<!-- header area -->
    <header class="wrapper clearfix">
               
       
        <!-- main navigation -->
        <nav id="topnav" role="navigation">
          <div class="menu-toggle">Menu</div>  
          <ul class="srt-menu" id="menu-main-navigation">
              <li><a href="basic.php">Home</a></li>
              <li><a href="produtos.php">Produtos</a></li>
              <li><a href="#"><?php 
                if($_SESSION['login'] == '') $_SESSION['login'] = "Conta"; echo $_SESSION['login'];?></a>
                  <ul>
                      <li>
                          <a href="login.php"><?php if($_SESSION['login'] != '' and $_SESSION['login'] != "Conta") echo "Logout"; else echo "Login";?></a>
                      </li>
                      <li class="">
                          <a href="#">Carrinho</a>
                          <ul>
                              <li><a href="#">item 1</a></li>
                              <li><a href="#">item 2</a></li>
                              <li><a href="#">item 3</a></li>
                              <li><a href="#">item 4</a></li>
                              <li><a href="#">item 5</a></li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="sobre.php">Sobre</a>
              </li> 
          </ul>     
        </nav><!-- end main navigation -->
  
    </header><!-- end header --> 
