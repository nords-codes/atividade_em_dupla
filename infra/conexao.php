<?php
$host = "localhost";
$usuario = "root";
$senha = "root";
$banco = "restaurante_nordsleite"

$conn = new mysql($host, $usuario, $senha, $banco);

if($conn ->connect_error){
    die("erro na conexão: " . $conn->connect_error);
}
?>