<?php
include_once("./config/conexao.php");
include_once("./func/funcao.php");

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Somnia - Cadastro</title>
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
            <div class="card mb-3 cardi" style="width:100%;">
                <img src="./img/logincad.png" width="100%" class="card-img-top" alt="...">
                <div class="card-body">
                    <form action="cad.php" method="post" name="formcad">
                        <div class="row">
                        <div class="col-md-12 col-sm-6 col-12">
                                <div class="mb-3">
                                    <label for="nomeinputcad" class="form-label">Nome:</label>
                                    <input type="text" class="form-control" id="nomeinputcad" name="nomeinputcad" aria-describedby="emailHelp" required="required">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="mb-3">
                                    <label for="emailinputcad" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="emailinputcad" name="emailinputcad" aria-describedby="emailHelp" required="required">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="mb-3">
                                    <label for="senhainputcad" class="form-label">Senha:</label>
                                    <input type="password" class="form-control" id="senhainputcad" name="senhainputcad" required="required">
                                </div>
                            </div>
                        </div>
                        <center>
                            <button type="submit" class="btn botao">Cadastrar</button>
                        </center>
                    </form>
                    <center>
                        <p class="mt-4">Já possui uma conta?</p>
                        <a href="./index.php" class="links">Clique aqui para fazer Login!</a>
                    </center>

                </div>
            </div>

        </div>

    </div>
















    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>