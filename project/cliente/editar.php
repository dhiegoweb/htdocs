<?php 
include_once("../back/conexao.php");


$result_usuarios = "SELECT * FROM tb_usuario WHERE id = '2' ";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			 echo "ID: " . $row_usuario['id'] . "<br>";
			echo "Serviço: " . $row_usuario['name'] . "<br>";
			echo "Valor: " . $row_usuario['valor'] . "<br><hr>";
		}



















        ?>