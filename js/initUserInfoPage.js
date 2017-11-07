function init(){
	document.getElementById('show_info').addEventListener("click",showInfo,false);
	document.getElementById('show_order_history').addEventListener("click",showOrderHistory,false);
	document.getElementById('show_change_psw').addEventListener("click",showChangePsw,false);
	document.getElementById('email').addEventListener("change",emailValidate,false);
	document.getElementById('handphone').addEventListener("change",handphoneValidate,false);
	document.getElementById('fullname').addEventListener("change",fullnameValidate,false);
	document.getElementById('newpsw').addEventListener("change",newpswValidate,false);
	document.getElementById('pendpsw').addEventListener("blur",checkPendingPsw,false);
	var modal = document.getElementsByClassName("show_modal");
		for (var i =0;i < modal.length;i++){
			modal[i].addEventListener('click',showModal,false);
		}
}

window.onload = init;
