<?php
    include_once '../../model/list/Conexao.class.php';
    include_once '../../model/list/Entity.class.php';   

    $funcEntity = new Entity();

    $id =  $_POST["id"];
    $dados = $_POST;

    if(isset($id) && !empty($id)){

        $funcEntity ->update("aluno", $dados, $id);
        header("Location: ../../view/user/listagem.php?func_update");
    }
?>