function validarCampo(){
    var usuario,password;
    
    usuario=document.getElementById('usuario').value;
    password=document.getElementById('password').value;
    
   
    if(usuario==='' || password==='' ){
         alert ("todos los campos son obligatorios");
        return false;
    }
    else if(usuario.length>15)
    {
         alert ("largo de usario es muy largo");
            return false;  
    }
    else if (/^([0-9])*$/.test(usuario)){
        alert("El Usuario " + usuario + " no puede ser numerico");
        document.getElementById("usuario").focus();
        document.getElementById("usuario").style.borderColor="red";
        return false;
    }
    
    else if (isNaN(password)){
        alert ("Contrase単a solo debe tener numeros");
        document.getElementById("password").focus();
        document.getElementById("password").style.borderColor="red";
        return false;
    }
    
    
    else{
        return true;
    }
    
    
}
