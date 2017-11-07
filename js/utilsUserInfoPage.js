var validateInformation = {
	fullname : true,
	email : true,
	handphone:true,
	pendpsw:false,
	newpsw:false,
	validAll : function(){
		return (this.handphone&&this.fullname&&this.email);
	}
};

function showInfo(event){
	document.getElementById('change_psw').style.display = "none";
	document.getElementById('info').style.display = "inline";
	document.getElementById('order_history').style.display = "none";
}

function showOrderHistory(event){
	document.getElementById('change_psw').style.display = "none";
	document.getElementById('info').style.display = "none";
	document.getElementById('order_history').style.display = "inline";
}

function showChangePsw(event){
	document.getElementById('change_psw').style.display = "inline";
	document.getElementById('info').style.display = "none";
	document.getElementById('order_history').style.display = "none";
}


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

function newpswValidate(event) {
	var psw = event.currentTarget.value;
	if(psw.length >= 5){
		validateInformation.newpsw = true;
		document.getElementById("errorPsw").style.display = 'none';

	}
	else{
		event.currentTarget.select();
		validateInformation.newpsw = false;
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

function userNameValidate(userName){
	var userNameRegex = /^[\w.-]*$/;
	return (userNameRegex.test(userName));
}

function domainNameValidate(domainName){
	var domainNameRegex = /^(\w+\.){1,3}\w{2,3}$/;
	return (domainNameRegex.test(domainName));

}

function formInfoValidate(){
	flag = validateInformation.validAll();
	if (flag)
	{
		return true;
	}
	else{
		alert("Invalid form!");
		return false;
	}
	
	
}

function checkPendingPsw(){
	var pendpswValue = event.currentTarget.value;
	var usernameValue = document.getElementById('username').value;
	var xhr = null;
	if (window.XMLHttpRequest) {
		xhr = new XMLHttpRequest();
	} else {
		xhr = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhr.onreadystatechange = function() {
		if (this.readyState == 4) {
			if(this.status == 200){
				var json = JSON.parse(xhr.responseText);
				if (json.exists) {
					validateInformation.pendpsw = true;
				}
				else{
					validateInformation.pendpsw = false;
				}
			}
			else{
				alert('Error: '+xhr.status);
			}
		}
	};
	xhr.open('GET', 'functions/check_pendpsw.php?pendpsw=' + pendpswValue+'&username='+usernameValue, true);
	xhr.send();	
}

function formPswValidate(){
	flag = validateInformation.newpsw;
	var newpsw = document.getElementById('newpsw').value;
	var newpswrepeat = document.getElementById('newpsw-repeat').value;
	if (validateInformation.pendpsw)
	{
		if(validateInformation.newpsw){
			if(newpswrepeat===newpsw){
				return true;
			}
			else{
				alert("Your new password does not match.");
				return false;
			}
		}
		else
		{
			alert("Invalid new password (at least 5 characters)");
			return false;
		}
	}
	else{
		alert("Your current password is wrong!");
		return false;
	}
}

function showModal(event){
	var orderId = event.currentTarget.id;
	var modalId = 'modal_' + orderId;
	document.getElementById(modalId).style.display = 'block';
}