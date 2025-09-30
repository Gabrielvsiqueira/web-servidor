<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mapa de Classe</title>
    <link rel="stylesheet" href="../views/style.css">
</head>
<body>
    <div class="login-container">
        <div class="image-section">
            <img src="../public/230605_GettyImages-1409722748-1600x1067.jpg" alt="Professor e alunos em sala de aula">
        </div>

        <div class="form-section">
            <h1>Mapa de Classe</h1>

            <?php $error = $_GET['error'] ?? ''; ?>
            <?php if (!empty($error)): ?>
                <p class="error"><?= htmlspecialchars($error) ?></p>
            <?php endif; ?>

            <form name="form-login" action="../controllers/loginController.php" method="POST" enctype="multipart/form-data">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" required>

                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
