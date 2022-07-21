<?php
session_start();
ob_start();
//include_once "./dashboard.php";
include('./dashboard.php');
?>
<!doctype html>
<html>
    <<head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/> 
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../../assets/css/style.css" rel="stylesheet">
		
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
				<h2>Cadastro de Disciplinas<h2>
		<form method="POST" action="../../controller/Alunos/cad_Materia.php">
			<input type="text" name="nome" placeholder="Digite o nome da Materia" class="form-control">	<br>				
			<input type="number" max='10' min='1' name="periodo" placeholder="Digite o periodo"class="form-control"><br>						           
            <input type="number" max='360' min='15' name="carga_horaria" placeholder="Digite a carga horaria" class="form-control">	<br>		                    
            <input type="text" name="sigla" placeholder="Digite a sigla" class="form-control"><br>
			
			<button class="btn btn-lg btn-primary btn-block">Cadastrar</button>				
			</form>
				<!--<a class="btn btn-lg btn-primary btn-block" href="cadastrar.php">Não possui Conta, Crie grátis</a>-->
			</div>
		</div>
        <scritp src="../../assets/js/jquery-3.3.1.min.js"></script> 
        <scritp src="../../assets/js/bootstrap.dundle.min.js"></script> 
    </body>
</html>
