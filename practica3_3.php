<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Javier Villacorta">
    <title>Ejercicio3</title>
</head>
<body>
    <?php
    $res1 = 1;
    $res2 = 0;
    $puntuacion1 = $puntuacion2 = 0;

    while ($res1 != $res2) {
        echo "<br> Jugador 1 <br>";

        $var1 = rand(1, 6);
        $var2 = rand(1, 6);
        switch ($var1) {
            case 1:
                echo "<img src='dados/uno.png'>";
                $res1 = 1;
                $puntuacion1 += 1;
                break;
            case 2:
                echo "<img src='dados/dos.png'>";
                $res1 = 2;
                $puntuacion1 += 2;
                break;
            case 3:
                echo "<img src='dados/tres.png'>";
                $res1 = 3;
                $puntuacion1 += 3;
                break;
            case 4:
                echo "<img src='dados/cuatro.png'>";
                $res1 = 4;
                $puntuacion1 += 4;
                break;
            case 5:
                echo "<img src='dados/cinco.png'>";
                $res1 = 5;
                $puntuacion1 += 5;
                break;
            case 6:
                echo "<img src='dados/seis.png'>";
                $res1 = 6;
                $puntuacion1 += 6;
                break;
        }

        echo "<br> Jugador 2 <br>";

        switch ($var2) {
            case 1:
                echo "<img src='dados/uno.png'>";
                $res2 = 1;
                $puntuacion2 += 1;
                break;
            case 2:
                echo "<img src='dados/dos.png'>";
                $res2 = 2;
                $puntuacion2 += 2;
                break;
            case 3:
                echo "<img src='dados/tres.png'>";
                $res2 = 3;
                $puntuacion2 += 3;
                break;
            case 4:
                echo "<img src='dados/cuatro.png'>";
                $res2 = 4;
                $puntuacion2 += 4;
                break;
            case 5:
                echo "<img src='dados/cinco.png'>";
                $res2 = 5;
                $puntuacion2 += 5;
                break;
            case 6:
                echo "<img src='dados/seis.png'>";
                $res2 = 6;
                $puntuacion2 += 6;
                break;
        }
    }
    echo "<br>";
    echo "La puntuacion del jugador 1 es: ", $puntuacion1, "<br>";
    echo "La puntuacion del jugador 2 es: ", $puntuacion2, "<br>";

    if ($puntuacion1 > $puntuacion2) {
        echo "El jugador 1 gana";
    } elseif ($puntuacion1 < $puntuacion2) {
        echo "El jugador 2 gana";
    } else{
        echo "Ambos jugadores han empatado";
    }
    ?>
</body>
</html>