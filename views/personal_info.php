<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: /index.php");
    die();
};
$id = $_SESSION["user"]["id"];
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
$res = $mysqli->query("SELECT * FROM logins WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-xxl">
            <img src="/assets/devchallenges.svg" alt="logo" width="200" height="24">
            <div class="btn-group">
                <div>
                    <?php
                    while ($row = $res->fetch_assoc()) {
                        $img = base64_encode($row["photo"]);
                        echo "<img id='perfilnav' src='data:image/jpg;base64,$img' alt='Picture';/>";
                    }
                    ?>
                </div>
                <span class="nameuser"><?= $_SESSION["user"]["names"] ?></span>
                <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">My profile</a></li>
                    <li><a class="dropdown-item" href="#">Group Chat</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="/handle_db/log_out.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="titulo_personal">
        <h1>Personal info</h1>
        <span>Basic info, like your name and photo</span>
    </div>
    <div class="personal">
        <div class="info">
            <div class="editar">
                <div class="profile">
                    <h3>Profile</h3>
                    <span>Some info may be visible to other people</span>
                </div>
                <div class="btnprofile">
                    <form action="/views/edit.php" method="post">
                        <button type="submit">Edit</button>
                    </form>
                </div>
            </div>
            <div class="Photo">
                <div class="photo">
                    <label>PHOTO</label>
                </div>
                <div class="imgphoto">
                    <?php
                    echo "<img id='imgperfil1' src='data:image/jpg;base64,$img' alt='Picture';/>";
                    ?>
                </div>
            </div>
            <div class="fila">
                <div class="description">
                    <label>NAME</label>
                </div>
                <div class="resultado">
                    <p><?= $_SESSION["user"]["names"] ?></p>
                </div>
            </div>
            <div class="fila">
                <div class="description">
                    <label>BIO</label>
                </div>
                <div class="resultado">
                    <p><?= $_SESSION["user"]["bio"] ?></p>
                </div>
            </div>
            <div class="fila">
                <div class="description">
                    <label>PHONE</label>
                </div>
                <div class="resultado">
                    <p><?= $_SESSION["user"]["phone"] ?></p>
                </div>
            </div>
            <div class="fila">
                <div class="description">
                    <label>EMAIL</label>
                </div>
                <div class="resultado">
                    <p><?= $_SESSION["user"]["email"] ?></p>
                </div>
            </div>
            <div class="fila">
                <div class="description">
                    <label>PASSWORD</label>
                </div>
                <div class="resultado">
                    <p>***********</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>