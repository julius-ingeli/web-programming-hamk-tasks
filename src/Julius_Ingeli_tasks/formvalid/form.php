<?php
$title = "form valid example";
include "../ex02/header.php";
?>
<form action="" method="post">
Name: <input type="text" id="name" name="fname" required minlength="3" maxlength="30"> <br>
<span id="nameError"></span> <br>
Email: <input type="email" id="email" name="email" required> <br>
<span id="emailError"></span> <br>
Password: <input type="password" id="passwd" name="passwd" required minlength="7" maxlength="30"> <br>
<span id="passwdError"></span> <br>
Confirm Password: <input type="password" id="cpasswd" name="cpasswd" required minlength="7" maxlength="30"> <br>
<span id="cpasswdError"></span> <br>
Age: <input type="number" id="age" name="age" min="18" max="400"> <br>
<span id="ageError"></span> <br>
<button type="submit" name="submit" id="submit">SUBMIT</button>
</form>

<script>
//func to valid name
function validateName(){
    const name =document.getElementById("name").value;
    const nameError =document.getElementById("nameError")
    if(name.length < 3 || name.length > 20){
        nameError.innerHTML = "NAME MUST BE <3:20> CHARACTERS LONG DUMBASS";
        return false;
    }
    else{
        nameError.innerHTML = "";
        return true;
    }
}

function validateEmail(){
    const email =document.getElementById("email").value;
    const emailError =document.getElementById("emailError");


    if(email === "" || !email.includes("@") ){
        emailError.innerHTML = "Your email is straight up bullshit my man."
        return false;
    }

    
    else{
        emailError.innerHTML = "";
        return true;
    }
}

function validatePass(){
    const passwd =document.getElementById("passwd").value;
    const cpasswd =document.getElementById("cpasswd").value;
    const passwdError =document.getElementById("passwdError");
    if(passwd.length < 6){
        passwdError.innerHTML = "Yo ass is getting hacked if u put this shit in.";
        return false;
    }
    else if (passwd != cpasswd){
        passwdError.innerHTML = "YO PASSWORD IS SUPPOSED TO SAME IN THE BOTH FIELDS YA DUMMY";
        return false;
    }
    else{
        passwdError.innerHTML = "";
        return true;
    }
}

function validateAge(){
    const age =document.getElementById("age").value;
    const ageError =document.getElementById("ageError");
    if(age < 18){
        ageError.innerHTML = "GET YOUR KINDERGARTEN ASS OUTTA HERE BOI";
        return false;
    }
    else if(age > 50){
        ageError.innerHTML = "GET YO ASS BACK TO THE ELDERLY HOME";
        return false;
    }

    else{
        ageError.innerHTML = "";
        return true;
    }
}

//event listener for valid

document.getElementById("name").addEventListener("input",validateName);
document.getElementById("email").addEventListener("input",validateEmail);
document.getElementById("passwd").addEventListener("input",validatePass);
document.getElementById("cpasswd").addEventListener("input",validatePass);
document.getElementById("age").addEventListener("input",validateAge);

</script>


<?php
include "../ex02/footer.php";
?>