var validateInformation = {
	fullname : false,
	email : false,
	username : false,
	psw : false,
	handphone:false,
	validAll : function(){
		return (this.handphone&&this.fullname&&this.email&&this.username&&this.psw&&this.psw);
	}
};

function fullnameValidate(event) {
	var nameRegex = /^([A-Za-z]+\s?)+$/;
	var name = event.currentTarget.value;
	if (nameRegex.test(name)){
		validateInformation.fullname = true;
		document.getElementById("errorName").style.display = 'none';
	}
	else{
		document.getElementById("errorName").style.display = 'inline';
		validateInformation.fullname = false;
		event.currentTarget.select();
	}
}

function handphoneValidate(event) {
	var reg = /^\d+$/;
	var handphoneValue = event.currentTarget.value;
	if (handphoneValue.length != 8 || !reg.test(handphoneValue)){
		document.getElementById("errorHandphone").style.display = 'inline';
		validateInformation.handphone = false;
		event.currentTarget.select();
	}
	else{
		document.getElementById("errorHandphone").style.display = 'none';
		validateInformation.handphone = true;
	}
}

function pswValidate(event) {
	var psw = event.currentTarget.value;
	if(psw.length >= 5){
		validateInformation.psw = true;
		document.getElementById("errorPsw").style.display = 'none';

	}
	else{
		event.currentTarget.select();
		validateInformation.psw = false;
		document.getElementById("errorPsw").style.display = 'inline';
	}
}



function emailValidate(event){
	var email = event.currentTarget.value;
	var flag = true;
	var fields = email.split('@');
	if (fields.length != 2)
	{
		flag = false;
	}
	else
	{
		var userName = fields[0];
		var domainName = fields[1];
		if((!(userNameValidate(userName))) || (!(domainNameValidate(domainName)))) 
			flag = false;

	}
	validateInformation.email = flag;
	if(flag){
		document.getElementById("errorEmail").style.display = 'none';
	}
	else 
	{
		event.currentTarget.select();
		document.getElementById("errorEmail").style.display = 'inline';
	}
}
function usernameValidate(userName){
	var usernameValue = event.currentTarget.value;
	if(usernameValue.length >= 5){
		validateInformation.username = true;
		document.getElementById("errorUsername").style.display = 'none';

	}
	else{
		event.currentTarget.select();
		validateInformation.username = false;
		document.getElementById("errorUsername").style.display = 'inline';
	}
}


function userNameValidate(userName){
	var userNameRegex = /^[\w.-]*$/;
	return (userNameRegex.test(userName));
}

function domainNameValidate(domainName){
	var domainNameRegex = /^(\w+\.){1,3}\w{2,3}$/;
	return (domainNameRegex.test(domainName));

}

function formValidate(){
	flag = validateInformation.validAll();
	if (flag)
	{
		var psw = document.getElementById("psw").value;
		var pswrepeat = document.getElementById("psw-repeat").value;
		if (psw != pswrepeat)
		{	
			alert('The password does not match.')
			return false;
		}
		return true;
	}
	else{
		alert("Invalid form!");
		return false;
	}	
}