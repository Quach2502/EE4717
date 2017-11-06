/**
 * Created by long on 5/11/17.
 */

function showSearchCategories() {

    document.getElementById("search-category-content").classList.toggle("show");
}

function showSearchItems(){
    if (!(document.getElementById("search-category-btn").innerText == 'All categories')){
        document.getElementById("search-item-content").classList.toggle("show");

    }
    else{
        if (document.getElementById("search-item-content").classList.contains('show')) {
            document.getElementById("search-item-content").classList.remove('show');
        }
    }
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
            }
        }
    }
}

function updateSearchCategory(val) {
    document.getElementById("search-category-btn").innerText = val;


    updateServerSession('searchCategory', val);

    // console.log(val);

}

function updateSearchItem(val){
    document.getElementById("search-item-btn").innerText = val;
}

function updateServerSession(session_index, value){
    var xhttp= new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            // document.getElementById("demo").innerHTML = this.responseText;
             console.log(this.responseText);
        }
    };

    xhttp.open("GET", "update_ajax.php?index=" + session_index+"&value="+value, true);
    xhttp.send();

}