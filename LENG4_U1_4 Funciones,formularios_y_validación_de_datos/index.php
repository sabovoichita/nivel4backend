<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a mi página</h1>

    <p>Ejemplo 1</p>
    <?php
    function nombreDeLaFuncion(){
        //Codigo a ejecutar
    }
    ?>

    <?php
    function saludar($nombre){
        echo "¡Hola, ".$nombre ."! ¿Cómo estás?";
    }
    saludar("Juan");
    ?>

    <p>Ejemplo 2</p>
    <?php
    function sumar($a, $b){
        return "echo $a + $b";
    }
    sumar(3,5);

function sumar1($numero1, $numero2) {
$suma = $numero1 + $numero2;
return $suma;
}
$resultado = sumar1(5, 7);
echo "El resultado de la suma es: " . $resultado;
function calcularArea($ancho, $alto){
    return $ancho * $alto;
}
    ?>
    <form action="procesar.php" method="POST">
    Nombre: <input type="text" name="nombre" /><br />
    Edad: <input type="text" name="edad" /><br />
    <input type="submit" value="Enviar" />
</form>
</body>
</html>