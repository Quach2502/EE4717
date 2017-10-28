function init(){
	if (document && document.getElementById){
		document.getElementById('quantity').addEventListener("change",computeFoodPrice,false);
		document.getElementById('order_init').addEventListener("click",showQuantity,false);

	}
}
window.onload = init;