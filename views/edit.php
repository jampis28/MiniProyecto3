<?php
$id = $_GET["id"];

require_once("../models/Empleados.php");

$data = getByID($id);

extract($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Editar</h1>
    <form method="post" action="/handle_db/update.php">
        <label>ID:</label>
        <input type="number" readonly value="<?= $id ?>" name="id">
        <br>

        <label>Nombres:</label>
        <input type="text" value="<?= $nombres ?>" name="nombres">
        <br>

        <label>Apellidos:</label>
        <input type="text" value="<?= $apellidos ?>" name="apellidos">
        <br>

        <label>DNI:</label>
        <input type="text" value="<?= $dni ?>" name="dni">
        <br>

        <label>Cargo:</label>
        <input type="text" value="<?= $cargo ?>" name="cargo">
        <br>

        <button type="submit">Guardar</button>

    </form>
</body>

</html>