<?php
	$conectabd = pg_connect("dbname= aqui_vendese port=5432 host =localhost user=postgres password = senha");

    if ($conectabd) {
    	echo "Conectado com: " . pg_host($conectabd) . "<br/> ";
    	$sql= "CREATE TABLE friends(id INT, name TEXT)";
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