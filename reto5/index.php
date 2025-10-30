<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="secretaria.php" method="post" enctype="multipart/form-data">
        <h1>Form</h1>
        <h2>Personal information</h2>
        <label for="nombre">Nombre</label>    
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="apellido1">Apellido 1</label>    
        <input type="text" id="apellido1" name="apellido1" required>
        <br>
        <label for="apellido2">Apellido 2</label>    
        <input type="text" id="apellido2" name="apellido2" required>
        <br>
        <label for="email">Email</label>    
        <input type="email" id="email" name="email" required>
        <br>
        <label for="telefono">Teléfono</label>    
        <input type="number" id="telefono" name="telefono" required>
        <br>
        <hr>
        <h2>Measurements</h2>
        <label for="altura">Altura</label>    
        <input type="number" id="altura" name="altura" required>
        <br>
        <label for="peso">Peso</label>    
        <input type="number" id="peso" name="peso" required>
        <br>
        <label for="anchuraPecho">Anchura de pecho</label>    
        <input type="number" id="anchuraPecho" name="anchuraPecho" required>
        <br>
        <label for="anchuraCintura">Anchura de cintura</label>    
        <input type="number" id="anchuraCintura" name="anchuraCintura" required>
        <br>
        <label for="anchuraCaderas">Anchura de caderas</label>    
        <input type="number" id="anchuraCaderas" name="anchuraCaderas" required>
        <br>
        <hr>
        <h2>Other details</h2>
        <label for="photo">Foto de cuerpo entero</label>    
        <input type="file" id="photo" name="photo" >
        <br>
        <label for="direccion">Dirección de envio</label>    
        <input type="string" id="direccion" name="direccion" required>
        <br>
        <label for="comentarios">Comentarios</label>    
       <textarea id="comentarios" name="comentarios"></textarea>
        <br>
        <h2>Pago</h2>
        <label for="pago">Método de pago PayPal</label>    
        <input type="radio" id="pagoPayPal" name="pago" value="PayPal">
        <br>
        <label for="pagoTransferenciaBancaria">Método de pago Transferencia Bancaria</label>  
        <input type="radio" id="pagoTransferenciaBancaria" name="pago" value="Transferencia Bancaria">
        <br>
        <label for="pagoContraReembolso">Método de pago contra reembolso</label>  
       <input type="radio" id="pagoContraReembolso" name="pago" value="Contra Reembolso">
        <br>
    <button type="submit">Send</button>
    </form>
</body>
</html>