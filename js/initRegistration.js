function init(){
	if (document && document.getElementById){
		document.getElementById('fullname').addEventListener("change",fullnameValidate,false);
		document.getElementById('username').addEventListener("change",usernameValidate,false);
		document.getElementById('email').addEventListener("change",emailValidate,false);
		document.getElementById('handphone').addEventListener("change",handphoneValidate,false);
		document.getElementById('psw').addEventListener("change",pswValidate,false);
		document.getElementById('username').addEventListener("blur",checkUsername,false);
	}
}
window.onload = init;