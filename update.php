<?php
    include 'db.php';

    $id_professor = $_GET['id_professor'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST['nome_professor'];
        $email = $_POST['email_professor'];
        $materia_professor = $_POST['materia_professor'];
        $data = $_POST['data_admissao_professor'];

        $sql = "UPDATE professor SET nome_professor='$nome', email_professor='$email', materia_professor = '$materia_professor', data_admissao_professor = '$data' WHERE id_professor=$id_professor";

        if ($conn->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    $id_aula = $_GET['id_aula'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $materia = $_POST['materia_aula'];
        $turma = $_POST['turma_aula'];
        $sala = $_POST['sala_aula'];
        $capacidade = $_POST['capacidade_sala_aula'];

        $sql = "UPDATE aula SET materia='$materia', assunto='$assunto', turma='$turma', sala='$sala' WHERE id_aula=$id_aula";

        if ($conn->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    $id_aula = $_GET['id_diario'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $horario_aula = $_POST['horario_aula_diario'];
        $assunto = $_POST['assunto_diario'];
        $fk_professor = $_POST['fk_professor'];
        $fk_aula = $_POST['fk_aula'];

        $sql = "UPDATE aula SET horario_aula_diario='$horario_aula', $assunto='$assunto_diario', id_professor_diario='$fk_professor', id_aula_diario='$fk_aula' WHERE id_aula=$id_aula";

        if ($conn->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso";
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
    <title>Update</title>
</head>
<body>

    <h2>Professor</h2>
    <form method="POST" action="update.php?id_professor=<?php echo $row['id_professor'];?>">
        Nome: <input type="text" name="nome_professor" required>
        email: <input type="text" name="email_professor" required>
        Materia: <input type="text" name="materia_professor" required>
        Data Admissão: <input type="date" name="data_admissão_professor" required>
        <input type="submit" value="Atualizar">
    </form>

    <h2>Aulas</h2>
    <form method="POST" action="update.php?id_aula=<?php echo $row['id_aula'];?>">
        Materia: <input type="text" name="materia_aula" required>
        Capacidade: <input type="text" name="capacidade_sala_aula" required>
        Turma: <input type="tex" name="turma_aula" required>
        Sala: <input type="text" name="sala_aula" required>
        <input type="submit" value="Atualizar">
    </form>

    <h2>Diario</h2>
    <form method="POST" action="update.php?id_aula=<?php echo $row['id_diario'];?>">
        Horario da Aula: <input type="time" name="horario_aula_diario" required>
        Assunto: <input type="text" name="assunto_diario" required>
        Professor Responsável: <input type="number" name="fk_professor" required>
        Aula Responsável: <input type="number" name="fk_aula" required>
    </form>
</body>
</html>