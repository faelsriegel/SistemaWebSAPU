<?php
session_start();
ob_start();

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/> 
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../../assets/css/style.css" rel="stylesheet">
		<link href="../../assets/css/cadastro.css" rel="stylesheet">
		
        <title> SAPU | Cadastrar Usuario</title>       
    </head>
    <body>
	<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>

		<div class="body_logon">
			<div class="area">
				<img class="logo" src="../../assets/img/logo1.png">
				<h2>Cadastro de Usuário</h2>
				<form method="POST" action="../../controller/Alunos/cad_Aluno.php">
			
			<input type="text" name="nome" placeholder="Digite o nome completo" class="form-control"><br>
			<input type="email" name="email" placeholder="Digite o seu e-mail" class="form-control"><br>
            <input type="password" name="senha" placeholder="Digite sua senha"class="form-control"><br>
            <input type="text" name="instituicao" placeholder="Digite o nome da instituição" class="form-control"><br>
            <input type="text" name="curso" placeholder="Digite o nome de seu curso" class="form-control"><br><br>

			<button class="btn btn-lg btn-primary btn-block">Cadastrar</button><br>
			<a class ="cadastrar" href="./login.php">Já possui cadastro? Clique Aqui</a>
			
		</form>
				<p class="gray padding">Projeto de Programação 2</p>
				<!--<a class="btn btn-lg btn-primary btn-block" href="cadastrar.php">Não possui Conta, Crie grátis</a>-->
			</div>
		</div>
        <scritp src="../../assets/js/jquery-3.3.1.min.js"></script> 
        <scritp src="../../assets/js/bootstrap.dundle.min.js"></script> 
    </body>
</html>




