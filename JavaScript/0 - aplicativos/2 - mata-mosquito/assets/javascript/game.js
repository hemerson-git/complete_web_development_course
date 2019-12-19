var height = 0;
var width = 0;
var life = 3;
var tempo = 2000;
var leftTime = 20;
var nivel = (document.location.search).replace('?', '');
var mosquito = document.createElement('img');
mosquito.src = 'assets/imagens/mosca.png'
mosquito.style.position = 'absolute';
mosquito.style.zIndex = '50';

function setTime() {
    switch (nivel) {
        case 'normal':
            return 2000;
        case 'dificil':
            return 1000;
        case 'chucknorris':
            return 750;
    }
}

function setGameScreenSize() {
    height = innerHeight;
    width = innerWidth;
}

// Gera uma mosca em uma posição aleatória da tela
function randomizePosition() {
    var positionY = (Math.floor(Math.random() * height)) - 100;
    var positionX = (Math.floor(Math.random() * width)) - 190;
    positionY = (positionY < 0) ? 0 : positionY;
    positionX = positionX < 0 ? 0 : positionX;

    addFly(positionY, positionX);
}

//adiciona a mosca à tela
function addFly(pY, pX) {
    removeFly();
    mosquito.style.left = pX + 'px';
    mosquito.style.top = pY + 'px'
    mosquito.className = getSize() + ' ' + getSide();
    mosquito.id = 'mosquito';
    document.getElementById('scene').appendChild(mosquito);
    mosquito.onclick = function () {
        removeFly("killed");
    }
}

//Remove o mosquito da tela 
function removeFly(s) {
    if (document.getElementById('mosquito')) {
        if (s !== "killed") {
            remove_life();
        }
        document.getElementById('mosquito').remove();
    }
}

// Remove a vida caso não haja o clique na mosca
function remove_life() {
    try {
        if (life >= 0) {
            document.getElementById('l' + life).src = "assets/imagens/coracao_vazio.png";
            life--;
        }
    } catch {
        window.location.href = "game-over.html";
    }
}

//retorna um tamanho aleatorio da mosca 
function getSize() {
    var sizeClass = Math.floor(Math.random() * 3);
    switch (sizeClass) {
        case 0:
            return 'fly1';
        case 1:
            return 'fly2';
        default:
            return 'fly3';
    }
}

function getSide() {
    var sideClass = Math.floor(Math.random() * 2);
    return sideClass == 0 ? 'sideA' : 'sideB';
}

setInterval(function () {
    if (leftTime >= 0) {
        document.getElementById('timeLeft').textContent = leftTime;
        leftTime--;
    } else {
        window.location.href = 'victory.html';
    }
}, 1000);

setGameScreenSize();
setInterval(function () {
    randomizePosition();
}, setTime());