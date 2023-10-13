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
    <div class="cuerpo">
        <div class="register">
            <div class="registerC">
                <div class="icono">
                    <img src="/assets/devchallenges.svg" alt="icono">
                </div>
                <div class="titulo_login">
                    <p>Join thousands of learners from around the world</p>
                </div>
                <div class="subtitulo_login">
                    <p>Master web development by making real-life
                        projects. There are multiple paths for you to choose
                    </p>
                </div>
                <div class="inputs">
                    <form action="/handle_db/create.php" method="post">
                        <div id="email">
                            <div class="form-floating mb-3 input-group mb-3" id="input_email">
                                <input class="form-control" id="floatingInput" type="email" name="email" placeholder="email" aria-label="hola" aria-describedby="basic-addon2">
                                <label id="labelcontr" for="floatingInput">
                                    <svg id="iconoemail" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                                    </svg>
                                    <span id="letrasemail">Email</span>
                                </label>
                            </div>
                        </div>
                        <div id="contraseña">
                            <div class="form-floating mb-3 input-group mb-3" id="input_contraseña">
                                <input class="form-control" id="floatingInput" type="password" name="contrasena" placeholder="hola" aria-label="hola" aria-describedby="basic-addon2">
                                <label id="labelcontr" for="floatingInput">
                                    <svg id="iconocontra" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <style>
                                            svg {
                                                fill: #a9afbc
                                            }
                                        </style>
                                        <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                                    </svg>
                                    <span id="letrasemail">Password</span>
                                </label>
                            </div>
                        </div>
                        <div class="btn_login">
                            <button class="btn_login1" type="submit">Start coding now</button>
                        </div>
                    </form>
                    <div id="cambio_register">
                        <div id="social">
                            <span>or continue with these social profile</span>
                        </div>
                        <div id="imgsocial">
                            <img src="/assets/Google.svg" alt="google">
                            <img src="/assets/Facebook.svg" alt="facebook">
                            <img src="/assets/Twitter.svg" alt="twiter">
                            <img src="/assets/Gihub.svg" alt="github">
                        </div>
                        <div id="changepage">
                            <span>Adready a member? <a href="/index.php">Login</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>