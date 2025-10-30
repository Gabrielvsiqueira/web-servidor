<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gestão das Turmas</title>
    <link rel="stylesheet" href="/css/crud.css">
</head>
<body>
<div class="main-container">
    <h1>Gestão de Turmas</h1>

    <section>
        <h2>Cadastrar Turma</h2>
        <form action="/turmas/create" method="POST">
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
            <form action="/turmas/update/<?= $turmaEdit['idTurma'] ?>" method="POST">
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
                        <a href="/turmas?id=<?= $turma['idTurma'] ?>">Editar</a>
                        <a href="/turmas/delete/<?= $turma['idTurma'] ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </section>
    <a href="/home" class="back-link">Voltar para a tela inicial</a>
</div>
</body>
</html>