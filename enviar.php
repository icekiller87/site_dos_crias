<?php
// Inclua o arquivo de conexão ao banco de dados
include('conexao.php');

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone']; // Corrigido para pegar o campo de telefone

    // Verifique se os campos obrigatórios foram preenchidos
    if (empty($nome) || empty($email) || empty($telefone)) {
        echo "Preencha todos os campos obrigatórios.";
    } else {
        // Consulta SQL para inserir os dados na tabela
        $sql = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

        if ($mysqli->query($sql)) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro ao inserir os dados: " . $mysqli->error;
        }
    }
}
