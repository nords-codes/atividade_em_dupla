<?php
include "../infra/conexao.php";

$nome =$_POST["nome"];
$email=$_POST["email"];

$sql = "INSERT INTO usuario (nome, email) VALUES (?, ?)"
$stmt = $conn->prepare($sql)
$stmt->bind_param("ss", $nome, $email);

if ($stmt->execute()){
    echo "Usuaeio cadastrado com sucesso";
} else{
    echo "Erro ao cadastrar usuario";
}
