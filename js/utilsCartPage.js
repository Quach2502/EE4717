var validateInformation = {
	fullname : true,
	handphone:true,
	preferDate:false,
	validAll : function(){
		return (this.handphone&&this.fullname&&this.preferDate);
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


function preferDateValidate(event){
	var date = event.currentTarget.value;
	var now = new Date();
	var valueTime = new Date(date);
	if(now.getTime() >= valueTime.getTime()){
		validateInformation.preferDate = false;
		document.getElementById("errorDate").style.display = 'inline';
		
	}
	else{
		document.getElementById("errorDate").style.display = 'none';
		validateInformation.preferDate = true;
	}
}

function showInfoPurchase(){
	document.getElementById('info_purchase').style.display = "inline";
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

function formValidate(){
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