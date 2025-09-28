<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gestão das Turmas</title>
    <link rel="stylesheet" href="../views/crud.css">
</head>
<body>
    <div class="main-container">
        <h1>Gestão de Turmas</h1>

        <section>
            <h2>Cadastrar Turma</h2>
            <form action="../controllers/TurmaController.php" method="POST">
                <input type="hidden" name="action" value="create">

                <label>Ano da Turma:</label>
                <input type="text" name="serie" required>

                <label>Total de Alunos:</label>
                <input type="number" name="totalAlunos" required>

                <label>Matéria:</label>
                <input type="text" name="materia" required>

                <label>Professor:</label>
                <input type="text" name="professor" required>

                <button type="submit">Cadastrar</button>
            </form>
        </section>

        <?php if ($turmaEdit): ?>
        <section>
            <h2>Editar Turma</h2>
            <form action="../controllers/TurmaController.php" method="POST">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="idTurma" value="<?= $turmaEdit['idTurma'] ?>">

                <label>Ano da Turma:</label>
                <input type="text" name="serie" value="<?= $turmaEdit['anoTurma'] ?>" required>

                <label>Total de Alunos:</label>
                <input type="number" name="totalAlunos" value="<?= $turmaEdit['quantidadeAlunos'] ?>" required>

                <label>Matéria:</label>
                <input type="text" name="materia" value="<?= $turmaEdit['materias'] ?>" required>

                <label>Professor:</label>
                <input type="text" name="professor" value="<?= $turmaEdit['professor'] ?>" required>

                <button type="submit">Salvar Alterações</button>
            </form>
        </section>
        <?php endif; ?>

        <section>
            <h2>Lista de Turmas</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ano</th>
                        <th>Total de Alunos</th>
                        <th>Matéria</th>
                        <th>Professor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($turmas as $turma): ?>
                        <tr>
                            <td><?= $turma['idTurma'] ?></td>
                            <td><?= $turma['anoTurma'] ?></td>
                            <td><?= $turma['quantidadeAlunos'] ?></td>
                            <td><?= $turma['materias'] ?></td>
                            <td><?= $turma['professor'] ?></td>
                            <td>
                                <a href="../controllers/TurmaController.php?action=edit&id=<?= $turma['idTurma'] ?>">Editar</a>
                                <a href="../controllers/TurmaController.php?action=delete&id=<?= $turma['idTurma'] ?>">Excluir</a>
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