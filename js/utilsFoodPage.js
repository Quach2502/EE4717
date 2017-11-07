var minInputValue = 1;
var maxInputValue = 100;

function computeFoodPrice(){
    var price = document.getElementById('food_price').innerHTML;
    console.log("price", price);
    var quantity = document.getElementById('quantity').value;
    if(quantity <= 0){
        alert('Quantity must be larger than 0');
        document.getElementById(quantityId).value =1;
    }
    else{
        document.getElementById('subtotal').value = price * quantity;
        document.getElementById('subtotalVal').innerText = price*quantity;

    }
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

function add(){
    resetBtn();

	if (document.getElementById('quantity').value<maxInputValue){
		document.getElementById('quantity').value ++;
	}
	else {
		document.getElementById('add-btn').classList.toggle("disabled");
	}
    computeFoodPrice();
}

function minus(){
    resetBtn();

    if (document.getElementById('quantity').value>minInputValue){
        document.getElementById('quantity').value --;
    }
    else{
    	document.getElementById('minus-btn').classList.toggle("disabled");
	}
    computeFoodPrice();
}

function resetBtn(){
    if (document.getElementById('quantity').value>=minInputValue){

        if (document.getElementById('minus-btn').classList.contains("disabled")){
            document.getElementById('minus-btn').classList.remove("disabled");
        }
    }

    if (document.getElementById('quantity').value<=maxInputValue){
        if (document.getElementById('add-btn').classList.contains('disabled')){
            document.getElementById('add-btn').classList.remove('disabled');
        }
    }
}

function addtocart() {
    computeFoodPrice();
    document.getElementById('add_to_cart_form').submit();
}