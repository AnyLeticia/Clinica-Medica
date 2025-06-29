# Clínica Médica  
## Sistema Web de Agendamento Médico

![Tela de Sucesso ](https://github.com/AnyLeticia/Clinica-Medica/blob/main/imagens/sucesso.png)

### Descrição

A **Clínica Médica** é um sistema web desenvolvido para facilitar o agendamento de consultas médicas em uma clínica fictícia, voltado especialmente para fins acadêmicos.  
Foi construído com tecnologias como HTML, CSS, PHP e MySQL, proporcionando uma interface simples, funcional e agradável ao usuário.


### Sobre o Projeto

Este sistema foi desenvolvido como projeto prático da faculdade **Uniasselvi (2025)**, com foco na integração de front-end, back-end e banco de dados.
O objetivo é permitir que um administrador (via login fictício) agende consultas médicas escolhendo o médico, paciente, data e horário.

Os dados dos médicos e pacientes são pré-cadastrados no banco de dados, e o usuário pode realizar agendamentos com confirmação de sucesso ao final.


### Funcionalidades

- **Tela de Login Fictício:**  
  Acesso ao sistema com usuário `admin` e senha `123`, simulado para testes acadêmicos.  
  ![Tela de Login](https://github.com/AnyLeticia/Clinica-Medica/blob/main/imagens/login.png)

- **Formulário de Agendamento:**  
  Permite escolher paciente, médico, data e hora.  
  ![Formulário de Agendamento](https://github.com/AnyLeticia/Clinica-Medica/blob/main/imagens/agendamento.png)

- **Mensagem de Sucesso:**  
  Após enviar o formulário, o sistema redireciona para uma tela de confirmação.  
  ![Agendamento Sucesso](https://github.com/AnyLeticia/Clinica-Medica/blob/main/imagens/sucesso.png)


### Tecnologias Utilizadas

- **HTML5** — Estrutura das páginas  
- **CSS3** — Estilização e responsividade  
- **JavaScript** — Elementos básicos de interação  
- **PHP** — Lógica de servidor e conexão com banco  
- **MySQL** — Armazenamento dos dados de médicos, pacientes e agendamentos  
- **XAMPP** — Ambiente local de testes


### Como Executar

1. Instale o [XAMPP](https://www.apachefriends.org/index.html)
2. Copie a pasta do projeto `AGENDAMENTO/` para `C:\xampp\htdocs\`
3. Inicie o Apache e MySQL no XAMPP
4. Importe o arquivo `banco.sql` no `phpMyAdmin` e crie o banco `consultas`
5. Acesse: [http://localhost/AGENDAMENTO](http://localhost/AGENDAMENTO)
6. Faça login com:
   - Usuário: `admin`  
   - Senha: `123`


### Créditos

Projeto desenvolvido por **Any Letícia Azevedo Lourenço**  
Acadêmica do curso de Análise e Desenvolvimento de Sistemas — Uniasselvi, 2025.