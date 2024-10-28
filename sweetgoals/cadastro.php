<?php
include './conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = md5($_POST['senha'] ?? ''); // Criptografe a senha para segurança
    $contato = $_POST['contato'] ?? '';
    $instagram = $_POST['instagram'] ?? '';
    $localizacao = $_POST['localizacao'] ?? '';

    $sql = "INSERT INTO usuario (usuario_nome, usuario_email, usuario_senha, usuario_contato, usuario_instagram, usuario_loc) VALUES ('$nome', '$email', '$senha', '$contato', '$instagram', '$localizacao')";

    if ($conexao->query($sql) === TRUE) {
        header("Location: ./login.php");
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

    $conexao->close();
} else {
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetGoals</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <label for="contato">Contato:</label>
        <input type="text" id="contato" name="contato" required>

        <label for="instagram">Instagram:</label>
        <input type="text" id="instagram" name="instagram">

        <label for="localizacao">Localização:</label>
        <input type="text" id="localizacao" name="localizacao">

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>