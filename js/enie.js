

flag = true; 
flag1 = true; 
flag2= true;

function AbrirCerrar_Cont(val){

    var n = val;
    console.log("------>"+ n);
    if(flag== true){

        $(".overlay"+n).fadeIn("slow");
        flag = false; 
    }else {
       
        $(".overlay"+n).fadeOut("slow");
        flag = true; 
    }

}
