<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>
<body>
    <form name="form-login" action="../controllers/loginController.php" method="POST" enctype="multipart/form-data">
        <h1>Mapa de Classe</h1>

         <?php if (!empty($error)): ?>
            <p style="color:red;"><?= $error ?></p>
        <?php endif; ?>

        <div>
            <label for="">Email :</label>
            <input type="text" name="email">
            <label for="">Senha :</label>
            <input type="text" name="password">
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>