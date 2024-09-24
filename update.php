<?php
    include 'db.php';

    if(isset($_GET['id_professor'])) {
        $id_professor = $_GET['id_professor'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome_professor'];
            $email = $_POST['email_professor'];
            $materia_professor = $_POST['materia_professor'];
            $data = $_POST['data_admissao_professor'];

            $sql = "UPDATE professor SET nome_professor='$nome', email_professor='$email', materia_professor = '$materia_professor', data_admissao_professor = '$data' WHERE id_professor = $id_professor";

            if ($conn->query($sql) === TRUE) {
                echo "Registro atualizado com sucesso";
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        }
        $sql = "SELECT * FROM professor WHERE id_professor = '$id_professor'";
        $result = $conn -> query($sql);
        $row = $result -> fetch_assoc();
    }

    if(isset($_GET['id_aula'])) {
        $id_aula = $_GET['id_aula'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $sala = $_POST['sala_aula'];
            $materia = $_POST['materia_aula'];
            $turma = $_POST['turma_aula'];
            $capacidade = $_POST['capacidade_sala_aula'];

            $sql = "UPDATE aula SET sala_aula='$sala', materia_aula='$materia', turma_aula='$turma', capacidade_sala_aula='$capacidade' WHERE id_aula=$id_aula";

            if ($conn->query($sql) === TRUE) {
                echo "Registro atualizado com sucesso";
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        }
        $sql = "SELECT * FROM aula WHERE id_aula = '$id_aula'";
        $result = $conn -> query($sql);
        $row = $result -> fetch_assoc();
    }

    if(isset($_GET['id_diario'])) {
        $id_diario = $_GET['id_diario'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $horario_aula = $_POST['horario_aula_diario'];
            $assunto = $_POST['assunto_diario'];
            $id_professor_diario = $_POST['id_professor_diario'];
            $id_aula_diario = $_POST['id_aula_diario'];

            $sql = "UPDATE diario SET horario_aula_diario='$horario_aula', assunto_diario='$assunto', id_professor_diario='$id_professor_diario', id_aula_diario='$id_aula_diario' WHERE id_diario=$id_diario";

            if ($conn->query($sql) === TRUE) {
                echo "Registro atualizado com sucesso";
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        }
        $sql = "SELECT * FROM diario WHERE id_diario = '$id_diario'";
        $result = $conn -> query($sql);
        $row = $result -> fetch_assoc();
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
<?php
    if (isset($_GET['id_professor'])) { ?>
    <h2>Professor</h2>
    <form method="POST" action="update.php?id_professor=<?php echo $row['id_professor'];?>">
        Nome: <input type="text" name="nome_professor" value="<?php echo $row['nome_professor'];?>" required>
        email: <input type="text" name="email_professor" value="<?php echo $row['email_professor'];?>"  required>
        Materia: <input type="text" name="materia_professor" value="<?php echo $row['materia_professor'];?>"  required>
        Data Admissão: <input type="date" name="data_admissao_professor" value="<?php echo $row['data_admissao_professor'];?>"  required>
        <input type="submit" name="id_professor" value="Atualizar">
    </form>
    <?php
    } else {
    }
?>

<?php
    if (isset($_GET['id_aula'])) { ?>
    <h2>Aula</h2>
    <form method="POST" action="update.php?id_aula=<?php echo $row['id_aula'];?>">
        Sala: <input type="text" name="sala_aula" value="<?php echo $row['sala_aula'];?>" required>
        Materia: <input type="text" name="materia_aula" value="<?php echo $row['materia_aula'];?>" required>
        Turma: <input type="tex" name="turma_aula" value="<?php echo $row['turma_aula'];?>" required>
        Capacidade: <input type="number" name="capacidade_sala_aula" value="<?php echo $row['capacidade_sala_aula'];?>" required>
        <input type="submit" name="id_aula" value="Atualizar">
    </form>
    <?php
    } else {
    }
?>

<?php
    if (isset($_GET['id_diario'])) { ?>
    <h2>Diario</h2>
    <form method="POST" action="update.php?id_diario=<?php echo $row['id_diario'];?>">
        Horario da Aula: <input type="datetime-local" name="horario_aula_diario" value="<?php echo $row['horario_aula_diario'];?>" required>
        Assunto: <input type="text" name="assunto_diario" value="<?php echo $row['assunto_diario'];?>" required>
        Professor Responsável: <input type="number" name="id_professor_diario" value="<?php echo $row['id_professor_diario'];?>" required>
        Aula Responsável: <input type="number" name="id_aula_diario" value="<?php echo $row['id_aula_diario'];?>" required>
        <input type="submit" name="id_diario" value="Atualizar">
    </form>
    <?php
    } else {
    }
?>

<a href="read.php">Voltar para o Read</a>

</body>
</html>