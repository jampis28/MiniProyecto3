<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

function getByID($email)
{
    global $mysqli;
    $response = $mysqli->query("SELECT * FROM logins WHERE email = $email");
    $data = $response->fetch_assoc();

    return $data;
}
