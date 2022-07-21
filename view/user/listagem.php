<?php
    include_once "../../model/list/Conexao.class.php";
    include_once "../../model/list/Entity.class.php";
    //include_once "./header.php";
    include_once "../subjects/dashboard.php";    

    $funcEntity = new Entity();
?>

<meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/> 
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../../assets/css/style.css" rel="stylesheet">
		<link href="../../assets/css/menu.css" rel="stylesheet">
        <link href="../../assets/css/tabela.css" rel="stylesheet">
        
        
<div class="container">
<h1 class="text-left">
        Listagem de Usuários
    </h1>
    <div class="table-responsive">
        <table id="idTable" class="table mt-3 table-striped table-berdered">
            <thead>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th>INSTITUICAO</th>
                    <th>CURSO</th>
            </thead>   
            <tbody>
                <?php foreach($funcEntity->list("aluno") as $func){?>
                        <tr>
                            <td><?php echo $func['idAluno']; ?></td>
                            <td><?php echo $func['nome']; ?></td>
                            <td><?php echo $func['email']; ?></td>
                            <td><?php echo $func['instituicao']; ?></td>
                            <td><?php echo $func['curso']; ?></td>
                            <td>    
                                <div class="row">
                                    <div class="col-sm-4">
                                        <form method="POST" action="../user/page_update.php"><br>
                                        <input type="hidden" name="id" value="<?=$func['idAluno']?>" />
                                        <button class="btn btn-primary btn-sm">
                                            <i class="bx bx-edit"></i>
                                        </button>
                                        </form>
                                    </div>
                                    <div class="col-sm-4">
                                        <form method="POST" action="../../controller/Alunos/delete_Aluno.php"><br>
                                        <input type="hidden" name="id" value="<?=$func['idAluno']?>" />
                                        <button class="btn btn-primary btn-sm">
                                            <i class="bx bx-trash-alt"></i>
                                        </button>
                                        </form>
                                    </div>
                                </div>                                 
                            </td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <br>
    <h5 class="text-right">
        <a href="../../view/register/cadastrar.php" class="btn btn-primary btn-lg">
        Cadastrar</a>
    </h5>
</div>
