/**
 * Created by long on 7/11/17.
 */

var minInputValue = 1;
var maxInputValue = 5;
var inputDom ='';
var addBtnDom = '';
var minusBtnDom = '';

function getDom(addBtnId,minusBtnId, inputQuantityId){
    inputDom = document.getElementById(inputQuantityId);
    addBtnDom = document.getElementById(addBtnId);
    minusBtnDom = document.getElementById(minusBtnId);
    console.log(inputDom, addBtnDom, minusBtnDom);
}
function add(addBtnId,minusBtnId, inputQuantityId){
    getDom(addBtnId,minusBtnId, inputQuantityId);
    resetBtn();
    if (inputDom.value<maxInputValue){
        inputDom.value ++;
    }
    else {
       addBtnDom.classList.add("disabled");
    }
}

function minus(addBtnId, minusBtnId, inputQuantityId){
    getDom(addBtnId,minusBtnId, inputQuantityId);
    resetBtn();
    if (inputDom.value>minInputValue){
        inputDom.value --;
    }
    else {
        console.log('here');
        minusBtnDom.classList.add("disabled");
    }
}
function resetBtn(){
    if (inputDom.value>=minInputValue){
        console.log('here');
        if (minusBtnDom.classList.contains("disabled")){
            minusBtnDom.classList.remove("disabled");
        }
    }

    if (inputDom.value<=maxInputValue){
        if (addBtnDom.classList.contains('disabled')){
            addBtnDom.classList.remove('disabled');
        }
    }
}

function addtocart(addBtnId, minusBtnId, inputQuantityId){
    getDom(addBtnId,minusBtnId, inputQuantityId);

}

