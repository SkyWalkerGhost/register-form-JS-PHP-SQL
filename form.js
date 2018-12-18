

function validateform() {

    var username = document.forms['myform']['user_name'].value;
    var usermail = document.forms['myform']['user_mail'].value;
    var userpass = document.forms['myform']['user_password'].value;

    if(username == "") {
        alert('სახელი შეყვანილი არაა');
            return false;
            
    }

    if(usermail == "") {
        alert('ელ-ფოსტა მითითებული არაა');
        return false;
    }

    if(userpass == "") {
        alert('პაროლი მიუთითეთ');
            return false;
    }

    if(userpass.length  <= 6) {
        alert("პაროლი სუსტია");
          alert("პაროლი უნდა აღემატებოდეს 6 სიმბოლოს ");
             return false;
    }
}