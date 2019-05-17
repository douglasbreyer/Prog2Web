<?php
	$conectabd = pg_connect("dbname= aqui_vendese port=5432 host =localhost user=postgres password = senha");
	
	$sql = "INSERT INTO cliente( nome, email, senha)
				VALUES (". $_POST['name'] .", ". $_POST['email'] .", ". $_POST['senha'] .");";

	$Ctable = pg_exec($conectabd, $sql);
		if($Ctable){
			echo "funfou";
		}
		else {
			echo "deu ruim";
		}
    }
    else {
        echo pg_last_error($conectabd);
        exit;
    }

?>