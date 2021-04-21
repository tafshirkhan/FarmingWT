
function validation()
{

	var oldpassword = document.getElementById("oldpassword");
	var newpassword = document.getElementById("newpassword");
	var confirmnewpassword = document.getElementById("confirmnewpassword");


	if (oldpassword.value.trim() == "" || newpassword.value.trim() == "" || confirmnewpassword.value.trim() == "")
	{
		alert("Fill up the form correctly!");
		return false;
	}
	else if(newpassword.value.trim() !== confirmnewpassword.value.trim())
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