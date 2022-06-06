<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Cadastro de Aluno</h1>
    <form method="POST" action='aluno.php'>
        
        <label>RA</label><br>
        <input type="text" name="RA"><br>

        <label>Nome</label><br>
        <input type="text" name="nome"><br>

        <label>CPF</label><br>
        <input type="text" name="cpf"><br>

        <label>Fone</label><br>
        <input type="text" name="fone"><br>

        <label>Sexo</label><br>
        <input type="text" name="sexo"><br>

        <button type="submit">Salvar</button>

    </form>


</body>
</html>