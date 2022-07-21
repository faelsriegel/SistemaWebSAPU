<?php
session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/> 
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../../assets/css/style.css" rel="stylesheet">
		<link href="../../assets/css/cadastro.css" rel="stylesheet">
        <title>SAPU | Login</title>       
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
				<h2>Login</h2>
				<form method="post" action="../../model/logon/valida.php">
					<input type="email" name="email" placeholder="Digite seu e-mail" class="form-control"/><br>
					<input type="password" name="senha" placeholder="Digite sua senha" class="form-control"/><br><br>
					<button class="btn btn-lg btn-primary btn-block">Entrar</button>
					<!--<a class ="esqueci" href="recuperar.php">Esqueci minha senha</a>-->
					<a class="inicio" href="../../index.php">Voltar</a><br><br>
					<a class ="cadastrar" href="cadastrar.php">Não tem uma Conta? Clique aqui!</a>
					
				</form>
				<p class="gray padding">Projeto de Programação 2</p>
				<!--<a class="btn btn-lg btn-primary btn-block" href="cadastrar.php">Não possui Conta, Crie grátis</a>-->
			</div>
		</div>
        <scritp src="../../assets/js/jquery-3.3.1.min.js"></script> 
        <scritp src="../../assets/js/bootstrap.dundle.min.js"></script> 
    </body>
</html>