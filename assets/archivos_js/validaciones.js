
function validarFormulariosAereo() {

    var numero_serie = document.getElementById('numero_serie');
    //const num_serial = new String(numero_serie);
    var text = numero_serie.value;

    var count = text.length;




    var modelo = document.getElementById('modelo').value;
    const model = new String(modelo);


    var capacidad_asientos = document.getElementById('capacidad_asientos').value;


    var empresa_propietaria = document.getElementById('empresa_propietaria').value;



    if (count != 10) {
        alert("El numero de serie es de 10 caracteres");
        numero_serie.value = "";
    }


    if (model.length === 0) {
        alert("El campo modelo esta vacio");
    }

    if (capacidad_asientos < 1 || capacidad_asientos > 80 || capacidad_asientos === 0) {
        alert("La capacidad de asientos no debe exceder los 80 asientos, ni tampoco puede estar vacio");
    }

    if (empresa_propietaria.length === 0) {
        alert("El campo empresa propietaria no puede estar en vacio.");
    }

}

function validarFormularioTerrestre() {

    var placa = document.getElementById('placa');
    var valor = placa.value;
    var valorACadena = valor.toString();
    var cantidadDigitos = valorACadena.length;

    if (cantidadDigitos != 6) {

        alert("la cantidad de digitos debe de ser de 6. ");
        placa.value = "";

    }

}

function validarEpocaSugerida() {
    var epoca_sugerida = document.getElementById('epoca_sugerida').value;
    const cadena1 = epoca_sugerida.toString();

    var primavera = 'primavera';
    var verano = 'verano';
    var autum = "otoño";
    var invierno = "invierno";

    var actividades_sugeridas = document.getElementById('actividades_populares').value;
    const cadena2 = actividades_sugeridas.toString();

    var paseo_en_lancha = 'paseo en lancha';
    var tour_por_la_ciudad = 'tour por la ciudad';
    var recorrido_cto_historico = 'Recorrido del centro histórico';
    var visita_museos = 'visita a museos';
    var visita_usuarios = 'visita a usuarios';



    if (cadena1 === primavera || cadena1 === verano || cadena1 === autum || cadena1 === invierno) {

    } else {
        alert('No se a agregado ninguna estación del año valida:\n primavera, verano, otoño, o invierno');
        var reseteoCampo = document.getElementById('epoca_sugerida');
        reseteoCampo.value = "";
    }


    if (cadena2 === paseo_en_lancha || cadena2 === tour_por_la_ciudad || cadena2 === recorrido_cto_historico || cadena2 === visita_museos || cadena2 === visita_usuarios) {

    } else {
        alert('No se a agregado ninguna actividad de la region:\n Paseo en lancha \n tour por la ciudad \n Recorrido por el centro historio \n Visita a museos \n Visita a acuarios');
        var reseteoCampoActividades = document.getElementById('actividades_populares');
        reseteoCampoActividades.value = "";
    }

}

