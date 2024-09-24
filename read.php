<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="estilo.css">
    <title>Read</title>
</head>
<body>
    <div class="Escrita_Especiais">
    <h2>Professores</h2>
    </div>
    <!-- Tabela pré-pronta do Bootstrap -->
    <div class="container_mediano">
    <div class="container my-4">
        <table class="table">
            <thead class="thread-dark">
                <tr>
                    <th scope="col">Código do Professor</th>
                    <th scope="col">Professor</th>
                    <th scope="col">Email</th>
                    <th scope="col">Matéria</th>
                    <th scope="col">Data de Admissão</th>
                    <th scope="col">Ações</th>
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
                                <a href='update.php?id_professor={$row['id_professor']}'>Editar</a>
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
    <div class="Escrita_Especiais">
    <h2>Aula<h2>
    </div>
    </div>
    <!-- Tabela pré-pronta do Bootstrap -->
    <div class="container_mediano">
    <div class="container my-4">
        <table class="table">
            <thead class="thread-dark">
                <tr>
                    <th scope="col">Código da Aula</th>
                    <th scope="col">Sala</th>
                    <th scope="col">Matéria da Sala</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Capacidade da Sala</th>
                    <th scope="col">Ações</th>
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
                                <a href='update.php?id_aula={$row['id_aula']}'>Editar</a>
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
    <div class="Escrita_Especiais">
    <h2>Diário</h2>
    </div>
    </div>
    <!-- Tabela pré-pronta do Bootstrap -->
    <div class="container_mediano">
    <div class="container my-4">
        <table class="table">
            <thead class="thread-dark">
                <tr>
                    <th scope="col">Código do Diário</th>
                    <th scope="col">Horário da Aula</th>
                    <th scope="col">Assunto da Aula</th>
                    <th scope="col">Código do Professor Responsável</th>
                    <th scope="col">Código da Aula</th>
                    <th scope="col">Ações</th>
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
                </div>
</body>
</html>