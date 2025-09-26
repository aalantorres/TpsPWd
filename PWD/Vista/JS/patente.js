const formulario = document.getElementById('formulario');

formulario.addEventListener("submit", (evento) => {
    const inputPatente = document.getElementById('dominio');
    const patente = inputPatente.value.trim();

    let esValida = false;

    if (patente.length == 6 || patente.length == 7) {
        const letras = /^[a-zA-Z]+$/;
        const numeros = /^[0-9]+$/;

        const parte1 = patente.slice(0, 3);
        let parte2;

        if (patente.length == 6) {
            parte2 = patente.slice(3, 6);
        } else {
            parte2 = patente.slice(4, 7);
        }

        esValida = letras.test(parte1) && numeros.test(parte2);
    }

    if (!esValida) {
        evento.preventDefault();
        inputPatente.classList.add("is-invalid");
    } else {
        inputPatente.classList.remove("is-invalid");
        inputPatente.classList.add("is-valid");
    }
});