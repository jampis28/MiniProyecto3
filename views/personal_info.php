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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600&family=Fraunces:ital,opsz,wght@0,9..144,900;1,9..144,700&family=Manrope:wght@800&family=Montserrat:ital,wght@1,500&family=Noto+Sans:wght@500&family=Raleway:ital,wght@0,600;1,100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <div class="container-xxl">
        <a href="/views/personal_info.php">
                <img src="/assets/devchallenges.svg" alt="logo" width="200" height="24">
            </a>
            <div class="btn-group">
                <div>
                    <?php
                    while ($row = $res->fetch_assoc()) {
                        if ($row["photo"] === "") {
                            echo "<img id='perfilnav' src='/assets/photo.png' alt='Picture';/>";
                        } else {
                            $img = base64_encode($row["photo"]);
                            echo "<img id='perfilnav' src='data:image/jpg;base64,$img' alt='Picture';/>";
                        }
                    ?>
                </div>
                <span class="nameuser"><?= $_SESSION["user"]["names"] ?></span>
                <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul id="menu" class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">
                            <svg id="iconosnav" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                            My profile
                        </a></li>
                    <li><a class="dropdown-item" href="#">
                            <svg id="iconosnav" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                            </svg>
                            Group Chat
                        </a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a id="titulonave" class="dropdown-item" href="/handle_db/log_out.php">
                            <svg id="iconosnav" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path fill='#db0f0f'd="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z" />
                            </svg>
                            Logout
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="titulo_personal">
        <h1 id="titulo_personal1">Personal info</h1>
        <span id="sub_personal1">Basic info, like your name and photo</span>
    </div>
    <div class="personal">
        <div class="info">
            <div class="editar">
                <div class="profile">
                    <h3 id="profiletitulo">Profile</h3>
                    <span id="profilesub">Some info may be visible to other people</span>
                </div>
                <div class="btnprofile">
                    <form action="/views/edit.php" method="post">
                        <button class="btn btn-outline-secondary" id="btnprofile1" type="submit">Edit</button>
                    </form>
                </div>
            </div>
            <div class="Photo">
                <div class="photo">
                    <label>PHOTO</label>
                </div>
                <div class="imgphoto">
                <?php
                        if ($row["photo"] === "") {
                            echo "<img id='imgperfil1' src='/assets/photo.png' alt='Picture';/>";
                        } else {
                            $img = base64_encode($row["photo"]);
                            echo "<img id='imgperfil1' src='data:image/jpg;base64,$img' alt='Picture';/>";
                        }
                    }
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