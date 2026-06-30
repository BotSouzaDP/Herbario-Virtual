# Herbário Virtual - Ferramenta de Baixo Custo para Informatização de Acervos

# Sobre o Projeto
Este projeto consiste em um sistema de banco de dados relacional e uma interface web de baixo custo voltados para a informatização de coleções botânicas de pequeno porte (como o Herbário UR). Desenvolvido como uma alternativa acessível, o sistema permite o gerenciamento eficiente de exsicatas, usuários e imagens.

O sistema possui duas áreas principais:
1. **Área Pública:** Permite que visitantes pesquisem dados do acervo, visualizem o photobook e acessem chaves interativas.
2. **Área Restrita:** Protegida por login, permite que os curadores e membros do herbário realizem operações de inserção (manual ou via planilhas CSV), edição, exclusão e consulta avançada de registros botânicos.

## Tecnologias Utilizadas
**Front-end:** HTML5, CSS3, JavaScript.
**Back-end:** PHP (processamento de dados e conexão).
**Banco de Dados:** MySQL / MariaDB (gerenciado via phpMyAdmin).
**Servidor Local:** XAMPP (Apache).

# Pré-requisitos
Para replicar e rodar este sistema localmente (no seu computador) ou em um servidor da sua instituição, você precisará instalar:

1. **XAMPP:** Um pacote de software livre que inclui o servidor Apache e o banco de dados MariaDB/MySQL. [Faça o download do XAMPP aqui](https://www.apachefriends.org/pt_br/index.html).
2. Um navegador web moderno (Google Chrome, Firefox, Edge, etc.).
3. (Opcional) Um editor de código simples, como o Visual Studio Code ou Notepad++, caso deseje alterar configurações.

# Como Instalar e Rodar o Sistema

Siga o passo a passo abaixo para configurar o seu Herbário Virtual:

# Passo 1: Preparando os Arquivos
1. Faça o download de todos os arquivos deste repositório.
2. Instale o XAMPP no seu computador.
3. Navegue até a pasta de instalação do XAMPP (geralmente `C:\xampp` no Windows) e abra a pasta `htdocs`.
4. Crie uma pasta chamada `herbario-virtual` dentro de `htdocs` e cole todos os arquivos do projeto dentro dela.

# Passo 2: Inicializando o Servidor Local
1. Abra o painel de controle do XAMPP (**XAMPP Control Panel**).
2. Clique no botão **"Start"** ao lado de **Apache** e **MySQL**. Os módulos deverão ficar com o fundo verde, indicando que estão rodando.

# Passo 3: Importando o Banco de Dados
1. Abra o seu navegador e acesse: `http://localhost/phpmyadmin`
2. No menu lateral esquerdo, clique em **"Novo"** (ou New) para criar um banco de dados.
3. No campo "Nome do banco de dados", digite exatamente: `acervo_herbario`. Escolha a codificação `utf8mb4_general_ci` e clique em **Criar**.
4. Selecione o banco de dados `acervo_herbario` recém-criado no menu lateral.
5. Na barra superior, clique na aba **"Importar"**.
6. Clique em **"Escolher arquivo"** e localize o arquivo `acervo_herbario.sql` que está dentro da pasta do projeto.
7. Marque a opção ao final na página: "A primeira linha do arquivo contém os nomes das colunas da tabela (se isso for desmarcado, a primeira linha se tornará parte dos dados)
8. Desça até o final da página e clique em **"Importar"** (ou Executar). O banco de dados e as tabelas com dados de exemplo serão criados automaticamente.

# Passo 4: Conectando o Sistema
O arquivo `config.php` já vem configurado para as credenciais padrão do XAMPP. Caso precise, certifique-se de que ele esteja assim:
```php
$dbHost = 'Localhost';
$dbUsername = 'root'; // Usuário padrão do XAMPP
$dbPassword = '';     // Senha padrão é vazia
$dbName = 'acervo_herbario';
