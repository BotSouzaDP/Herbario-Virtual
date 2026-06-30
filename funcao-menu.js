const opcoes = document.getElementById('ul-opc');
const abrir = document.getElementById('botao1');
const voltar = document.getElementById('botao2');

function abrirMenu(){
    opcoes.style.display = 'flex';
    opcoes.style.animation = 'abrir-menu 1s';
    voltar.style.animation = 'none';
    abrir.style.animation = 'ir-botao 1s'
    abrir.style.marginRight = '49%'
    voltar.style.marginRight = '49%';
    setTimeout(() => {
        abrir.style.display = 'none';
        voltar.style.display = 'flex';
    }, 1000);
}
function fecharMenu(){
    opcoes.style.animation = 'fechar-menu 1s';
    voltar.style.animation = 'voltar-botao 1s';
    abrir.style.animation = 'none'
    voltar.style.marginRight = '0';
    abrir.style.marginRight = '0';
    setTimeout(() => {
        opcoes.style.display = 'none';
        voltar.style.display = 'none';
        abrir.style.display = 'flex';
        voltar.style.marginRight = '0';
        abrir.style.marginRight = '0';
    }, 950);
}

