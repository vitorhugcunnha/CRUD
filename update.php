<?php
    include 'db.php';

    $id = $_GET['id_professor'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $materia_professor = $_POST['materia_professor'];
        $idade = $_POST['idade'];
        $data = $_POST['data_admissao'];

        $sql = "UPDATE professores SET nome='$nome', email='$email', materia_professor = '$materia_professor', idade = '$idade', data_admissao = '$data'   WHERE id_professor=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    $id = $_GET['id_aula'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $materia = $_POST['materia'];
        $assunto = $_POST['assunto'];
        $turma = $_POST['turma'];
        $sala = $_POST['sala'];

        $sql = "UPDATE aula SET materia='$materia', assunto='$assunto', turma='$turma', sala='$sala' WHERE id_aula=$id";

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
        Nome: <input type="text" name="nome" required>
        email: <input type="text" name="email" required>
        Materia: <input type="text" name="materia_professor" required>
        Idade: <input type="number" name="idade" required>
        Data Admissão: <input type="date" name="data" required>
        <input type="submit" value="Atualizar">
    </form>

    <h2>Aulas</h2>
    <form method="POST" action="update.php?id_aula=<?php echo $row['id_aula'];?>">
        Materia: <input type="text" name="materia" required>
        Assunto: <input type="text" name="assunto" required>
        Turma: <input type="tex" name="turma" required>
        Sala: <input type="text" name="sala" required>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>