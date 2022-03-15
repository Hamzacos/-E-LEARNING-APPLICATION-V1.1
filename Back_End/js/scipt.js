function validateform(){
    var username       = document.myform.username.value;
    var prenom         = document.myform.prenom.value;
    var x              = document.myform.email.value;  
    var atposition     = x.indexOf("@");  
    var dotposition    = x.lastIndexOf(".");  
    var firstPassword  = document.myform.password.value;
    var secondPassword = document.myform.password2.value;
    
    if(username == null || username == ""){
        alert("Merci de verefier le champs du name");
        return false;
    }else if(prenom == null || prenom == ""){
        alert("Merci de verfier le champ du Prenom");
        return false;
    }else if(atposition < 1 || dotposition < atposition+2 || dotposition+2 >= x.length){
        alert("Please enter a valid e-mail address ");  
        return false;  
    }else if(firstPassword.length < 8){
        alert("password must be at least 8 chartere");
        return false;
    }else if(firstPassword == secondPassword){
        return true;
    }else if(!(firstPassword == secondPassword)){
        alert("password must be same!");  
        return false;  
    }    
}