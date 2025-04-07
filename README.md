# projeto-teste-tecnico



# requisitos para rodar o projeto
- Git -> https://git-scm.com/downloads
- Laragon 2025 v8.0.0 -> https://laragon.org/download/
- PHP 8.4.5 -> https://www.php.net/downloads.php
- Node.js v22.14.0 -> https://nodejs.org/pt
- VSCode v1.99 -> https://code.visualstudio.com/download
- (OBS: Instalar globalmente) Compose -> https://getcomposer.org/

# Configurando Laragon

1. 
  - depois de ter instalado o Laragon abra ele;
  - com o botão direito do mouse aperte em qualquer lugar dentro dele;
  - vá até PHP>>Version [php-8.x.x]>>dir: php-8.x.x;
  - irá abrir o explorador de aquivos na pasta onde o Laragon guarda as versões do php;
  - agora no explorador de aquivos volte para a pasta php;
  - dentro desta pasta copie e cole a versão do php-8.4.5 que foi baixada (lembrando que tem extrar caso esteje como .zip);
  - a abra a pasta php-8.4.5 da nova versão instalada;
  - procure pelo arquivo php.ini e abra ele com o bloco de notas;
  - com ele aberto no bloco de notas aperte as telas (crtl + f) e digite (;extension=zip) e aperte em localizar;
  - depois de localizado caso esteje como (;extension=zip) apague o (;) no começo e salve o arquivo e feche;

2. 
  - Baixe ou clone o projeto-teste-tecnico em uma pasta;
  - Caso o arquivo esteje zipado descompacte ele;

3.
  - agora abra o explorador de arquivos e vá até o (Disco local(C:));
  - abra a pasta do laragon;
  - abra a pasta www;
  - crie uma pasta com o nome (cadastroCliente);
  - copie a pasta clonada ou baixado o projeto-teste-tecnico dentro da pasta cadastroCliente;

4. 
  - agora feche e abre o laragon;
  - aperte em Start All;
  - com o botão direito do mouse aperte em qualquer lugar dentro dele;
  - vá até www>>cadastroCliente;
  - irá abre o projeto no navegador no link (http://cadastrocliente.test/);

5.
  - agora dentro do laragon clique no botão (database);
  - preencha (servidor/IP:127.0.0.1) (Usuário:root) (Senha: ) (porta:3306);
  - clique em abrir;

6.
  - deixe o mysql e apache rodando e o banco aberto;
  - volte para laragon;
  - abra o terminal digite cd cadastroCliente e aperte enter para entrar na pasta do projeto;
  - digite (composer update) e aperte enter;
  - agora digite (php artisan jetstream:install livewire) e aperte enter;
  - agora digite (npm install) e aperte enter;
  - agora digite (php artisan migrate:refresh) e aperte enter;
  - agora digite (php artisan db:seed) e aperte enter;
  - agora digite (npm run dev) e aperte enter;
  - agora volte no banco de dado e crie o novo schema chamado (cadastro_cliente) com colação (utf8mb4_0900_ai_ci);

7.
  - agora vá no navegador e acesse (http://cadastrocliente.test/) e teste a aplicação;
 
