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
    <link rel="stylesheet" href="../views/style.css">
</head>
<body>
    <div class="home-container">
    <h1>Diário Escola - Gestão Escolar</h1>
    <p>Bem-vindo ao sistema de gestão escolar. Este software facilita o acompanhamento das atividades pedagógicas, incluindo o registro de  aulas, gerenciamento de professores e alunos, organização de turmas e controle de ensalamento.</p>
    <p>Use os botões abaixo para acessar ou cadastrar informações:</p>
    <div class="links-container">
    <a href="../controllers/ProfessorController.php">Professores</a>
    <a href="../controllers/AlunoController.php">Alunos</a>
    <a href="../controllers/TurmaController.php"> Turmas</a>
    </div>
    </div>
</body>
</html>
