// 2.- Crea una variable edad y muestra un mensaje que muestre si es mayor de edad o no

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor de edad</title>
</head>
<body>
    <?php
        $edad = (int)readline("Introduce tu edad");
         if ($edad >= 18)
            {
                echo "Eres mayor de edad";
            }
            else 
            {
                echo "Eres menor de edad";
            }
    ?>
</body>
</html>
