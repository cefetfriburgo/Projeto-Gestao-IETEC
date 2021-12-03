
<?php
	include "./cadastro-empreendimento/conexao.php" ;
	
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	echo $login . "<br>";
	echo $senha;

	$consulta = "select email, senha from usuario where email='$login' and senha=AES_ENCRYPT('$senha', 'token') ";
	$resultado = mysqli_query($conexao, $consulta);
	
	if ($resultado == false){
		print_r( $resultado );
		echo mysqli_error($conexao);

		die();
	}
	
	$registro = mysqli_fetch_row($resultado);
	
	$login = $registro[2];
	$senha = $registro[3];

	$usuarioEncontrado = mysqli_affected_rows($conexao);

	if($usuarioEncontrado == 1){
		session_start();
		$_SESSION['email'] = $login;
		header("Location: ./painel-administrativo/index.html");
	}
	else{
		echo "Usuário/senha inválidos. Tente novamente. <a href='index.html'>Voltar</a>";
	}
?>
