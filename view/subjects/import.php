<?php 
session_start();
ob_start();
include_once "./dashboard.php";
include('../../controller/Import/functions.php');
?>	
<!DOCTYPE html>
<html lang="pt-br">

<!----======== CSS ======== -->
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/> 

<head>
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/> 
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../../assets/css/style.css" rel="stylesheet">
		<link href="../../assets/css/menu.css" rel="stylesheet">
        <link href="../../assets/css/tabela.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>-->
    <!---<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">-->
    <!---<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>-->

</head>

<body>
    <div id="wrap">
        <div class="container">
            <div class="row">

                <form class="form-horizontal" action="../../controller/Import/functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>

                        <!-- Titulo -->
                        <h1>Importação de arquivo CSV - Disciplinas</h1>

                        <!-- Botão Selecionar Arquivo -->
                        <div class="form-group>
                            <label class="col-md-4 control-label" for="filebutton"></label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large" required>
                            </div>
                        </div>
						
                        <!-- Botão -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton"></label><br><br>
                            <div class="col-md-4"><br>
                                <button type="submit" id="submit" name="Import" class="btn btn-lg btn-primary btn-block" style="text-align:center" data-loading-text="Carregando...">Upload</button><br>
                            
                            </div>
                        </div>
						
                    </fieldset>
                </form>
				
            </div>
<?php
get_all_records();
?>
        </div>
    </div>
    <scritp src="../../assets/js/jquery-3.3.1.min.js"></script> 
        <scritp src="../../assets/js/bootstrap.dundle.min.js"></script>
</body>
</html>
