<?php

    $found = $found ?? null;
?>

<body>
    <header>
        <div class="container">

            <div class="top_header">
                <img src="images/Logo_main.png"  class="logo" alt="Logo">
                <h3  class="brandName">BIKE KING BORDERS</h3>
                <button class="hamburger" id="hamburger" onclick="hide()">
                    <i class="fas fa-bars"></i>
                </button>
                <img src="images/Phone.png"  class="phoneIcon" alt="Phone">
                <h3 class="phoneNumber">0141 076 482</h3>
            </div>

            <div class="mid_header">
                <a href="./contact.php" class="contactPage">Contact</a>
                <?php
                    if($found){
                        echo '<a href="logout.php" class="loginPage red">Log Out</a>';
                    }
                    else{
                        echo '<a href="login.php" class="loginPage">Log In</a>';
                    }
                ?>
                <!--<a href="./login.php" class="loginPage">Log In</a>-->
            </div>

            <div class="bot_header">
                <input type="text" name="" placeholder="     Type to search" class="searchBox" id="searchBox">
                <div class="search_box" id="search_box">
                    <img src="images/search.png" class="searchIcon" id="searchIcon">
                </div>
                <div class="icons">
                    <!--<a href="./logIn.php"><i class="fa fa-user"></i></a>-->
                    <?php
                        if($found){
                            echo '<a href="logout.php"><i class="fa fa-user red"></i></a>';
                        }
                        else{

                            echo '<a href="logIn.php"><i class="fa fa-user "></i></a>';
                        }
                    ?>
                    <a href="#"><img src="images/Basket.png" class="basketIcon" id="basketIcon"></a>
                </div>
            </div>
        </div>
    </header>