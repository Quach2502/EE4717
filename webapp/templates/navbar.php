
<nav>
    <div class = "logo">

    </div>

    <div class = "pagelink">
        <a href="home.php">Home</a>
        <a href="search.php">Search</a>
        <a href="#about">About us</a>
        <a href="#feedback">Feedback</a>
        <?php
        include "class/InfoCartItem.php";
        if(!isset($_SESSION)){
            session_start();
        }
        if(isset($_SESSION['valid_user'])){
            echo "<a href='user_info.php'>Welcome, {$_SESSION['valid_user']}</a>";
            echo '<a href="cart.php">My Cart</a>';
            echo '<a href="logout.php">Logout</a>';
        }else{
            echo "<a href='login.php'>Login</a>";
            echo "<a href='#account'>My Account</a>";
        }
        ?>
    </div>

    <div class = "searchbar">
        <div class="dropdown">
            <button id="search-category-btn" class = "dropdown-btn" onclick="showSearchCategories()">
                All items<span>&#9660;</span>
            </button>
            <div id="search-category-content" class = "dropdown-content">
                <?php

                $searchCategories = array('restaurant'=>array(
                    'name'=>'Restaurant',
                    'items'=>array()),
                    'category'=>array(
                        'name'=> 'Category',
                        'items'=>array())
                );


                foreach ($searchCategories as $searchCategory =>$searchCategory_arr){
                    echo"<span onclick='updateSearchWithCategory(this.innerText)'  onMouseOver='showCategoryItems(this.innerText)'>".$searchCategories[$searchCategory]['name']."</span>";

                    include "functions/food_query.php";
                    for ($i=0; $i<$num_result; $i++){
                        $row = $result->fetch_assoc();
                        $item = $row[$searchCategory];

                        if (!in_array($item, $searchCategories[$searchCategory]['items'])){
                            array_push($searchCategories[$searchCategory]['items'], $item);
                        }
                    }

                }
                ?>
                <script type="text/javascript">
                    // pass PHP variable declared above to JavaScript variable
                    var searchCategories_json = <?php echo json_encode($searchCategories) ?>;

                </script>


            </div>
        </div>

        <div class="dropdown">
            <div class="moved-down">
                <div id ="search-item-content" class = "dropdown-content" onmouseover="showItem('search-item-content')" onmouseout="hideItem('search-item-content')"></div>
            </div>

        </div>

        <div class="inputbar">
            <div style="display: block;">
                <input id="search-input" type="text" placeholder="Seach for food" onkeyup="search(this.value)">
                <button id="search-btn" onclick="onClickSearchButton()"><div> &#9906;</div></button>
            </div>
            <div id="search-result"></div>
        </div>

<!--        hidden form-->
        <form id="search-result-item-form" hidden action='food_info.php' method='post'>
            <input id="search-result-item-foodid" name='foodid' value='' hidden>
        </form>

        <form id="search-button-form" hidden action="search.php" method="post">
            <input id="search-button-foodid" name='foodids' value='' hidden>
        </form>

    </div>

</nav>
<script src="../js/searchbar.js"></script>

