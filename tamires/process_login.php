<?php
session_start();
$conn = new mysqli("localhost", "root", "", "escola");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE login='$login' AND senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['loggedin'] = true;
    header("Location: professor_info.php");
} else {
    echo "Login ou senha incorretos.";
}
?>
