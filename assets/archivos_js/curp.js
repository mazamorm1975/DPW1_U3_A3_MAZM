


function setearMensaje() {

    var inicialApellidoPaterno = document.getElementById("vocalApellidoPaterno").value;
    const inicialApellidoPat = new String(inicialApellidoPaterno);
      
    var vocalApellidoPaterno = document.getElementById("vocalApellidoPaterno").value;
    const vocalApellidoPat = encontrarPrimerVocal(vocalApellidoPaterno);
    
    var inicialApellidoMaterno = document.getElementById("vocalApellidoMaterno").value;
    const inicialApellidoMat = new String(inicialApellidoMaterno)

    var inicialNombre = document.getElementById("nombre").value;
    const inicialN = new String(inicialNombre);

    var anioNac = document.getElementById("fechaNac").value;
    const fechaNac = new String(anioNac);

    var mesNac = document.getElementById("fechaNac").value;
    const mesNacimiento = new String(mesNac);

    var diaNac = document.getElementById("fechaNac").value;
    const diaNacimiento = new String(diaNac);

    var entidadFederativa = document.getElementById("entFed").value;
    const entidadFed = new String(entidadFederativa);

    var primerConsonante = document.getElementById("vocalApellidoPaterno").value;
    const primerConsCurp = encontrarPrimerConsonante(primerConsonante);

    var primerConsonanteApeMat = document.getElementById("vocalApellidoMaterno").value;
    const primerConsApeMat = encontrarPrimerConsonante(primerConsonanteApeMat);

    var primerConsonanteNombreP = document.getElementById("nombre").value;
    const primerConsNombreP = encontrarPrimerConsonante(primerConsonanteNombreP);

    var sexo = document.getElementById("sexo").value;
    const genero = new String(sexo);

    
    document.getElementById("miInput").value = inicialApellidoPat.substring(0, 1).toUpperCase()
                                      +vocalApellidoPat.toUpperCase()
                                      +inicialApellidoMat.substring(0,1).toUpperCase()
                                      +inicialN.substring(0,1).toUpperCase()
                                      +fechaNac.substring(2,4)
                                      +mesNacimiento.substring(5,7)
                                      +diaNacimiento.substring(8)
                                      +genero.toUpperCase()
                                      +entidadFed.toUpperCase()
                                      +primerConsCurp.toUpperCase()
                                      +primerConsApeMat.toUpperCase()
                                      +primerConsNombreP.toUpperCase();

}

function encontrarPrimerVocal(cadena) {
    var contadorVocales = 0;
    var segundaVocal = '';
    
    for (var i = 1; i < cadena.length; i++) {
        var letra = cadena[i].toLowerCase();
        if (letra === 'a' || letra === 'e' || letra === 'i' || letra === 'o' || letra === 'u') {
            contadorVocales++;
            if (contadorVocales === 1) {
                segundaVocal = letra;
                break; // Detenemos el bucle una vez que encontramos la segunda vocal
            }
        }
    }
    
    return segundaVocal;
}

//funcion para encontrar la primer consonante del primer apellido
function encontrarPrimerConsonante(cadena) {
    var contadorConsonantes = 0;
    var primerConsonante = '';
    
    for (var i = 1; i < cadena.length; i++) {
        var letra = cadena[i].toLowerCase();
        if (letra === 'b' || 
            letra === 'c' ||
            letra === 'd' || 
            letra === 'f' ||
            letra === 'g' || 
            letra === 'h' ||
            letra === 'j' || 
            letra === 'k' ||
            letra === 'l' || 
            letra === 'm' ||
            letra === 'n' || 
            letra === 'p' ||
            letra === 'q' || 
            letra === 'r' ||
            letra === 's' || 
            letra === 't' ||
            letra === 'v' || 
            letra === 'w' ||
            letra === 'x' || 
            letra === 'y' ||
            letra === 'z' ) {
            contadorConsonantes++;
            if (contadorConsonantes === 1) {
                primerConsonante = letra;
                break; // Detenemos el bucle una vez que encontramos la segunda vocal
            }
        }
    }
    
    return primerConsonante;
}



