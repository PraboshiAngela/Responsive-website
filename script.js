
function validateForm() 
{ 
var fname = document.forms["myForm"]["fname"].value;
var lname = document.forms["myForm"]["lname"].value; 
var email = document.forms["myForm"]["email"].value;
var dob = document.forms["myForm"]["dob"].value;

if (fname == "") { 
alert("First name must be filled out"); 
return false; }

if (lname == "") { 
alert("Last name must be filled out"); 
return false; }

if (email == "") {
 alert("Email must be filled out"); 
 return false; }
 
if (!(email.includes('@'))) {
	alert("Please enter a valid email address");
	return false;
}
 
if (dob == "") {
 alert("Date of birth must be filled out"); 
 return false; }
 
}