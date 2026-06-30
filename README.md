# Herbário Virtual - Ferramenta de Baixo Custo para Informatização de Acervos 🌱

![Status](https://img.shields.io/badge/Status-Ativo-success)
![Licença](https://img.shields.io/badge/Licen%C3%A7a-MIT-blue) 

## 📖 Sobre o Projeto
Este projeto consiste em um sistema de banco de dados relacional e uma interface web de baixo custo voltados para a informatização de coleções botânicas de pequeno porte (como o Herbário UR). Desenvolvido como uma alternativa acessível e de código aberto, o sistema permite o gerenciamento eficiente de exsicatas, controle de usuários e armazenamento de imagens.

O objetivo principal é democratizar a digitalização de acervos botânicos, dispensando a necessidade de servidores caros ou equipes robustas de TI, tornando a replicação viável para instituições com recursos limitados.

### 🔍 Estrutura do Sistema
O sistema possui duas áreas principais:
1. **Área Pública:** Permite que visitantes e pesquisadores externos pesquisem dados do acervo, visualizem o *photobook* e acessem chaves interativas de identificação.
2. **Área Restrita:** Protegida por login, permite que os curadores e membros do herbário realizem operações de inserção (manual ou em lote via planilhas CSV), edição, exclusão e consulta avançada de registros botânicos.

---

## 🛠 Tecnologias Utilizadas
* **Front-end:** HTML5, CSS3, JavaScript.
* **Back-end:** PHP (processamento de dados e regras de negócio).
* **Banco de Dados:** MySQL / MariaDB (gerenciado via phpMyAdmin).
* **Servidor Local:** XAMPP (Apache).

---

## ⚙️ Pré-requisitos
Para replicar e rodar este sistema localmente (no seu computador) ou em um servidor institucional, você precisará apenas de:

1. **XAMPP:** Um pacote de software livre que inclui o servidor Apache e o banco de dados MariaDB/MySQL. [Faça o download do XAMPP aqui](https://www.apachefriends.org/pt_br/index.html).
2. Um navegador web moderno (Google Chrome, Firefox, Edge, etc.).
3. *(Opcional)* Um editor de código simples, como o Visual Studio Code ou Notepad++, caso deseje alterar configurações visuais ou de banco de dados.

---

## 🚀 Como Instalar e Rodar o Sistema

Siga o passo a passo abaixo para configurar o seu Herbário Virtual em poucos minutos:

### Passo 1: Preparando os Arquivos
1. Faça o download de todos os arquivos deste repositório (Clique em `Code` > `Download ZIP` e extraia os arquivos).
2. Instale o XAMPP no seu computador com as configurações padrão.
3. Navegue até a pasta de instalação do XAMPP (geralmente `C:\xampp` no Windows) e abra a pasta `htdocs`.
4. Crie uma pasta chamada `herbario-virtual` dentro de `htdocs` e cole todos os arquivos do projeto extraídos dentro dela.

### Passo 2: Inicializando o Servidor Local
1. Abra o painel de controle do XAMPP (**XAMPP Control Panel**).
2. Clique no botão **"Start"** ao lado de **Apache** e **MySQL**. Os nomes dos módulos deverão ficar com o fundo verde, indicando que estão rodando perfeitamente.

### Passo 3: Importando o Banco de Dados
1. Abra o seu navegador e acesse: `http://localhost/phpmyadmin`
2. No menu lateral esquerdo, clique em **"Novo"** (ou *New*) para criar um banco de dados.
3. No campo "Nome do banco de dados", digite exatamente: `acervo_herbario`. Escolha a codificação `utf8mb4_general_ci` e clique em **Criar**.
4. Selecione o banco de dados `acervo_herbario` recém-criado clicando nele no menu lateral.
5. Na barra superior, clique na aba **"Importar"**.
6. Clique em **"Escolher arquivo"** e localize o arquivo `acervo_herbario.sql` que está dentro da pasta do projeto que você baixou.
7. Desça até o final da página e clique no botão **"Importar"** (ou *Executar*). 
   * *Pronto! A estrutura do banco de dados e as tabelas essenciais serão criadas automaticamente.*

### Passo 4: Conectando o Sistema
O arquivo `config.php` do sistema já vem configurado para as credenciais padrão do XAMPP. Caso você instale em um servidor online futuramente, precisará editar este arquivo. Para uso local, ele deve estar assim:
```php
$dbHost = 'localhost';
$dbUsername = 'root'; // Usuário padrão do XAMPP
$dbPassword = '';     // Senha padrão do XAMPP é vazia
$dbName = 'acervo_herbario';

### **Passo 5: Acessando o Sistema**
1. Com o XAMPP rodando, abra o navegador e digite: http://localhost/herbario-virtual
2. Você verá a página inicial (Área Pública).
3. Para acessar a Área Restrita, vá até a página de Login.
Login padrão para teste: insira as credenciais de teste configuradas no seu banco de dados.

## 📊 Importação de Dados em Lote (Planilha CSV)
Sabemos que digitar exsicata por exsicata é inviável para herbários que já possuem dados tabelados. O sistema suporta importação em massa:

1. Na pasta do projeto, localize o arquivo **`BasePadrao.xlsx - modelo_planilha.csv`**.
2. Preencha este arquivo com os dados do seu acervo respeitando as colunas (Família, Gênero, Espécie, Coletor, etc.).
3. Salve o arquivo no formato **CSV (Separado por vírgulas)**.
4. Na Área Restrita do sistema, utilize a função de importação para carregar todos os seus registros de uma só vez.

## 📚 Como Citar este Projeto

> Aguardando atualizações 

## 🤝 Contribuições
Contribuições são muito bem-vindas! Se você tem sugestões de melhorias de código, novas funcionalidades ou correção de bugs.

## ✉️ Contato
Para dúvidas ou suporte acadêmico sobre a implementação:

* **Danilo de Paula Souza** - danilo.souza@estudante.ifgoiano.edu.br
* Instituto Federal Goiano, Câmpus Urutaí / Herbário UR.

