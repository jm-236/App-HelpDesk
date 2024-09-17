# AppHelpDesk

Este projeto foi desenvolvido durante o curso de Desenvolvimento Web da Udemy, utilizando PHP e XAMPP, com o objetivo de estudar e praticar desenvolvimento Backend.

## Descrição

O AppHelpDesk é uma aplicação web simples que simula um sistema de help desk. Ele permite que usuários e administradores façam login e gerenciem tickets de suporte.

## Funcionalidades

- **Login de Usuários**: Usuários podem fazer login utilizando seu email e senha.
- **Autenticação**: Verificação de credenciais de login.
- **Gerenciamento de Tickets**: Usuários podem criar, visualizar e gerenciar tickets de suporte.

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação utilizada para o desenvolvimento do backend.
- **XAMPP**: Plataforma de desenvolvimento que inclui o servidor Apache, o banco de dados MySQL, e ferramentas como o PHPMyAdmin.
- **HTML/CSS**: Utilizados para a estrutura e estilização das páginas web.

## Instalação

1. **Clone o repositório**:
    ```bash
    git clone https://github.com/jm-236/AppHelpDesk.git
    ```

2. **Instale o XAMPP**:
    - Baixe e instale o XAMPP a partir do [site oficial](https://www.apachefriends.org/index.html).

3. **Configure o XAMPP**:
    - Coloque os arquivos do projeto na pasta [`htdocs`](command:_github.copilot.openRelativePath?%5B%7B%22scheme%22%3A%22file%22%2C%22authority%22%3A%22%22%2C%22path%22%3A%22%2Fc%3A%2FUsers%2FCynthia%2FOneDrive%2FDocumentos%2FGitHub%2FApp-HelpDesk%2Fhtdocs%22%2C%22query%22%3A%22%22%2C%22fragment%22%3A%22%22%7D%2C%22e1962539-b6be-4722-8da8-ec71d53c3e07%22%5D "c:\Users\Cynthia\OneDrive\Documentos\GitHub\App-HelpDesk\htdocs") do XAMPP.
    - Inicie o Apache e o MySQL através do painel de controle do XAMPP.
      
4. **Acesse a Aplicação**:
    - Abra o navegador e acesse `http://localhost/AppHelpDesk`.

## Estrutura do Projeto e Funcionamento dos Arquivos

### [`index.php`](command:_github.copilot.openRelativePath?%5B%7B%22scheme%22%3A%22file%22%2C%22authority%22%3A%22%22%2C%22path%22%3A%22%2Fc%3A%2FUsers%2FCynthia%2FOneDrive%2FDocumentos%2FGitHub%2FApp-HelpDesk%2Fhtdocs%2Fapp_help_desk%2Findex.php%22%2C%22query%22%3A%22%22%2C%22fragment%22%3A%22%22%7D%2C%22e1962539-b6be-4722-8da8-ec71d53c3e07%22%5D "c:\Users\Cynthia\OneDrive\Documentos\GitHub\App-HelpDesk\htdocs\app_help_desk\index.php")

Página inicial da aplicação onde os usuários fazem login. Se o login falhar, uma mensagem de erro é exibida.

### [`validalogin.php`](command:_github.copilot.openRelativePath?%5B%7B%22scheme%22%3A%22file%22%2C%22authority%22%3A%22%22%2C%22path%22%3A%22%2Fc%3A%2FUsers%2FCynthia%2FOneDrive%2FDocumentos%2FGitHub%2FApp-HelpDesk%2Fscripts_ocultos%2Fvalidalogin.php%22%2C%22query%22%3A%22%22%2C%22fragment%22%3A%22%22%7D%2C%22e1962539-b6be-4722-8da8-ec71d53c3e07%22%5D "c:\Users\Cynthia\OneDrive\Documentos\GitHub\App-HelpDesk\scripts_ocultos\validalogin.php")

Script responsável por validar as credenciais de login dos usuários. Ele verifica se o email e a senha fornecidos correspondem a um usuário registrado e, em caso positivo, cria uma sessão para o usuário.

### [`validador_acesso.php`](command:_github.copilot.openRelativePath?%5B%7B%22scheme%22%3A%22file%22%2C%22authority%22%3A%22%22%2C%22path%22%3A%22%2Fc%3A%2FUsers%2FCynthia%2FOneDrive%2FDocumentos%2FGitHub%2FApp-HelpDesk%2Fhtdocs%2Fapp_help_desk%2Fvalidador_acesso.php%22%2C%22query%22%3A%22%22%2C%22fragment%22%3A%22%22%7D%2C%22e1962539-b6be-4722-8da8-ec71d53c3e07%22%5D "c:\Users\Cynthia\OneDrive\Documentos\GitHub\App-HelpDesk\htdocs\app_help_desk\validador_acesso.php")

Script que verifica se o usuário está autenticado. Se não estiver, redireciona para a página de login.

### [`home.php`](command:_github.copilot.openRelativePath?%5B%7B%22scheme%22%3A%22file%22%2C%22authority%22%3A%22%22%2C%22path%22%3A%22%2Fc%3A%2FUsers%2FCynthia%2FOneDrive%2FDocumentos%2FGitHub%2FApp-HelpDesk%2Fhtdocs%2Fapp_help_desk%2Fhome.php%22%2C%22query%22%3A%22%22%2C%22fragment%22%3A%22%22%7D%2C%22e1962539-b6be-4722-8da8-ec71d53c3e07%22%5D "c:\Users\Cynthia\OneDrive\Documentos\GitHub\App-HelpDesk\htdocs\app_help_desk\home.php")

Página inicial após o login, onde os usuários podem escolher entre abrir um novo chamado ou consultar chamados existentes.

### [`abrir_chamado.php`](command:_github.copilot.openRelativePath?%5B%7B%22scheme%22%3A%22file%22%2C%22authority%22%3A%22%22%2C%22path%22%3A%22%2FC%3A%2FUsers%2FCynthia%2FOneDrive%2FDocumentos%2FGitHub%2FApp-HelpDesk%2Fhtdocs%2Fapp_help_desk%2Fabrir_chamado.php%22%2C%22query%22%3A%22%22%2C%22fragment%22%3A%22%22%7D%2C%22e1962539-b6be-4722-8da8-ec71d53c3e07%22%5D "c:\Users\Cynthia\OneDrive\Documentos\GitHub\App-HelpDesk\htdocs\app_help_desk\abrir_chamado.php")

Página onde os usuários podem abrir novos tickets de suporte. O formulário coleta informações como título, categoria e descrição do problema.

### [`registra_chamado.php`](command:_github.copilot.openRelativePath?%5B%7B%22scheme%22%3A%22file%22%2C%22authority%22%3A%22%22%2C%22path%22%3A%22%2Fc%3A%2FUsers%2FCynthia%2FOneDrive%2FDocumentos%2FGitHub%2FApp-HelpDesk%2Fhtdocs%2Fapp_help_desk%2Fregistra_chamado.php%22%2C%22query%22%3A%22%22%2C%22fragment%22%3A%22%22%7D%2C%22e1962539-b6be-4722-8da8-ec71d53c3e07%22%5D "c:\Users\Cynthia\OneDrive\Documentos\GitHub\App-HelpDesk\htdocs\app_help_desk\registra_chamado.php")

Script que processa o formulário de abertura de chamado. Ele salva os dados do chamado em um arquivo de texto e redireciona o usuário de volta para a página de abertura de chamado.

### [`consultar_chamado.php`](command:_github.copilot.openRelativePath?%5B%7B%22scheme%22%3A%22file%22%2C%22authority%22%3A%22%22%2C%22path%22%3A%22%2Fc%3A%2FUsers%2FCynthia%2FOneDrive%2FDocumentos%2FGitHub%2FApp-HelpDesk%2Fhtdocs%2Fapp_help_desk%2Fconsultar_chamado.php%22%2C%22query%22%3A%22%22%2C%22fragment%22%3A%22%22%7D%2C%22e1962539-b6be-4722-8da8-ec71d53c3e07%22%5D "c:\Users\Cynthia\OneDrive\Documentos\GitHub\App-HelpDesk\htdocs\app_help_desk\consultar_chamado.php")

Página onde os usuários podem consultar os tickets de suporte. Os tickets são lidos de um arquivo de texto e exibidos na tela. Apenas administradores podem ver todos os tickets; usuários comuns só podem ver seus próprios tickets.

### [`logoff.php`](command:_github.copilot.openRelativePath?%5B%7B%22scheme%22%3A%22file%22%2C%22authority%22%3A%22%22%2C%22path%22%3A%22%2Fc%3A%2FUsers%2FCynthia%2FOneDrive%2FDocumentos%2FGitHub%2FApp-HelpDesk%2Fhtdocs%2Fapp_help_desk%2Flogoff.php%22%2C%22query%22%3A%22%22%2C%22fragment%22%3A%22%22%7D%2C%22e1962539-b6be-4722-8da8-ec71d53c3e07%22%5D "c:\Users\Cynthia\OneDrive\Documentos\GitHub\App-HelpDesk\htdocs\app_help_desk\logoff.php")

Script que encerra a sessão do usuário e redireciona para a página de login.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e pull requests.

## Licença

Este projeto é licenciado sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.

## Contato

Para mais informações, entre em contato através do email: joaomarcelocosta14@gmail.com

---

Este projeto foi desenvolvido como parte do curso de Desenvolvimento Web da Udemy.
