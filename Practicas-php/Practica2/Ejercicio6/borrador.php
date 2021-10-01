<?php
 
 $ent1 = $_GET['entrada1'];
 $ent2 = $_GET['entrada2'];
 $ent3 = $_GET['entrada3'];

<<<<<<< HEAD
    /* Ejercicio 6 */
=======
    /* Ejercicio 5 */
>>>>>>> 734b70cb05e79199fe54dc9b6de238571d3bb8a3

    switch ($ent2) {

        case "v1":
<<<<<<< HEAD
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
=======
            echo $ent1 && $ent3;
            break;

        case "v2":
            echo $ent1 || $ent3;
            break;

        case "v3":
            echo $ent1 xor $ent3;
>>>>>>> 734b70cb05e79199fe54dc9b6de238571d3bb8a3
            break;

        case "v4":
            echo !$ent1;
            break;
    }

?>
