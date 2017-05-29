function validate() {
  var usrName = document.registration.Name.value;
  var pass = document.registration.password.value;
  var phone = document.registration.Phone.value;

  var usrRegEx = /([A-Z0-9]+)([a-z_]*)/;
  var passRegEx = /([a-z]{3,})|([0-9]{3,})|([A-Z]{3,})/;
  var phoneRegEx = /([0-9]{3})([-])([0-9]{4})(-)([0-9]{4})/;

  var usrError = "Username length must be between 6-10, containing only English letters, numbers, and \"_\"!";
  var passError = "Password length must be between 6-10, containing letters, numbers, and special characters<br>There cannot be more than 3 characters from the same set!";
  var phoneError = "Please, enter your phone number correctly!";

  if(!usrName.match(usrRegEx) || (usrName.length<6 || usrName.length>10 )){
    document.getElementById('usrError').innerHTML = usrError;
    event.preventDefault();
  }

  if(pass.length<6 || pass.length>10 || pass.match(passRegEx)) {
    document.getElementById('passError').innerHTML = passError;
    event.preventDefault();
  }

  if((phone.length!=13) || (!phone.match(phoneRegEx))) {
    document.getElementById('phoneError').innerHTML = phoneError;
    event.preventDefault();
  }
}
