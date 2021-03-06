<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" type="text/css" href="main.css">
    <link rel="Stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Sacramento|Handlee">
    <title> Ala Maison </title>
</head>
<body>
<div id="_browser_body">
    <div id="_main">
        <div id="_upper_main_log">
            <header id="header">
                <div class="_name_site">
                    <a href="index.php"><img id="logo" src="images/Logo.png" alt="logo"></a>
                    <a href="frame.php"> <img id="menu" src="images/menu2.png" alt="hamburger_menu"> </a>
                    <img class="shop_icons" src="images/add_cart.png" alt="add_cart">
                    <img class="shop_icons" src="images/user_icon.png" alt="user_icon">
                </div>
            </header>

            <main id="_main_body">
                <p id="_spa_p"> <span>Wellness & Spa</span> <br> Enjoy a little pampering from our experienced hands </p>
                <!-- <ul id="_arrival_info">
                    <form>
                        <li class="_client_info">
                            <h3> Arrival </h3>
                            <input type="date" min="2017-08-15" max="2018-08-26" step="7">
                        </li>
                        <li class="_client_info">
                            <h3> Departure </h3>
                            <input type="date" min="2017-08-15" max="2018-08-26" step="7">
                        </li>
                        <li class="_client_info">
                            <input id="_rooms_info" type="text" placeholder="Number of Rooms">
                        </li>
                        <a href="rooms.php"><button type="button">Check Availability</button></a>
                    </form>
                </ul> -->
            </main>
        </div>

        <div id="log_form_cont">
            <form action="client_backend.php" method="POST">
                <input type="text" name="names" placeholder="Full Name">
                <input type="email" name="email" placeholder="Email"><br>

                <div class="clientDate">
                    <li class="_client_info">
                        <h3> Arrival </h3>
                        <input type="date" name="arrival">
                    </li>
                    <li class="_client_info">
                        <h3> Departure </h3>
                        <input type="date" name="departure">
                    </li>
                </div>
                

                <button type="submit">BOOK</button>
            
            </form>
            <?php
                $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($fullUrl, "signup=empty") == true){
                    echo "<p class='error'>some fields are empty!</p>";
                    exit();
                }
                if (strpos($fullUrl, "signup=unsuccessful") == true){
                    echo "<p class='error'>invalid info!</p>";
                    exit();
                }
                if (strpos($fullUrl, "signup=successful") == true){
                    echo "<p class='success'>successfully signed up for a gym day!</p>";
                    exit();
                }
            ?>
            
        </div>

    </div>
</div>

<footer id="footer">
    <a href="index.php"><img src="images/Logo1.png" alt="logo"></a>
    <h5>Say hello to us</h5>
    <div id="_social_media">
        <img src="images/facebook_icon.png" alt="facebook" id="fb">
        <img src="images/instagram_icon.png" alt="instagram">
        <img src="images/twitter_icon.png" alt="twitter">
    </div>
    <div id="faqs">
        <a> <h3>FAQs</h3></a>
        <a> <h3>Information</h3></a>
        <a> <h3>Report a Store</h3></a>
    </div>
    <div id="contact">
        <h3><b>Contact</b></h3>
        <h4>(250) 78* *** ***,<br> KG 549 ST 57, <br> Kacyiru, <br> Kigali, <br>Rw </h4>
    </div>
    <div id="subscribe">
        <h3><br>Subscribe</br></h3>
        <p>Join our community and keep up to date with exclusive offers, blog content, behind the scence & more
            .</p>
        <form>
            <input type="email" placeholder="Enter your email">
        </form>
        <button type="button">Join</button>
    </div>
    <h4 id="copyright">@2019 Copyright. All rights reserved</h4>
</footer>
</body>
</html>