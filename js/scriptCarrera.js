var carrera= document.getElementById("carrera");
var duracion= document.getElementById("duracion");
var nResolucion= document.getElementById("nResolucion");
var codigoC= document.getElementById("codigoC");
var caducidad= document.getElementById("caducidad");
var aResolucion= document.getElementById("aResol"); 
var fechaAlta= document.getElementById("fechaAlta"); 
var materias= document.getElementById("materias");
var newUserForm= document.getElementById("bodyprincipal");
var btnAgregarM= document.getElementById("btnAgregar");
var selectYearM= document.getElementById("selectAñoM");
var materias1= document.getElementById("materias1");
var materias2= document.getElementById("materias2");
var materias3= document.getElementById("materias3");
var btnCarrera= document.getElementById("btnCarrera");





/* newUserForm.addEventListener("click", (e) => {
    e.preventDefault();
  });
 */

var materiasM={
    primer:[],
    segundo:[],
    tercero:[],
}

const handleClick=((e)=>{
    var inputYearM= selectYearM.value;
    return inputYearM;
    });
    

btnAgregarM.addEventListener('click',(event)=>{
    let selecA= handleClick();
    let materiaA=materias.value;
    if(selecA == 1){
        materiasM.primer.push(materiaA);
        console.log(materiasM.primer);
        let materiaPush = document.createElement("p");
        materiaPush.innerHTML = materiaA;
        materias1.appendChild(materiaPush);
    }else{
        if(selecA == 2){
            materiasM.segundo.push(materiaA);
            console.log(materiasM.segundo);
            let materiaPush = document.createElement("p");
            materiaPush.innerHTML = materiaA;
            materias2.appendChild(materiaPush);
        }else{
            if(selecA == 3){
                materiasM.tercero.push(materiaA);
                console.log(materiasM.tercero);
                let materiaPush = document.createElement("p");
                materiaPush.innerHTML = materiaA;
                materias3.appendChild(materiaPush);
            }
        }
    }
});


carrera.addEventListener('keyup',(event)=>{
    var inputCarrera= event.path[0].value;
    document.querySelector('.viewCarrera').innerHTML=inputCarrera;
});

duracion.addEventListener('change',(event)=>{
    var inputDuracion= event.path[0].value;
    document.querySelector('.viewDuracion').innerHTML=inputDuracion;
});

nResolucion.addEventListener('keyup',(event)=>{
    var inputNResolucion= event.path[0].value;
    document.querySelector('.viewnResolucion').innerHTML=inputNResolucion;
});

codigoC.addEventListener('keyup',(event)=>{
    var inputCodigo= event.path[0].value;
    document.querySelector('.viewCodigo').innerHTML=inputCodigo;
});

caducidad.addEventListener('change',(event)=>{
    var inputCaducidad= event.path[0].value;
    document.querySelector('.viewCaducidad').innerHTML=inputCaducidad;
});

aResolucion.addEventListener('change',(event)=>{
    var inputAResol= event.path[0].value;
    document.querySelector('.viewaResol').innerHTML=inputAResol;
});

fechaAlta.addEventListener('change',(event)=>{
    var inputFechaAlta= event.path[0].value;
    document.querySelector('.viewfechaAlta').innerHTML=inputFechaAlta;
});

btnCarrera.addEventListener('click',(event)=>{
  
    if(carrera.value.length && nResolucion.value.length && codigoC.value.length){
       swal("Creacion Exitosa","La carrera ah sido creada","success"); 
       /* swal({
        title:"Creacion Exitosa",
        text:"La carrera ah sido creada",
        icon:"success",
        timer:3000,
       }) */
    }else{
        swal("Ha ocurrido un error", "Debe completar todos los campos","warning"); 
    }
    
});
