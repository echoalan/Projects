//abrir modal

const p = document.getElementById('click-form');
const modal = document.getElementById('modal');
const body = document.getElementById('body');

p.addEventListener('click', () =>{

    modal.style.display = 'flex';

});


//cerrar modal

const cerrar = document.getElementById('cerrar-form');

cerrar.addEventListener('click', () => {

    modal.style.display = 'none';

});
