<?php
 
 $ent1 = $_GET['entrada1'];
 $ent2 = $_GET['entrada2'];
 $ent3 = $_GET['entrada3'];

    /* Ejercicio 6 */

    switch ($ent2) {

        case "v1":
            if (($ent1=="true"&&$ent3=="true")||($ent1=="false"&&$ent3=="false")) {

                echo "Es verdadero";
            }
            else{

                echo "Es falso";
            }
            break;

        case "v2":
            if ($ent1=="true"||$ent3=="true"){
                
                echo "Es verdadero";
            }
            else{
                
                echo "Es falso";
            }
            break;

        case "v3":
            if (($ent1=="true"&&$ent3=="true")||($ent1=="false"&&$ent3=="false")) {
                
                echo "Es falso";
            }
            else{
                
                echo "Es verdadero";
            }
            break;

        case "v4":
            echo !$ent1;
            break;
    }

?>
