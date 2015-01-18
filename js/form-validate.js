/**
 * Created by Kornutiik on 18.1.2015.
 */

function checkForm(form){
    var formValue = form.nameOf.value;
    var errorText = "Vyplňte chýbajúce polia:";
    var validationPassed = true;

    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;

    formValue = form.email.value;
    if (formValue == "" || !re.test(formValue)){
        /*Wrong email format*/
        alert("Zadajte e-mail v správnom tvare");
        document.getElementById("email").focus();
        return false;
    }

    if(formValue == "" || formValue == "Email"){
        errorText += " Email,";
        validationPassed = false;
    }

    if(formValue == "" || formValue == "Meno"){
        errorText += " Meno,";
        validationPassed = false;
    }

    formValue = form.subject.value;
    if(formValue == "" || formValue == "Predmet"){
        errorText += " Predmet,";
        validationPassed = false;
    }

    formValue = form.messageOf.value;
    if(formValue == "" || formValue == "Správa"){
        errorText += " Správa,";
        validationPassed = false;
    }

    if(!validationPassed) {
        alert(errorText.substr(0, errorText.length-1));
    }

    return validationPassed;
};
