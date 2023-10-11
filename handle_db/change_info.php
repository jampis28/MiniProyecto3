<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);
    echo $id;

    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

    $response = $mysqli->query("SELECT * FROM logins(email, contrasena) VALUES ('$email', '$hash');");
}
