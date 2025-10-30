<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="secretaria.php" method="post" enctype="multipart/form-data">
        <h1>Formulario</h1>
        
        <h2>Información personal</h2>
        <label for="nombre">Nombre</label>    
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="apellido1">Primer apellido</label>    
        <input type="text" id="apellido1" name="apellido1" required>
        <br>

        <label for="apellido2">Segundo apellido</label>    
        <input type="text" id="apellido2" name="apellido2">
        <br>

        <label for="email">Correo electrónico</label>    
        <input type="email" id="email" name="email" required>
        <br>

        <label for="telefono">Teléfono</label>    
        <input type="number" id="telefono" name="telefono" required>
        <br>

        <hr>

        <h2>Medidas</h2>
        <label for="altura">Altura (cm)</label>    
        <input type="number" id="altura" name="altura" required>
        <br>

        <label for="peso">Peso (kg)</label>    
        <input type="number" id="peso" name="peso" required>
        <br>

        <label for="anchuraPecho">Anchura del pecho (cm)</label>    
        <input type="number" id="anchuraPecho" name="anchuraPecho" required>
        <br>

        <label for="anchuraCintura">Anchura de la cintura (cm)</label>    
        <input type="number" id="anchuraCintura" name="anchuraCintura" required>
        <br>

        <label for="anchuraCaderas">Anchura de las caderas (cm)</label>    
        <input type="number" id="anchuraCaderas" name="anchuraCaderas" required>
        <br>

        <hr>

        <h2>Otros detalles</h2>
        <label for="photo">Foto de cuerpo entero</label>    
        <input type="file" id="photo" name="photo">
        <br>

        <label for="direccion">Dirección de envío</label>    
        <input type="text" id="direccion" name="direccion" required>
        <br>

        <label for="comentarios">Comentarios</label>    
        <textarea id="comentarios" name="comentarios"></textarea>
        <br>

        <h2>Método de pago</h2>
        <label for="pagoPayPal">
            <input type="radio" id="pagoPayPal" name="pago" value="PayPal">
            PayPal
        </label>
        <br>

        <label for="pagoTransferenciaBancaria">
            <input type="radio" id="pagoTransferenciaBancaria" name="pago" value="Transferencia Bancaria">
            Transferencia bancaria
        </label>
        <br>

        <label for="pagoContraReembolso">
            <input type="radio" id="pagoContraReembolso" name="pago" value="Contra Reembolso">
            Pago contra reembolso
        </label>
        <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
