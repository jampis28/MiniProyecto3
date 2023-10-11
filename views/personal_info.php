<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: /index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido, <?=$_SESSION["user"]["email"] ?></h1>
    <a href="/handle_db/log_out.php">Log_out</a>
</body>
</html>