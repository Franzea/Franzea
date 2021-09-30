<?php
 
 $ent1 = $_GET['entrada1'];
 //$ent2 = $_GET['entrada2'];
 //$ent3 = $_GET['entrada3'];

    /* Ejercicio 1 */

    if ($ent1 == "true" || $ent1 == "True" || $ent1 == "TRUE"){

        echo "verdadero";
    }
    else{  
            
        echo "falso o no es un valor de tipo boolean";          
    }

    echo "<br>";

?>
