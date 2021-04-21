
function validation()
{

	var username = document.getElementById("username");
	var password = document.getElementById("password");


	if (username.value.trim() == "" ||  password.value.trim() == "" )
	{
		alert("Fill up the form correctly!");
		return false;
	}
	else
	{
		alert("Welcome to the page");
		true;
	}

}