function validarDni(dni){
    dni = dni.trim();
    return /^\d{7,8}$/.test(dni); // 7 u 8 dígitos numéricos
}

document.getElementById('formulario').addEventListener('submit', function(event){
    const dni = document.getElementById('dni').value;

    if(!validarDni(dni)){
        event.preventDefault(); // cancela el submit
        alert("DNI no válido. Debe tener 7 u 8 dígitos numéricos.");
    }
});