<?php
 
 $ent1 = $_GET['entrada1'];
 //$ent2 = $_GET['entrada2'];
 //$ent3 = $_GET['entrada3'];

    /* Ejercicio 1 */

    if (strtolower($ent1) == "true"){

        echo "verdadero";
    }
    else if (strtolower($ent1) == "false"){  
            
        echo "falso";          
    }
    else{  
            
        echo "No es un valor de tipo boolean";          
    }

?>
