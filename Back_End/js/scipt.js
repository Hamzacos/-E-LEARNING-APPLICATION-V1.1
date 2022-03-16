function validateform(){
    var username       = document.myform.username.value;
    var prenom         = document.myform.prenom.value;
    var x              = document.myform.email.value;  
    var atposition     = x.indexOf("@");  
    var dotposition    = x.lastIndexOf(".");  
    var firstPassword  = document.myform.password.value;
    var secondPassword = document.myform.password2.value;


    if(username == ""){
        document.getElementById("nom").setAttribute("style","display:bloc;color:red");  
        return false;
    }else if(prenom == ""){
        document.getElementById("prenom").setAttribute("style","display:block;color:red");
        return false;
    }else if(atposition < 1 || dotposition < atposition+2 || dotposition+2 >= x.length){
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