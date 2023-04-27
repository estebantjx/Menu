<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<form action="formulario.php" method="post">
    <input type="text" name="nombres" placeholder="Nombres" required>
    <input type="text" name="apellidos" placeholder="Apellidos" required>
    <input type="email" name="correo" placeholder="Correo" required>
    <input type="number" name="telefono" placeholder="Telefono" required>
    <input type="text" name="direccion" placeholder="Direccion" required>
    <input type="submit" name="submit" value="Enviar">
</form>
</div>
<?php
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];

echo "<table>
<tr>
<td>Nombres</td>
<td>Apellidos</td>
<td>Correo</td>
<td>Telefono</td>
<td>Direccion</td>
</tr>
<tr>
<td>$nombres</td>
<td>$apellidos</td>
<td>$correo</td>
<td>$telefono</td>
<td>$direccion</td>
</tr>
</table>"
?>
<a href="menu.php">Volver</a>
</body>
</html>