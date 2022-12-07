function validateFormUsername() {
    const onlyText = /^[a-z]*$/;
    
    let textUsername    =   document.forms["registerForm"]["username"].value;
    let lengthUsername    =   document.forms["registerForm"]["username"].value.length;

    if (lengthUsername > 0){
        if(onlyText.test(textUsername)){;
            document.getElementById("username").style.borderColor="green";
            document.getElementById("phone").focus();
            document.getElementById("username-error").style.display="none";
            return true;    
        }else{
            document.getElementById("username-error").style.display="block";
            document.getElementById("username-error").innerHTML = "Username cannot be empty or contains numbers";
            document.getElementById("username").focus();
            document.getElementById("username").style.borderColor="red";
            return false; 
        }
    }else{
        document.getElementById("phone-error").style.display="block";
        document.getElementById("username-error").innerHTML = "Username cannot be empty or contains numbers";
        document.getElementById("username-error").style.borderColor="red";
        document.getElementById("username").focus();
        document.getElementById("username").style.borderColor="red";
        return false; 
    }
}
function validateFormPhone() {
    let lengthPhone = document.forms["registerForm"]["phone"].value.length;

    if (lengthPhone <= 10){
        document.getElementById("phone").style.borderColor="green";
        document.getElementById("email").focus();
        document.getElementById("phone-error").style.display="none";
        return true; 
    }else{
        document.getElementById("phone-error").style.display="block";
        document.getElementById("phone-error").innerHTML = "The phone cannot have more than 9 numbers";
        document.getElementById("phone").focus();
        document.getElementById("phone").style.borderColor="red";
        return false; 
    }
}

function validateFormEmail() {
    let value = document.getElementById('email').value;
    let apos = value.indexOf("@"); 
    let dotpos = value.lastIndexOf(".");
    let lastpos = value.length-1;
    if (apos < 1 || dotpos-apos < 2 || lastpos-dotpos > 3 || lastpos-dotpos < 2){
        document.getElementById("email-error").innerHTML = "Invalid Email Address";
        document.getElementById("email-error").style.display="block";
        return false;
    } else {
        document.getElementById("email").style.borderColor="green";
        document.getElementById("password").focus();
        document.getElementById("email-error").style.display="none";
        return true;
    }
}

function validateFormPassword() {
    
    const oneCapital = /[A-Z]/;
    const noneBlank = / /;
    const oneCharacter = /^\d*/;
    const checkPass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[*.-])[A-Za-z\d*.-]{6,15}[^'\s]/;

    let textPassword = document.forms["registerForm"]["password"].value;
    let lengthPassword = document.forms["registerForm"]["password"].value.length;

    //validate password length
    if (lengthPassword < 6){
        document.getElementById("length").style.borderColor="red";
        document.getElementById("length").style.color="red";
    } else {
        document.getElementById("length").style.borderColor="green";
        document.getElementById("length").style.color="green";
    }
    
    //validate password length
    if (oneCapital.test(textPassword)){
        document.getElementById("capital").style.borderColor="green";
        document.getElementById("capital").style.color="green";
    } else {
        document.getElementById("capital").style.borderColor="red";
        document.getElementById("capital").style.color="red";
    }

    //validate password length
    if (oneCharacter.test(textPassword)){
        document.getElementById("blank").style.borderColor="green";
        document.getElementById("blank").style.color="green";
    } else {
        document.getElementById("blank").style.borderColor="red";
        document.getElementById("blank").style.color="red";
    }
    
    //validate password length
    if (noneBlank.test(textPassword)){
        document.getElementById("blank").style.borderColor="red";
        document.getElementById("blank").style.color="red";
    } else {
        document.getElementById("blank").style.borderColor="green";
        document.getElementById("blank").style.color="green";
    }

    //validate password length
    if (checkPass.test(textPassword)){
        document.getElementById("character").style.borderColor="green";
        document.getElementById("character").style.color="green";
    } else {
        document.getElementById("character").style.borderColor="red";
        document.getElementById("character").style.color="red";
    }


}