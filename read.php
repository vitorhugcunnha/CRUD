<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Read</title>
</head>
<body>
    <h1>Professores</h1>
    <!-- Tabela pré-pronta do Bootstrap -->
    <div class="container my-4">
        <table class="table">
            <thead class="thread-dark">
                <tr>
                    <th scope="col">Código do Professor</th>
                    <th scope="col">Professor</th>
                    <th scope="col">Email</th>
                    <th scope="col">Matéria</th>
                    <th scope="col">Data de Admissão</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'db.php';
                    $sql = 'SELECT * FROM professor';
                    $result = $conn -> query($sql);
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo "<tr>
                            <th scope='row'> {$row['id_professor']} </th>
                            <td>{$row['nome_professor']}</td>
                            <td>{$row['email_professor']}</td>
                            <td>{$row['materia_professor']}</td>
                            <td>{$row['data_admissao_professor']}</td>
                            <td>
                                <a href='update.php?id_professor={$row['user_id']}'>Editar</a> |
                                <a href='delete.php?id_professor={$row['user_id']}'>Excluir</a>
                            </td>
                            </tr>";
                        }
                    } else {
                        echo "Nenhum registro encontrado";
                    }
                    $conn -> close();
                ?>
            </tbody>
        </table>
    </div>
    <a href="create.php">Cadastrar novo professor</a>
</body>
</html>