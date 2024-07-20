<?php
$conn = new mysqli("localhost", "root", "", "escola");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nome_professor = $_POST['nome_professor'];
$turma = $_POST['turma'];
$instrumentos_avaliativos = $_POST['instrumentos_avaliativos'];
$nome_alunos = $_POST['nome_alunos'];

$sql = "INSERT INTO professores (nome_professor, turma, instrumentos_avaliativos, nome_alunos)
        VALUES ('$nome_professor', '$turma', '$instrumentos_avaliativos', '$nome_alunos')";

if ($conn->query($sql) === TRUE) {
    header('Location: sucesso.html');
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
?>
