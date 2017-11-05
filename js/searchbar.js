/**
 * Created by long on 5/11/17.
 */

function showSearchCategories() {
    document.getElementById("search-category-content").classList.toggle("show");
}

function showSearchItems(){
    document.getElementById("search-item-content").classList.toggle("show");
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
}

function updateSearchItem(val){
    document.getElementById("search-item-btn").innerText = val;
}