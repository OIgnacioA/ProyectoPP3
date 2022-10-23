/*
function fechaActual () {

    var actual = new Date();
    var dd = actual.getDate();
    var mm = actual.getMonth() + 1;
    var yyyy = actual.getFullYear();
    
    if (dd < 10) {
       dd = '0' + dd;
    }
    
    if (mm < 10) {
       mm = '0' + mm;
    } 
        
    actual = yyyy + '-' + mm + '-' + dd;
    document.getElementById("fechaNac").setAttribute("max", actual);
}
*/

/*segun la opcion seleccionada en selector "documento" se habilita o no el ingreso de datos en el input*/
function verificarOpcion() { 
        
        if (document.getElementById ('selecDocumento').value == "Dni" || document.getElementById ('selecDocumento').value == "Pasaporte") {

            document.getElementById("documento").disabled=false;
            
        }else {
            document.getElementById("documento").disabled=true;
        }
}

function segunSeleccion(evt) { /*Si se selecciona como documento Dni --> solo se puede ingresar números*/

    if (document.getElementById ('selecDocumento').value == "Dni") {        

        if (window.event) {
            
            keynum= evt.keyCode;

        }else {
            keynum= evt.which;
        }

        if ( (keynum > 47  && keynum < 58) || keynum == 8 || keynum == 13) {
            
            return true;

        }else {
            return false;
        }
    }
}