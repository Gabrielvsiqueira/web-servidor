<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gestão dos Professores</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>
<body>
    <h1>Gestão dos professores</h1>

    <section>
        <h2>Cadastrar Professor</h2>
        <form action="../controllers/ProfessorController.php" method="POST">
            <input type="hidden" name="action" value="create">

            <label> Nome: </label>
            <input type="text" name="nomeProfessor" required>
            <label> Email: </label>
            <input type="email" name="emailProfessor" required>
            <label> Data Nascimento: </label>
            <input type="date" name="dataNascimento" required>
            <label> Disciplina: </label>
            <input type="text" name="disciplina" required>
            <button type="submit">Cadastrar</button>
        </form>
    </section>

    <?php if ($professorEdit): ?>
    <section>
        <h2>Editar Professor</h2>
        <form action="../controllers/ProfessorController.php" method="POST">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="idProfessor" value="<?= $professorEdit['idProfessor'] ?>">

            <label> Nome: </label>
            <input type="text" name="nomeProfessor" value="<?= $professorEdit['nomeProfessor'] ?>" required>
            <label> Email: </label>
            <input type="email" name="emailProfessor" value="<?= $professorEdit['emailProfessor'] ?>" required>
            <label> Data Nascimento: </label>
            <input type="date" name="dataNascimento" value="<?= $professorEdit['dataNascimento'] ?>" required>
            <label> Disciplina: </label>
            <input type="text" name="disciplina" value="<?= $professorEdit['disciplina'] ?>" required>
            <button type="submit">Salvar Alterações</button>
        </form>
    </section>
    <?php endif; ?>

    <section>
        <h2>Lista dos Professores</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data Nascimento</th>
                    <th>Disciplina</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($professores as $professor): ?>
                    <tr>
                        <td><?= $professor['idProfessor'] ?></td>
                        <td><?= $professor['nomeProfessor'] ?></td>
                        <td><?= $professor['emailProfessor'] ?></td>
                        <td><?= $professor['dataNascimento'] ?></td>
                        <td><?= $professor['disciplina'] ?></td>
                        <td>
                            <a href="../controllers/ProfessorController.php?action=edit&id=<?= $professor['idProfessor'] ?>">Editar</a>
                            <a href="../controllers/ProfessorController.php?action=delete&id=<?= $professor['idProfessor'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>
</html>
