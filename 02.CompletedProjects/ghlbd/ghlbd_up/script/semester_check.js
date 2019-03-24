
function checkemploy()
{
	var cellphone=document.getElementById('contactno');
	var email=document.getElementById('emailaddress');
	if(document.employeeadd.employeename.value=="")
	{
	alert('Employee Name  is empty');
	document.employeeadd.preadress.focus();
	return false;
	}
	
	else if(document.employeeadd.preadress.value=="")
	{
	alert('Present  Address  is empty');
	document.employeeadd.peraddress.focus();
	return false;
	}
	
	else if(document.employeeadd.peraddress.value=="")
	{
	alert('Permanent Address is empty');
	document.employeeadd.dateofbirth.focus();
	return false;
	}

	
	else if(document.employeeadd.dateofbirth.value=="")
	{
	alert('Date of Birth  is empty');
	document.employeeadd.employeeid.focus();
	return false;
	}
	
	else if(document.employeeadd.employeeid.value=="")
	{
	alert('Please Enter user ID');
	document.employeeadd.password.focus();
	return false;
	}
	
	else if(document.employeeadd.password.value=="")
	{
	alert('Please Enter Password !');
	document.employeeadd.imagem.focus();
	return false;
	}
	
	else if(document.employeeadd.imagem.value=="")
	{
	alert('client Picture   is empty');
	document.employeeadd.emailaddress.focus();
	return false;
	}
	else if(document.employeeadd.emailaddress.value!="")
	{
		if(emailValidator(email,"Email address is wrong."))	
		{
			return true;
		}
		return false;
	}	

	if(isNumeric(cellphone, "Please enter numeric phone number"))
	{
		return true;
	}
	return false;
}


function isEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
   else{
	return true;}
}



function isEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
else{
	return true;}
}


function isNumeric(elem, helperMsg){
	var numericPostion = /^[0-9]+$/;
	if(elem.value.match(numericPostion)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters");
		elem.focus();
		return false;
	}
}

function madeSelection(elem, helperMsg){
	if(elem.value == "Please Choose"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}

function datevalidator(elem, helperMsg){
	var dateExp = ("^\([0-9]{4}\)\\-\([0-1][0-9]\)\\-\([0-3][0-9]\)$");
	if(elem.value.match(dateExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
