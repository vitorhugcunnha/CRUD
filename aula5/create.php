<?php
include 'db.php';

if  ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome
    $
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="POST">
        Nome: <input type="text" name="nome" required>
        Materia: <input type="text" name="materia" required>
        Idade: <input type="text" name="idade" required>
        Data Admissão: <input type="text" name="data" required>
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>