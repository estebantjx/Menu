<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="menu.php" method="post">
    <label><input type="radio" name="opcion" value="1">Datos de usuario</label><br>
    <label><input type="radio" name="opcion" value="2">Suma</label><br>
    <label><input type="radio" name="opcion" value="3">Resta</label><br>
    <label><input type="radio" name="opcion" value="4">Multiplicacion</label><br>
    <label><input type="radio" name="opcion" value="5">Division</label><br>
    <input type="submit" name="submit" value="Seleccionar">
</form>
<?php

if(isset($_POST['submit'])){
    $opcion = $_POST['opcion'];
    switch($opcion){
        case '1':
           header("location:formulario.php");
            break;
        case '2':
            header("location:suma.php");
            break;
        case '3':
            header("location:resta.php");
            break;
        case '4':
            header("location:multiplicacion.php");
            break;
        case '5':
            header("location:division.php");
            break;
        default:
            echo "Por favor selecciona una opción valida";
            break;
    }
}
?>

</body>
</html>

