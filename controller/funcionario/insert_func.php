<?php
    include_once '../../model/Conexao.class.php';
    include_once '../../model/Entity.class.php';

    $funcEntity = new Entity();

    $data = $_POST;

    if(isset($data) && !empty($data))
    {
        $funcEntity->insert("registro",$data);
        header("Location: ../../view/funcionario/listagem.php?func_add_success");
    }

?>