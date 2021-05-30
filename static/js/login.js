function validateLogin() {
    let email=document.getElementById("emailsing").value;
    let password=document.getElementById("passwordsing").value;
    if (email == "" || password =="") {
        alert("Debe llenar todos los campos");
        return false;
    }
    else if(password < 8){
        alert("La contraseña debe tener entre 8 y 25 caracterers");
        return false;
    }
    return true;
}