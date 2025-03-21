<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simulação de usuário (substitua por consulta ao banco de dados)
    $user_db = 'admin';
    $pass_db = '1234';

    if ($username === $user_db && $password === $pass_db) {
        $_SESSION['user'] = $username;
        header('Location: blogdeusuarioelogin.php');
        exit();
    } else {
        $error = 'Usuário ou senha incorretos!';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f4; }
        .login-container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        input { display: block; width: 100%; padding: 8px; margin: 10px 0; }
        button { width: 100%; padding: 10px; background: #acacd5; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Usuário" required>
        <input type="password" name="password" placeholder="Senha" required>
        <button><a href="blogdeusuarioelogin.php"></a>ENTRAR </button>
    </form>
</div>
</body>
</html>