<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script.js"></script>
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
                                <a href='update.php?id_professor={$row['id_professor']}'>Editar</a> |
                                <a onclick='return confirmar_exclusao()'' href='delete.php?id_professor={$row['id_professor']}'>Excluir</a>
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
    <a name="create" href="create.php">Cadastrar novo professor</a>
    <br>
    <br>
    <br>
    <h1>Aula</h1>
    <!-- Tabela pré-pronta do Bootstrap -->
    <div class="container my-4">
        <table class="table">
            <thead class="thread-dark">
                <tr>
                    <th scope="col">Código da Aula</th>
                    <th scope="col">Sala</th>
                    <th scope="col">Matéria da Sala</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Capacidade da Sala</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'db.php';
                    $sql = 'SELECT * FROM aula';
                    $result = $conn -> query($sql);
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo "<tr>
                            <th scope='row'> {$row['id_aula']} </th>
                            <td>{$row['sala_aula']}</td>
                            <td>{$row['materia_aula']}</td>
                            <td>{$row['turma_aula']}</td>
                            <td>{$row['capacidade_sala_aula']}</td>
                            <td>
                                <a href='update.php?id_aula={$row['id_aula']}'>Editar</a> |
                                <a href='delete.php?id_aula={$row['id_aula']}'>Excluir</a>
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
    <a href="create.php">Cadastrar nova aula</a>
    <br>
    <br>
    <br>
    <h1>Diário</h1>
    <!-- Tabela pré-pronta do Bootstrap -->
    <div class="container my-4">
        <table class="table">
            <thead class="thread-dark">
                <tr>
                    <th scope="col">Código do Diário</th>
                    <th scope="col">Horário da Aula</th>
                    <th scope="col">Assunto da Aula</th>
                    <th scope="col">Código do Professor Responsável</th>
                    <th scope="col">Código da Aula</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'db.php';
                    $sql = 'SELECT * FROM diario';
                    $result = $conn -> query($sql);
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo "<tr>
                            <th scope='row'> {$row['id_diario']} </th>
                            <td>{$row['horario_aula_diario']}</td>
                            <td>{$row['assunto_diario']}</td>
                            <td>{$row['id_professor_diario']}</td>
                            <td>{$row['id_aula_diario']}</td>
                            <td>
                                <a href='update.php?id_diario={$row['id_diario']}'>Editar</a> |
                                <a href='delete.php?id_diario={$row['id_diario']}'>Excluir</a>
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
    <a href="create.php">Cadastrar novo diário</a>
</body>
</html>