/*  Skylight Javascript Code
    Kamil Sacha
    April 19, 2021
*/

function validatePassword(){
    var password = document.form["signUpForm"]["pword"].value;
    var password2 = document.form["signUpForm"]["pword-repeat"].value;
    if (password != password2){
        alert("These passwords do not match!");
        return false;
    }
}