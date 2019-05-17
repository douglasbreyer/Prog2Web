<?php
	session_start();

	$dbname = "host=localhost";
    $port = "port=5432";
    $host = "host =localhost";
    $credentials = "user=postgres password = senha";

    $conectabd = pg_connect("$host $port $dbname $credentials");

    if($conectabd) {
    	
    	function buscaProdutos($conectabd){
			$sql = "SELECT * FROM produto";
			$resultado = pg_query($conectabd, $sql);
			$produtos = array();

			while($produto = pg_fetch_assoc($resultado)){
				$produtos[] = $produto;
			}
			return $produtos;
		}

    }
    else {
        echo pg_last_error($conectabd);
        exit;
    }

?>