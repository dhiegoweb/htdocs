<?php 
session_start();

include_once("../back/conexao.php");


/*
             // A sessão precisa ser iniciada em cada página diferente
             if (!isset($_SESSION)) session_start();

             $nivel_necessario = 2;
             
                    // Verifica se não há a variável da sessão que identifica o usuário
                 if (!isset($_SESSION['usuarioId']) OR ($_SESSION['usuarioNiveisAcessoId'] <$nivel_necessario)) {
                 // Destrói a sessão por segurança
                 session_destroy();
                 // Redireciona o visitante de volta pro login
                 header("Location: ../login.php"); exit;
             }

*/
$result_usuarios = "SELECT * FROM tb_motorista WHERE id = '6' ";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
		
			 $nome= $row_usuario ['nome'];
			 $cpf= $row_usuario ['cpf'];
			 $email= $row_usuario ['email'];
			 $telefone= $row_usuario ['telefone']; 
			 $genero= $row_usuario ['genero'];
			 $estado= $row_usuario['estado'];
			 $cidade= $row_usuario['cidade'];
			 $bairro= $row_usuario['bairro'];
			 $logradouro= $row_usuario['logradouro'];
			 $cep= $row_usuario['cep'];
			 $numero= $row_usuario['numero'];
			 $complemento= $row_usuario['complemento'];
			 $cnh= $row_usuario['cnh'];
		
		}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de Cadastro</title>
    <link rel="icon" href="imgs/logo.jpeg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
      #senha{ display: inline-block ;
            width: 90px;
              text-align: left;
      }
    
    </style>
</head>
<body>

<?php include_once("menu.php") ?>
</br></br></br></br>


  <form  method="POST"  action="proc_editar.php" >
        <div class="form-row">
          <div class="col-md-3 mb-2">
            <label for="validationServer01">Nome</label>
            <input type="text" name="nome" class="form-control " id="validationServer01" placeholder="Nome" value="<?php echo $nome ;?>" required>
            
          </div>
          <div class="col-md-3 mb-2">
            <label for="validationServer02">Telefone</label>
            <input type="text" name="telefone" class="form-control " id="validationServer02" value="<?php echo $telefone ; ?>" required>
        
       
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationServerUsername">CPF</label>
            <div class="input-group">
              
              <input type="text" name="cpf" class="form-control " id="validationServerUsername" placeholder="CPF" value="<?php echo $cpf ; ?>"  aria-describedby="inputGroupPrepend3" required>
              
            </div>
          </div>
          <div class="form-group  col-md-2 mb-2">
    <label for="genero">Genero</label>
    <select name="genero" class="form-control" id="genero">
    <option value="<?php echo $genero; ?>" ><?php echo $genero; ?> </option>
      <option valeu="masculino">Masculino</option>
      <option valeu="feminino">Feminino</option>
      <option valeu="prefiro nao dizer">Prefiro nao dizer</option>
     
    </select>
  </div>
          
        </div>
        <div class="form-row">
          <div class="col-md-4 mb-2">
            <label for="validationServer03">Endereço</label>
            <input type="text" name="logradouro" class="form-control " id="endereco" value="<?php echo $logradouro; ?>" required>
          
          </div>
          <div class="col-md-2 mb-2">
            <label for="validationServer04">CEP</label>
            <input type="text" name="cep" class="form-control " id="CEP" value="<?php echo $cep; ?>" required>
            
          </div>
          <div class="col-md-2 mb-2">
            <label for="validationServer05">Numero</label>
            <input type="text" name="numero" class="form-control " id="numero" value="<?php echo $numero ?>" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationServer01">Complemento</label>
            <input type="text" name="complemento" class="form-control " id="Complemento" value="<?php echo $complemento; ?>"  required> 
          </div>
          <div class="col-md-4 mb-4">
            <label for="validationServer02">bairro</label>
            <input type="text" name="bairro" class="form-control " id="bairro" value="<?php echo $bairro; ?>"  required>
          </div>
          <div class="col-md-4 mb-4">
            <label for="validationServerUsername">cidade </label>
            <div class="input-group">
              <input type="text" name="cidade" class="form-control " id="cidade" value="<?php echo $cidade; ?>" required>
            </div>
        </div>
        <div class="form-group  col-md-4 mb-4">
    <label  for="estado">Estado</label>
    <select name="estado" class="form-control" id="genero">
                   <option <?php echo $estado ?> ><?php echo $estado ?></option>
                  <option value="AC">Acre</option>
                  <option value="AL">Alagoas</option>
                  <option value="AP">Amapá</option>
                  <option value="AM">Amazonas</option>
                  <option value="BA">Bahia</option>
                  <option value="CE">Ceará</option>
                  <option value="DF">Distrito Federal</option>
                  <option value="ES">Espírito Santo</option>
                  <option value="GO">Goiás</option>
                  <option value="MA">Maranhão</option>
                  <option value="MT">Mato Grosso</option>
                  <option value="MS">Mato Grosso do Sul</option>
                  <option value="MG">Minas Gerais</option>
                  <option value="PA">Pará</option>
                  <option value="PB">Paraíba</option>
                  <option value="PR">Paraná</option>
                  <option value="PE">Pernambuco</option>
                  <option value="PI">Piauí</option>
                  <option value="RJ">Rio de Janeiro</option>
                  <option value="RN">Rio Grande do Norte</option>
                  <option value="RS">Rio Grande do Sul</option>
                  <option value="RO">Rondônia</option>
                  <option value="RR">Roraima</option>
                  <option value="SC">Santa Catarina</option>
                  <option value="SP">São Paulo</option>
                  <option value="SE">Sergipe</option>
                  <option value="TO">Tocantins</option>
     
    </select>
  </div>
          <div class="col-md-6 mb-4">
            <label for="validationServer02">E-mail</label>
            <input type="text" name="email" class="form-control " id="email" value="<?php echo $email ;  ?>"  required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationServerUsername">Senha </label>
            <div class="input-group">
              <input type="password" name="password" class="form-control " id="senha" placeholder="senha" >
            </div>
           </div>
           <div class="col-md-3 mb-3">
            <label for="validationServerUsername">Confirmação senha </label>
          
              <input type="password" class="form-control" id="confirmacao_senha" placeholder="senha" >
        </div>
    

    <div class="col-md-3 mb-3">
    <label for="cnh">Número da sua CNH  </label>  
        <input type="text" name="cnh" id="cnh" class="form-control " value="<?php echo $cnh; ?>" required>
    </div>

    
  
        
        <button class="btn btn-primary" type="submit" >Atualizar</button>
      </form>
    </div>
	
  <script src="https://kit.fontawesome.com/c185366c54.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="./JavaScripts/index.js"></script>
</body>
</html>