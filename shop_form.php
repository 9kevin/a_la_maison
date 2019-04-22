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
            <div id="_upper_main_shop2">
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
                <h3>Fill a short form about what you want to sell</h3>
                <form id="_shop_form" method="POST" action="shopform_backend.php">
                    <input class="form_input_1" type="text" placeholder="name" name="name">
                    <input class="form_input_1" type="number" placeholder="price" name="price">
                    <select class="form_input_1" name="category">
                      <option value="" disabled selected>Choose the category of your product</option>
                      <option value="electronic">Electonic</option>
                      <option value="makeup">Makeup</option>
                      <option value="skin">Skin</option>
                      <option value="hair">Hair</option>
                      <option value="appliances">Appliances</option>
                      <option value="herbal">Herbal</option>
                      <option value="men">Men</option>
                      <option value="women">Women</option>
                      <option value="other">Other</option>
                    </select>
                    <select class="form_input_1" name="quality">
                      <option value="" disabled selected>Choose the quality of your product</option>
                      <option value="new">New</option>
                      <option value="refurbished">Refurbished</option>
                      <option value="used">Used</option>
                    </select>
                    <input class="form_input_1" type="number" placeholder="maximum number of days for the product on the market" name="maxdays">
                    <input class="form_input_1" type="text" placeholder="description" name="description">
                    <input id="attach_img" type="file" placeholder="Attach an image" name="image">

                    <button id="upload_img" type="submit">UPLOAD</button>
                </form>
                
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