const footerContent = `
    <footer>
    <h1 class="t1 t4">Dúvidas?</h1>
    <div class="tab">
        <div class="tr">
            <div class="th1 th">Endereço</div>
            <div class="th2 th"><a href="https://maps.app.goo.gl/MoDNc3gudLscdySB6" target="_blank">Rod. Geraldo Silva Nascimento, Km-2,5 - Zona Rural, Urutaí - GO, 75790-000</a></div>
        </div>
        <div class="tr">
            <div class="th1 th">Endereço de e-mail</div>
            <div class="th2 th"><a href="mailto:ur@ifgoiano.edu.br">ur@ifgoiano.edu.br</a></div>
        </div>
        <div class="tr">
            <div class="th1 th">Numero de<br>Telefone</div>
            <div class="th2 th">(00) 00000-0000</div>
        </div>
        <div class="tr">
            <div class="th1 th">Redes Sociais</div>
            <div class="th2 th"><a href="https://www.instagram.com/herbario_ur/" target="_blank">@herbário_urutai</a></div>
        </div>        
    </div>

    </footer>
    <style>
    @import url('https://fonts.cdnfonts.com/css/codec-pro'); 

        footer {
            background-color: #50ab60;
            height: 101vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .tab {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 400px;
            width: 800px;
        }

        .tr {
            padding: 5px;
            margin: 5px;
            display: flex;
            align-items: center;
        }

        .th {
            display: flex;
            align-items: center;
            font-size: 25px;
            font-family: 'Codec Pro', sans-serif;
            line-height: 30px;
        }

        .th1 {
            color: #0e4315;
            width: 40%;
        }

        .th2 {
            color: whitesmoke;
            width: 60%;
        }

        .t4 {
            margin-bottom: 50px;
            color: #F3FBF0;
            font-family: arial;
            display: flex;
            justify-content: center;
            font-family: 'Codec Pro', sans-serif;
            font-weight: bold;
            font-size: 50px;
        }

        /* Cor para o link (email) */
        footer a {
            color: whitesmoke; /* Altera a cor do link para branco */
            text-decoration: none; /* Remove o sublinhado, caso queira */
        }
    </style>
`;

document.body.insertAdjacentHTML('beforeend', footerContent);
