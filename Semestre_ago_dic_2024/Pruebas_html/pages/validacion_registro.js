function validacionNumero(componente){
console.log("validacion");ç
let caracter= document.getElementById(`caja_num_control`).value;
caracter=componente.value;
console.log(caracter);

console.log(isNaN(caracter));
if(isNaN(caracter)){
    componente.value =componente.value+"";
}else{
    componente.value=componente.value+caracter;
}
}
function validacionNumero2(e){
    let code = (e.which) ? e.which : e.keyCode;
    if (code > 31 && (code < 48 || code > 57)) {
        e.preventDefault();
    }
}

function validacionformulario(){
    alert("validacion");
    let validado= true;
    /*num control
    no vacio
    no espacios
    no letras
    no caracteres especiales
    solo 8 caracteres
    */
    /*nombre
    no vacio
    no numeros
    no caracteres especiales
    */
   //edad
   let seleccionEdad = document.getElementById('select_edad').selectedindex;
if(seleccionEdad==0){
    validado=false;
    console.log("falso");
}
/*validacion del input number para el semestre solo numeros del 1 al 12*/
return validado;
}