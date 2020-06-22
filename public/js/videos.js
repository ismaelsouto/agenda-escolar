function mostrarOcultar(id) {
    var elemento = document.getElementById(id);

    if (!elemento) {
        return true;
    }

    if (elemento.hasAttribute("hidden")) {
        elemento.removeAttribute("hidden");
    } else {
        elemento.setAttribute("hidden", true);
    };
    return true;
};

function reiniciarVideo(id) {
    document.getElementById(id).load();
}
