<?php
    $conectabd = pg_connect("host=localhost dbname=aqui_vendese");

    if ($conectabd) {
    	//Caso queira Imprimir na Tela a mensagem, retirar o comentário
        //echo "Conectado com: " . pg_host($conectabd) . "<br/> ";
    }
    else{
        echo pg_last_error($conectabd);
        exit;
    }
?>