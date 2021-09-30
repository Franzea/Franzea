<?php
 
 $ent1 = $_GET['entrada1'];
 $ent2 = $_GET['entrada2'];
 $ent3 = $_GET['entrada3'];

    /* Ejercicio 5 */

    switch ($ent2) {

        case "v1":
            echo $ent1 && $ent3;
            break;

        case "v2":
            echo $ent1 || $ent3;
            break;

        case "v3":
            echo $ent1 xor $ent3;
            break;

        case "v4":
            echo !$ent1;
            break;
    }

?>
