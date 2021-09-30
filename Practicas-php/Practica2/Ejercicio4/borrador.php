<?php
 
 $ent1 = $_GET['entrada1'];
 //$ent2 = $_GET['entrada2'];
 //$ent3 = $_GET['entrada3'];

    /* Ejercicio 4 */

    switch ($ent1) {

        case "gato":
            echo "se ha seleccionado el gato";
            break;

        case "Gato":
            echo "se ha seleccionado el gato";
            break;

        case "GATO":
            echo "se ha seleccionado el gato";
            break;

        case "perro":
            echo "se ha seleccionado el perro";
            break;

        case "Perro":
            echo "se ha seleccionado el perro";
            break;

        case "PERRO":
            echo "se ha seleccionado el perro";
            break;

        case "loro":
            echo "se ha seleccionado el loro";
            break;

        case "Loro":
            echo "se ha seleccionado el loro";
            break;

        case "LORO":
            echo "se ha seleccionado el loro";
            break;

        default:
            echo "no se ha seleccionado ni perro, ni gato, ni loro o el valor no es de tipo cadena";
    }

?>
