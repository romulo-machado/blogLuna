var fthome = document.getElementsByClassName('fthome');
var modal = document.getElementById('modal');
var imagemAmpliada = document.getElementById('imagemAmpliada');

function alerta(elemento) {
    imagemAmpliada.src = elemento.src;
    modal.style.display = 'flex';
}

function fecharModal() {
    modal.style.display = 'none';
}