var str="";

function validatePass(passId)
{
	str="password: ";

	var haslower=false;
	var hasupper=false;
	var hasdigit=false;
	var length=false;

		if (passId.value.length>8)
		{
			length=true;
		}else
		{
			str+="must at least 8 characters, ";
		}
		if(/[a-z]/.test(passId.value))
		{
			haslower=true;
		}else
		{
			str+="requires lowercase, ";
		}
		if(/[A-Z]/.test(passId.value))
		{
			hasupper=true;
		}else
		{
			str+="requires Uppercase, ";
		}
		if(/[0-9]/.test(passId.value))
		{
			hasdigit=true;
		}else
		{
			str+="requires digit, ";
		}

	

	if(haslower==true && hasupper==true && hasdigit==true)
	{
		return true;
	}else
	{
		return false;
	}


}

function validateName(nameId)
{
	if(/^[a-z A-Z]\w{4,}$/.test(nameId.value))
		return true;
	else
		return false;
}

function validatePassMsg(passId)
{
	errorPassMsg=document.getElementById("errorPassMsg"); //for paragraph shows error msg
	if(validatePass(passId))
	{
		errorPassMsg.innerHTML="Valid password";
		errorPassMsg.className="text-primary";
	}
	else
	{
		errorPassMsg.innerHTML=str;
		errorPassMsg.className="text-danger"
	}
}

function validateNameMsg(nameId)
{
	errorNameMsg=document.getElementById("errorNameMsg"); //for paragraph shows error msg
	if(validateName(nameId))
	{
		errorNameMsg.innerHTML="Valid Name";
		errorNameMsg.className="text-primary";
	}
	else
	{
		errorNameMsg.innerHTML="Not Valid";
		errorNameMsg.className="text-danger"
	}
}

function validate(form)
{
	nameId=document.getElementById("nameId");
	phoneId=document.getElementById("phoneId");
	if(validatePass(phoneId) && validateName(nameId))
	{
		return true;
	}
	else
	{
		msgId=document.getElementById("msgId");
		msgId.innerHTML="invalid input! please correct";
		msgId.className="alert alert-danger";
		return false;
	}
}
