var alpha = "[A-Za-z ]";
var numeric = "[0-9]";
var alphanumeric = "[A-Za-z0-9]";

function validateKeypress(validChars) { 
    var validChars = new RegExp(validChars);
    var keyChar = String.fromCharCode(event.which || event.keyCode); 
    return validChars.test(keyChar) ? keyChar : false; 
}