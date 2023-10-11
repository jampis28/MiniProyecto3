<?php
var_dump($_POST);
extract($_POST);
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
$mysqli->query("UPDATE logins SET 
email ='$email',
contrasena ='$contrasena',
photo ='$photo',
name ='$name',
bio ='$bio',
phone ='$phone'");
header("Location: /views/edit.php");
