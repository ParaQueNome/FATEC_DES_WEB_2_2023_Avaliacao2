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
        <h2>Altera Dados</h2>
        
        <form action="delete.php" method="post">
        <div class="form-group">
            <p> Insira o CPF do participante que deseja remover da lista de vestibulandos:</p>
                <label>CPF</label>
                <input type="text" name="cpf" class="form-control" value="">
                <span class="help-block"></span>
        </div> 
        <div class="form-group">
            <br>
            <input type="submit" class="btn btn-primary" value="Remover">
        </div>
        </form>
    </div>    
</body>
</html>