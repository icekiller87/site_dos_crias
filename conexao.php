<?php
$usuario = 'root';
$senha = '';
$database = 'dados';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

// Verificar erros de conexão
if ($mysqli->connect_error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->connect_error);
}
?>
