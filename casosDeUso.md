# Especificação de Casos de Uso

# Sumário

- [CDU 01 - Cadastro ](#cdu-01---cadastro)
- [CDU 02 - Autenticação](#cdu-02---autenticação)
- [CDU 03 - Busca](#cdu-03---Busca)
- [CDU 04 - Inserção de comentários](#cdu-04---Inserção-de-comentários)
- [CDU 05 - Gerenciar conteúdos](#cdu-05---Gerenciar-conteúdos)
- [CDU 06 - Baixar arquivos](#cdu-06---Baixar-arquivos)
- [CDU 07 - Marcação de conteúdos](#cdu-08---Marcação-de-conteúdos)
- [CDU 08 - Fixar comentários](#cdu-11---Fixar-comentários)
- [CDU 09 - Gerenciar professores](#cdu-07---Gerenciar-professores)
- [CDU 10 - Visualizar conteúdos](#cdu-09---Visualizar-conteúdos)
- [CDU 11 - Gerenciar alunos](#cdu-010---Gerenciar-alunos)




# CDU 01 - Cadastro

**Atores:** Aluno e Professor
**Pré-condições:** O professor precisa estar matriculado no colégio Pedro II - Campus Duque de Caxias.

**Fluxo principal:**
1. O usuário seleciona uma opção entre o cargo de "Professor" ou "Aluno";
2. O sistema exibe ao usuário uma página para o cadastro dos dados deles;
3. O usuário deverá preencher os campos "Nome", "Matrícula", "Senha" e "Email";
4. O sistema verifica se os campos "Email" e "Matrícula" já estão cadastrados;
4. O sistema inspeciona a matricula do Professor para confirmar seu oficio e envia seu cadastro para o cordenador(cadastro prévio);
5. O cordenador verifica o cadastro do professor e o valida ou o bane;
6. O sistema informa ao usuário caso ocorra algum erro;
7. O sistema salva o cadastro e cria a conta caso não ocorra nenhum erro;


# CDU 02 - Autenticação
**Atores:** Aluno e Professor

**Pré-condições:** O usuário precisa estar cadastrado no site.

**Fluxo principal:**
1. O usuário deverá preencher os campos "Matrícula" e "Senha";
2. O sistema verifica se a matrícula e a senha estão corretos;
3. O sistema alerta o usuário caso a matrícula ou a senha digitadas estejam incorretas.
4. O sistema libera acesso à conta do usuário caso não ocorra erros;

# CDU 03 - Busca
**Atores:** Aluno, professor e ADM

**Pré-condições:** Estar no site

**Fluxo principal:**
1. O usuário deverá digitar o assunto desejado no campo de busca;
2. O sistema verifica se o assunto pesquisado existe;
3. O sistema exibe o assunto pesquisado na tela, caso ele exista;
4. O sistema informa o usuário caso o assunto não exista;


# CDU 04 - Inserção de comentários
**Atores:** Alunos, professores

**Pré-condições:** O usuário deverá possuir uma conta no site

**Fluxo principal:**
1. O usuário (aluno ou professor) insere uma pergunta referente a algum assunto específico;

# CDU 05 - Gerenciar arquivos
**Atores:** Professor

**Pré-condições:** O usuário precisa ser do cargo "Professor";

**Fluxo principal:**
1. O professor pode classificar, enviar, excluir ou editar um arquivo;

# CDU 06 - Baixar arquivos
**Atores:** usuário, professor, ADM

**Pré-condições:** Estar no site

**Fluxo principal:**
1. O usuário clica no botão e efetua o download do arquivo;

# CDU 07 - Marcação de conteúdos
**Atores:** Aluno, Professor

**Pré-condições:** Estar no site

**Fluxo principal:**
1. O usuário clica no botão de marcação e o assunto determinado fica marcado como lido.


# CDU 08 - Fixar comentários
**Atores:** professor e ADM

**Pré-condições:** Ser do cargo "professor"

**Fluxo principal:**
1. O professor clica no botão de fixar comentários e o comentário fica fixado no topo da lista de comentários.

# CDU 09 - Gerenciar professores
**Atores:** ADM

**Pré-condições:** Ser um ADM

**Fluxo principal:**
1. O ADM exclui a conta do professor do professor do site.

# CDU 10 - Visualizar conteúdos
**Atores:** Alunos, professores e ADM's

**Pré-condições:** Estar no site

**Fluxo principal:**
1. O navegante visualiza os conteúdos do site.

# CDU 11 - Gerenciar alunos
**Atores:** Professor e ADM

**Pré-condições:** Ser do cargo "professor"

**Fluxo principal:**
1. O professor pode banir um aluno;
