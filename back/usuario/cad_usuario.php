<?php
/* Inicia sesão*/
		session_start();
/* Inicia Conexo com Banco*/
		include_once("../conexao.php");

/* Recebe os dados do formulario de cadastro do motorista e insere nas variaveis */
	$nome_m = $_POST ['nome'];
	$email_m = $_POST ['email'];
	$senha = $_POST ['password'];
	$senhacrip = md5($senha);
	$genero_m = $_POST ['genero'];
	$telefone_m = $_POST ['telefone'] ;
	$cpf_m = $_POST ['cpf'] ;
	$numero_m = $_POST ['numero'] ;
	$logradouro_m = $_POST ['logradouro'] ;
	$complemento_m = $_POST ['complemento'] ;
	$bairro_m = $_POST ['bairro'] ;
	$cidade_m = $_POST ['cidade'] ;
	$estado_m = $_POST ['estado'] ;
	$cep_m = $_POST ['cep'] ;
	$cnh_m = $_POST ['cnh'] ;

	//echo "$nome_m <br/>" ;
	//echo "$email_m <br/>" ;
	//echo "$senha <br/>";
	//echo "$senhacrip <br/>" ;
	//echo "$genero_m <br/>" ;
	//echo "$telefone_m <br/>" ;
	//echo "$cpf_m <br/>";
	//echo "$numero_m <br/>" ;
	//echo "$logradouro_m <br/>"  ;
	//echo "$complemento_m <br/>" ;
	//echo "$bairro_m <br/>" ;
	//echo "$cidade_m <br/>" ;
	//echo "$estado_m <br/>" ;
	//echo "$cep_m <br/>" ;
	//echo "$cnh_m <br/>" ;
	
	
	/* Efetua o upload da CNH */ 

     $file       = $_FILES['cnhf'];
	 $nome_temp  = $file['tmp_name'];
	 $nome       = $file['name'];
	  
	 if (move_uploaded_file($nome_temp, '../uploads/' . $nome) === FALSE) {
		 $erro = error_get_last();
		 echo $erro['message'];
	 } else {
		 //echo 'Arquivo ' . $nome . ' enviado com sucesso.';
	 }
        /*caminho da imagem para o servidor*/ 
	 $caminho = "upload/$nome";	 
	
	 /*Insere os dados no banco */ 
	$result_cad_motorista = "INSERT INTO tb_motorista ( nome , email , senha , cpf , telefone , genero ,
        endereco , numero , logradouro , complemento , bairro , cidade , estado , cep , cnhf , cnh , nivel , ativo , created , validado)
	VALUES ( '$nome_m' ,'$email_m', '$senhacrip','$cpf_m','$telefone_m', '$genero_m','$numero_m',
	'$logradouro_m','$complemento_m','$bairro_m','$cidade_m','$estado_m','$cep_m' , '$caminho',
	'$cnh_m' , '3' , '1' , NOW() , '0' )";

	$resultado_motorista = mysqli_query($conn, $result_cad_motorista);

	if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>cadastrado com sucesso</p>";
	header("Location: ../../front/index.html");
}else{
	$_SESSION['erro'] = "<p style='color:red;'>Email ou CPF já Cadastrado</p>";

	header("Location: ../../front/cadastro_mot.php");
}

?>