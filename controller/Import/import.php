<?php 

include('../../model/logon/conexao.php');

if(isset($_POST["Import"])){
		$con = getdb();

		echo $filename=$_FILES["file"]["tmp_name"];
		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	         while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {

	           $sql = "INSERT into subject ('nome','periodo','carga_horaria','sigla') 
	            	values('$getData[0]','$getData[1]','$getData[2]','$getData[3]')";
				var_dump($sql);
					exit();
	         //função mysql_query que returna o processo se esta true ou false acusando erro
	           $result = $con->query($sql);
				if(!$result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"../../view/subjects/import.php\"
						</script>";		
				}

	         }
	         fclose($file);
	         //Messagem que avisa se o arquivo foi importadocom sucesso para a tabela mysql
	         echo "<script type=\"text/javascript\">
						alert(\"Arquivo CSV foi IMportado com SUCESSO!\");
						window.location = \"../../view/subjects/import.php\"
					</script>";	
			
		 }
	}	 
    ?>

</html>