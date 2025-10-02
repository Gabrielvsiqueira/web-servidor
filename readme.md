# 📚 Sistema de Gestão Escolar - Trabalho 01

Este projeto compõe o **Trabalho 01** da disciplina de **Desenvolvimento Web-Servidor** da UTFPR.
É um sistema simples de **Gestão Escolar**, desenvolvido em **PHP utilizando a arquitetura MVC**. O sistema permite o gerenciamento de **Alunos, Professores e Turmas**, com operações básicas de **CRUD (Criar, Listar, Editar e Excluir)**.

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
- **CSS3**

---

## 📋 Como Usar
🔹 **Linux / macOS**

- O PHP pode ser instalado facilmente via gerenciador de pacotes.

- Verifique se o PHP está instalado: `` php -v ``

Caso não tenha, instale:

- Ubuntu/Debian: `` sudo apt install php``
- Fedora: `` sudo dnf install php``
- macOS (Homebrew): ``brew install php``

Para rodar o servidor local: ``php -S localhost:8080 ``

Acesse no navegador: 👉 http://localhost:8080

🔹 **Windows (com WSL)**

- Se você usa WSL, o processo é o mesmo do Linux: ``php -S localhost:8080``

⚠️ Observação: mesmo rodando o PHP dentro do WSL, você pode abrir o navegador no Windows e acessar normalmente http://localhost:8080

🔹 **Windows (sem WSL – usando XAMPP)**

- No Windows sem WSL, é necessário um servidor como XAMPP:

- Baixe e instale o XAMPP.

- Coloque a pasta do projeto dentro do diretório htdocs do XAMPP.
- Exemplo: ``C:\xampp\htdocs\gestao-escolar``

- Inicie o Apache pelo painel de controle do XAMPP.

No navegador, acesse: 👉 http://localhost/gestao-escolar/src

##

**Credenciais de teste (presentes em User.php):**

**Email:** `teste@gmail.com`   **Senha:** `12345`

**Email:** `joaozinho@gmail.com` **Senha:** `12345`

**Email:** `maria123@gmail.com` **Senha:** `12345`

**Rotas da aplicação :**

`http://localhost:8080/views/Home.php` → **Tela inicial com lista de funcionalidades e explicação sobre o sistema.**

`http://localhost:8080/controllers/AlunoController.php` → **Controle de alunos.**

`http://localhost:8080/controllers/ProfessorController.php` → **Controle de professores.**

`http://localhost:8080/controllers/TurmaController.php` → **Controle de turmas.**

## 📌 Observações Importantes

- Os dados ainda não estão persistidos em banco de dados (são *arrays mockados* dentro dos *models*).
- Ao atualizar a página, os dados voltam ao estado inicial.
- O próximo passo será integrar com um Banco de Dados para persistência real dos dados dos usuários.
