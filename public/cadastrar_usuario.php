<?php
include "../infra/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO usuario (nome, email) VALUES (?, ?)"
$stmt = $conn->prepare($sql)
$stmt->bind_param("ss", $nome, $email);

if ($stmt->execute()){
    echo "Usuario cadastrado com sucesso";
} else{
    echo "Erro ao cadastrar usuario";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastrar_pratos.php" method="POST">
        <label class="informacoes">Nome do prato</label>
        <input type="text" id="nome_prato" placeholder ="insira o nome do prato..." required>

        <label class="informacoes">descrição do prato</label>
        <input type="text" id="descricao" placeholder="insira a descrição do prato...">

        <label class="informacoes">categoria</label>
        <input type="text" id="categoria" placeholder="insira a categoria do prato..." required>

        <label class="informacoes">Preço</label>
        <input type="number" id="preco" placeholder="insira preço ex:(0.00)" required step="0.01" min="0">
    </form>
</body>
</html>
