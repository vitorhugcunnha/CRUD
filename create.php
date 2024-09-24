<?php
include 'db.php';

if  ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome_professor'];
        $email = $_POST['email_professor'];
        $materia_professor = $_POST['materia_professor'];
        $data = $_POST['data_admissao_professor'];

    $sql = "INSERT INTO professores (nome_professor, email_professor, materia_professor, data_admissao_professor) VALUES ('$nome', '$email', '$materia_professor', '$data')";

    if($conn -> query($sql) === TRUE){
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

if  ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $materia = $_POST['materia_aula'];
    $turma = $_POST['turma_aula'];
    $sala = $_POST['sala_aula'];
    $capacidade = $_POST['capacidade_sala_aula'];

    $sql = "INSERT INTO aula (sala_aula, materia_aula, turma_aula, capacidade_sala_aula) VALUES ('$sala', '$materia', '$turma', '$capacidade')";

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
        Nome: <input type="text" name="nome_professor" required>
        email: <input type="text" name="email_professor" required>
        Materia: <input type="text" name="materia_professor" required>
        Data Admissão: <input type="date" name="data_admissão_professor" required>
        <input type="submit" value="Atualizar">
    </form>
    </form>

    <h2>Aulas</h2>
    <form method="POST" action="create.php">
        Materia: <input type="text" name="materia_aula" required>
        Capacidade: <input type="text" name="capacidade_sala_aula" required>
        Turma: <input type="tex" name="turma_aula" required>
        Sala: <input type="text" name="sala_aula" required>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>