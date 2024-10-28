<?php
include './conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuario WHERE usuario_email = '$email' AND usuario_senha = '$senha'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION['usuario'] = $email;
        header("Location: ./index.php");
        exit();
    } else {
        echo "Email ou senha incorretos.";
    }
}

$conexao->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
</head>
<body>
    <h2>Login de Usuário</h2>
    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>

        <button type="submit">Entrar</button>
    </form>
    <p>Não tem uma conta? <a href="./cadastro.php">Cadastre-se</a></p>
</body>
</html>
