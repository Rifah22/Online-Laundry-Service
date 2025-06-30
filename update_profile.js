
function check_fullname(){
    var fullname = document.getElementById('f_name').value;
    var fullname_regex = /^[a-zA-Z ]{3,25}$/;
    if(fullname_regex.test(fullname)){
        document.getElementById('fullname_error').innerHTML = "Name is valid";
        document.getElementById('fullname_error').style.color = "green";
        document.getElementById('fullname_error').style.fontSize = "12px";
        document.getElementById('fullname_error').style.marginTop = "-10px";
        return true;
    }
    else{
        document.getElementById('fullname_error').innerHTML = "Name is not valid";
        document.getElementById('fullname_error').style.color='red';
        document.getElementById('fullname_error').style.fontSize = "12px";
        document.getElementById('fullname_error').style.marginTop = "-10px";
        return false;
    }
}

function check_email(){
    var email = document.getElementById('mail').value;
    var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(email_regex.test(email)){
        document.getElementById('email_error').innerHTML = "Email is valid";
        document.getElementById('email_error').style.color = "green";
        document.getElementById('email_error').style.fontSize = "12px";
        document.getElementById('email_error').style.marginTop = "-10px";
        return true;
    }
    else{
        document.getElementById('email_error').innerHTML = "Email is not valid";
        document.getElementById('email_error').style.color = "red";
        document.getElementById('email_error').style.fontSize = "12px";
        document.getElementById('email_error').style.marginTop = "-10px";
        return false;
    }
}

function check_phone(){
    var phone = document.getElementById('phn_number').value;
    var phone_regex = /^[0-9]{11}$/;
    if(phone_regex.test(phone)){
        document.getElementById('phone_error').innerHTML = "Phone is valid";
        document.getElementById('phone_error').style.color = "green";
        document.getElementById('phone_error').style.fontSize = "12px";
        document.getElementById('phone_error').style.marginTop = "-10px";
        return true;
    }
    else{
        document.getElementById('phone_error').innerHTML = "Phone is not valid";
        document.getElementById('phone_error').style.color = "red";
        document.getElementById('phone_error').style.fontSize = "12px";
        document.getElementById('phone_error').style.marginTop = "-10px";
        return false;
    }
}

function check_birthday(){
    var birthday = document.getElementById('age').value;
    var today = new Date();
    var birthdate = new Date(birthday);
    if(birthday == ""){
        document.getElementById('birthday_error').innerHTML = "Birthday is not valid";
        document.getElementById('birthday_error').style.color = "red";
        document.getElementById('birthday_error').style.fontSize = "12px";
        document.getElementById('birthday_error').style.marginTop = "-10px";
        return false;
    }
    else if(birthdate >= today){
        document.getElementById('birthday_error').innerHTML = "Birthday is not valid";
        document.getElementById('birthday_error').style.color = "red";
        document.getElementById('birthday_error').style.fontSize = "12px";
        document.getElementById('birthday_error').style.marginTop = "-10px";
        return false;
    }
    else{
        document.getElementById('birthday_error').innerHTML = "Birthday is valid";
        document.getElementById('birthday_error').style.color = "green";
        document.getElementById('birthday_error').style.fontSize = "12px";
        document.getElementById('birthday_error').style.marginTop = "-10px";
        return true;
    }

}

function check_address(){
    var address = document.getElementById('c_address').value;
    if(address == ""){
        document.getElementById('address_error').innerHTML = "Address is not valid";
        document.getElementById('address_error').style.color = "red";
        document.getElementById('address_error').style.fontSize = "12px";
        document.getElementById('address_error').style.marginTop = "1px";
        return false;
    }
    else{
        document.getElementById('address_error').innerHTML = "Address is valid";
        document.getElementById('address_error').style.color = "green";  
        document.getElementById('address_error').style.fontSize = "12px";
        document.getElementById('address_error').style.marginTop = "1px";
        return true;
    }
}



function form_check(){
    if(check_fullname() == true && check_email() == true && check_phone() == true && check_birthday() == true 
    && check_address() == true)
    {
        console.log('success');
        document.getElementById("errorform").innerHTML="All fields are ok";
        document.getElementById("errorform").style.color="green";
        return true;
    }
    else
    {
        document.getElementById("errorform").innerHTML="All filed are required";
        document.getElementById("errorform").style.color="red";
        return false;
    }
}