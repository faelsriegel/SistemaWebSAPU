<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "sapudb";
$port = 3306;
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname, $port);



function getdb(){

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "sapudb";
	$port = 3306;
	
	try {
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname, $port);
	//$conn = new PDO("mysql:host=$servidor;dbname=".$dbname, $usuario, $senha);

}
catch(exception $e)
	{
	echo "Conexão falhou: " . $e->getMessage();
	}
	return $conn;
}
?>