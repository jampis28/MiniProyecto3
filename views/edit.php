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
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="personaledit">
        <div class="back">
            <a href="/views/personal_info.php">Back</a>
        </div>
        <div class="infoedit">
            <div class="editarlo">
                <div class="profile">
                    <h3>Change Info</h3>
                    <span>Changes will be reflected to every services</span>
                </div>
            </div>
            <form method="post" action="/handle_db/update.php" enctype="multipart/form-data">
                <div class="Photoedit">
                    <div class="photoedit">
                        <?php
                        echo "<img id='imgperfil' src='data:image/jpg;base64,$img' alt='Picture';/>";
                        ?>
                    </div>
                    <div>
                        <input class="inputedit" type="file" name="imagen">
                    </div>
                    <div class="imgphotoedit">
                        <label>CHANGE PHOTO</label>
                    </div>
                </div>
                <div class="filaedit">
                    <div class="descriptionedit">
                        <label>NAME</label>
                    </div>
                    <div class="resultadoedit">
                        <input class="inputedit" value="<?= $_SESSION["user"]["names"] ?>" name="name" required>
                    </div>
                </div>
                <div class="filaedit">
                    <div class="descriptionedit">
                        <label>BIO</label>
                    </div>
                    <div class="resultadoedit">
                        <input class="inputedit" value="<?= $_SESSION["user"]["bio"] ?>" name="bio" required>
                    </div>
                </div>
                <div class="filaedit">
                    <div class="descriptionedit">
                        <label>PHONE</label>
                    </div>
                    <div class="resultadoedit">
                        <input class="inputedit" value="<?= $_SESSION["user"]["phone"] ?>" name="phone" required>
                    </div>
                </div>
                <div class="filaedit">
                    <div class="descriptionedit">
                        <label>EMAIL</label>
                    </div>
                    <div class="resultadoedit">
                        <input class="inputedit" value="<?= $_SESSION["user"]["email"] ?>" name="email">
                    </div>
                </div>
                <div class="filaedit">
                    <div class="descriptionedit">
                        <label>PASSWORD</label>
                    </div>
                    <div class="resultadoedit">
                        <input type="password" class="inputedit" placeholder="*********" name="contrasena">
                    </div>
                </div>
                <div class="filaedit">
                    <button class="btnedit" type="submit">Save</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>