function validarDni(dni){
    dni = dni.trim();
    return /^\d{7,8}$/.test(dni);
}

function validarPatente(patente){
    patente = patente.trim().toUpperCase();
    if(patente.length !== 6 && patente.length !== 7) return false;

    let letras = patente.slice(0,3);
    let numeros;
    if(patente.length == 6) {
        numeros = patente.slice(3,6);
    } else {
        numeros = patente.slice(4,7);
    }

    const letrasRegex = /^[A-Z]+$/;
    const numerosRegex = /^[0-9]+$/;

    return letrasRegex.test(letras) && numerosRegex.test(numeros);
}

document.getElementById('formulario').addEventListener('submit', function(event){
    const dni = document.getElementById('dni').value;
    const patente = document.getElementById('dominio').value;

    if(!validarDni(dni)){
        event.preventDefault();
        alert("DNI no válido. Debe tener 7 u 8 dígitos numéricos.");
        return;
    }

    if(!validarPatente(patente)){
        event.preventDefault();
        alert("Patente no válida. Debe ser AAA123 o AAA1234.");
        return;
    }
});

