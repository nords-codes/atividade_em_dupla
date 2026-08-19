<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
</head>
<body>
    <form id="form_cadastro"><h2>Cadastrar Usuario</h2>

        <Label class="informacoes" for="nome">Nome</Label>
        <input type="text" id="nome" name="nome" placeholder="insira seu nome" required>

        <label class="informacoes" for="Email">Email</label>
        <input type="email" name="email" id="Email" placeholder="Insira seu email" required>

        <button id="botao_login" type="submit">Cadastrar</button>

    </form>

        

</body>
</html>
<?php
header("location: cadastar");
exit();
?>