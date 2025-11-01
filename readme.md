# 📚 Sistema de Gestão Escolar — Trabalho 02

Este projeto foi desenvolvido como parte dos **Trabalhos 01 e 02** da disciplina de **Desenvolvimento Web-Servidor** da **UTFPR**.<br/>
O sistema tem como objetivo gerenciar informações de uma instituição escolar, permitindo o **CRUD (Criar, Ler, Atualizar e Excluir)** de **Alunos**, **Professores** e **Turmas**.

---

## 🎯 Objetivo do Projeto

O projeto tem como finalidade aplicar os conceitos aprendidos na disciplina de Desenvolvimento Web-Servidor, divididos em duas etapas:

### 🔹 Trabalho 01
Desenvolvimento inicial de um sistema web em **PHP (versão 8+)**, utilizando **arquitetura MVC** e **mock de dados** para simulação de persistência.

### 🔹 Trabalho 02
Novos Requisitos Implementados:
- Refatoração das classes utilizando conceitos de **Orientação à Objetos**.
- Utilização do **Composer** com Autoload e o uso de **packages PHP** para o projeto.
- Utilização de um **database relacional (MySQL) via PDO**.
- Uso de um sistema de rotas (URL transparente).
---

## 🚀 Funcionalidades

### 👩‍🎓 Alunos
- Cadastrar novo aluno (nome, data de nascimento e turma).
- Listar alunos cadastrados.
- Editar informações de um aluno.
- Excluir alunos.

### 👨‍🏫 Professores
- Cadastrar novo professor.
- Listar professores cadastrados.
- Editar informações de professores.
- Excluir professores.

### 🏫 Turmas
- Criar novas turmas.
- Listar turmas disponíveis.
- Editar informações de uma turma.
- Excluir turmas.

---

## 🛠️ Tecnologias Utilizadas
- **PHP 8+**
- **HTML5**
- **CSS3**
- **Docker**
- **Composer**
- **Banco de Dados MySQL**
- **Bramus(router)**
---
## 📌 Observações Importantes

- Recomenda-se a utilização do Docker. Docker permite criar e gerenciar containers de forma rápida e padronizada, ideal para garantir que o ambiente de banco de dados seja o mesmo em qualquer máquina.
- Se atentar a versão do PHP, caso o PHP esteja com uma versão menor que a 8, o Composer pode apontar erros na utilização.

---

## 💻 Como Executar o Projeto

### Pré-requisitos
- PHP 8+
- Composer
- Docker

### Configuração do Banco de Dados com Docker

**1. Instale o Docker:**
- Certifique-se de ter o Docker instalado e em execução na sua máquina.

**2. Rode a imagem do MySQL:**
- Abra o terminal e execute o seguinte comando para baixar e iniciar um container MySQL:

```bash
docker run --name mysql-gestao-escolar -e MYSQL_ROOT_PASSWORD=rootpassword -e MYSQL_DATABASE=gestao_escolar -p 3306:3306 -d mysql:latest
```
Este comando irá:
- Criar um container chamado mysql-gestao-escolar.
- Definir a senha do usuário root como rootpassword.
- Criar um banco de dados chamado gestao_escolar.
- Mapear a porta 3306 do container para a porta 3306 da sua máquina.
- Executar o container em segundo plano.

**3. Verificar se o container está em execução:**
```bash
docker ps
```

### 🔹 Linux / macOS

**1. Clone o repositório:**
```bash
git clone git@github.com:Gabrielvsiqueira/web-servidor.git
cd web-servidor
```

**2. Instale as dependências:**
```bash
composer install
```

**3. Inicie o servidor PHP (para sistemas baseados em UNIX não é necessário utilização do Apache):**
```bash
php -S localhost:8080 -t public
```
Acesse no navegador: 👉 [http://localhost:8080](http://localhost:8080)

### 🔹 Windows (com WSL)

**1. Clone o repositório no ambiente WSL:**
```bash
git clone git@github.com:Gabrielvsiqueira/web-servidor.git
cd web-servidor
```

**2. Instale as dependências:**
```bash
composer install
```

**3. Inicie o servidor PHP (para sistemas baseados em UNIX não é necessário utilização do Apache):**
```bash
php -S localhost:8080 -t public
```
Acesse no navegador: 👉 [http://localhost:8080](http://localhost:8080)

### 🔹 Windows (sem WSL — XAMPP)

**1. Clone o repositório:**
- Clone o repositório para o diretório htdocs do seu XAMPP ```(C:\xampp\htdocs).```

**2. Instale as dependências:**
```bash
composer install
```

**3. Inicie o Apache e o MySQL**
- Abra o painel de controle do XAMPP e inicie os serviços do Apache e do MySQL.

**4. Acesso o projeto**
Acesse no navegador: 👉 [http://localhost/<nome-da-pasta-do-projeto>/public](http://localhost/<nome-da-pasta-do-projeto>/public)

---

## 🔐 Credenciais de Teste

| Usuário | Email | Senha |
|----------|--------|--------|
| Usuário 1 | teste@gmail.com | 12345 |
| Usuário 2 | joaozinho@gmail.com | 12345 |
| Usuário 3 | maria123@gmail.com | 12345 |

---

## 👨‍💻 Desenvolvedor
**Gabriel Vitor Siqueira**<br/>
Disciplina: Desenvolvimento Web-Servidor <br/>
UTFPR Ano: 2025