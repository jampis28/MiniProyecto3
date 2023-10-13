<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);

    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

    try {
        if (isset($email, $contrasena) && $email !== "" && $contrasena !== "") {
            $hash = password_hash($contrasena, PASSWORD_DEFAULT);
            $response = $mysqli->query("INSERT INTO logins(email, contrasena, names, bio, phone) VALUES ('$email', '$hash','Ingrese su nombre','Ingrese su bio','00 000 0000');");
        }
        if ($response) {
            $res = $mysqli->query("SELECT * FROM logins WHERE email = '$email';");
            session_start();
            $_SESSION["user"] = $res->fetch_assoc();
            header("Location: /views/personal_info.php");
        } else {
            header("Location: /views/register.php");
        }
    } catch (mysqli_sql_exception $e) {
        if ($mysqli->errno === 1062) {
            echo "El correo ya esta en uso";
        }else {
            echo "Error: " . $e->getMessage();
        }
    }
}else {
    echo "Ingresa desde Post";
}