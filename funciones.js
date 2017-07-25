// Reloj del sistema
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
        h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    }
    ;  // add zero in front of numbers < 10
    return i;
}

// Imprimir
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}

function validarClave() {
    if (document.getElementById("clave").value == 1234){
        var botonCargar = document.getElementById("cargar");
        botonCargar.disabled = false;
        botonCargar.style.cursor = "pointer";
        botonCargar.style.background = "#0661d0";
    } else {
        alert("Error Contraseña");
    }
}

function validarRegistro() {
    if (document.getElementById('selectid').value == "Administrador")
        show();
    else if (document.getElementById('selectid').value == "Estandar")
        hide();
}

function show() {
    if (document.getElementById('benefits').style.display == 'none') {
        var botonCargar = document.getElementById("cargar");
        botonCargar.disabled = true;
        botonCargar.style.cursor = "default";
        botonCargar.style.background = "#CCC";
        document.getElementById('benefits').style.display = 'block';
    }
    return false;
}
function hide() {
    if (document.getElementById('benefits').style.display == 'block') {
        var botonCargar = document.getElementById("cargar");
        botonCargar.disabled = false;
        botonCargar.style.cursor = "pointer";
        botonCargar.style.background = "#0661d0";
        document.getElementById('benefits').style.display = 'none';
    }
    return false;
}