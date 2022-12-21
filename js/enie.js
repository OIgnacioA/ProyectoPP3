

flag = true; 
flag1 = true; 
flag2= true;

function AbrirCerrar_Cont(val){

    var n = val;
   
    if(flag== true){

        $(".overlay"+n).fadeIn("slow");
        flag = false; 
    }else {
       
        $(".overlay"+n).fadeOut("slow");
        flag = true; 
    }

}




function Agregar(val) {

    var n = val;
    var datos = [];
    var select = document.querySelector('.options'+n).value;
    var eltexto = document.querySelector('.areaTexto'+n);
    var fill = eltexto.value;
    


    datos.push(fill);
    datos.push(select +"\n");
    eltexto.value = datos;
}