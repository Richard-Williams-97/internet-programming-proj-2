function validatePhone(phoneId)
{
	if(/^[1-9]\d{2}-\d{3}-\d{4}$/.test(phoneId.value))
		return true;
	else
		return false;
}

function validateName(nameId)
{
	if(/^[a-z A-Z]\w{4,}$/.test(nameId.value))
		return true;
	else
		return false;
}

function validatePhoneMsg(phoneId)
{
	errorPhoneMsg=document.getElementById("errorPhoneMsg"); //for paragraph shows error msg
	if(validatePhone(phoneId))
	{
		errorPhoneMsg.innerHTML="Valid phone number";
		errorPhoneMsg.className="text-primary";
	}
	else
	{
		errorPhoneMsg.innerHTML="Not Valid";
		errorPhoneMsg.className="text-danger"
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
	if(validatePhone(phoneId) && validateName(nameId))
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
