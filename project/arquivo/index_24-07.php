<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moto Runner</title>
    <link rel="icon" href="imgs/logo.jpeg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="./Styles/index.css">
</head>
<body>
    <!--inicio do header-->
    <header>
        <nav class="navbar navbar-expand-sm navbar-light .text-secondary">
            <div class="container">
                <a href="index.html"></a>
                    <img class="img" src="./imgs/logo.jpeg" alt="img-logo" width="142px">
                    <div class="row">
                        <div class="marcador col-2">Área 1</div>
                    </div>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                        <span class="navbar-toggler-icon"></span>
                      </button>
            
                      <div class="collapse navbar-collapse" id="nav-principal">

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a href="#" class="nav-link">Recursos</a>
                            </li>
    
                            <li class="nav-item">
                                <a href="#" class="nav-link">Benefícios</a>
                            </li>
    
                            <li class="nav-item">
                                <a href="#" class="nav-link">Contato</a>
                            </li>
                        
                            <li class="nav-item">
                                <a href="login.html" class="btn btn-outline-danger ml-4">Login</a>
                            </li>
                        
                            <li class="nav-item">
                                <a href="#" class="btn btn-outline-danger ml-4">Cadastrar</a>
                            </li>
                        </ul>
                    </div>
    
                </div>
            </nav>
    </header>
        <!--fim do header-->
        
        <section id="home"> <!--Inicio do Home-->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="align-self-center">
                            <h1 class="display-4">Suas viajens, descomplicadas</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <form class="mt-4 mb-4">
                                <div class="input-group input-group-lg">
                                    <input type="text" placeholder="É motorista? Cadastre-se" class="form-control">
                                    <div class="input-group-append">
                                        <a href="cadastro_uni.html" type="button" class="btn btn-dark">Cadastre-se</a>
                                     <!--  <button type="button" class="btn btn-dark">Cadastre-se</button> --> 
                                    </div>
                                </div>
                            </form>

                            

                        </div>
                    </div>
                     <!--inicio foto capa-->
                    <div class="col-md-6 d-none d-none d-md-block">
                        <img src="./imgs/route.png" alt="route" width="404px">
                    </div>
                    <!--fim foto capa-->
                </div>
            </div>
        </section> <!--Fim do Home-->

        <section class="caixa"> <!--Ganhe mais-->
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./imgs/Wallet.png" class="img-fluid" alt="lucro" width="300px">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="align-self-center">
                                <h2>Ganhe mais, faça seu trabalho render mais</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                </p>
                                <a href="" class="btn btn-dark">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- fim Ganhe mais-->
         
        <section class="caixa"> <!--Inicio do saiba mais-->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="align-self-center">
                            <h2>Preocupados com a sua segurança, onde quer que você vá</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <a href="" class="btn btn-dark">Veja mais</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="./imgs/gps.png" alt="localização" width="300px">
                    </div>
                </div>
            </div>
        </section> <!--Fim do saiba mais-->

        <section class="caixa"> <!--Inicio multiplo-->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="./imgs/mapa.png" alt="entregas" class="img-fluid">
                        <h4>Facil de usar</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut lectus in nisl sollicitudin placerat in ut tellus.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="./imgs/rapidez.pngg" alt="tempo" class="img-fluid">
                        <h4>Economize seu tempo</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut lectus in nisl sollicitudin placerat in ut tellus.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="./imgs/Support.png" alt="suporte" class="img-fluid">
                        <h4>Suporte Amigo</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut lectus in nisl sollicitudin placerat in ut tellus.
                        </p>
                    </div>
                </div>
            </div>
        </section> <!--fim multiplo-->

        <!--Inicio Rodapé-->
        <footer class="mt-4 mb-4">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <p>
                                <a href="index.html">Home</a>
                                <a href="#">Recursos</a>
                                <a href="#">Quem Somos</a>
                                <a href="#">Politica de Privacidade</a>
                                <a href="#">Contato</a>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <a href="https://facebook.com" class="btn btn-outline-dark ml-2">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com" class="btn btn-outline-dark ml-2">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://instagram.com/" class="btn btn-outline-dark ml-2">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://youtube.com" class="btn btn-outline-dark ml-2">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="https://web.whatsapp.com" class="btn btn-outline-dark ml-2">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <p>Disponível para
                                <a href="" class="btn btn-outline-dark">
                                    <i class="fab fa-android fa-lg"></i>
                                </a>
                                <a href="" class="btn-outline-dark">
                                    <i class="fab fa-apple fa-lg"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div id="texto">
                    <p>Todos os Direitos Reservados &copy;</p>
                    <div>
                        DEVELOPER IN TRINING &COPY;
                    </div>
                </div>
            </div>
        </footer>
        <!--fim do rodapé-->

        <script src="https://kit.fontawesome.com/c185366c54.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./JavaScripts/index.js"></script>
</body>
</html>