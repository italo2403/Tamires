<?php
$conn = new mysqli("localhost", "root", "", "escola");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$turma = $_POST['turma'];
$informacoes_importantes = $_POST['informacoes_importantes'];

$sql = "INSERT INTO alunos (nome, turma, informacoes_importantes)
        VALUES ('$nome', '$turma', '$informacoes_importantes')";

if ($conn->query($sql) === TRUE) {
    echo "Informações do aluno salvas com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
?>
