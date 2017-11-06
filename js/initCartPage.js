function init(){
	if (document && document.getElementById){
		document.getElementById('fullname').addEventListener("change",fullnameValidate,false);
		document.getElementById('handphone').addEventListener("change",handphoneValidate,false);
		document.getElementById('date_time').addEventListener("change",preferDateValidate,false);
		document.getElementById('show_info_purchase').addEventListener("click",showInfoPurchase,false);

	}
}
window.onload = init;