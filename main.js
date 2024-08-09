$('#fecha').on('change', run_timer);

function run_timer() {
    var fecha = $('#fecha').val();
    var limite = new Date(fecha).getTime();
    var ahora = new Date().getTime();
    var restante = limite - ahora;
    var dias = Math.floor(restante / (1000 * 60 * 60 * 24));
    var horas = Math.floor((restante % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutos = Math.floor((restante % (1000 * 60 * 60)) / (1000 * 60));
    var segundos = Math.floor((restante % (1000 * 60)) / 1000);
    var texto = '';

    // Si el tiempo expiró
    if (restante < 0) {
        $('.wrapper_timer').html('<div class="alert alert-danger text-center">El tiempo ha expirado.</div>');
        return;        
    }

    // Crear el texto a mostrar
    if (dias > 0) {
        texto += dias + ' días, ';        
    }

    if (horas > 0) {
        texto += horas + ' horas, ';
    }

    if (minutos > 0) {
        texto += minutos + ' minutos, ';
    }

    if (segundos > 0) {
        texto += segundos + ' segundos, ';
    }

    // Mostrar el texto en nuestro wrapper
    $('.wrapper_timer').html(texto);
    setTimeout(run_timer, 1000);
}
