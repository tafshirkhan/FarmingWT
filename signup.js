
function validation()
{
	var firstname = document.getElementById("firstname");
	var lastname = document.getElementById("lastname");
	var username = document.getElementById("username");
	var email = document.getElementById("email");
	var password = document.getElementById("password");
	var confirmpassword = document.getElementById("confirmpassword");


	if (firstname.value.trim() == "" || lastname.value.trim() == "" || username.value.trim() == "" || email.value.trim() == "" || password.value.trim() == "" || confirmpassword.value.trim() == "")
	{
		alert("Fill up the form correctly!");
		return false;
	}
	else if (password.value.trim() !== confirmpassword.value.trim()) 
	{
		alert("Password not matched!");
		return false;
	}
	else
	{
		alert("Welcome to the page");
		true;
	}

}