<?php
 
 $ent1 = $_GET['entrada1'];
 //$ent2 = $_GET['entrada2'];
 //$ent3 = $_GET['entrada3'];

    /* Ejercicio 3 */

    if ($ent1 == "gato" || $ent1 == "Gato" || $ent1 == "GATO"){

        echo "se ha seleccionado el gato";
    }
    else if($ent1 == "perro" || $ent1 == "Perro" || $ent1 == "PERRO"){  
            
        echo "se ha seleccionado el perro";          
    }
    else if($ent1 == "loro" || $ent1 == "Loro" || $ent1 == "LORO"){  
            
        echo "se ha seleccionado el loro";          
    }
    else{  
            
        echo "no se ha seleccionado ni perro, ni gato, ni loro o el valor no es de tipo cadena";          
    }

?>
