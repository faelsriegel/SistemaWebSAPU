<?php
session_start();
ob_start();
$dados = $_POST;

if(isset($dados) && !empty($dados)){
	include_once '../../model/logon/conexao.php';

	//var_dump($dados);
    $erro = false;
   
    if(in_array('',$dados)){
        $erro = true;
        echo "<script type=\"text/javascript\">
            alert(\"Preencha todos os campos para realizar cadastro\");
            window.location = \"../../view/subjects/cadastrar_subjects.php\"
            </script>";
    }else{
        $result_CadMateria = "SELECT idDisciplina FROM disciplina WHERE nome='".$dados['nome']."'";
        $result_CadMateria = mysqli_query($conn, $result_CadMateria);
        if(($result_CadMateria) AND ($result_CadMateria ->num_rows != 0)){
            $erro = true;
            echo "<script type=\"text/javascript\">
            alert(\"Materia ja cadastrada\");
            window.location = \"../../view/subjects/cadastrar_subjects.php\"
            </script>";
        } 
    }
    if(!$erro){
    $result_disciplina = "INSERT INTO disciplina (nome, periodo, carga_horaria, sigla ) VALUES (
        '" .$dados['nome']. "',
        '" .$dados['periodo']. "',
        '" .$dados['carga_horaria']. "',
        '" .$dados['sigla']. "'
        )";
        
    $result_disciplina = mysqli_query($conn, $result_disciplina);

    if(mysqli_insert_id($conn)){
        echo "<script type=\"text/javascript\">
        alert(\"Materia cadastrado com sucesso!\");
        window.location = \"../../view/subjects/cadastrar_subjects.php\"
        </script>";
    }else{
        echo "<script type=\"text/javascript\">
        alert(\"Erro ao cadastrar a materia\");
        window.location = \"../../view/subjects/cadastrar_subjects.php\"
        </script>";
    }}
}
?>