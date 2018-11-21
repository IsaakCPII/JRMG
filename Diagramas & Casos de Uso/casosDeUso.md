# Especificação de Casos de Uso

# Sumário

- [CDU 01 - Cadastro ](#cdu-01---cadastro)
- [CDU 02 - Autenticação](#cdu-02---autenticação)
- [CDU 03 - Gerenciar conteúdos](#cdu-03---Gerenciar-arquivos)
- [CDU 04 - Baixar arquivos](#cdu-04---Baixar-arquivos)
- [CDU 05 - Gerenciar professores](#cdu-05---Gerenciar-professores)
- [CDU 06 - Visualizar conteúdos](#cdu-06---Visualizar-conteúdos)





# CDU 01 - Cadastro

**Atores:** Aluno e Professor
**Pré-condições:** O professor precisa estar matriculado no colégio Pedro II - Campus Duque de Caxias.

**Fluxo principal:**
1. O usuário seleciona uma opção entre o cargo de "Professor" ou "Aluno";
2. O sistema exibe ao usuário uma página para o cadastro dos dados deles;
3. O usuário deverá preencher os campos "Nome", "Matrícula", "Senha" e "Email";
4. O sistema verifica se os campos "Email" e "Matrícula" já estão cadastrados;
6. O sistema informa ao usuário caso ocorra algum erro;
7. O sistema salva o cadastro e cria a conta caso não ocorra nenhum erro;


# CDU 02 - Autenticação
**Atores:** Aluno e Professor

**Pré-condições:** O usuário precisa estar cadastrado no site.

**Fluxo principal:**
1. O usuário deverá preencher os campos "Email" e "Senha";
2. O sistema verifica se o email e a senha estão corretos;
3. O sistema alerta o usuário caso o email ou a senha digitadas estejam incorretas.
4. O sistema libera acesso à conta do usuário caso não ocorra erros;

# CDU 03 - Gerenciar arquivos
**Atores:** Professor 

**Pré-condições:** O usuário precisa ser do cargo "Professor";

**Fluxo principal:**
1. O professor pode enviar arquivos;

# CDU 04 - Baixar arquivos
**Atores:** usuário, professor, ADM

**Pré-condições:** Estar no site

**Fluxo principal:**
1. O usuário clica no botão e efetua o download do arquivo;


# CDU 05 - Gerenciar professores
**Atores:** ADM

**Pré-condições:** Ser um ADM

**Fluxo principal:**
1. O ADM exclui a conta do professor do professor do site;
2. O ADM cria um professor;

# CDU 06 - Visualizar conteúdos
**Atores:** Alunos, professores e ADM's

**Pré-condições:** Estar no site

**Fluxo principal:**
1. O navegante visualiza os conteúdos do site.

