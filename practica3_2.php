<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Javier Villacorta">
    <title>Ejercicio3_1</title>
</head>
<body>
    <?php
    $nCartas = 0;
    $var1 = rand(1, 6);
    $randCarta;
    $baraja;

    switch ($var1) {
        case 1:
            echo "<img src='dados/uno.png'>";
            $nCartas +=1;
            break;
        case 2:
            echo "<img src='dados/dos.png'>";
            $nCartas +=2;
            break;
        case 3:
            echo "<img src='dados/tres.png'>";
            $nCartas +=3;
            break;
        case 4:
            echo "<img src='dados/cuatro.png'>";
            $nCartas +=4;
            break;
        case 5:
            echo "<img src='dados/cinco.png'>";
            $nCartas +=5;
            break;
        case 6:
            echo "<img src='dados/seis.png'>";
            $nCartas +=6;
            break;
    }

    for ($i=0; $i < $nCartas; $i++) { 
        switch (rand(1, 4)) {
            case 1:
                $baraja = 'Bastos';
                break;
            case 2:
                $baraja = 'Copas';
                break;
            case 3:
                $baraja = 'Oros';
                break;
            case 4:
                $baraja = 'Espadas';
                break;
        }

        echo '<br>';
        echo "<img src='baraja/", strval($baraja), "/", rand(1, 12), ".jpg'>"; //aqui falta
    }
    ?>
</body>
</html>