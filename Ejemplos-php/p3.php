<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <pre>
        <?php
            $entrada = array("a", "b", "c", "d", "e","f","g","hola","hay");

            /*$salida = array_slice($entrada, 2); 
            print_r($salida);

            $salida = array_slice($entrada, -2, 1); 
            print_r($salida);

            $salida = array_slice($entrada, 0, 3);
            print_r($salida);*/

            print_r(array_slice($entrada, 2, -2));
            print_r(array_slice($entrada, 2, -1, true));
        ?>
    </pre>
    
</body>
</html>