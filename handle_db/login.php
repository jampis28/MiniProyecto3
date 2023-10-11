<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

    $email = $_POST["email"];
    $contrasena= $_POST["contrasena"];

    try {
        $response = $mysqli->query("SELECT * FROM logins WHERE email = '$email';");
        
        $response->num_rows !== 1 && throw new Exception("No existe el Registro");

        $data = $response->fetch_assoc();

        password_verify($contrasena, $data["contrasena"]) === false && throw new Exception("No existe el Registro");
        
        session_start();
        $_SESSION["user"]=$data;
        header("Location: /views/personal_info.php");
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}else {
    echo "No estas ingresando desde Post";
}
?>