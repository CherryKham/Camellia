function validateForm() {
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
    var password=document.forms["myForm"]["password"].value;
    var conpass=document.forms["myForm"]["conpass"].value


    if (name == "") {
        alert("Please enter your name.");
        return false;

    }

    if (email == "") {
        alert("Please enter your email.");
        return false;
    }
    else{
        var validateformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(!validateformat.test(email)){
            alert("Please Enter a valid email address");
            return false;
        }
    }
    
    if (password == "") {
        alert("Please define your password");
        return false;
    }
    if (conpass == "") {
        alert("Please confirm your password");
        return false;
    }
    

    return true;
}

function gotoorder() {
    window.location.href = "Fooddetail.php";
}