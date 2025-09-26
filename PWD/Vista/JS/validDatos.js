const form = document.getElementById('formulario');

form.addEventListener('submit', function(event) {
    event.preventDefault();
    let valido = true;

    const nombre = document.getElementById('nombre');
    const apellido = document.getElementById('apellido');
    const telefono = document.getElementById('telefono');
    const domicilio = document.getElementById('domicilio');
    const fechaNac = document.getElementById('fechaNac');
    const dni = form.querySelector('input[name="dni"]').value.trim();

    // Resetear clases
    [nombre, apellido, telefono, domicilio, fechaNac].forEach(input => {
        input.classList.remove('is-invalid', 'is-valid');
    });

    const letrasRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;

    if (!/^\d{7,8}$/.test(dni)) valido = false;

    if (!letrasRegex.test(nombre.value) || nombre.value === '') {
        nombre.classList.add('is-invalid');
        valido = false;
    } else { nombre.classList.add('is-valid'); }

    if (!letrasRegex.test(apellido.value) || apellido.value === '') {
        apellido.classList.add('is-invalid');
        valido = false;
    } else { apellido.classList.add('is-valid'); }

    if (!/^[0-9\-]+$/.test(telefono.value) || telefono.value === '') {
        telefono.classList.add('is-invalid');
        valido = false;
    } else { telefono.classList.add('is-valid'); }

    if (domicilio.value === '') {
        domicilio.classList.add('is-invalid');
        valido = false;
    } else { domicilio.classList.add('is-valid'); }

    if (fechaNac.value === '') {
        fechaNac.classList.add('is-invalid');
        valido = false;
    } else { fechaNac.classList.add('is-valid'); }

    if (valido) form.submit();
});