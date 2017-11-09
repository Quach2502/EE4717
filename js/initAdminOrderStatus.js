function init(){
	var modal = document.getElementsByClassName("show_modal");
		for (var i =0;i < modal.length;i++){
			modal[i].addEventListener('click',showModal,false);
		}
	document.getElementById('update_order_status_btn').addEventListener('click',submitUpdateOrderStatus,false);
}

window.onload = init;
