<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="cuerpo">
        <div class="login">
            <div class="loginC">
                <div class="icono">
                    <img src="/assets/devchallenges.svg" alt="icono">
                </div>
                <div class="titulo_login">
                    <p>Join thousands of learners from</p>
                    <p>around the world</p>
                </div>
                <div class="subtitulo_login">
                    <p>Master web development by making real-life</p>
                    <p>projects. There are multiple paths for you to</p>
                    <p>choose</p>
                </div>
                <div class="inputs">
                    <form action="/handle_db/create.php" method="post">
                        <div id="email">
                            <label>Email:</label>
                            <div id="input_email">
                                <input type="email" name="email">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                                </svg>
                            </div>
                        </div>
                        <div id="contraseña">
                            <label>Contraseña:</label>
                            <div id="input_contraseña">
                                <input type="password" name="contrasena">
                            </div>
                        </div>
                        <div class="btn_login">
                            <button type="submit">Start coding now</button>
                        </div>
                    </form>
                    <div id="cambio_register">
                        <div>
                            <span>or continue with these social profile</span>
                        </div>
                        <div>
                            <img src="/assets/Google.svg" alt="google">
                            <img src="/assets/Facebook.svg" alt="facebook">
                            <img src="/assets/Twitter.svg" alt="twiter">
                            <img src="/assets/Gihub.svg" alt="github">
                        </div>
                        <div>
                            <span>Adready a member? <a href="/index.php">Login</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>