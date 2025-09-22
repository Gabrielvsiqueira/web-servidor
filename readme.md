# 📚 Sistema de Gestão Escolar - Trabalho 01

Este projeto compõe o **Trabalho 01** da disciplina de **Desenvolvimento Web-Servidor** da UTFPR.  
É um sistema simples de **Gestão Escolar**, desenvolvido em **PHP utilizando (arquitetura MVC)**. O sistema permite o gerenciamento de **Alunos, Professores e Turmas**, com operações básicas de **CRUD (Criar, Listar, Editar e Excluir)**.

---

## 🚀 Funcionalidades do Sistema

### 👩‍🎓 Alunos
- Cadastrar novo aluno (nome, data de nascimento e turma).
- Listar todos os alunos cadastrados.
- Editar informações de um aluno existente.
- Excluir alunos.

### 👨‍🏫 Professores
- Cadastrar novo professor.
- Listar professores cadastrados.
- Editar informações.
- Excluir professores.

### 🏫 Turmas
- Criar turmas.
- Listar turmas disponíveis.
- Editar turmas.
- Excluir turmas.

---

## 🛠️ Tecnologias Utilizadas
- **PHP 8+**
- **HTML5**
- **CSS**

---

## 📋 Como Usar

1. Clone este repositório: `git clone [https://github.com/seu-usuario/seu-repositorio.git](https://github.com/seu-usuario/seu-repositorio.git)`

Abra a pasta do projeto e configure seu servidor PHP (ex: Apache ou PHP embutido).
Para rodar localmente, basta acessar a pasta src do projeto e executar:
` php -S localhost:8080`

Acesse as rotas no navegador:

`http://localhost:8080` → Página de Login do sistema

**Credenciais de teste (presentes em User.php):**

**Email:** `teste@gmail.com`

**Senha:** `12345`

`http://localhost:8080/views/Home.php` → **Tela inicial com lista de funcionalidades e explicação sobre o sistema.**

`http://localhost:8080/controllers/AlunoController.php` → **Controle de alunos.**

`http://localhost:8080/controllers/ProfessorController.php` → **Controle de professores.**

`http://localhost:8080/controllers/TurmaController.php` → **Controle de turmas.**

## 📌 Observações Importantes

- Os dados ainda não estão persistidos em banco de dados (são arrays mockados dentro dos models).
- Ao atualizar a página, os dados voltam ao estado inicial.
- Próximo passo sera integrar com um Banco de Dados para persistência real dos dados dos usuários.