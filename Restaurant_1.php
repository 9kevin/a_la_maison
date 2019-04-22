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

            <div id="_upper_main_res1">
                <header id="header">
                    <div class="_name_site">
                        <a href="index.php"><img id="logo" src="images/Logo.png" alt="logo"></a>
                        <a href="frame.php"> <img id="menu" src="images/menu.png" alt="hamburger_menu"> </a>
                        <h3>Services</h3>
                    </div>
                </header>

                <main id="_main_body">
                    <p id="_spa_p"> <span>Wellness & Spa</span> <br> Enjoy a little pampering from our experienced hands </p>
                    <ul id="_arrival_info">
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
                    </ul>
                </main>
            </div>

            <div id="mid_main_1">
                <button id="btn_1">Join Us <br>When the sun rises</button>
                <button id="btn_2">Join Us <br>When the sun sets</button>
            </div>

            <div id="_lower_main">
                <img class="RestaurantI_img_1" src="images/res_img_1.png" alt="image">
                <img class="RestaurantI_img_2" src="images/res_img2.png" alt="image">

                <h3 id="resI_h1_1"> Every great day requires a great start </h3>
                <h3 id="resI_h1_2"> Let us take care of you </h3>

                <p id="resI_p1_1">Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth tatsoi
                    tomatillo melon azuki bean garlic.... Veggies es bonus vobis, proinde vos postulo essum
                    magis kohlrabi welsh onion daikon amaranth tatsoi tomatillo melon azuki bean garlic....</p>
                <p id="resI_p1_2">Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth tatsoi
                    tomatillo melon azuki bean garlic.... Veggies es bonus vobis, proinde vos postulo essum
                    magis kohlrabi welsh onion daikon amaranth tatsoi tomatillo melon azuki bean garlic....</p>

                <button id="resI_btn_1" type="button"> OUR MENU </button>
                <button id="resI_btn_2" type="button"> OUR MENU </button>

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