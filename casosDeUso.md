# Especificação de Casos de Uso

# Sumário

- [CDU 01 - Cadastro ](#cdu-01---Cadastro)
- [CDU 02 - Autentificação](#cdu-02---Autentificação)
- [CDU 03 - Busca](#cdu-03---Busca)
- [CDU 04 - Réplica ou Respostas](#cdu-04---Réplica--ou--Respostas)
- [CDU 05 - Inserção de comentários](#cdu-05---Inserção--de--comentários)
- [CDU 06 - Classificação de conteúdos](#cdu-06---Classificação--de--conteúdos)
- [CDU 07 - Baixar arquivos](#cdu-07---Baixar--arquivos)
- [CDU 08 - Marcação de conteúdos](#cdu-08---Marcação--de--conteúdos)
- [CDU 09 - Enviar conteúdos](#cdu-09---Enviar--conteúdos)
- [CDU 10 - Excluir arquivos](#cdu-010---Excluir--arquivos)
- [CDU 11 - Fixar comentários](#cdu-11---Fixar--comentários)
- [CDU 12 - Excluir professores](#cdu-12---Excluir--professores)
- [CDU 13 - Visualizar conteúdos](#cdu-13---Visualizar--conteúdos)
- [CDU 14 - Exluir alunos](#cdu-14---Exluir--alunos)
- [CDU 15 - Cadastro de novos conteúdos matemáticos](#cdu-15---Cadastro--de--novos--conteúdos--matemáticos)


# CDU 01 - Cadastro

**Atores:** Aluno e Professor
**Pré-condições:** O professor precisa estar matriculado no colégio Pedro II - Campus Duque de Caxias.

**Fluxo principal:**
1. O usuário seleciona uma opção entre o cargo de "Professor" ou "Aluno";
2. O sistema exibe ao usuário uma página para o cadastro dos dados deles;
3. O usuário deverá preencher os campos "Nome", "Matrícula", "Senha" e "Email";
4. O sistema inspeciona a matricula do Professor para confirmar seu oficio;
5. O sistema verifica se a matricula e o email já estão cadastrados;
6. O sistema informa ao usuário caso ocorra algum erro;
7. O sistema salva o cadastro e cria a conta caso não ocorra nenhum erro;


# CDU 02 - Autentificação
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

# CDU 04 - Réplica ou Respostas
**Atores:** Alunos, professores

**Pré-condições:** Estar no site

**Fluxo principal:**
1. O usuário (aluno ou professor) responde uma pergunta feita por outro usuário anteriormente;

# CDU 05 - Inserção de comentários
**Atores:** Alunos, professores

**Pré-condições:** O usuário deverá possuir uma conta no site

**Fluxo principal:**
1. O usuário (aluno ou professor) insere uma pergunta referente a algum assunto específico;

# CDU 06 - Classificação de conteúdos
**Atores:** Professor

**Pré-condições:** O usuário precisa ser do cargo "Professor";

**Fluxo principal:**
1. O usuário classifica um determinado arquivo. Podendo classificá-lo por tipo de arquivo (ex: Lista de exercícios, etc).

# CDU 07 - Baixar arquivos
**Atores:** usuário, professor, ADM

**Pré-condições:** Estar no site

**Fluxo principal:**
1. O usuário clica no botão e efetua o download do arquivo;

# CDU 08 - Marcação de conteúdos
**Atores:** Aluno, Professor

**Pré-condições:** Estar no site

**Fluxo principal:**
1. O usuário clica no botão de marcação e o assunto determinado fica marcado como lido.

# CDU 09 - Enviar conteúdos
**Atores:** professor

**Pré-condições:** Ser do cargo "Professor"

**Fluxo principal:**
1. O professor clica no botão de upload;
2. O sistema abre uma janela para que o usuário selecione o arquivo desejado;
3. O usuário envia o arquivo para o site.
4. O sistema armazena o arquivo.

# CDU 10 - Excluir arquivos
**Atores:** professor e ADM

**Pré-condições:** O usuário deve ser do cargo "professor"

**Fluxo principal:**
1. O professor clica no botão que exclui o arquivo.
2. O sistema gera uma mensagem perguntando se o usuário realmente deseja excluir o arquivo.
3. O sistema exclui o arquivo caso o professor confirmar a exclusão

# CDU 11 - Fixar comentários
**Atores:** professor e ADM

**Pré-condições:** Ser do cargo "professor"

**Fluxo principal:**
1. O professor clica no botão de fixar comentários e o comentário fica fixado no topo da lista de comentários.

# CDU 12 - Excluir professores
**Atores:** ADM

**Pré-condições:** Ser um ADM

**Fluxo principal:**
1. O ADM exclui a conta do professor do professor do site.

# CDU 13 - Visualizar conteúdos
**Atores:** Alunos, professores e ADM's

**Pré-condições:** Estar no site

**Fluxo principal:**
1. O navegante visualiza os conteúdos do site.

# CDU 14 - Excluir alunos
**Atores:** Professor e ADM

**Pré-condições:** Ser do cargo "professor"

**Fluxo principal:**
1. O professor vai até o perfil do aluno e clica no botão de deletar a conta
2. O sistema pergunta se o professor realmente deseja excluir a conta do aluno e pede para que o professor faça uma descrição do motivo da exclusão;

# CDU 15 - Cadastro de novos conteúdos matemáticos
**Atores:** professor

**Pré-condições:** O usuário precisa ser da classe "professor"

**Fluxo principal:**
1. O usuário cadastra um determinado arquivo, classificando-o por conteúdo (ex: P.A, P.G, Probabilidade, etc).
