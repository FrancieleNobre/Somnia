<?php
include_once("./config/conexao.php");
include_once("./func/funcao.php");

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Somnia - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                <a href="./index.php" class="btn botaosair">Sair</a>
                <form class="d-flex mt-2 mb-2" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                    <button class="btn botaosearch" type="submit"><i class="bi bi-search-heart"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <div id="carouselExampleAutoplaying" class="carousel slide topo sombrab" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/Banner1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/Banner2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/Banner3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <div class="container">
        <div class="div separar">
            <center>
                Melhores Maquiagens
            </center>

        </div>

        <div class="row mt-3 mb-3">
                    <div class="col-md-3 col-6">
                        <div class="card mt-3" style="height:100%;">
                            <img src="./img/makebms320.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <center>
                                    <h5 class="card-title">Base Líquida Cor 320 Make B. Mate Salicylic 30g</h5>
                                    <p class="card-text"><b>o Boticário</b></p>
                                    <p class="card-text">Com nova fórmula e nova embalagem, a base Mate Salicylic matifica em segundos e controla o brilho.</p>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card mt-3" style="height:100%;">
                            <img src="./img/batommac502.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <center>
                                    <h5 class="card-title">Batom Lustreglass Sheer-Shine</h5>
                                    <p class="card-text"><b>M.A.C</b></p>
                                    <p class="card-text">Um batom leve, infundido com sementes de framboesa e azeite extra-virgem orgânico que proporcionam uma cor pura e brilhante com um acabamento lustroso e de longa duração.</p>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card mt-3" style="height:100%;">
                            <img src="./img/blushdiorrosyglow004coral.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <center>
                                    <h5 class="card-title">Blush Dior Rosy Glow 004 Coral</h5>
                                    <p class="card-text"><b>Dior</b></p>
                                    <p class="card-text">Este impulsionador de aspeto saudável confere às maçãs do rosto um toque de frescor, como se estivessem naturalmente coloridas, reavivadas desde o interior. Infundido de tecnologia Color Reviver, reage ao nível de hidratação a partir da aplicação para um efeito rosado personalizável.</p>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card mt-3" style="height:100%;">
                            <img src="./img/delineadorlinepenvizzelacl.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <center>
                                    <h5 class="card-title">Caneta Delineadora Cat Lovers</h5>
                                    <p class="card-text"><b>Vizzela</b></p>
                                    <p class="card-text">Caneta delineadora Line Pen da Vizzela possui uma cor ultra black super intensa, com sua ponteira super fina e resistente à água.</p>
                                </center>
                            </div>
                        </div>
                    </div>

                    

        </div>









    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>