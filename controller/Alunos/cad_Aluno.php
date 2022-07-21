<?php
session_start();
ob_start();

$dados_rc = $_POST;

if(isset($dados_rc) && !empty($dados_rc)){
	include_once '../../model/logon/conexao.php';
	
	//var_dump($dados);
	
    //retira os espaços em branco e tags
    $erro = false;
    $dados_rc = array_map('strip_tags', $dados_rc);
    $dados = array_map('trim', $dados_rc);
    //Tratamento de Erro no Cadastro
    if(in_array('',$dados)){
        $erro = true;
        echo "<script type=\"text/javascript\">
        alert(\"Preencha todos os campos para realizar cadastro\");
        window.location = \"../../view/register/cadastrar.php\"
        </script>";
    }elseif((strlen($dados['senha']))<5){
        $erro = true;
        echo "<script type=\"text/javascript\">
        alert(\"A senha precisa conter mais de 5 digitos\");
        window.location = \"../../view/register/cadastrar.php\"
        </script>";
    }elseif(stristr($dados['senha'], "'")){
        $erro = true;
        echo "<script type=\"text/javascript\">
            alert(\"Caracter na senha invalido\");
            window.location = \"../../view/register/cadastrar.php\"
            </script>";
    }else{
        $result_usuario = "SELECT id FROM aluno WHERE email='".$dados['email']."'";
        $result_usuario = mysqli_query($conn, $result_usuario);
        if(($result_usuario) AND ($result_usuario ->num_rows != 0)){
            $erro = true;
            echo "<script type=\"text/javascript\">
            alert(\"Email já cadastrado\");
            window.location = \"../../view/register/cadastrar.php\"
            </script>";
        } 
    }
    if(!$erro){
    //cripgrafa senha
    $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_usuario = "INSERT INTO aluno (nome, email, senha, instituicao, curso, created, modified) VALUES (
						'" .$dados['nome']. "',
						'" .$dados['email']. "',
						'" .$dados['senha']. "',
						'" .$dados['instituicao']. "',
						'" .$dados['curso']. "',
						'" .date('Y-m-d H:i:s'). "',
						'" .date('Y-m-d H:i:s'). "'
						)";
						
	$result_usuario = mysqli_query($conn, $result_usuario);
    if(mysqli_insert_id($conn)){
		echo "<script type=\"text/javascript\">
							alert(\"Usuario Cadastrado SUCESSO!\");
							window.location = \"../../view/register/login.php\"
							</script>";
	}else{
		echo "<script type=\"text/javascript\">
							alert(\"ERRO ao Cadastrar Usuario\");
							window.location = \"../../view/register/login.php\"
							</script>";
	    }
    }
}
?>