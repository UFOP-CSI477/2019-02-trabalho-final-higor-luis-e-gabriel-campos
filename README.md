# **CSI477-2019-02 - Proposta de Trabalho Final**
## *Grupo: Gabriel Nepomuceno Siqueira Campos e Higor Luis Pereira Guimarães*

--------------

<!-- Descrever um resumo sobre o trabalho. -->

### Resumo

	Este documento é uma apresentação da proposta do trabalho final, desenvolvido apra a disciplina CSI477 - Sistemas Web I. Foi desenvolvido uma plataforma para cadastro de consultas médicas. A aplicação foi desenvolvida utilizando Laravel e MySQL.

<!-- Apresentar o tema. -->
### 1. Tema

	O trabalho em questão tem como proposta realizar o cadastro de consultas médicas de forma simples, fazer as operações CRUD em pacientes, médicos e consultas, além de visualizar relatórios de cada uma dessas entidades. 

<!-- Descrever e limitar o escopo da aplicação. -->
### 2. Escopo

  Este possui funcionalidades:
  
   * Criar, editar, apagar e visualizar dados dos pacientes;
   * Criar, editar, apagar e visualizar dados dos médicos;
   * Criar, editar, apagar e visualizar dados das consultas;
   * Visualizar histórico de consultas do paciente;
   * Visualizar histórico de consultas do médico;

<!-- Apresentar restrições de funcionalidades e de escopo. -->
### 3. Restrições

  * Não há mascaras para os inputs;
  * Não há tratamento de dados em alguns inputs caso estes sejam inseridos no formato errado ou de forma errada

<!-- Construir alguns protótipos para a aplicação, disponibilizá-los no Github e descrever o que foi considerado. //-->
### 4. Protótipo

  A seguir estão os protótipos para:
  * Listagem de serviços: ![alt-text][servicos]
  * Perfil dos usuários: ![alt-text][perfil]
  * Criação de publicações: ![alt-text][publicacao]
  * Respostas à publicação: ![alt-text][respostas]
  * Avaliação do serviço prestado: ![alt-text][feedback]
  * Cadastro de usuários: ![alt-text][cadastro]
  * Login de usuários: ![alt-text][login]

  ### 5. Configuração do Ambiente

  1. Criar um banco de dados vazio chamado `gerenciamento`
  2. Executar em /Projeto: `php artisan migrate`
  3. Acessar diretamente a rota `localhost:8000/register` para cadastrar um usuário
  4. Obs: uma cópia do .env utilizado no desenvolvimento está contida no arquivo .env.example
  
  [Inicio]: https://raw.githubusercontent.com/UFOP-CSI477/2019-02-trabalho-final-higor-luis-e-gabriel-campos/Prototipos/inicio.png "Tela de Inicio"
  [Login]: https://raw.githubusercontent.com/UFOP-CSI477/2019-02-trabalho-final-higor-luis-e-gabriel-campos/master/Prototipos/login.png "Tela de Login"
  [Pacientes]: https://raw.githubusercontent.com/2019-02-trabalho-final-higor-luis-e-gabriel-campos/master/Prototipos/pacientes.png "Tela de Pacientes"
  [Medicos]: https://raw.githubusercontent.com/2019-02-trabalho-final-higor-luis-e-gabriel-campos/master/Prototipos/medicos.png "Tela de Médicos"
  [Consultas]: https://raw.githubusercontent.com/2019-02-trabalho-final-higor-luis-e-gabriel-campos/master/Prototipos/consultas.png "Tela de Consultas"
  [CRUD]: https://raw.githubusercontent.com/2019-02-trabalho-final-higor-luis-e-gabriel-campos/master/Prototipos/crud.png "CRUD"