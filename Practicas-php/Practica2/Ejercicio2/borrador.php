<?php
 
 $ent1 = $_GET['entrada1'];
 //$ent2 = $_GET['entrada2'];
 //$ent3 = $_GET['entrada3'];

    /* Ejercicio 2 */

    if (is_numeric($ent1)) {

        if ($ent1 > "100"){

            echo "El valor es mayor de 100";
        }
        else if($ent1<="100" && $ent1>="50"){  
            
            echo "El valor está ente 50 y 100";          
        }
        else if($ent1<="50" && $ent1>="25"){  
            
            echo "El valor está ente 25 y 50";          
        }
        else{  
            
            echo "El valor es menor de 25";          
        }

    } else {
        echo "Heyyy esto es no es un número!!!!!!";
    }

?>
