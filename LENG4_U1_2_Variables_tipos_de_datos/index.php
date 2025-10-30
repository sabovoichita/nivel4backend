<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a mi página</h1>
   <p>
    <?php $miNumero = 10;?>
    <?php $miNumero = 20;?>
    <?php $miCadena = "Hola, mundo!";?>
    <?php $saludo = "Hola, mundo!";?>
    <?php $edad = 35;?>
    <?php $precio = 35.99;?>
    <?php $esCliente = true;?>
    <?php $frutas = array("Manzana", "Naranja", "Plátano");?>
    <!-- <?php $miCoche = new Coche();?> -->
    <?php $nombre = NULL;?>
    <?php $suma = 5+3;?>
    <?php $numero = 5;?>
    <?php $numero += 3;?>
    <!-- // Uso de operadores de asignación -->
    <?php $contador = 1;?>
    <?php $contador += 5;//*Incrementa con 5*/?> 

    <!-- // Uso de operadores de comparación y lógicos para control de flujo -->
<?php if ($edad >= 16 && $tieneLicencia){
    echo "Puedes conducir.";
} else {
    echo "No cumples con los requisitos para conducir."
}?>
   </p>
</body>
</html>