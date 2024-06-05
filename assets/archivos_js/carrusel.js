


//Esta función oculta el texto al momento que inicia la carga de la pagina principal (index.html)
function ocultarTexto() {
    document.getElementById('texto1').style.display = 'none';
    document.getElementById('texto2').style.display = 'none';
    document.getElementById('texto3').style.display = 'none';
    document.getElementById('texto4').style.display = 'none';
    document.getElementById('texto5').style.display = 'none';
   
}


/*
*  A partir de aqui se codifican las funciones para visualizar el texto descriptivo por imagen
*  y tambien se ocultan automaticamente cuando el usuario retira el mouse del componente grafico
*/
function visualizar1() {
    document.getElementById('texto1').style.display = 'block';
}

function ocultar1() {
    document.getElementById('texto1').style.display = 'none';
}


function visualizar2() {
    document.getElementById('texto2').style.display = 'block';
}

function ocultar2() {
    document.getElementById('texto2').style.display = 'none';
}


function visualizar3() {
    document.getElementById('texto3').style.display = 'block';
}

function ocultar3() {
    document.getElementById('texto3').style.display = 'none';
}


function visualizar4() {
    document.getElementById('texto4').style.display = 'block';
}

function ocultar4() {
    document.getElementById('texto4').style.display = 'none';
}


function visualizar5() {
    document.getElementById('texto5').style.display = 'block';
}

function ocultar5() {
    document.getElementById('texto5').style.display = 'none';
}

//Esta función aumenta el zoom de la imagen seleccionada por el usuario
function redimensionarLosCabos() {
    var imagen = document.getElementById('mi-imagen');
    imagen.style.width = '300px'; // Ancho al que deseas redimensionar la imagen
    imagen.style.height = '300px'; // Ancho al que deseas redimensionar la imagen
    
}

//Esta función setea el zoom de la imagen seleccionada por el usuario a su tamaño original
function volverTamanoOriginalLosCabos() {
    var imagen = document.getElementById('mi-imagen');
    imagen.style.width = '200px'; // Ancho al que deseas redimensionar la imagen
    imagen.style.height = '200px'; // Ancho al que deseas redimensionar la imagen
    
}


function redimensionarFrancia() {
    var imagen = document.getElementById('mi-imagen2');
    imagen.style.width = '300px'; // Ancho al que deseas redimensionar la imagen
    imagen.style.height = '300px'; // Ancho al que deseas redimensionar la imagen
    
}

function volverTamanoOriginalFrancia() {
    var imagen = document.getElementById('mi-imagen2');
    imagen.style.width = '200px'; // Ancho al que deseas redimensionar la imagen
    imagen.style.height = '200px'; // Ancho al que deseas redimensionar la imagen
    
}

function redimensionarJapon() {
    var imagen = document.getElementById('mi-imagen3');
    imagen.style.width = '300px'; // Ancho al que deseas redimensionar la imagen
    imagen.style.height = '300px'; // Ancho al que deseas redimensionar la imagen
    
}

function volverTamanoOriginalJapon() {
    var imagen = document.getElementById('mi-imagen3');
    imagen.style.width = '200px'; // Ancho al que deseas redimensionar la imagen
    imagen.style.height = '200px'; // Ancho al que deseas redimensionar la imagen
    
}


function redimensionarVeracruz() {
    var imagen = document.getElementById('mi-imagen4');
    imagen.style.width = '300px'; // Ancho al que deseas redimensionar la imagen
    imagen.style.height = '300px'; // Ancho al que deseas redimensionar la imagen
    
}

function volverTamanoOriginalVeracruz() {
    var imagen = document.getElementById('mi-imagen4');
    imagen.style.width = '200px'; // Ancho al que deseas redimensionar la imagen
    imagen.style.height = '200px'; // Ancho al que deseas redimensionar la imagen
    
}


function redimensionarChihuahua() {
    var imagen = document.getElementById('mi-imagen5');
    imagen.style.width = '300px'; // Ancho al que deseas redimensionar la imagen
    imagen.style.height = '300px'; // Ancho al que deseas redimensionar la imagen
    
}

function volverTamanoOriginalChihuahua() {
    var imagen = document.getElementById('mi-imagen5');
    imagen.style.width = '200px'; // Ancho al que deseas redimensionar la imagen
    imagen.style.height = '200px'; // Ancho al que deseas redimensionar la imagen
    
}

