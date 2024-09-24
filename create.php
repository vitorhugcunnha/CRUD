<?php
include 'db.php';

    if(isset($_POST['create_professor'])) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $nome = $_POST['nome_professor'];
                $email = $_POST['email_professor'];
                $materia_professor = $_POST['materia_professor'];
                $data = $_POST['data_admissao_professor'];

            $sql = "INSERT INTO professor (nome_professor, email_professor, materia_professor, data_admissao_professor) VALUES ('$nome', '$email', '$materia_professor', '$data')";

            if($conn -> query($sql) === TRUE){
                echo "Novo registro criado com sucesso";
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    if(isset($_POST['create_aula'])) {
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
    }

    if(isset($_POST['create_diario'])) {
        if  ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $horario_aula = $_POST['horario_aula_diario'];
            $assunto = $_POST['assunto_diario'];
            $id_professor_diario = $_POST['id_professor_diario'];
            $id_aula_diario = $_POST['id_aula_diario'];

            $sql = "INSERT INTO diario (horario_aula_diario, assunto_diario, id_professor_diario, id_aula_diario) VALUE ('$horario_aula', '$assunto', '$id_professor_diario', '$id_aula_diario')";

            if($conn -> query($sql) === TRUE){
                echo "Novo registro criado com sucesso";
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
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
        Data Admissão: <input type="date" name="data_admissao_professor" required>
        <input type="submit" name="create_professor" value="Cadastrar">
    </form>
    </form>

    <h2>Aula</h2>
    <form method="POST" action="create.php">
        Materia: <input type="text" name="materia_aula" required>
        Capacidade: <input type="number" name="capacidade_sala_aula" required>
        Turma: <input type="tex" name="turma_aula" required>
        Sala: <input type="text" name="sala_aula" required>
        <input type="submit" name="create_aula" value="Cadastrar">
    </form>

    <h2>Diário</h2>
    <form method="POST" action="create.php">
        Horario da Aula: <input type="datetime-local" name="horario_aula_diario" required>
        Assunto: <input type="text" name="assunto_diario" required>
        Código do Professor Responsável: <input type="number" name="id_professor_diario" required>
        Código da Aula: <input type="number" name="id_aula_diario" required>
        <input type="submit" name="create_diario" value="Cadastrar">
    </form>

    <a href="read.php">Voltar para o Read</a>
</body>
</html>