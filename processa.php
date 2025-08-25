<?php
$host = "localhost";     
$usuario = "root";
$senha = "alonso";
$banco = "formbd";


$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$endereco = $_POST['endereco'];
$isento = isset($_POST['isento']) ? 1 : 0;
$periodo = $_POST['periodo'];
$observacoes = $_POST['observacoes'];


$sql = "INSERT INTO cadastro (nome, idade, endereco, isento, periodo, observacoes) 
        VALUES ('$nome', '$idade', '$endereco', '$isento', '$periodo', '$observacoes')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Cadastro realizado com sucesso!</h2>";
    echo "<a href='index.html'>Voltar</a>";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
