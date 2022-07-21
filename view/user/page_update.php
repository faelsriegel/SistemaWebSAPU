<?php 
 include_once "../../model/list/Conexao.class.php";
 include_once "../../model/list/Entity.class.php";
 include_once "../subjects/dashboard.php";

$func = new Entity();
$id = $_POST["id"];

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/> 
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../../assets/css/style.css" rel="stylesheet">
		<link href="../../assets/css/menu.css" rel="stylesheet">
		
        <title>Update</title>       
    </head>
    <body>
                    <!-- ARRUMAR ESS LAYOUT PQ SO JOGUEI AQUI PARA VER COMO FICAVA, NEM SEI K--->

<h2>Update de Registro</h2>
<hr>
<form method="POST" action="../../controller/Alunos/update_Aluno.php">
    <div class="container">
        <div class="form">
            
            <?php foreach($func->getInfo("aluno",$id) as $registro){?>

            <div class="form-group">
                Nome:
                <input type="Text" class="form-control" name="nome" style="width:25%" require autofocus value="<?=$registro["nome"];?>" >
                <br>
            </div>
            <div class="form-group">
                Email:
                <input type="email" class="form-control" name="email" style="width:25%" required value="<?=$registro["email"];?>">
                <br>
            </div>
            <div class="form-group">
                Instituicao:
                <input type="Text" class="form-control" name="instituicao" style="width:20%" required value="<?=$registro["instituicao"];?>">
                <br>
            </div>
            <div class="form-group">
                Curso:
                <input type="text" class="form-control" name="curso" style="width:20%" required value="<?=$registro["curso"];?>">
                <br>
            </div>
            <input type="hidden" name="id" value="<?=$registro["idAluno"];?>">

            <?php } ?>

            <div class="form-group">
                <button class="btn btn-primary">Atualizar</button>
                <br><br>
                <a href="../user/listagem.php" class="btn btn-danger">Voltar</a>
            </div>
        </div>
     </div>
</form>
</body>
</html>
