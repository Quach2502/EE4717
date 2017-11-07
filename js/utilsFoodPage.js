function computeFoodPrice(event){
	var price = document.getElementById('food_price').innerHTML;
	var currentDom = event.currentTarget;
	var quantity = currentDom.value;
	if(quantity < 0){
		alert('Quantity must be larger than 0');
		currentDom.value = 0;
	}
	else{
		document.getElementById('subtotal').value = price * quantity;
	}
}

function showQuantity(event){
	document.getElementById('getQuantity').style.display = "inline";
}

function formValidate(){
	var quantity = document.getElementById('quantity').value;
	if(document.getElementById('sessionid').value !== ''){
		if(quantity > 0){
			return true;
		}
		else{
			alert("You should order more than 0 ^_^");
			return false;
		}
	}
	else{
		alert('You need to log in first before ordering.');
		return false;
	}
}