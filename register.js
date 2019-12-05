var myInput;
var number;
var length;
var specialChar;
var sub;
window.onload = function(){
 myInput = document.getElementById("password");
 number = document.getElementById("number");
 length = document.getElementById("length");
 specialChar = document.getElementById("spec");

    
    myInput.onkeyup = function(){
      var numbers = /[0-9]/g;
      var specialChars = /[-!$%^&*()_+|~=`{}\[\]:\/;<>?,.@#]/;

      //Check length
      if(myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");

      }
      else{
        length.classList.remove("valid");
        length.classList.add("invalid");

      }

      //Check for a number
      if(myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");

      }
      else{
        number.classList.remove("valid");
        number.classList.add("invalid");

      }
      //Check for special character
      if(myInput.value.match(specialChars)) {
        specialChar.classList.remove("invalid");
        specialChar.classList.add("valid");

      }
      else{
        specialChar.classList.remove("valid");
        specialChar.classList.add("invalid");

      }

    }
};
