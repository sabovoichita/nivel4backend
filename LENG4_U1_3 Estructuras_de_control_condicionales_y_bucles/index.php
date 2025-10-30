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
    // if (condición) {
// Código a ejecutar si la condición es verdadera
// }
Ejemplo:
$edad = 20;
if ($edad >= 18) {
echo "Eres mayor de edad.";
}?>

<p>Ejemplo 2</p>

<?php
// Sintaxis:
// if (condición) {
// Código a ejecutar si la condición es verdadera
//   } else {
 // Código a ejecutar si la condición es falsa
//  }
// }
// Ejemplo:
$edad = 16;
if ($edad >= 18) {
echo 'Eres mayor de edad';
} else {
echo 'No eres mayor de edad.';
}
?>

<p>Ejemplo 3</p>
<?php
// Sintaxis:
// If (condicion1) {
// Código a ejecutar si la Condición1 es verdadera
// } elseif (condicion2) {
// Código a ejecutar si la Condición2 es verdadera
// } else {
// Código a ejecutar cuando ninguna de las condiciones anteriores es verdadera
// }
// Ejemplo:
$calificacion = 85;
If ($calificacion >= 90) {
echo 'Excelente';
} else if ($calificacion >= 80) {
echo 'Muy bien';
} else {
echo 'Necesitas mejorar';
}
?>

<p>Ejemplo 4</p>
//condicion ? valorSiverdadero : valorSiFaslo;
<?php  
$edad = 20;
$mensaje = $edad >= 18 ? "Eres mayor de edad" : "No eres mayor de edad.";
 echo $mensaje;
?>

<p>Ejemplo 5</p>
<?php
// Sintaxis:
// for (inicialización; condición; incremento) {
// // Código a ejecutar en cada interacción
// }
// Ejemplo:
for ($i = 1; $i <= 10; $i++) {
echo $i . ' ';
}
?>

<p>Ejemplo 6</p>
<?php
// Sintaxis:
// while (condición) {
// // Código a ejecutar mientras la condición sea verdadera
// }
// Ejemplo:
$i = 1;
while ($i <= 10) {
echo $i .' ' ;
$i++;
}
?>

<p>Ejemplo 5</p>
<?php
// Sintaxis:
// do {
// // Código a ejecutar
// } while (condición);
// Ejemplo:
$i = 1;
do {
echo $i .' ' ;
$i++;
} while ($i <= 10);
?>

<p>Ejemplo 7</p>
<?php
// Sintaxis:
// foreach (Sarray as $valor) {
// // Código a ejecutar para cada elemento del array
// }
// Ejemplo:
$colores = ["rojo", "verde", "azul"];
foreach ($colores as $color) {
echo $color . ' ';
}
?>

<p>Ejemplo 8</p>
<?php 
// while(condition){
//     if(condicionParaTerminar){
//         break;
//     }
// }
 for($i = 1; $i<= 10; $i++){
    if ($i == 5){
        break; //Termina el bulce si $i es igual a 5
    }
    echo $i . " ";
 }
?>

<p>Ejemplo 9</p>
<?php 
// for ($i = 1; $i<= 10; $i++){
//     if (conditionParaSaltar){
//         continue;
//     }
//     //Codigo a ejecutar si la condicion no se cumple
// }
for($i = 1; $i <= 10; $i++){
    if ($i == 5){
        continue; //Salta el resto del codigo en esta iteracion so $i es 5
    }
    echo $i . " ";
} 
//1 2 3 4 6 7 8 9 10
?> 



</body>
</html>