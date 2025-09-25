
document.querySelector('form').addEventListener('submit', function (event) {
    const nombre = document.getElementById('nombre').value.trim();
    const apellido = document.getElementById('apellido').value.trim();
    const telefono = document.getElementById('telefono').value.trim();
    const dni = document.querySelector('input[name="dni"]').value.trim();
    const fechaNac = document.getElementById('fechaNac').value;

    if (!/^\d{7,8}$/.test(dni)) {
        event.preventDefault();
        alert("DNI inválido (7 u 8 dígitos).");
        return;
    }
    const letrasRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
    if (!letrasRegex.test(nombre) || nombre === '') {
        event.preventDefault();
        alert("Nombre inválido. Solo letras y espacios.");
        return;
    }
    if (!letrasRegex.test(apellido) || apellido === '') {
        event.preventDefault();
        alert("Apellido inválido. Solo letras y espacios.");
        return;
    }
    if (!/^[0-9\-]+$/.test(telefono) || telefono === '') {
        event.preventDefault();
        alert("Teléfono inválido. Solo se permiten números y guiones.");
        return;
    }
    if (fechaNac === '') {
        event.preventDefault();
        alert("Debe ingresar una fecha de nacimiento.");
        return;
    }
});