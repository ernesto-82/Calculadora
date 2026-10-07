// 3.- Imprimir los numeros del uno al almacenado en una variable y luego invertidos

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secuencia de numeros</title>
</head>
<body>
    <?php
    $diez = 10;
    echo "del 1 al " . $diez . ": <br>";
    for ($uno = 1; $uno >= $diez; $uno++) 
    {
        echo $uno . " ";
    }
    echo "<br><br>";
    echo "del 10 al " . $uno . ": <br>";
    for ($uno = $diez; $uno >= 1; $uno--)
    {
        echo $uno . " ";
    }
    ?>
</body>
</html>