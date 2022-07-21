<?php

session_start();
unset($_SESSION['idAluno'], $_SESSION['nome'], $_SESSION['email']);

//$_SESSION['msg'] = "Deslogado com sucesso";
//header("Location: ../../index.php");

echo "<script type=\"text/javascript\">
							alert(\"Deslogado com SUCESSO!\");
							window.location = \"../../index.php\"
							</script>";
?>