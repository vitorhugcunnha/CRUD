<?php
include 'db.php';

if  ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $materia_professor = $_POST['materia_professor'];
    $idade = $_POST['idade'];
    $data = $_POST['data_admissao'];

    $sql = "INSERT INTO professores (nome, materia_professor, idade, data_admissao) VALUES ('$nome', '$materia_professor', '$idade', '$data_admissao')";

    if($conn -> query($sql) === TRUE){
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

if  ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $materia = $_POST['materia'];
    $assunto = $_POST['assunto'];
    $turma = $_POST['turma'];
    $sala = $_POST['sala'];

    $sql = "INSERT INTO aula (materia, assunto, turma, sala) VALUES ('$materia', '$assunto', '$turma', '$sala')";

    if($conn -> query($sql) === TRUE){
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn -> close();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h2>Professor</h2>
    <form method="POST" action="create.php">
        Nome: <input type="text" name="nome" required>
        email: <input type="text" name="email" required>
        Materia: <input type="text" name="materia" required>
        Idade: <input type="number" name="idade" required>
        Data Admissão: <input type="date" name="data" required>
        <input type="submit" value="Adicionar">
    </form>

    <h2>Aulas</h2>
    <form method="POST" action="create.php">
        Materia: <input type="text" name="materia" required>
        Assunto: <input type="text" name="assunto" required>
        Turma: <input type="tex" name="turma" required>
        Sala: <input type="text" name="sala" required>
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>