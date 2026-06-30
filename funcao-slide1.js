const img1 = document.getElementById('img1');
const img2 = document.getElementById('img2');
const img3 = document.getElementById('img3');
const p1 = document.getElementById('p1');
const p2 = document.getElementById('p2');
const p3 = document.getElementById('p3');
let cont = 0;

function slid(){
    if (cont === 0){
        img1.style.opacity = '0%';
        p2.style.backgroundColor = '#127223';
        p1.style.backgroundColor = '#0e4315';
        cont++;
    } else if (cont === 1){
        img2.style.opacity = '0%';
        p3.style.backgroundColor = '#127223';
        p2.style.backgroundColor = '#0e4315';
        cont++;
    } else if (cont === 2){
        img1.style.opacity = '100%';
        img2.style.opacity = '100%';
        p1.style.backgroundColor = '#127223';
        p3.style.backgroundColor = '#0e4315';
        cont = 0;
    } else if(cont === 3){
        img1.style.opacity = '100%';
    }
}

setInterval(slid, 5000);
