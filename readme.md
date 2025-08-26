# Fluxo de Trabalho - Repositório Web Servidor

## 📌 Branches principais
- **main** → código final (produção).
- **dev** → ambiente de desenvolvimento, onde todas as features e correções devem ser apontadas.

## 🚀 Como contribuir
1. Sempre crie sua branch **a partir da `dev`**:
   ```bash
   git checkout dev
   git pull origin dev
   git checkout -b feature/nome-da-feature

2. Após finalizar seu desenvolvimento, faça o push da sua branch:
   ```bash
   git push origin feature/nome-da-feature

3. Após dar o push, crie um Pull Request (PR) quando todo desenvolvimento for finalizado, apontado para a branch → dev.

4. Quando a dev estiver pronta e estável, será feito um PR para a main.
 - **Esse PR só pode ser aprovado com revisão de pelo menos uma pessoa do time.**
 
 ## Conventional Commits
 - sugiro utilizarmos Convencional Commits para manter um histórico padronizado de commits. 
 - link: https://www.conventionalcommits.org/en/v1.0.0/
 
 - Para cada tipo de ação que for feita, um tipo de padrão é utilizado:

 ## Estrutura do commit e Tipos
```bash
<tipo>(escopo opcional): descrição breve

- **feat** → nova funcionalidade  
  Exemplo: `feat(auth): adicionar login com Google`

- **fix** → correção de bug  
  Exemplo: `fix(button): corrigir tamanho em telas pequenas`

- **docs** → mudanças na documentação  
  Exemplo: `docs(readme): atualizar instruções de instalação`

- **style** → mudanças que não afetam o funcionamento (formatação, indentação, etc.)  
  Exemplo: `style(header): ajustar espaçamento`

- **refactor** → refatoração de código sem alterar comportamento  
  Exemplo: `refactor(api): simplificar chamada de endpoint`

- **test** → adição ou ajuste de testes  
  Exemplo: `test(user): adicionar testes de integração`

- **chore** → mudanças de manutenção (dependências, configs, build, etc.)  
  Exemplo: `chore(deps): atualizar versão do eslint`


