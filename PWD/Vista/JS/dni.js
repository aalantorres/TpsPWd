function validarDni(dni){
    dni = dni.trim();
    return /^\d{7,8}$/.test(dni); // 7 u 8 dígitos numéricos
}

const formulario = document.getElementById('formulario');
const inputDni = document.getElementById('dni');

formulario.addEventListener('submit', function(event){
    inputDni.classList.remove('is-invalid', 'is-valid');

    const dni = inputDni.value;

    if(!validarDni(dni)){
        event.preventDefault(); // cancela el submit
        inputDni.classList.add('is-invalid');
    } else {
        inputDni.classList.add('is-valid');
    }
});