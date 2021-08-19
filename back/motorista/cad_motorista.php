<?php
/* Inicia sesão*/
		session_start();
/* Inicia Conexo com Banco*/
		include_once(".//conexao.php");

/* Recebe os dados do formulario de cadastro do motorista e insere nas variaveis */
	$nome_m = $_POST ['nome'];
	$email_m = $_POST ['email'];
	$genero_m = $_POST ['genero'];
	$telefone_m = $_POST ['telefone'] ;
	$cpf_m = $_POST ['cpf'] ;
	$endereco_m = $_POST ['endereco'] ;
	$numero_m = $_POST ['numero'] ;
	$logradouro_m = $_POST ['logradouro'] ;
	$complemento_m = $_POST ['complemento'] ;
	$bairro_m = $_POST ['bairro'] ;
	$cidade_m = $_POST ['cidade'] ;
	$estado_m = $_POST ['estado'] ;
	$cep_m = $_POST ['cep'] ;
	$cnh_m = $_POST ['cnh'] ;
	$crlv_m = $_POST ['crlv'] ;
	$senha = $_POST ['senha'];
	$senhacrip = md5($senha);
	

         /* Recebe os dados das variaveis e insere no banco
		 
		 
		 */
	
	$result_cad_motorista = "INSERT INTO tb_motorista ( nome , email , senha , cpf , telefone , genero ,
        endereco , numero , logradouro , complemento , bairro , cidade , estado , cep , crlv , cnh , nivel , ativo , created)
	VALUES ('$nome_m' ,'$email_m', '$senhacrip','$cpf_m','$telefone_m', '$genero_m','$endereco_m','$numero_m',
	'$logradouro_m','$complemento_m','$bairro_m','$cidade_m','$estado_m','$cep_m','$crlv_m', 
	'$cnh_m','1','1', NOW())";
	$resultado_motorista = mysqli_query($conn, $result_cad_motorista);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cad_motorta.php");
}
?>