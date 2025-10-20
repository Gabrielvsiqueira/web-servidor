<?php require_once __DIR__ . '/../auth_check.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gestão dos Alunos</title>
    <link rel="stylesheet" href="../views/crud.css">
</head>
<body>
    <div class="main-container">
        <h1>Gestão dos Alunos</h1>

        <section>
            <h2>Cadastrar Alunos</h2>
            <form action="../controllers/AlunoController.php" method="POST">
                <input type="hidden" name="action" value="create">

                <label> Nome: </label>
                <input type="text" name="nomeAluno" required>

                <label> Data Nascimento: </label>
                <input type="date" name="dataNascimento" required>

                <label> Turma: </label>
                <input type="text" name="turma" required>

                <button type="submit">Cadastrar</button>
            </form>
        </section>

        <?php if ($alunoEdit): ?>
        <section>
            <h2>Editar Aluno</h2>
            <form action="../controllers/AlunoController.php" method="POST">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="idAluno" value="<?= $alunoEdit['idAluno'] ?>">

                <label> Nome: </label>
                <input type="text" name="nomeAluno" value="<?= $alunoEdit['nomeAluno'] ?>" required>

                <label> Data Nascimento: </label>
                <input type="date" name="dataNascimento" value="<?= $alunoEdit['dataNascimento'] ?>" required>

                <label> Turma: </label>
                <input type="text" name="turma" value="<?= $alunoEdit['turma'] ?>" required>

                <button type="submit">Salvar Alterações</button>
            </form>
        </section>
        <?php endif; ?>

        <section>
            <h2>Lista dos Alunos</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Data Nascimento</th>
                        <th>Turma</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alunos as $aluno): ?>
                        <tr>
                            <td><?= $aluno['idAluno'] ?></td>
                            <td><?= $aluno['nomeAluno'] ?></td>
                            <td><?= $aluno['dataNascimento'] ?></td>
                            <td><?= $aluno['turma'] ?></td>
                            <td>
                                <a href="../controllers/AlunoController.php?action=edit&id=<?= $aluno['idAluno']?>"> Editar </a>
                                <a href="../controllers/AlunoController.php?action=delete&id=<?= $aluno['idAluno']?>"> Excluir </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
        <a href="../views/home.php" class="back-link">Voltar para a tela inicial</a>
    </div>
</body>
</html>
