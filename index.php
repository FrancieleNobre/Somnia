<?php
include_once("./config/conexao.php");
include_once("./func/funcao.php");

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Somnia - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="body">
    <nav class="navbar navbar-expand-lg nave fixed-top">
        <div class="container-fluid">
        <img class="navbar-brand" src="./img/logo2.png" width="50px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="card mb-3 cardi">
                <img src="./img/logincad.png" width="100%" class="card-img-top" alt="...">
                <div class="card-body">
                    <form action="./login.php" method="post" name="formlogin">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="mb-3">
                                    <label for="emailinput" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="emailinput" name="emailinput" aria-describedby="emailHelp" required="required">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="mb-3">
                                    <label for="senhainput" class="form-label">Senha:</label>
                                    <input type="password" class="form-control" id="senhainput" name="senhainput" required="required">
                                </div>
                            </div>
                        </div>
                        <center>
                            <button type="submit" class="btn botao">Login</button>
                        </center>
                    </form>
                    <center>
                        <p class="mt-4">Não possui uma conta?</p>
                        <a href="./cadastro.php" class="links">Cadastre-se aqui!</a>
                    </center>

                </div>
            </div>

        </div>

    </div>
















    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>