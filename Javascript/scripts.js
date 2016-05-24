function date() {
    function transformDay(day) {
        switch (day) {
        case 0:
            return "Sunday";
        case 1:
            return "Monday";
        case 2:
            return "Tuesday";
        case 3:
            return "Wednesday";
        case 4:
            return "Thursday";
        case 5:
            return "Friday";
        case 6:
            return "Saturday";
        default:
            return "Error with day";
        }
    }
    function transformMonth(month) {
        switch (month) {
        case 0:
            return "January";
        case 1:
            return "February";
        case 2:
            return "March";
        case 3:
            return "April";
        case 4:
            return "May";
        case 5:
            return "June";
        case 6:
            return "July";
        case 7:
            return "August";
        case 8:
            return "September";
        case 9:
            return "October";
        case 10:
            return "November";
        case 11:
            return "December";
        default:
            return "Error with month";
        }
    }
    
    function formatting(number) {
        if (number < 10) {
            return "0" + "" + number;
        }
        else {
            return number;
        }
    }
    var today = new Date();
    var month = transformMonth(today.getMonth());
    var day = transformDay(today.getDay());
    var date = today.getDate();
    var hours = formatting(today.getHours());
    var minutes = formatting(today.getMinutes());
    var seconds = formatting(today.getSeconds());
    var content = " " + day + " " + month + " " + date + ". " + hours + ":" + minutes + ":" + seconds;
    
    document.getElementById("time").innerHTML = content;
    setTimeout("date()", 1000);    
}

function findPetFormCheck(){
    var catOrDog = document.getElementsByName("catordog");
    var breed = document.getElementById("breed").value;
    var age = document.getElementsByName("age")[0].value;
    var gender = document.getElementsByName("gender");
    var children = document.getElementsByName("smallChildren");
    var radioArray = [catOrDog, gender, children];
    
    for(var i = 0; i < radioArray.length; ++i){
        if(filled(radioArray[i])){
            return;
        }
    }
    
    function filled(array){
        for (var i = 0; i < array.length; ++i){
            if(array[i].checked){
                return;
            }
        }
        alert("One of the options in the form isn't filled. Make sure you fill everything before submitting");
        return true;
    }

    if(breed == ""){
        alert("The field for breed has been left empty. Make sure you enter something before submitting");
        return;
    }
    
    if(age == ""){
        alert("You havn't selected an age. Make sure you select something before submitting.");
        return;
    }
}

function givePetFormCheck(){
    var catOrDog = document.getElementsByName("catordog");
    var breed = document.getElementById("breed").value;
    var age = document.getElementsByName("age")[0].value;
    var gender = document.getElementsByName("gender");
    var children = document.getElementsByName("smallChildren");
    var description = document.getElementsByName("animalBragging")[0].value;
    var firstName = document.getElementsByName("FirstName")[0].value;
    var lastName = document.getElementsByName("LastName")[0].value;
    var email = document.getElementsByName("Email")[0].value;
    var radioArray = [catOrDog, gender, children];
    var textFieldArray = [breed, description, firstName, lastName, email];
    var regex = /^[A-Za-z0-9!#$%?&*()_.]+@[A-Za-z0-9!#$%?&*()_]+\.[A-Za-z0-9!#$%?&*()._]+$/;
    
    for(var i = 0; i < radioArray.length; ++i){
        if(filled(radioArray[i])){
            return;
        }
    }
    
    function filled(array){
        for (var i = 0; i < array.length; ++i){
            if(array[i].checked){
                return;
            }
        }
        alert("One of the options in the form isn't filled. Make sure you fill everything before submitting");
        return true;
    }
    
    for(var i = 0; i < textFieldArray.length; ++i){
        if(textFieldArray[i] == ""){
            alert("One of the text field has been left empty. Make sure you enter something before submitting.");
            return;
        }
    }
    
    if(email.search (regex) == -1){
        alert("The email you entered has an improper format. Please verify it and enter a valid email.");
        return;
    }
    
    if(age == ""){
        alert("You havn't selected an age. Make sure you select something before submitting.");
        return;
    }
}

function registrationCheck(event){
    var event = event || window.event;
    var username = document.getElementsByName("username")[0].value;
    var password = document.getElementsByName("password")[0].value;
    var textFieldArray = [username, password];
    var regexNonAlpha = /\W+/;
    var regexNumber = /\d{1,}/;
    var regexChar = /[a-zA-Z]{1,}/;
    var flag = true;
    
    for(var i = 0; i < textFieldArray.length; ++i){
        if(textFieldArray[i] == ""){
            flag = false;
            alert("One of the text field has been left empty. Make sure you enter something before submitting.");
            
        }
    }
    
    if(password.search (regexNonAlpha) != -1 || password.search (regexNumber) == -1 || password.search (regexChar) == -1 || password.length < 4){
        flag = false;
        alert("The password you entered has an improper format. Please verify it and enter a valid password.");
        
    }
    
    if(username.search (regexNonAlpha) != -1){
        flag = false;
        alert("The username you entered has an improper format. Please verify it and enter a valid username.");
        
    }
    
    if (flag == false){
        if(event.preventDefault){
            event.preventDefault();
        }
        else{
            event.returnValue = false;
        }
    }
    
    return flag;
    
}
