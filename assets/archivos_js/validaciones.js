
function validarFormulariosAereo() {

    var numero_serie = document.getElementById('numero_serie').value;
    const num_serie = new String(numero_serie);

    var modelo = document.getElementById('modelo').value;
    const model = new String(modelo);


    var capacidad_asientos = document.getElementById('capacidad_asientos').value;
    

    var empresa_propietaria = document.getElementById('empresa_propietaria').value;
    const emp_propietaria = new String(empresa_propietaria);

    
    if (num_serie.length < 10 || num_serie.length > 10) {
        alert("El numero de serie es de 10 caracteres");
    } 
    
    if(model.length === 0){
        alert("El campo modelo esta vacio");
    } 
    
    if(capacidad_asientos < 1 || capacidad_asientos  > 80 ||  capacidad_asientos === 0){
        alert("La capacidad de asientos no debe exceder los 80 asientos, ni tampoco puede estar vacio");   
    } 
    
    if(emp_propietaria.length === 0){
        alert("El campo empresa propietaria no puede ir en vacio");
    }
    
}

function validarFormularioTerrestre() {
    var placa = document.getElementById('placa').value;

        if(placa.length == 6){
            if(!Number.isInteger(placa)){
                alert("El valor ingresado no es numerico. ");
            }
        } else {
            alert("la cantidad de digitos debe de ser de 6 digitos. ");
        }    

}