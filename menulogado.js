var menu = ` 

<head>
<nav>
<button class="botao-menu botao1" id="botao1" onclick="abrirMenu()">Menu</button>
<button class="botao-menu botao2" id="botao2" onclick="fecharMenu()">Voltar</button>
<ul class="ul-opc" id="ul-opc">
    <li class="opc">
        <a class="a-menu" href="index.php">Início</a>
    </li>
    <li class="opc">
        <a class="a-menu" href="https://ifgoiano.edu.br/home/index.php/urutai.htmlhttps://ifgoiano.edu.br/home/index.php/urutai.html">Instituição</a>
    </li>
    <li class="opc drop drop1">
        <a class="a-menu">Chaves Interativas<i class="fa-solid fa-caret-down"></i></a>
        <div class="dropbar1 dropbar">
            <a class="a-menu" href="https://souza-d-p.shinyapps.io/Chave_familias_Olga_Benario/">Olga Benário</a>
        </div>
    </li>
    <li class="opc">
        <a class="a-menu" href="photo-book.php">Photo Book</a>
    </li>
    <li class="opc">
        <a class="a-menu" href="">Projetos</a>
    </li>
    <li class="opc drop drop2">
        <a class="a-menu" href="buscas.php">Banco de Dados <i class="fa-solid fa-caret-down"></i></a>
        <div class="dropbar2 dropbar">
           <a class="a-menu" href="base_jabot.php">Base de Dados</a>
        <!--<a class="a-menu" href="photo-book.html">Photo Book</a>
            <a class="a-menu" href="">Instituição</a>-->
        </div>
    <li class="opc drop drop2">
        <a class="a-menu">Mais <i class="fa-solid fa-caret-down"></i></a>
        <div class="dropbar2 dropbar">
           <a class="a-menu" href="cadastro.php">Cadastro</a>
        <!--<a class="a-menu" href="photo-book.html">Photo Book</a>
            <a class="a-menu" href="">Instituição</a>-->
        </div>
    </li>
    <li class="opc">
        <a class="a-menu" href="">Publicações</a>
    </li>
    <li class="opc drop drop4">
        <a class="a-menu">Ajuda <i class="fa-solid fa-caret-down"></i></a>
        <div class="dropbar4 dropbar">
            <a class="a-menu" href="mailto:herb.urt@ifgoiano.edu.br">Entrar em Contato</a>
        </div>
    </li>
    <li class="opc drop drop4">
        <a class="a-menu" href="login.php"><i class="fa-solid fa-user"></i> Login</a>
        <div class="dropbar4 dropbar">
            <a class="a-menu" href="sair.php">Sair</a>
        </div>
    </li>
</ul>
</nav>
    


    <style>

    body{
        margin: 0;
        padding: 0;
    }
    nav{
        width: 100%;
        margin: 0;
        background-color: #F6FFF7;
        padding: 10px 0;
    }
    .ul-opc{
        display: flex;
        flex-direction: row;
        list-style: none;
        margin: 0;
        padding: 0;
        justify-content: space-around;
        width: 100%;
    }
    .opc{
        display: flex;
        margin: 0;
        padding: 0;
    }
    .a-menu{
        text-decoration: none;
        color: #0e4315;
        font-family: arial;
        font-weight: bold;
        font-size: 15px;
        padding: 10px 5px;
        border-radius: 10px;
    }
    .a-menu:hover{
        background-color: #d4ffdc;
        color: #1ac438;
    }
    .menu{
        display: none;
    }
    .botao-menu{
        display: none;
    }
    .drop{
        display: flex;
        flex-direction: column;
    }
    .drop:hover{
        .dropbar{
            display: flex;
        }
        .a-menu:hover{
            color: #1ac438;
        }
        background-color: #F6FFF7;
        border-radius: 10px;
    }
    .dropbar{
        position: absolute;
        flex-direction: column;
        display: none;
        background-color: #F6FFF7;
        margin-top: 38px;
        padding: 12px 10px 10px 10px;
        border-radius: 0 0 10px 10px;
        box-shadow: -5px 5px 5px 0px #c8bdba;
        z-index: 10;
    }
    
    
    
    
    
    
    @media (max-width: 780px){
        nav{
            padding: 0;
            display: flex;
            justify-content: end;
        }
        .botao-menu{
            display: flex;
            padding: 10px;
            margin: 10px 0;
            position: relative;
            border-radius: 50px 0 0 50px;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
            border: none;
            background-color: #0e4315;
            color: #F6FFF7;
            overflow: hidden;
            font-weight: bold;
            font-size: 15px;
        }
        .botao2{
            display: none;
        }
        .ul-opc{
            display: none;
            background-color: #0e4315;
            width: 50%;
            position: fixed;
            flex-direction: column;
            justify-content: start;
            height: 100%;
            z-index: 10;
        }
        .a-menu{
            color: #F6FFF7;
            margin: 0 5px;
            padding: 10px;
            width: 100%;
            font-size: 15px;
        }
        a-menu:hover{
            background-color: #F6FFF7;
            color:  #0e4315;
        }
        .drop{
            width: 85%;
        }
        .drop:hover{
            background-color: #F6FFF7;
        }
        .dropbar{
            position: relative;
            margin: 5px;
            background-color:rgb(66, 164, 104);
            padding: 0 0 0 10px;
        }
        .opc{
            margin: 0;
            padding: 0;
        }
    
        @keyframes abrir-menu {
            0% {
                margin-right: -100%;
            } 100% {
                margin-right: 0;
            }
        }
        @keyframes fechar-menu {
            0% {
                margin-right: 0;
            } 100% {
                margin-right: -100%;
            }
        }
        @keyframes ir-botao {
            0% {
                margin-right: 0;
            } 100% {
                margin-right: 49%;
            }
        }
        @keyframes voltar-botao {
            0% {
                margin-right: 49%;
            } 100% {
                margin-right: 0;
            }
        }
    }
    
    </style>

`
document.body.insertAdjacentHTML("afterbegin", menu);
