<?php
    include_once '../../model/list/Conexao.class.php';
    include_once '../../model/list/Entity.class.php';

    $funcEntity = new Entity();

    $id =  $_POST["id"];

    if(isset($id) && !empty($id)){
        $funcEntity ->delete("aluno", $id);
        header("Location: ../../view/user/listagem.php?func_deleted");
    }
?>