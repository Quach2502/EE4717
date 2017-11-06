<nav>
    <div class = "logo">

    </div>

    <div class = "pagelink">
        <a href="#food">Food</a>
        <a href="#search">Search</a>
        <a href="#about">About us</a>
        <a href="#feedback">Feedback</a>
        <a href="#account">My Account</a>
        <?php
        if(!isset($_SESSION)){
            session_start();
        }
        if(isset($_SESSION['valid_user'])){
            echo "<a href='user_info.php'>Welcome, {$_SESSION['valid_user']}</a>";
            echo '<a href="cart.php">My Cart</a>';
            echo '<a href="logout.php">Logout</a>';
        }else{
            echo "<a href='login.php'>Login</a>";
        }
        ?>
    </div>

    <div class = "searchbar">
        <div class="dropdown">
            <button id="search-category-btn" class = "dropdown-btn" onclick="showSearchCategories()">
                All categories<span>&#9660;</span>
            </button>
            <div id="search-category-content" class = "dropdown-content">
                <?php

                $searchCategories = array('restaurant'=>array(
                    'name'=>'Restaurant',
                    'items'=>array()),
                    'category'=>array(
                        'name'=> 'Food Category',
                        'items'=>array())
                );

                foreach ($searchCategories as $searchCategory =>$searchCategory_arr){
                    echo"<span onclick='updateSearchCategory(this.innerText)'>".$searchCategories[$searchCategory]['name']."</span>";

                    include "food_query.php";
                    for ($i=0; $i<$num_result; $i++){
                        $row = $result->fetch_assoc();
                        $item = $row[$searchCategory];

                        if (!in_array($item, $searchCategories[$searchCategory]['items'])){
                            array_push($searchCategories[$searchCategory]['items'], $item);
                        }
                    }

                }
                //                    var_dump( $searchCategories);
                ?>


                <?php
                //
                ?>

                <!--                    <span onclick="updateSearchCategory(this.innerText)">Restaurant</span>-->
                <!--                    <span onclick="updateSearchCategory(this.innerText)">Category</span>-->
            </div>
        </div>

        <div class="dropdown">
            <button id="search-item-btn" class = "dropdown-btn" onclick="showSearchItems()">
                All items<span>&#9660;</span>
            </button>
            <div id ="search-item-content" class = "dropdown-content" >



                //                       echo"<span onclick='updateSearchCategory(this.innerText)'>".$searchCategory."</span>";


                <?php

                //                    echo $_SESSION['searchCategory'];

                ?>


                <!--                    <span onclick="updateSearchItem(this.innerText)">KFC</span>-->
                <!--                    <span onclick="updateSearchItem(this.innerText)">MC'Donalds</span>-->
            </div>
        </div>

        <div class="inputbar">
            <input id="search-input" type="text" placeholder="Seach for food">
            <button id="search-btn"><div> &#9906;</div></button>
        </div>



    </div>

</nav>


<script src="../js/searchbar.js"></script>