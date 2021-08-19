
<?php
session_start();
/* Inicia Conexo com Banco*/
		include_once("../back/conexao.php");



/* Recebe os dados do formulario de cadastro do motorista e insere nas variaveis */
$nome_m = $_POST ['nome'];
$email_m = $_POST ['email'];
$senha = $_POST ['password'];
$senhacrip = md5($senha);
$genero_m = $_POST ['genero'];
$telefone_m = $_POST ['telefone'] ;
$numero_m = $_POST ['numero'] ;
$logradouro_m = $_POST ['logradouro'] ;
$complemento_m = $_POST ['complemento'] ;
$bairro_m = $_POST ['bairro'] ;
$cidade_m = $_POST ['cidade'] ;
$estado_m = $_POST ['estado'] ;
$cep_m = $_POST ['cep'] ;
$cnh_m = $_POST ['cnh'] ;
$id= $_SESSION['usuarioId'] ;




 /*Insere os dados no banco */ 
$update_motorista = " UPDATE tb_motorista SET  nome = '$nome_m',email='$email_m',senha ='$senhacrip',telefone='$telefone_m',logradouro= '$logradouro_m',
numero='$numero_m',complemento='$complemento_m',bairro='$bairro_m',cidade='$cidade_m',estado='$estado_m',cep='$cep_m',modified=NOW() WHERE id='$id'";

$resultado_motorista = mysqli_query($conn, $update_motorista);

if(mysqli_affected_rows($conn)){
  $_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
  header("Location: index.php");
}else{
  $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
  header("Location: editar.php?id=$id");
}


?>