function validar(){
    var idempleado,rut,residuo,cod_cargo,nombre,paterno,materno,vigente;
    idempleado = document.getElementById("idempleado").value;
    rut = document.getElementById("rut").value;
    residuo = document.getElementById("residuo").value;
    cod_cargo = document.getElementById("cod_cargo").value;
    nombre = document.getElementById("nombre").value;
    paterno = document.getElementById("paterno").value;
    materno = document.getElementById("materno").value;
    vigente = document.getElementById("vigente").value;
    
    if(idempleado ===""|| rut ===""||residuo ===""||cod_cargo ===""||nombre===""||paterno===""||materno===""||vigente===""){
    alert ("todos los campos son obligatorios");
    return false;
    }
    else if (cod_cargo.length>30){
        alert ("codigo demasiado largo (20)");
        document.getElementById("cod_cargo").focus();
        document.getElementById("cod_cargo").style.borderColor="red";
       return false; 
    }
    else if (nombre.length>20 ){
        alert ("Nombre demasiado largo (20)");
        document.getElementById("nombre").focus();
        document.getElementById("nombre").style.borderColor="red";
       return false; 
    }
    else if (paterno.length>20 ){
        alert ("Apellido Paterno campos demasiado largo (20)");
        document.getElementById("paterno").focus();
        document.getElementById("paterno").style.borderColor="red";
       return false; 
    }
     else if (materno.length>20 ){
        alert (" Apellido Materno campos demasiado largo (20)");
         document.getElementById("materno").focus();
        document.getElementById("materno").style.borderColor="red";
       return false; 
    }
    else if (isNaN(idempleado)){
         alert ("id empleado es un campo numerico");
        document.getElementById("idempleado").focus();
        document.getElementById("idempleado").style.borderColor="red";
    return false;
    }
    else if (isNaN(rut)){
         alert ("rut es un campo numerico");
        document.getElementById("rut").focus();
        document.getElementById("rut").style.borderColor="red";
    return false;
    }
    else if (isNaN(residuo)){
         alert ("digito es un campo numerico");
        document.getElementById("residuo").focus();
        document.getElementById("residuo").style.borderColor="red";
    return false;
    }
    else if (/^([0-9])*$/.test(cod_cargo) )
    {
        alert("El codigo de cargo " + cod_cargo + " no puede ser numerico");
        document.getElementById("cod_cargo").focus();
        document.getElementById("cod_cargo").style.borderColor="red";
        return false; 
    }
    /*else if (cod_cargo.length>20){
         alert ("cod_cargo debe contener solo letras");
    return false;
    }*/
    else if (/^([0-9])*$/.test(nombre))
    {
        alert("El Nombre " + nombre + " no puede ser numerico");
        document.getElementById("nombre").focus();
        document.getElementById("nombre").style.borderColor="red";
        return false; 
    }
    /*else if (nombre.length>10){
         alert ("nombre es muy largo");
         return false;
    }*/
    
    else if (/^([0-9])*$/.test(paterno) )
    {
        alert("El Apellido Paterno  " + paterno + " no puede ser numerico");
        document.getElementById("paterno").focus();
        document.getElementById("paterno").style.borderColor="red";
        return false; 
    }
    /*else if (paterno.length>5){
        alert ("Apellido Paterno es muy largo");
        return false;
    }*/
       else if (/^([0-9])*$/.test(materno))
    {
        alert("El Apellido Materno " + materno + " no puede ser numerico");
        document.getElementById("materno").focus();
        document.getElementById("materno").style.borderColor="red";
        return false; 
    }
    
    /*else if (materno.length>5){
         alert ("Apellido Materno es muy largo");
        return false;
    }*/
    
    
}


function validarEliminaDos(){
    var rut;
    rut = document.getElementById("rut").value;
    
    if(rut ===""){
    alert ("todos los campos son obligatorios");
    return false;
    }
  
    else if (isNaN(rut)){
         alert ("rut es un campo numerico");
    return false;
    }
    
}