<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mi página PHP</title>
</head>
<body>
  <h1>Bienvenido a mi página</h1>

  <p>La fecha y hora actual es:
    <?php echo date("Y-m-d H:i:s"); ?>
  </p>
  <!-- <p><?php phpinfo(); ?></p> -->
   
  <?php
echo '¡Hola, mundo!';
print 'Bienvenido a PHP'?>

<p>La hora actual es: <?php echo date('H:i:s'); ?></p>

<h3>Lista echa con PHP:</h3>
<ul>
<?php for ($i = 1; $i <= 5; $i++): ?>
 <li>Elemento <?php echo $i; ?></1i>
<?php endfor; ?>
</ul>

</body>
</html>
