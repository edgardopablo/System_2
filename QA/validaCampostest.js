function validarTest(){
    var usuario,nombre,rut,password,gerencia;
    usuario=document.getElementById('id_admin').value;
    nombre=document.getElementById('nombre').value;
    rut=document.getElementById('rut').value;
    password=document.getElementById('pass').value;
    gerencia=document.getElementById('gerencia').value;
    
   
    if(usuario==='' || nombre==='' || rut==='' || password==='' || gerencia===''  ){
         alert ("todos los campos son obligatorios");
        return false;
    }
    else if(usuario.length>3)
    {
         alert ("largo de usario es muy largo");
            return false;  
    }
    
    else if(nombre.length>30)
    {
         alert ("largo de nombre es muy largo");
            return false;  
    }
    else if (/^([0-9])*$/.test(nombre)){
        alert("El Usuario " + usuario + " no puede ser numerico");
        document.getElementById("nombre").focus();
        document.getElementById("nombre").style.borderColor="red";
        return false;
    }
    
    else if (isNaN(rut)){
        alert ("rut sin guion");
        document.getElementById("rut").focus();
        document.getElementById("rut").style.borderColor="red";
        return false;
    }
    
    else if (isNaN(password)){
        alert ("Contrasena solo debe tener numeros");
        document.getElementById("pass").focus();
        document.getElementById("pass").style.borderColor="red";
        return false;
    }    
    
    else{
        return true;
    }
    
    
}
