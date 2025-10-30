<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// --Step1: Receive Data --
$nombre = $_POST['nombre'] ?? "";
$apellido1 = $_POST['apellido1'] ?? "";
$apellido2 = $_POST['apellido2'] ?? "";
$email = $_POST['email'] ?? "";
$telefono = $_POST['telefono'] ?? "";
$altura = $_POST['altura'] ?? "";
$peso = $_POST['peso'] ?? "";
$anchuraPecho = $_POST['anchuraPecho'] ?? "";
$anchuraCintura = $_POST['anchuraCintura'] ?? "";
$anchuraCaderas = $_POST['anchuraCaderas'] ?? "";
$photo = $_FILES['photo']['name'] ?? "";
$direccion = $_POST['direccion'] ?? "";
$comentarios = $_POST['comentarios'] ?? "";
$pago = $_POST['pago'] ?? "";

//--Step 2: Simple output to check connection
echo "<div style='font-family: sans-serif; line-height: 1.5'>";
echo "<h1>Data Received:</h1>";
echo "<p><strong>Nombre:</strong> $nombre </p>";
echo "<p><strong>Apellido 1:</strong> $apellido1 </p>";
echo "<p><strong>Apellido 2:</strong> $apellido2 </p>";
echo "<p><strong>Email:</strong> $email </p>";
echo "<p><strong>Telefono:</strong> $telefono </p>";
echo "<p><strong>Altura:</strong> $altura cm</p>";
echo "<p><strong>Peso:</strong> $peso kg</p>";
echo "<p><strong>Anchura Pecho:</strong> $anchuraPecho cm</p>";
echo "<p><strong>Anchura Cintura:</strong> $anchuraCintura cm</p>";
echo "<p><strong>Anchura Caderas:</strong> $anchuraCaderas cm</p>";
echo "<img src='uploads/$photo' alt='Uploaded photo' width='200'>";
echo "<p><strong>Direccion:</strong> $direccion </p>";
echo "<p><strong>Comentarios:</strong> $comentarios </p>";
echo "<p><strong>Pago:</strong> $pago </p>";
echo "</div>";
echo "<a href='index.php'>Back to form</a>";
?>
</body>
</html>