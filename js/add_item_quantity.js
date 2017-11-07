/**
 * Created by long on 7/11/17.
 */

var minInputValue = 1;
var maxInputValue = 100;

var inputQuantityId = '';
var addBtnId = '';
var minusBtnId ='';
var addcartBtnId = '';
var addcartFormId ='';
var quantityId ='';
var subtotalId = '';
var foodpriceId ='';
var foodinfoFormId ='';

function getIds(id){
    inputQuantityId = "input-quantity-"+id;
    addBtnId = "add-btn-"+id;
    minusBtnId = "minus-btn-"+id;
    addcartBtnId ="addcart-btn-"+id;
    addcartFormId = "addcart-form-"+id;
    quantityId = "quantity-"+id;
    subtotalId = "subtotal-"+id;
    foodpriceId ="foodprice-"+id;
    foodinfoFormId="foodinfo-form-"+id;
}

function add(id){
    getIds(id);
    resetBtn();
    if (document.getElementById(inputQuantityId).value<maxInputValue){
        document.getElementById(inputQuantityId).value ++;
    }
    else {
       document.getElementById(addBtnId).classList.toggle("disabled");
    }
}

function minus(id){
    getIds(id);
    resetBtn();
    if (document.getElementById(inputQuantityId).value>minInputValue){
        document.getElementById(inputQuantityId).value --;
    }
    else {

        document.getElementById(minusBtnId).value.classList.toggle("disabled");
        console.log(minusBtnId);
    }
}
function resetBtn(){
    if (document.getElementById(inputQuantityId).value>=minInputValue){

        if (document.getElementById(minusBtnId).classList.contains("disabled")){
            document.getElementById(minusBtnId).classList.remove("disabled");
        }
    }

    if (document.getElementById(inputQuantityId).value<=maxInputValue){
        if (document.getElementById(addBtnId).classList.contains('disabled')){
            document.getElementById(addBtnId).classList.remove('disabled');
        }
    }
}

function addtocart(id){
    getIds(id);
    document.getElementById(quantityId).value=document.getElementById(inputQuantityId).value;
    computeFoodPrice();
    document.getElementById(addcartFormId).submit();
}
function tofoodinfo(id){
    getIds(id);
    document.getElementById(foodinfoFormId).submit();
}
function computeFoodPrice(){
    var price = document.getElementById(foodpriceId).value;
    console.log("price", price);
    var quantity = document.getElementById(quantityId).value;
    if(quantity <= 0){
        alert('Quantity must be larger than 0');
        inputDom.value = 1;
        document.getElementById(quantityId).value =1;
    }
    else{
        document.getElementById(subtotalId).value = price * quantity;
        console.log("subtotal", document.getElementById(subtotalId).value);
    }
}


function formValidate(){
    var quantity = document.getElementById(quantityId).value;
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