<?php
	$conectabd = pg_connect("dbname= aqui_vendese port=5432 host =localhost user=postgres password = senha");

    if ($conectabd) {
    	echo "Conectado com: " . pg_host($conectabd) . "<br/> ";
    	$sql = "CREATE TABLE Produto(
    				codigo integer not null constraint pk_produto primary key,
    				descricao varchar(50) not null,
    				cor varchar(15) not null,
    				estoque integer not null,
    				peso integer not null,
    				categoria varchar(15) not null,
    				preco integer not null,
    				marca varchar(20) not null
    			)";

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