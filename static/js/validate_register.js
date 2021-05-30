function RegisterValidate() {
    let email=document.getElementById("emailsing").nodeValue;
    let password=document.getElementById("passwordsing").nodeValue;
    let rol=document.getElementById("rolsing").nodeValue;
    if (email=="" || password=="" || rol=="") {
        alert("Debe llenar todos los campos");
        return false
    }
    return true;
}