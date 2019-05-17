<?php

    session_start();

    $dbname = "host=localhost";
    $port = "port=5432";
    $host = "host =localhost";
    $credentials = "user=postgres password = senha";

    $conectabd = pg_connect("$host $port $dbname $credentials");

    if ($conectabd) {

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $rua = $_POST['rua'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];
        $num = $_POST['num'];
        

        if(!empty($nome) and !empty($email) and !empty($senha) and !empty($rua) and !empty($cidade) and !empty($estado) and !empty($cep) and !empty($num) and !empty($cpf)){


            $user = "INSERT INTO cliente (nome, email, senha, cpf)
                VALUES ('$nome', '$email', '$senha', '$cpf')";

            $ender = "INSERT INTO endereco(cep, rua, numero, cidade, estado)
                VALUES ('$cep', '$rua', '$numero', '$cidade', '$estado')";

            if(pg_exec($conectabd, $user)){
                //header('location:../basic.php');
                echo "Usuario inserido com sucesso<br/>";
                if(pg_exec($conectabd, $ender)){
                    header('location:../basic.php');
                }
                else{
                    echo "Problema com endereço<br/>";
                    $del = "DELETE FROM cliente WHERE nome = '$nome' AND email = '$email'";
                    $var = pg_exec($conectabd, $var);
                    //VERIFICAR SE ISSO AQUI ESTA CERTO MAIS TARDE
                }                
            }
            else{
                echo "Desculpe. Tivemos alguns problemas em finlizar o cadastro.. Por favor tente novamente<br/>";
            }




        }
        else{

        }

    }
    else {
        echo pg_last_error($conectabd);
        exit;
    }


?>
