# **CSI477-2019-02 - Proposta de Trabalho Final**
## *Grupo: Gabriel Nepomuceno Siqueira Campos e Higor Luis Pereira Guimarães*

--------------

<!-- Descrever um resumo sobre o trabalho. -->

### Resumo
Este documento é uma apresentação da proposta do trabalho final, desenvolvido apra a disciplina CSI477 - Sistemas Web I. Foi desenvolvido uma plataforma para cadastro de consultas médicas. A aplicação foi desenvolvida utilizando Laravel e MySQL.

	
<!-- Apresentar o tema. -->
### 1. Tema
Este possui funcionalidades:
  
   O trabalho em questão tem como proposta realizar o cadastro de consultas médicas de forma simples, fazer as operações CRUD em pacientes, médicos e consultas, além de visualizar relatórios de cada uma dessas entidades
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
  * Tela de Inicio ![alt-text][inicio]
  * Tela de Login: ![alt-text][login]
  * Tela de Pacientes: ![alt-text][pacientes]
  * Tela de Médicos: ![alt-text][medicos]
  * Tela de Consultas: ![alt-text][consultas]
  * CRUD: ![alt-text][crud]

  ### 5. Configuração do Ambiente

  1. Criar um banco de dados vazio chamado `gerenciamento`
  2. Executar em /Projeto: `php artisan migrate`
  3. Acessar diretamente a rota `localhost:8000/register` para cadastrar um usuário
  4. Obs: uma cópia do .env utilizado no desenvolvimento está contida no arquivo .env.example
  
  [inicio]: https://raw.githubusercontent.com/UFOP-CSI477/2019-02-trabalho-final-higor-luis-e-gabriel-campos/master/Prototipo/inicio.png "Tela de Inicio"

  [login]: https://raw.githubusercontent.com/UFOP-CSI477/2019-02-trabalho-final-higor-luis-e-gabriel-campos/master/Prototipo/login.png "Tela de Login"

  [pacientes]: https://raw.githubusercontent.com/UFOP-CSI477/2019-02-trabalho-final-higor-luis-e-gabriel-campos/master/Prototipo/pacientes.png "Tela de Pacientes"

  [medicos]: https://raw.githubusercontent.com/UFOP-CSI477/2019-02-trabalho-final-higor-luis-e-gabriel-campos/master/Prototipo/medicos.png "Tela de Médicos"

  [consultas]: https://raw.githubusercontent.com/UFOP-CSI477/2019-02-trabalho-final-higor-luis-e-gabriel-campos/master/Prototipo/consultas.png "Tela de Consultas"

  [crud]: https://raw.githubusercontent.com/UFOP-CSI477/2019-02-trabalho-final-higor-luis-e-gabriel-campos/master/Prototipo/crud.png "CRUD"