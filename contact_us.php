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

            <div id="_upper_main_contact">
                <header id="header">
                    <div class="_name_site">
                        <a href="index.php"><img id="logo" src="images/Logo.png" alt="logo"></a>
                        <a href="frame.php"> <img id="menu" src="images/menu.png" alt="hamburger_menu"> </a>
                        <h3>Services</h3>
                    </div>
                </header>

                <main id="_main_body">
                    <p id="_spa_p"> <span>About Us</span> <br> We've been giving out elite experience since 2004 in the
                    <br> amazing Kigali, Rwanda.</p>
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

            <div id="_contact_form">
                <div id="text">
                    <h3>Say Hello to Us</h3>
                    <p>We always appreciate your feedback, and if you would like to leave a comment about our services,
                        <br>Feel free to do so. <br><br>Want to reach to us via email directly? <br>
                        hello@alamaison.com</p>
                </div>
                <form id="_cont_form">
                    <input type="text" name="username" placeholder="Names" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="text" placeholder="Subject" required>
                    <input type="text" placeholder="Message" required>
                    <button type="submit" onclick="confirm()">SEND</button>
                </form>
                
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
            <button id="join_btn" type="button">Join</button>
        </div>
        <h4 id="copyright">@2019 Copyright. All rights reserved</h4>
    </footer>

    <script type="text/javascript">
        function confirm(){
            alert("Your message has been recorded");
        }
    </script>
</body>
</html>