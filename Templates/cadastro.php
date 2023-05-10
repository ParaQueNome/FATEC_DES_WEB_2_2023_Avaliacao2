<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 500px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastro para Vestibular</h2>
        <p>Para realizar o cadastro, favor inserir as informações a baixo:</p>
        <form action="formulario_cadastro.php" method="post">
            <div class="form-group">
                <label>Nome completo</label>
                <input type="text" name="name" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="cpf" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" name="telefone" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Estudou em escola pública?</label> <br>
                <input type="checkbox" name="checkbox" checked="false" />
            <div class="form-group">
                <br>
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>