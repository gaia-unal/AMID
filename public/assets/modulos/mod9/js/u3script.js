var bien = 0,mal = 0, punt;
var nota;
var f1,f2,f3,f4,f5;

f1=f2=f3=f4=f5=true;

function validar(num) {
    
    switch (num) {
        case 1:
            if (f1){
                bien++;
                f1=false;
            }else{
                bien--;
                f1=true;
            }
        break;
        case 2:
            if (f2){
                mal++;
                f2=false;
            }else{
                mal--;
                f2=true;
            }
        break;
        case 3:
            if (f3){
                bien++;
                f3=false;
            }else{
                bien--;
                f3=true;
            }
        break;
        case 4:
            if (f4){
                bien++;
                f4=false;
            }else{
                bien--;
                f4=true;
            }
        break;
        case 5:
            if (f5){
                mal++;
                f5=false;
            }else{
                mal--;
                f5=true;
            }
        break;
    }
    
    calculo();
}


function calculo(){
    nota=(bien-mal)*5/3;

    if(nota<=0){
        nota=1;
    }
    // console.log(nota);

    var inp = document.getElementById('preg');
    inp.value = nota.toFixed(2);
}
