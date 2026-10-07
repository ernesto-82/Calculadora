// 1º Calculadora, crea dos variables con dos números y muestra su suma, resta, multiplicación y división.


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora muy muy basica</title>
</head>
<body>
    <?php
    $numero1 = (int)readline("Introduce un numero entero");
    $numero2 = (int)readline("introduce otro numero entero");

    function suma(int $numero1,int $numero2) 
        {
            return $numero1 + $numero2;
        }
        $resultadoSuma = suma($numero1,$numero2);    
    echo "La suma es: " . $resultadoSuma;
        
    function resta(int $numero1,int $numero2)
        {
            return $numero1 - $numero2;
        }
        $resultadoResta = resta($numero1,$numero2);
     echo "La resta es: " . $resultadoResta;
        
    function mult(int $numero1,int $numero2)
        {
            return $numero1 * $numero2;
        }
        $resultadoMult = mult($numero1,$numero2);
    echo "La multiplicacion es: " . $resultadoMult;
    
    function div(int $numero1, int $numero2)
        {
        if ($numero2 == 0) {
            return "No se puede dividir por 0";
        }
            return $numero1 / $numero2;
        }
        $resultadoDiv = div($numero1,$numero2);
    echo "La division es: " . $resultadoDiv;
    ?>
</body>
</html>