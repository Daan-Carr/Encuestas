function Mostrar() {
    document.getElementById("pass").type = "text";
    document.getElementById("pass2").type = "text";
}

function Ocultar() {
    document.getElementById("pass").type = "password";
    document.getElementById("pass2").type = "password";
}

function Mostrar_ocultar() {
    var caja1 = document.getElementById("pass");
    var caja2 = document.getElementById("pass2");
    if (caja1.type == "password" && caja2.type == "password") {
        Mostrar();
        document.getElementById("boton").value = "Ocultar Contraseña";
    } else {
        Ocultar();
        document.getElementById("boton").value = "Mostrar Contraseña";
    }
}