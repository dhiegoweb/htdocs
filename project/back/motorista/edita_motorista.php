<?php
/*Inicia sessão*/ 
    session_start();

    include_once("../conexao.php");

  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  $result_usuario = "SELECT * FROM tb_motorista WHERE id = '2'";
  $resultado_usuario = mysqli_query($conn, $result_usuario);
  $row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>


        <?php echo $row_usuario['nome']; ?>	


