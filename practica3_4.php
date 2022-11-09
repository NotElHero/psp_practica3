<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Javier Villacorta">
    <title>Ejercicio4</title>
</head>
<body>
    <?php
    $notaP;
    $practicas = rand(4, 6);
    $examenes = rand(1, 2);
    $notaE;
    $notaA = rand(0, 10);
    $totalP = $totalE = 0;
    $mediaP;
    $mediaE;
    $notaFinal;

    for ($i = 0; $i < $practicas; $i++) {
        $notaP = rand(0, 10);
        $totalP += $notaP;
        "<br>";
    }
    $totalP / $practicas;
    echo "<br>";

    for ($i = 0; $i < $examenes; $i++) {
        $notaE = rand(0, 10);
        $totalE += $notaE;
    }
    $totalE / $examenes;

    $totalP % 30;
    "<br>";
    $totalE % 60;
    "<br>";
    $notaA % 10;
    "<br>";

    $notaFinal = ($totalP + $totalE + $notaA) / 10;
    
    if ($notaFinal > 4 && $notaFinal < 5) {
        echo "La nota final del alumno es: ", round($notaFinal, 0, PHP_ROUND_HALF_DOWN);
    } else {
        echo "La nota final del alumno es: ", $notaFinal;
    }
    ?>
</body>
</html>