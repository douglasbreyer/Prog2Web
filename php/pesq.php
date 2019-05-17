<?php
	session_start();
	include "../produtos.php";

	$dbname = "host=localhost";
            $port = "port=5432";
            $host = "host =localhost";
            $credentials = "user=postgres password = senha";

            $conectabd = pg_connect("$host $port $dbname $credentials");

            if($conectabd) {
                
                $pesq = pg_query("SELECT * FROM produto");



                $count = 0;

                while($prod = pg_fetch_array($pesq)){
                    if($count == 0){
                        echo "<div class='row'>";
                    }
                    echo "<div class='col-sm-3 col-lg-3 col-md-3'>";
                        echo "<div class='thumbnail'>";
                            echo "<img src='$prod[10]' alt='' id='img'>";
                                echo "<div class='caption'>";
                                    echo "<h4><a href='#''>$prod[1]</a></h4>";
                                    echo "<h4>$prod[7]</h4>";
                                    //echo "<p>$prod[2];.</p>";    
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    //echo "</div>";
                    
                    $count++;
                    if($count == 4){
                        $count = 0;
                        echo "</div>";
                    }
                }
            }

?>