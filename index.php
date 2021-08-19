<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moto Runner</title>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<body>

  <header>
    <div class="container" id="nav-container">
      <!-- add essa class -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <a class="navbar-brand" href="index.html">
          <img id="logo" src="./img/logo.png" alt="Moto Runner"> Moto Runner
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
            <a class="nav-item nav-link" id="home-menu" href="#">Home</span></a>
            <a class="nav-item nav-link" id="about-menu" href="#">Produtos</a>
            <a class="nav-item nav-link" id="services-menu" href="#">Beneficios</a>
            <a class="nav-item nav-link" id="team-menu" href="#">Contato</a>
            <a class="nav-item nav-link" id="portfolio-menu" href="login.php">Login</a>
            <a class="nav-item nav-link" id="contact-menu" href="cadastro_uni.php">Cadastre-se</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  
  <main>
    <div class="container-fluid">
      <!-- slider -->
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
          <li data-target="#mainSlider" data-slide-to="1"></li>
          <li data-target="#mainSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/motor2.png" class="d-block w-100" alt="Moto Runner">

            <!-- tirar classe d-none -->

            <div class="carousel-caption d-md-block">
              <h2>Lorem Ipsum</h5>
              <p>texto a definir, texto a definir, texto a definir, texto a definir, </p>
              <a href="#" class="main-btn">Lorem Ipsum</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/moto3.jpg" class="d-block w-100" alt="Moto Runner">
            <div class="carousel-caption d-md-block">
              <h2>Lorem Ipsum</h5>
                <p>texto a definir, texto a definir, texto a definir, texto a definir, </p>
              <a href="#" class="main-btn">Lorem Ipsum</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/motorcicle.jpg" class="d-block w-100" alt="Moto Runner">
            <div class="carousel-caption d-md-block">
              <h2>Lorem Ipsum</h5>
                <p>texto a definir, texto a definir, texto a definir, texto a definir, </p>
              <a href="#" class="main-btn">Lorem Ipsum</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Sobre a empresa -->
      <div id="about-area">
        <div class="container">
            <div class="row">
              <div class="col-12"> 
                <h3 class="main-title">Sobre a Moto Runner</h3>
              </div>
              <div class="col-md-6">
                <img class="img-fluid" src="./img/logo.jpeg" alt="Moto Runner">
              </div>
              <div class="col-md-6">
                <h3 class="about-title">Lorem ipsum dolor sit amet</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas faucibus porta ante, ut
                efficitur sem malesuada quis. Aenean vitae eros quis orci venenatis ornare eget vitae risus.
                Phasellus posuere posuere felis at vestibulum.</p> 
                <p>Quisque mi magna, porta nec lacus et, facilisis
                gravida metus. Ut vestibulum ultrices velit. Integer sed tortor in purus varius dapibus.
                Suspendisse fermentum nisi ac venenatis mattis.</p>
                <ul id="about-list">
                    <li><i class="fas fa-check"></i>  Lorem ipsum dolor sit amet</li>
                    <li><i class="fas fa-check"></i>  Lorem ipsum dolor sit amet</li>
                    <li><i class="fas fa-check"></i>  Lorem ipsum dolor sit amet</li>
                    <li><i class="fas fa-check"></i>  Lorem ipsum dolor sit amet</li>
                    <li><i class="fas fa-check"></i>  Lorem ipsum dolor sit amet</li>
                </ul>
            </div>
            </div>
          </div>
      </div>
      <!--Serviços da Empresa-->
      <div id="services-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="main-title">Nossos serviços</h3>
                </div>
                <div class="col-md-4 service-box">
                    <i class="fas fa-mobile-alt"></i>
                    <h4>Aplicativo pratico e rapido</h4>
                    <p>Venha usar o que a de mais moderno,sistema multiplataforma.</p>
                </div>
                <div class="col-md-4 service-box">
                    <i class="fa fa-motorcycle" aria-hidden="true"></i>
                    <h4>Motociclista</h4>
                    <p>Venha economizar tempo e fazer uma renda extra.</p>
                </div>
                <div class="col-md-4 service-box">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <h4>Segurança para você e passageiro</h4>
                    <p>Possuimos validaçao de indentidade de usuario e motociclista, garantindo assim segurança para todos .</p>
                </div>
                <div class="col-md-4 service-box">
                    <i class="fa fa-google-wallet" aria-hidden="true"></i>
                    <h4>Faça a sua rotina render mais</h4>
                    <p>Quisque mi magna, porta nec lacus et, facilisis
                        gravida metus. Ut vestibulum ultrices velit. Integer sed tortor in purus varius dapibus.
                        Suspendisse fermentum nisi ac venenatis mattis.</p>
                </div>
                <div class="col-md-4 service-box">
                    <i class="fa fa-hands-helping" aria-hidden="true"></i>
                    <h4>Suporte 24/7</h4>
                    <p>Temos equipe trabalhando 24 horas, 7 dias por semana, garantindo o perfeito funcionamento e segurança de todos que acredita na MOTO RUNNER .</p>
                </div>
                <div class="col-md-4 service-box">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                    <h4>Cadastre-se e saiba mais</h4>
                    <p>Quisque mi magna, porta nec lacus et, facilisis
                        gravida metus. Ut vestibulum ultrices velit. Integer sed tortor in purus varius dapibus.
                        Suspendisse fermentum nisi ac venenatis mattis. Clique  <a href="#">AQUI</a> para se cadastrar</p>
                </div>
            </div>
        </div>
    </div>
      <!-- Dados da empresa -->
      <div id="data-area">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleA"></div>
              <p>Motoristas parceiros</p>
            </div>
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleB"></div>
              <p>Corridas Realizadas</p>
            </div>
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleC"></div>
              <p>Clientes Satisfeitos</p>
            </div>  
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleD"></div>
              <p>Colaboradores</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Time -->
      <div id="team-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="main-title">Nosso time</h3>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="./img/everton.png" class="card-img-top" alt="Imagem de Perfil 1">
                <div class="card-body">
                  <h5 class="card-title">Everton</h5>
                  <p class="card-text">Web Developer</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="./img/diego.png" class="card-img-top" alt="Imagem de Perfil 2">
                <div class="card-body">
                  <h5 class="card-title">Dhiego</h5>
                  <p class="card-text">Web Developer</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="./img/ewerton.png" class="card-img-top" alt="Imagem de Perfil 3">
                <div class="card-body">
                  <h5 class="card-title">Ewerton</h5>
                  <p class="card-text">Web Developer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Trabalhe conosco -->
      <div id="apply-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 apply-box" id="company-img"></div>
            <div class="col-md-6 apply-box" id="pattern-img">
              <h4>Gosta de desafios?</h4>
              <p>texto a definir, texto a definir, texto a definir, texto a definir</p>
              <p>texto a definir, texto a definir, texto a definir, texto a definir</p>
              <p>texto a definir, texto a definir, texto a definir, texto a definir texto a definir, texto a definir, texto a definir, texto a definir.</p>
              <a href="#" class="main-btn" id="apply-btn">Cadastre-se</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Portfólio -->
      <div id="portfolio-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Conheça nossos Beneficios</h3>
            </div>
            <div class="col-md-12" id="filter-btn-box">
              <button class="main-btn filter-btn active" id="all-btn">Todos</button>
              <button class="main-btn filter-btn" id="dev-btn">Entregas</button>
              <button class="main-btn filter-btn" id="dsg-btn">Corridas</button>
            </div>
            <div class="col-md-4 project-box dev">
              <img src="img/proj1.jpg" class="img-fluid" alt="Projeto 1">
            </div>
            <div class="col-md-4 project-box dsg">
              <img src="img/proj2.jpg" class="img-fluid" alt="Projeto 2">
            </div>
            <div class="col-md-4 project-box seo">
              <img src="img/proj3.jpg" class="img-fluid" alt="Projeto 3">
            </div>
            <div class="col-md-4 project-box dev">
              <img src="img/proj4.jpg" class="img-fluid" alt="Projeto 4">
            </div>
            <div class="col-md-4 project-box dsg">
              <img src="img/proj5.jpg" class="img-fluid" alt="Projeto 5">
            </div>
            <div class="col-md-4 project-box seo">
              <img src="img/proj6.jpg" class="img-fluid" alt="Projeto 6">
            </div>
          </div>
        </div>
      </div>
      <!-- Newsletter -->
      <div id="news-area">
        <div class="container">
          <div class="col-md-12">
            <h3 class="main-title">Fique por dentro das novidades</h3>
          </div>
          <p>Assine nossa lista de e-mails, e receba nossos conteúdos sobre a Moto Runner</p>
          <form action="">
            <input type="text" class="form-control" id="email-input" name="email" placeholder="Seu melhor e-mail">
            <input type="submit" id="news-btn" value="Inscrever">
          </form>
        </div>
      </div>
      <!-- Call to Action -->
      <div id="call-area">
        <div class="container">
            <div class="row">
              <p>Deseja ser um motorista mais feliz?</p>
              <button class="main-btn" id="call-btn">venha conosco</button>
            </div>
          </div>
      </div>
    </div>
  </main>
  <!-- Rodapé -->
  <footer>
    <div id="contact-area">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Entre em contato conosco</h3>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-phone"></i>
              <p><span class="contact-tile">Ligue para:</span> (99)99999-9999</p>
              <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-envelope"></i>
              <p><span class="contact-tile">Envie um email:</span> contato@motorunner.com.br</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-map-marker-alt"></i>
              <p><span class="contact-tile">Nossa sede:</span> Rua Lorem Ipsum - 1314</p>
            </div>
            <div class="col-md-6" id="msg-box">
              <p>Entre em contato conosco:</p>
            </div>
            <div class="col-md-6" id="contact-form">
              <form action="">
                <input type="text" class="form-control" placeholder="E-mail" name="email">
                <input type="text" class="form-control" placeholder="Assunto" name="subject">
                <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                <input type="submit" class="main-btn">
              </form>
            </div>
          </div>
      </div>
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
      <div>
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
    <div id="copy-area">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
             <p> DEVELOPED BY  &COPY  <a href="http://telwaytecnologia.com.br/">TELWAY</a></p>
            </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts do projeto -->
  <script src="js/scripts.js"></script>
</body>
</html>