 
<?php
         // A sessão precisa ser iniciada em cada página diferente
    if (!isset($_SESSION)) session_start();

$nivel_necessario = 1;

       // Verifica se não há a variável da sessão que identifica o usuário
    if (!isset($_SESSION['usuarioId']) OR ($_SESSION['usuarioNiveisAcessoId'] <$nivel_necessario)) {
    // Destrói a sessão por segurança
    session_destroy();
    // Redireciona o visitante de volta pro login
    header("Location: ../login.html"); exit;
}
?>




<a href="../../back/login/exit.php" class="nav-link">sair</a>


  

