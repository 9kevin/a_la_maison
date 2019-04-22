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

            <div id="_upper_main_rooms">
                <header id="header">
                    <div class="_name_site">
                        <a href="index.php"><img id="logo" src="images/Logo.png" alt="logo"></a>
                        <a href="frame.php"> <img id="menu" src="images/menu.png" alt="hamburger_menu"> </a>
                        <h3>Services</h3>
                    </div>
                </header>

                <main id="_main_body">
                    <p id="_spa_p"> <span>Explore our rooms</span> <br> We offer more than a night's sleep. We offer
                        rooms for leisure.  </p>
                    <ul id="_arrival_info">
                        <form>
                            <li class="_client_info">
                                <h3> Arrival </h3>
                                <input type="date" min="2019-04-17" max="2020-04-17">
                            </li>
                            <li class="_client_info">
                                <h3> Departure </h3>
                                <input type="date" min="2019-04-17" max="2020-04-17">
                            </li>
                            <li class="_client_info">
                                <h3> </h3>
                                <input id="_rooms_info" type="text" placeholder="Number of Rooms">
                            </li>
                            <a href="rooms.php"><button type="button">Check Availability</button></a>
                        </form>
                    </ul>
                </main>
            </div>

            <div id="rooms_container">

                <div class="room_type">
                    <img class="room_type_img" src="images/classc_img.png" alt="image">
                    <h3> Classic Room </h3>
                    <p> Enjoy our basic room for all kinds of clients with a bathroom, one master bedroom, and room
                        service</p>
                    <img class="room_icon" src="images/room_icon.png" alt="room_icon_img">
                    <img class="bathtub_icon" src="images/bathtub_icon.png" alt="bathtub_icon_img">
                    <img class="bed_icon" src="images/bed_icon.png" alt="bed_icon_img">
                    <h3 class="amount"> $100/D </h3>
                    <h4> 3 </h4>
                    <h5> 1 </h5>
                    <h5 class="classic_deluxe"> Classic </h5>
                    <div class="ov">
                        <a href="clientSignup.php">BOOK</a>
                    </div>
                </div>
                <div class="room_type">
                    <img class="room_type_img" src="images/deluxe_img.png" alt="image">
                    <h3> Deluxe Room </h3>
                    <p> Enjoy our basic room for all kinds of clients with a bathroom, one master bedroom, and room
                        service</p>
                    <img class="room_icon" src="images/room_icon.png" alt="room_icon_img">
                    <img class="bathtub_icon" src="images/bathtub_icon.png" alt="bathtub_icon_img">
                    <img class="bed_icon" src="images/bed_icon.png" alt="bed_icon_img">
                    <h3 class="amount"> $150/D </h3>
                    <h4> 3 </h4>
                    <h5> 1 </h5>
                    <h5 class="classic_deluxe"> Deluxe </h5>
                    <div class="ov">
                        <a href="clientSignup.php">BOOK</a>
                    </div>
                </div>
                <div class="room_type">
                    <img class="room_type_img" src="images/exec_img.png" alt="image">
                    <h3 id="exec_header"> Executive Room </h3>
                    <p> Feel like treating yourself to a VIP experience, then this is for you. Enjoy all classic and
                        Deluxe offers + more.</p>
                    <img class="room_icon" src="images/room_icon.png" alt="room_icon_img">
                    <img class="bathtub_icon" src="images/bed_icon.png" alt="bathtub_icon_img">
                    <img class="bed_icon" src="images/vip_img.png" alt="bed_icon_img">
                    <h3 class="amount"> $200/D </h3>
                    <h4> 3 </h4>
                    <h5 id="king_size"> King Size </h5>
                    <div class="ov">
                        <a href="clientSignup.php">BOOK</a>
                    </div>
                </div>

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