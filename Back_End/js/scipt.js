function validateform(){
    var username       = document.myform.username.value;
    var prenom         = document.myform.prenom.value;
    var x              = document.myform.email.value;  
    var firstPassword  = document.myform.password.value;
    var secondPassword = document.myform.password2.value;


    if(!(/^[a-z]{3,}$/gi.test(username))){
        document.getElementById("nom").setAttribute("style","display:bloc;color:red");  
        return false;
    }else if(!(/^[a-z]{3,}$/gi.test(prenom))){
        document.getElementById("prenom").setAttribute("style","display:block;color:red");
        return false;
    }else if(!(/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/gi.test(x))){ 
        document.getElementById("mail").setAttribute("style","display:block;color:red");  
        return false;  
    }else if(firstPassword.length < 8){
        document.getElementById("password").setAttribute("style","display:block;color:red");
        return false;
    }else if(firstPassword == secondPassword){
        return true;
    }else if(!(firstPassword == secondPassword)){
        document.getElementById("password").setAttribute("style","display:block;color:red");
        return false;  
    }    
}