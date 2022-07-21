<?php
session_start();
include_once("conexao.php");
$dados = $_POST;

if($dados){
	$usuario = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT idAluno, nome, email, senha FROM aluno WHERE email='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['idAluno'] = $row_usuario['idAluno'];
				$_SESSION['nome'] = $row_usuario['nome'];
				header("Location: ../../view/register/dashboard.php");
			}else{
				echo "<script type=\"text/javascript\">
							alert(\"Email ou Senha INVALIDOS!\");
							window.location = \"../../view/register/login.php\"
							</script>";
			}
		}
	}else{
		echo "<script type=\"text/javascript\">
							alert(\"Email ou Senha INVALIDOS!\");
							window.location = \"../../view/register/login.php\"
							</script>";
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: ../../view/register/login.php");
}