<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);
    var_dump($_POST);
    $nameimg = $_FILES["imagen"]["name"];
    $tmp_name = $_FILES["imagen"]["tmp_name"];
    $type = $_FILES["imagen"]["type"];

    $data_img = addslashes(file_get_contents($tmp_name));

   require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
    session_start();
    $id = $_SESSION["user"]["id"];
   $name !== "" && $mysqli->query("UPDATE logins SET names = '$name' WHERE id = $id");
   $bio !== "" && $mysqli->query("UPDATE logins SET bio = '$bio' WHERE id = $id");
   $phone !== "" && $mysqli->query("UPDATE logins SET phone = '$phone' WHERE id = $id");
   $data_img !== "" && $mysqli->query("UPDATE logins SET photo = '$data_img' WHERE id = $id");

   if ($contrasena !== "") {
    $hash = password_hash($contrasena, PASSWORD_DEFAULT);
    $mysqli->query("UPDATE logins SET contrasena = '$hash' WHERE id = $id");
   };
   $email !== "" && $mysqli->query("UPDATE logins SET email = '$email' WHERE id = $id");
   
    header("Location: /views/edit.php");
}else {
    header("Location: /views/edit.php");
}
