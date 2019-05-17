<?php

    session_start();

    $dbname = "host=localhost";
    $port = "port=5432";
    $host = "host =localhost";
    $credentials = "user=postgres password = senha";

    $conectabd = pg_connect("$host $port $dbname $credentials");

    if($conectabd) {

        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $pesq = pg_query("SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'");
        $rows = pg_num_rows($pesq);

        if($rows > 0){
            $_SESSION['login'] = $email;
            $_SESSION['senha'] = $senha;
            header('location:../basic.php');
    
        }else{
            unset ($_SESSION['login']);
            unset ($_SESSION['senha']);
            header('location:../login.php');
            
           
        }

    }
    else {
        echo pg_last_error($conectabd);
        exit;
    }


?>
