<?php
include('../../model/logon/conexao.php');
$conn = getdb();


   if(isset($_POST["Import"])){		
		echo $filename=$_FILES["file"]["tmp_name"];	

		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	           $sql = "INSERT into disciplina (nome,periodo,carga_horaria,sigla) values ('".$getData[0]."','".$getData[1]."',
			   '".$getData[2]."','".$getData[3]."')";
	           $result = mysqli_query($conn, $sql);
			    // var_dump(mysqli_error_list($con));
			    // exit();
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Arquivo Invalido: Insira um arquivo CSV.\");
							window.location = \"../../view/subjects/import.php\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"Arquivo CSV foi importado com SUCESSO!.\");
						window.location = \"../../view/subjects/import.php\"
					</script>";
				}
	         }
			
	         fclose($file);	
		 }
	}	 
	
	 if(isset($_POST["Export"])){
		 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Nome', 'Periodo', 'Carga Horaria', 'Sigla'));  
      $query = "SELECT * from disciplina ORDER BY nome DESC";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
	
function get_all_records(){
    $conn = getdb();

    $Sql = "SELECT * FROM disciplina";
    $result = mysqli_query($conn, $Sql);  

    if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
     <thead>
     <tr>
     					<th>Nome</th>
				  		<th>Periodo</th>
				  		<th>Carga Horaria</th>
				  		<th>Sigla</th>
                        </tr></thead><tbody>";

     while($row = mysqli_fetch_assoc($result)) {


         echo "<tr><td>" . $row['nome']."</td>
                   <td>" . $row['periodo']."</td>
                   <td>" . $row['carga_horaria']."</td>
                   <td>" . $row['sigla']."</td>";
                   /*<td>" . $row['ativo']."</td></tr>";           <th>Ativo</th>*/
         
     }
	//  echo "<tr> <td><a href='' class='btn btn-danger' id='status_btn' data-loading-text='Changing Status..'>Export</a></td></tr>";
     echo "</tbody></table></div>";
	 
} else {
     echo "Você não tem nenhuma disciplina cadastrada";
}
}



?>