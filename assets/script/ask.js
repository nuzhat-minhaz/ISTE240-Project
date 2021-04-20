 /*
@author NUZHAT MINHAZ
@version Feb 18th, 2020 
Web & Mobile 2 - ISTE 240 - Exercise 5 - javaScript functions
note: very amused by the To Kill a Mockingbird Reference provided in starter files :D
*/
/*
function getFormValues() {
    // function to send first and last names
    // to an 'alert' message.
    var firstName = document.getElementById("fname").value;
    var lastName = document.getElementById("lname").value;
    var from = document.getElementById("from").value;
    var email = document.getElementById("email").value;
        alert("First Name: " + firstName + "\nLast Name: " + lastName + "\nWhere you're from: " + from + "\nYour Email Address: " + email);

}
*/
function validateForm() {
    var x = document.forms["regForm"]["fname"].value;
    var x1 = document.forms["regForm"]["lname"].value;
    var x2 = document.forms["regForm"]["email"].value;
    if (x == "") {
      alert("First Name must be filled out");
      return false;
    }
    if (x1 == "") {
        alert("Last Name must be filled out");
        return false;
      }
      if (x2 == "") {
        alert("E-mail must be filled out");
        return false;
      }
  }