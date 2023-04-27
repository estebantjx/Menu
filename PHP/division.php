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
<form action="division.php" method="post">
    <input type="number" name="numero1" placeholder="Numero 1" required>
    <input type="number" name="numero2" placeholder="Numero 2" required>
    <input type="submit" name="submit" value="Enviar">
</form>
</div>

<?php
$numero1=$_POST['numero1'];
$numero2=$_POST['numero2'];
$total=$numero1/$numero2;


echo "<table>
<tr>
<td>El total de su division es:</td>
</tr>
<tr>
<td>$total</td>
</tr>
</table>"
?>
<a href="menu.php">Volver</a>
</body>
</html>