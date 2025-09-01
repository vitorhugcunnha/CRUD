# Management CRUD (PHP & MySQL)

This repository contains a **basic CRUD application** using **PHP, MySQL, HTML, CSS, and JavaScript**.  
The project simulates a small **school management system**, where it is possible to register and manage:

- **Professors**
- **Classes**
- **Class Diaries**

---

## Files

- `aula_gaucho_vitor.sql` → Database schema in MySQL  
- `db.php` → Database connection  
- `create.php` → Insert new records (professors, classes, diaries)  
- `read.php` → Read and display records in tables with Bootstrap  
- `update.php` → Edit existing records  
- `delete.php` → Delete records  
- `estilo.css` → Custom CSS  
- `script.js` → JavaScript for interactions (e.g., delete confirmation)  

---

## Database (aula_gaucho_vitor.sql)

The database has three main entities:

```sql
CREATE DATABASE aula_gaucho_vitor;

USE aula_gaucho_vitor;

CREATE TABLE professor (
    id_professor INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_professor VARCHAR(45) NOT NULL,
    email_professor VARCHAR(45) NOT NULL,
    materia_professor VARCHAR(45) NOT NULL,
    data_admissao_professor DATE NOT NULL
);

CREATE TABLE aula (
    id_aula INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    sala_aula VARCHAR(45) NOT NULL,
    materia_aula VARCHAR(45) NOT NULL,
    turma_aula VARCHAR(45) NOT NULL,
    capacidade_sala_aula INT NOT NULL
);

CREATE TABLE diario (
    id_diario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    horario_aula_diario DATETIME NOT NULL, 
    assunto_diario VARCHAR(45) NOT NULL,
    id_professor_diario INT NOT NULL,
    FOREIGN KEY (id_professor_diario) REFERENCES professor(id_professor),
    id_aula_diario INT NOT NULL,
    FOREIGN KEY (id_aula_diario) REFERENCES aula(id_aula)
);
Explanation:

professor stores teachers’ data (name, email, subject, hire date).

aula stores class information (room, subject, group, capacity).

diario links professors and classes with schedules and topics covered.

Read Example (read.php)
php
Copiar código
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
            <a href='update.php?id_professor={$row['id_professor']}'>Edit</a>
            <a onclick='return confirmar_exclusao()' href='delete.php?id_professor={$row['id_professor']}'>Delete</a>
        </td>
        </tr>";
    }
}
Explanation:

The query fetches all professors from the database.

Each record is displayed inside a Bootstrap table.

Each row includes Edit and Delete links.

Create Example (create.php)
php
Copiar código
if(isset($_POST['create_professor'])) {
    $nome = $_POST['nome_professor'];
    $email = $_POST['email_professor'];
    $materia_professor = $_POST['materia_professor'];
    $data = $_POST['data_admissao_professor'];

    $sql = "INSERT INTO professor (nome_professor, email_professor, materia_professor, data_admissao_professor) 
            VALUES ('$nome', '$email', '$materia_professor', '$data')";

    if($conn -> query($sql) === TRUE){
        echo "New professor created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
Explanation:

Gets form input values with $_POST.

Builds an INSERT statement to add a professor into the database.

Confirms whether the operation succeeded or failed.

How to Run
Clone the repository:

bash
Copiar código
git clone https://github.com/your-username/school-crud-php-mysql.git
cd school-crud-php-mysql
Import the database:

Open phpMyAdmin or MySQL CLI.

Run the script aula_gaucho_vitor.sql.

Start the PHP server:

bash
Copiar código
php -S localhost:8000
Open in your browser:

bash
Copiar código
http://localhost:8000/read.php
