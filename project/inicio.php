<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="./Styles/index.css">
</head>
<body>
    <?php include_once ("menu.php");  ?>
    
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
                                    <button type="button" class="btn btn-dark" href="cadastro/cadastro_uni.php" >Cadastre-se</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                 <!--inicio foto capa-->
                <div class="col-md-6 d-none d-none d-md-block">
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
                        <img src="./imgs/walletnew.jpg" class="img-fluid" alt="lucro" width="500px" style="border-radius: 5px;">
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
                    <img src="./imgs/gpsnavigation.jpg" alt="localização" width="500px" style="border-radius: 5px;">
                </div>
            </div>
        </div>
    </section> <!--Fim do saiba mais-->

    <section class="caixa"> <!--Inicio multiplo-->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="./imgs/facil-usar.png" alt="entregas" class="img-fluid">
                    <h4>Facil de usar</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut lectus in nisl sollicitudin placerat in ut tellus.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="./imgs/time.jpg" alt="tempo" class="img-fluid">
                    <h4>Economize seu tempo</h4>
                    <p>
                        Com a MOTO RUNNER voce econimiza tempo dinheiro com a melhor qualidade.</br>
                        Use mais, pagando menos!
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="./imgs/sup.jpg" alt="suporte" class="img-fluid">
                    <h4>Suporte Amigo</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut lectus in nisl sollicitudin placerat in ut tellus.
                    </p>
                </div>
            </div>
        </div>
    </section> <!--fim multiplo-->

   
    <?php require ("footer.php"); ?>
 <script src="./JS/js.js"></script>
</body>
</html>
