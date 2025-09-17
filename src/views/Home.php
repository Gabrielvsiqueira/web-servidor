<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: Login.php');
    exit;
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>
<body>

    <h1>Diário Escola - Gestão Escolar</h1>
    <p>Bem-vindo ao sistema de gestão escolar. Este software facilita o acompanhamento das atividades pedagógicas, incluindo o registro de  aulas, gerenciamento de professores e alunos, organização de turmas e controle de ensalamento.</p>
    <p>Use os botões abaixo para acessar ou cadastrar informações:</p>
    <button type="button" onclick="window.location.href='professores.php'">Professores</button>
    <button type="button" onclick="window.location.href='turmas.php'">Turmas</button>
    <button type="button" onclick="window.location.href='alunos.php'">Alunos</button>

</body>
</html>
