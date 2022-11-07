<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Javier Villacorta">
    <title>Ejercicio1</title>
</head>

<body>
    <?php
    $nDados = rand(5, 8);
    $val1 = $val2 = $val3 = $val4 = $val5 = $val6 = 0;
    $numMax = $numMin = 0;
    $dadoMax = $dadoMin = 0;

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

    echo "<br>";
    echo "En ", $nDados, " tiradas el mayor valor ha sido ", $dadoMax, " (",
    max($val1, $val2, $val3, $val4, $val5, $val6), " tiradas) y",
    " el menor valor ha sido ", $dadoMin, " (",
    min($val1, $val2, $val3, $val4, $val5, $val6), " tiradas)";
    ?>
</body>

</html>