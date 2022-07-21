<?php /*
include_once 'header.php'; ?>

<h2> Cadastro </h2>
<hr>
<form  method="POST" action="../../controller/funcionario/insert_func.php">
    <div class="container">
        <div class="form">

            <div class="form-group">
                Nome:
                <input type="text" class="form-control"
                name="nome" required  autofocus >
                <br>
            </div>

            <div class="form-group">
                Email:
                <input type="email" class="form-control"
                name="email" required>
                <br>
            </div>

            <div class="form-group">
                Senha:
                <input type="password" class="form-control"
                name="senha" required>
                <br>
            </div>

            <div class="form-group">
                Instituição:
                <input type="text" class="form-control"
                name="instituicao" style="width:30%" required >
                <br>
            </div>

            <div class="form-group">
                Curso:
                <input type="text" class="form-control"
                id="curso" name="curso" style="width:30%" required >
                <br>
            </div>

            <div class="form-group">
                <button class="btn btn-warning">Inserir</button>                
                <a href="listagem.php" class="btn btn-primary">
                    Voltar<a>
            </div>

        <div>
    </div>
</form>
</script>