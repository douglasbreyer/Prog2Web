<?php

    session_start();

    $dbname = "host=localhost";
    $port = "port=5432";
    $host = "host =localhost";
    $credentials = "user=postgres password = senha";

    $conectabd = pg_connect("$host $port $dbname $credentials");

    if ($conectabd) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $pesq = pg_query("SELECT * FROM cliente WHERE nome = '$nome' AND email = '$email'");
        $rows = pg_num_rows($pesq);

        if($rows > 0){
            echo "Lamentamos mas o usuario em questão ja existe" . "<br/>";
            echo $nome . "<br/>";
            echo $email . "<br/>";
    
        }else{
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('location:../register2.php');


            $ver = pg_exec($conectabd, $sql);
            if($ver){
                echo "funfou";
            }
            else {
                echo "deu ruim";
            }

           
        }

    }
    else {
        echo pg_last_error($conectabd);
        exit;
    }


?>
