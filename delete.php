<?php
    include 'db.php';
    if ($id_professor = $_GET['id_professor']) {
        $sql = "DELETE FROM professor WHERE id_professor = '$id_professor'";
        if($conn -> query($sql) === TRUE) {
            echo "Registro excluído com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>". $conn -> error;
            ?><a href="read.php">Voltar para o Read</a><?php
        }
        $conn -> close();
        header ("Location: read.php");
        exit();
    }

    if ($id_aula = $_GET['id_aula']) {
        $sql = "DELETE FROM aula WHERE id_aula = '$id_aula'";
        if($conn -> query($sql) === TRUE) {
            echo "Registro excluído com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>". $conn -> error;
            ?><a href="read.php">Voltar para o Read</a><?php
        }
        $conn -> close();
        header ("Location: read.php");
        exit();
    }

    if ($id_diario = $_GET['id_diario']) {
        $sql = "DELETE FROM diario WHERE id_diario = '$id_diario'";
        if($conn -> query($sql) === TRUE) {
            echo "Registro excluído com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>". $conn -> error;
            ?><a href="read.php">Voltar para o Read</a><?php
        }
        $conn -> close();
        header ("Location: read.php");
        exit();
    }

?>