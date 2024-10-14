<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Javier Villacorta">
    <title>Ejercicio3_1</title>
</head>

<body>
    <?php
    //En este ejercicio generamos un numero aleatorio de tiradas entre 5 y 8
    $nDados = rand(5, 8);
    /*Se pueden igualar varias variables al mismo tiempo y al mismo valor. No significa que $val1, $val2, $val3, etc, valgan lo mismo,
    sino que todas estan inicializadas a 0*/
    $val1 = $val2 = $val3 = $val4 = $val5 = $val6 = 0;
    $numMax = $numMin = 0;
    $dadoMax = $dadoMin = 0;

    /*Este bucle for se encarga de contar cuantas veces se ha tirado cada dado, aumentando el valor de su
    respectiva variable $val hasta que se acaben las tiradas de dados*/
    for ($i = 0; $i < $nDados; $i++) {
        $var1 = rand(1, 6);

        switch ($var1) {
            case 1:
                echo "<img src='dados/uno.png'>";
                $val1++;
                break;
            case 2:
                echo "<img src='dados/dos.png'>";
                $val2++;
                break;
            case 3:
                echo "<img src='dados/tres.png'>";
                $val3++;
                break;
            case 4:
                echo "<img src='dados/cuatro.png'>";
                $val4++;
                break;
            case 5:
                echo "<img src='dados/cinco.png'>";
                $val5++;
                break;
            case 6:
                echo "<img src='dados/seis.png'>";
                $val6++;
                break;
        }
    }

    //En este switch sabremos cual es el dado que mas veces ha salido, y dependiendo de ello $dadoMax tendra un valor en particular
    switch (max($val1, $val2, $val3, $val4, $val5, $val6)) {
        case $val6:
            $dadoMax = 6;
            break;
        case $val5:
            $dadoMax = 5;
            break;
        case $val4:
            $dadoMax = 4;
            break;
        case $val3:
            $dadoMax = 3;
            break;
        case $val2:
            $dadoMax = 2;
            break;
        case $val1:
            $dadoMax = 1;
            break;
    }
    //En este switch sabremos cual es el dado que no ha salido
    switch (min($val1, $val2, $val3, $val4, $val5, $val6)) {
        case $val1:
            $dadoMin = 1;
            break;
        case $val2:
            $dadoMin = 2;
            break;
        case $val3:
            $dadoMin = 3;
            break;
        case $val4:
            $dadoMin = 4;
            break;
        case $val5:
            $dadoMin = 5;
            break;
        case $val6:
            $dadoMin = 6;
            break;
    }

    //
    echo "<br>";
    echo "En ", $nDados, " tiradas el mayor valor ha sido ", $dadoMax, " (",
    max($val1, $val2, $val3, $val4, $val5, $val6), " veces) y",
    " el valor que no ha salido ninguna vez ha sido ", $dadoMin, " (",
    min($val1, $val2, $val3, $val4, $val5, $val6), " veces)";
    ?>
</body>

</html>