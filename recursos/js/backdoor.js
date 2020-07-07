// Bloqueo de regreso de pagina
if (history.forward(1)) {
    history.replace(history.forward(1));
}