<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" type="text/css" href="Stylesheets/main.css">
    <link rel="Stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Sacramento|Handlee">
    <title> Ala Maison </title>
</head>
<body>
<div id="_browser_body">
    <div id="_main">
        <div id="_upper_main_log">
            <header id="header">
                <div class="_name_site">
                    <a href="index.php"><img id="logo" src="Stylesheets/images/Logo.png" alt="logo"></a>
                    <a href="frame.php"> <img id="menu" src="Stylesheets/images/menu2.png" alt="hamburger_menu"> </a>
                    <img class="shop_icons" src="Stylesheets/images/add_cart.png" alt="add_cart">
                    <img class="shop_icons" src="Stylesheets/images/user_icon.png" alt="user_icon">
                </div>
            </header>

            <main id="_main_body">
                <p id="_spa_p"> <span>Wellness & Spa</span> <br> Enjoy a little pampering from our experienced hands </p>
                
            </main>
        </div>

        <div id="log_form_cont">
            <form action="massage_backend.php" method="POST">
                <input type="text" placeholder="Enter your client ID" name="client">
                <select name="therapist">
                    <option value="" disabled selected>Choose a Therapist</option>
                    <option value="1">Emelyne Kwizera</option>
                    <option value="2">Donart Ngarambe</option>
                    <option value="3">Gaidi Faraj</option>
                    <option value="4">Sanelisiwe Manana</option>
                    <option value="5">Laurel Staabs</option>
                </select>
                <input type="date" name="date">
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
                    exit();                }
                if (strpos($fullUrl, "signup=invalid") == true){
                    echo "<p class='error'>invalid Client ID or Trainer ID!</p>";
                    exit();
                }
                if (strpos($fullUrl, "signup=non") == true){
                    echo "<p class='error'>invalid sign up for Gym!</p>";
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
    <a href="index.php"><img src="Stylesheets/images/Logo1.png" alt="logo"></a>
    <h5>Say hello to us</h5>
    <div id="_social_media">
        <img src="Stylesheets/images/facebook_icon.png" alt="facebook" id="fb">
        <img src="Stylesheets/images/instagram_icon.png" alt="instagram">
        <img src="Stylesheets/images/twitter_icon.png" alt="twitter">
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