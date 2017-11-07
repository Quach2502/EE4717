/**
 * Created by long on 5/11/17.
 */
console.log(searchCategories_json);
var chosenCategoryItem ='all';
var chosenCategoryName ='all';
var tempCategoryItems = [];
var tempCategoryName ='';
var searchResult='';

function showSearchCategories() {
    document.getElementById("search-category-content").classList.toggle("show");
}

function showSearchItems(){
    showItem("search-item-content");
}

function addItemToSearchItems(){
    for (i in tempCategoryItems){
        var itemSpan = document.createElement("span");
        itemSpan.innerText=tempCategoryItems[i];
        itemSpan.onclick = function () { updateSearchWithItem(this.innerText); };
        document.getElementById('search-item-content').appendChild(itemSpan);
    }

}
function clearItemInSearchItems(){
    document.getElementById('search-item-content').innerHTML = '';
}

function hideItem(divId){
    document.getElementById(divId).style.display="none";
}

function showItem(divId){
    document.getElementById(divId).style.display="block";
}
// clear the dropdown
window.onclick = function(event) {
    if (!event.target.matches('.dropdown-btn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {

            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
                // document.getElementById("search-category-content").style.display="none";
            }
        }
    }

    if (document.getElementById("search-result")){
        if (!event.target.matches('search-result')){
            document.getElementById("search-result").innerHTML="";
        }
    }

    if (!event.target.matches('search-item-content')) {
               hideItem('search-item-content');
            }


}

function clearSearchFilter(){
    chosenCategoryItem='all';
    chosenCategoryName='all';
}

function updateSearchWithCategory(val) {
    clearSearchFilter();
    document.getElementById("search-category-btn").innerText = 'All items';
    chosenCategoryName = tempCategoryName;
    console.log("choosen", chosenCategoryName, chosenCategoryItem);
    // findCategoryItems(val);
    // clearItemInSearchItems();
    // addItemToSearchItems();
    // showSearchItems();


    // console.log(val);

}

function showCategoryItems(val){
    findCategoryItems(val);
    clearItemInSearchItems();
    addItemToSearchItems();
    showSearchItems();
}

function findCategoryItems(categoryName){

    for (i in searchCategories_json){
            category=searchCategories_json[i];
        if (category.name == categoryName){
            tempCategoryName = category.name;
            tempCategoryItems = category.items;
        }
    }
    // console.log("temp", tempCategoryName, tempCategoryItems);
}

function updateSearchWithItem(val){
    clearSearchFilter();
    document.getElementById("search-category-btn").innerText = val;
    chosenCategoryName=tempCategoryName;
    chosenCategoryItem=val;
    console.log("choosen", chosenCategoryName, chosenCategoryItem);
}

function search(textinput){
    var xhr = null;
    var type = 'search';
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhr.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                // console.log(this.responseText);
                displaySearchResult(this.responseText);

            }
            else{
                alert('Error: '+xhr.status);
            }
        }
    };

    xhr.open("GET", "functions/search_ajax.php?category="+chosenCategoryName +"&item="+chosenCategoryItem+"&input="+textinput, true);
    xhr.send();

}

function displaySearchResult(responseText){
    console.log(responseText);
    var response = JSON.parse(responseText);
    searchResult = response;
    document.getElementById('search-result').innerHTML='';
        for (i=0; i<response.length; i++){
            var item = response[i];
            var itemSpan = document.createElement("span");
            itemSpan.innerText=item.name;
            itemSpan.classList.add("search-result-item");
            itemSpan.value = item.foodid;
            itemSpan.onclick =  function() { onClickSearchResultItem(this.innerText, this.value)}; ;
            document.getElementById('search-result').appendChild(itemSpan);
        }
}

function onClickSearchResultItem(name, foodid){
    console.log(name, foodid);
    if (name != "No items found"){
        document.getElementById('search-result-item-foodid').value = foodid;
        document.getElementById('search-result-item-form').submit();
    }

}

function onClickSearchButton(){
    itemFoodIds = [];
    for (i=0; i<searchResult.length; i++){
        item = searchResult[i];
        itemFoodIds.push(item.foodid);
    }
    console.log('itemFoodIds', itemFoodIds);
    document.getElementById('search-button-foodid').value=itemFoodIds;
    document.getElementById('search-button-form').submit();
}