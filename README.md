🌍 Tah'kaka - Página de Registro Simples para TrinityCore/AzerothCore/AshamaneCore/CMangos

Crie um site versátil para o seu servidor de jogo com este script fácil de usar, agora reimaginado como Tah'kaka, com compatibilidade com os principais cores de servidores.
🎮 Cores Suportados

    AzerothCore
    TrinityCore
    AshamaneCore
    CMangos

⭐ Gostou do projeto?

Se você achou útil, não esqueça de deixar uma estrela no repositório!
⭐ Estrelar no GitHub | 🍴 Fazer Fork no GitHub
🖱️ Pré-requisitos

Certifique-se de que o PHP 8.0 ou superior está instalado no seu servidor e que as seguintes extensões estão habilitadas:

    GMP Extension
    GD Extension
    ZIP Extension
    Soap Extension
    Mbstring Extension
    PDO Extension
    PDO-MySQL Extension

🖥️ Tutorial de Instalação no Windows
1. Pré-requisitos

Antes de começar, certifique-se de que você tem os seguintes itens instalados no seu sistema:
a) PHP

    Baixe e instale o PHP 8.0 ou superior:
        Acesse o site oficial do PHP: https://windows.php.net/download/.
        Baixe a versão Thread Safe para o seu sistema (x64 ou x86).
        Extraia o arquivo em uma pasta, como C:\php.

b) Extensões do PHP

Certifique-se de habilitar as seguintes extensões no arquivo php.ini:

    GMP
    GD
    ZIP
    Soap
    Mbstring
    PDO
    PDO-MySQL

Como habilitar extensões:

    Abra o arquivo php.ini (localizado na pasta onde você instalou o PHP, como C:\php\php.ini).
    Localize as linhas das extensões e remova o ponto e vírgula (;) no início para ativá-las. Por exemplo:
    ini

    extension=gmp
    extension=gd
    extension=zip
    extension=soap
    extension=mbstring
    extension=pdo_mysql

    Salve o arquivo e reinicie o servidor web (caso já esteja rodando).

c) Servidor Web

Você precisará de um servidor web para rodar o site. As opções mais comuns são:

    XAMPP (recomendado para iniciantes):
        Baixe e instale o XAMPP: https://www.apachefriends.org/pt_br/index.html.
        Certifique-se de que o Apache e o MySQL estão ativados no painel de controle do XAMPP.
    WAMP:
        Baixe e instale o WAMP: https://www.wampserver.com/.

d) Composer

    Baixe e instale o Composer, que é necessário para gerenciar as dependências do projeto:
        Acesse: https://getcomposer.org/.
        Durante a instalação, certifique-se de que o caminho do PHP está configurado corretamente (como C:\php\php.exe).

2. Baixar o Projeto

    Clone o repositório ou baixe os arquivos:
        Para clonar o repositório, abra o terminal (Prompt de Comando ou PowerShell) e execute:
        bash

    git clone https://github.com/masterking32/WoWSimpleRegistration

    Alternativamente, você pode baixar o projeto como um arquivo ZIP diretamente do GitHub e extraí-lo.

Coloque os arquivos no diretório do servidor web:

    Se estiver usando XAMPP, copie os arquivos para a pasta htdocs (geralmente localizada em C:\xampp\htdocs).
    Por exemplo, crie uma pasta chamada tahkaka e coloque os arquivos lá:
    text

        C:\xampp\htdocs\tahkaka

3. Instalar Dependências

    Abra o terminal (Prompt de Comando ou PowerShell).
    Navegue até o diretório do projeto:
    bash

cd C:\xampp\htdocs\tahkaka\application

Execute o comando para instalar as dependências:
bash

    composer install

4. Configurar o Projeto

    Renomeie o arquivo de configuração:
        Navegue até o diretório application/config/.
        Renomeie o arquivo config.php.sample para config.php.

    Edite o arquivo config.php:
        Abra o arquivo config.php com um editor de texto (como o Notepad++ ou VS Code).
        Configure os detalhes do seu servidor, como:
            Host do banco de dados (geralmente localhost).
            Usuário e senha do banco de dados.
            Nome do banco de dados usado pelo seu servidor de WoW.
        Se você for usar o recurso de "Captcha de Imagem", certifique-se de que o módulo GD2 está habilitado no PHP.

✅ Funcionalidades

    Página de Registro: Compatível com várias versões do jogo, incluindo Vanilla, TBC, WotLK, MoP, WoD, Legion, BFA e TWW.
    Status de Jogadores Online: Veja quem está online no servidor, com suporte para múltiplos reinos.
    Rankings: Exiba os melhores jogadores com base em Tempo de Jogo, Kills, Pontos de Honra, Pontos de Arena e Times de Arena em diferentes reinos.
    Guia de Conexão: Página "Como se conectar" para ajudar novos jogadores.
    Formulário de Contato: Página "Fale Conosco" para suporte e dúvidas.
    Temas Múltiplos: Escolha entre vários templates, como Light, Icecrown, Kael'thas, Advance e Battle for Azeroth.
    Gerenciamento de Senhas: Recursos para alterar (desde 10 de abril de 2019) e recuperar senhas (desde 31 de maio de 2019).
    Sistema de Votação: Engaje sua comunidade com um sistema de votação (adicionado em 3 de abril de 2020).
    Integração de Captcha: Proteja seu site com HCaptcha/Recaptcha v2 (desde 27 de julho de 2020).
    Autenticação de Dois Fatores (2FA): Adicione uma camada extra de segurança com 2FA (introduzido em 28 de julho de 2020).
    Suporte Multilíngue: Torne o site acessível para uma audiência global com suporte para vários idiomas (adicionado em 10 de setembro de 2020), incluindo:
        🇬🇧 Inglês
        🇮🇷 Persa
        🇮🇹 Italiano
        🇨🇳 Chinês Simplificado
        🇹🇼 Chinês Tradicional
        🇸🇪 Sueco
        🇫🇷 Francês
        🇩🇪 Alemão
        🇪🇸 Espanhol
        🇰🇷 Coreano
        🇷🇺 Russo
        🇵🇹 Português

🚀 Sobre o Projeto Tah'kaka

O Tah'kaka é uma evolução de projetos anteriores, trazendo uma solução moderna, acessível e altamente personalizável para servidores privados de World of Warcraft. Com suporte para os principais cores e uma ampla gama de funcionalidades, ele é ideal para quem deseja criar uma experiência profissional para sua comunidade.

Se você tiver dúvidas ou sugestões, sinta-se à vontade para contribuir ou abrir uma issue no repositório do GitHub.