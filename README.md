# Teste Prático Agência Moonglag em WordPress - PHP com ACF e Elementor

Este é um projeto WordPress desenvolvido com código puro, integrando **Advanced Custom Fields (ACF)** e o **Elementor**. Este arquivo contém instruções para instalar, configurar e rodar o projeto.

---

## Pré-requisitos

Certifique-se de que o ambiente de desenvolvimento esteja configurado com os seguintes requisitos:

1. **Servidor Local**: Apache ou Nginx (Ex: XAMPP, LocalWP, Laragon, WAMP, ou Docker).
2. **PHP**: Versão 7.4 ou superior.
3. **MySQL**: Versão 5.7 ou superior.
4. **WordPress**: Versão 6.0 ou superior.
5. **Plugins**:
   - [Advanced Custom Fields (ACF)](https://br.wordpress.org/plugins/advanced-custom-fields/)
   - [Elementor](https://br.wordpress.org/plugins/elementor/)
   - [All-in-One WP Migration](https://br.wordpress.org/plugins/all-in-one-wp-migration/) (opcional para importar dados).

---

## Instalação

Siga as etapas abaixo para configurar o projeto:

### 1. Baixar o WordPress
1. Faça o download do WordPress no site oficial: [https://br.wordpress.org](https://br.wordpress.org).
2. Extraia os arquivos e coloque-os no diretório do servidor local, como `htdocs` (XAMPP) ou uma pasta configurada no seu ambiente.

---

### 2. Configurar o Banco de Dados
1. Acesse o painel do seu servidor (ex: phpMyAdmin).
2. Crie um banco de dados com as seguintes informações:
   - **Nome do banco**: `nome_do_projeto`
   - **Usuário**: `root` (ou seu usuário configurado)
   - **Senha**: `senha` (ou vazio, dependendo da configuração do servidor).
3. Atualize o arquivo `wp-config.php` localizado na raiz do WordPress:
   ```php
   /** Nome do banco de dados */
   define('DB_NAME', 'nome_do_projeto');

   /** Usuário do banco de dados */
   define('DB_USER', 'root');

   /** Senha do banco de dados */
   define('DB_PASSWORD', 'senha');

### 3. Clonar ou Copiar os Arquivos do Tema
1. Baixe este repositório como arquivo ZIP ou clone-o no diretório de temas do WordPress.
2.Após baixar, mova os arquivos para a pasta de temas
3.Acesse o painel administrativo do WordPress e ative o tema em Aparência > Temas.

````bash
https://github.com/vdavidmarques/moonflag-teste-pratico.git
````

### 4. Instalar Plugins Obrigatórios
No painel administrativo do WordPress, vá para Plugins > Adicionar Novo.
Pesquise e instale os seguintes plugins:
Advanced Custom Fields.
Elementor.
All-in-One WP Migration (opcional para importar os dados do site).
Após a instalação, ative todos os plugins.

### 5. Importar Backup com Arquivo XML Exportado do WordPress

1. No WordPress do ambiente onde será restaurado:
 - Certifique-se de que os plugins **Advanced Custom Fields** e **Elementor** estejam instalados e ativados.
- Acesse **Ferramentas > Importar**.
- Na lista de opções, localize o item **WordPress** e clique em **Instalar agora** (se a ferramenta ainda não estiver instalada).
- Após a instalação, clique em **Executar importador**.
- Selecione o arquivo `.xml` exportado e clique em **Fazer upload do arquivo e importar**.
O Arquivo xml está incluído neste repositório.
- Durante o processo, será solicitado que você atribua autores:
- Escolha um usuário existente ou crie um novo.
- Marque a opção para **Baixar e importar arquivos anexados** (para recuperar imagens e outros arquivos de mídia).

3. Aguarde a finalização do processo e verifique se o conteúdo foi importado corretamente.

4. Após importar o conteúdo, configure novamente os campos personalizados do ACF:
   - No painel administrativo, acesse **Custom Fields > Ferramentas > Importar Campos**.
   - Importe o arquivo `acf-config.json` incluído no projeto para reconfigurar os campos personalizados.
