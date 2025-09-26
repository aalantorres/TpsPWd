function validarDni(dni){
    dni = dni.trim();
    return /^\d{7,8}$/.test(dni);
}

function validarPatente(patente){
    patente = patente.trim().toUpperCase();
    if(patente.length !== 6 && patente.length !== 7) return false;

    let letras = patente.slice(0,3);
    let numeros = (patente.length === 6) ? patente.slice(3,6) : patente.slice(4,7);

    const letrasRegex = /^[A-Z]+$/;
    const numerosRegex = /^[0-9]+$/;

    return letrasRegex.test(letras) && numerosRegex.test(numeros);
}

const form = document.getElementById('formulario');
const inputDni = document.getElementById('dni');
const inputPatente = document.getElementById('dominio');

form.addEventListener('submit', function(event){
    let valido = true;

    // Validar DNI
    if(!validarDni(inputDni.value)){
        inputDni.classList.add('is-invalid');
        inputDni.classList.remove('is-valid');
        valido = false;
    } else {
        inputDni.classList.remove('is-invalid');
        inputDni.classList.add('is-valid');
    }

    // Validar patente
    if(!validarPatente(inputPatente.value)){
        inputPatente.classList.add('is-invalid');
        inputPatente.classList.remove('is-valid');
        valido = false;
    } else {
        inputPatente.classList.remove('is-invalid');
        inputPatente.classList.add('is-valid');
    }

    if(!valido){
        event.preventDefault(); // Cancelar submit si algo no es válido
    }
});