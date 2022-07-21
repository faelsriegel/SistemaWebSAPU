<?php 
session_start();
ob_start();
include_once "./dashboard.php";
include_once "../../model/logon/conexao.php";
?>	
<!DOCTYPE html>
<html>

<head>

	<title>SAPU | Resultados</title>

	<link href="style.css" rel="stylesheet" type="text/css"/>

	<meta charset="utf-8"/>

	<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">


<meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/> 
       <!-- <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />-->
		   <link href="../../assets/css/style.css" rel="stylesheet">
		    <!-- <link href="../../assets/css/menu.css" rel="stylesheet">-->
       <!-- <link href="../../assets/css/tabela.css" rel="stylesheet">-->
        <link href="../../assets/css/cadastro.css" rel="stylesheet">
</head>
<style>



<style>
table,th,td {
  border: 1px solid black;
  border-collapse:  collapse;
}
th,td {
  padding: 5px;
}
</style>
<body>

<div class="selecao_mes">

		<form method="post">

			<label>Periodo: </label>

				<select name="mes" id="mes">

					<option value="0">Periodo</option>

					<?php

						$sql = "SELECT * FROM disciplina ORDER BY periodo";

							$sql = $pdo->query($sql);

							if ($sql->rowCount() > 0) {

								foreach ($sql->fetchAll() as $mes) {

								?>

								<option value="<?php echo $mes['periodo'];?>"><?php echo $mes['disciplina'];?></option>

							<?php

							}

						}

					?>

				</select>

			<label>Ano: </label>

				<select name="ano" id="ano">

					<option value="0">Ano</option>

					<?php

						$anoData = date(Y);

						$sql = "SELECT * FROM ano WHERE id <= $anoData ORDER BY id";

							$sql = $pdo->query($sql);

							if ($sql->rowCount() > 0) {

								foreach ($sql->fetchAll() as $ano) {

								?>

								<option value="<?php echo $ano['id'];?>"><?php echo $ano['id'];?></option>

							<?php

							}

						}

					?>				

				</select>

			<input type="submit" value="Filtrar">

			<input type="button" value="Voltar" onclick="form.action='index.php'; form.submit()"> 

		</form>

	</div>
<?php

$sql = "SELECT * FROM disciplina";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
   echo "<center><table border=1 align=center><tr><th>Nome</th><th>Periodo</th><th>Carga Horaria</th><th>Sigla</th></tr></center>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "</tr><td>"
       .$row["nome"].
       "</td><td>"
        .$row["periodo"].
        "</td><td>"
        .$row["carga_horaria"].
        "</td><td>"
        .$row["sigla"].
        "</td>&nbsp;</tr>";
   }
   echo "</table>";
} else {
   echo "0 results";
}
$conn->close();

?>
</body>
</html>






