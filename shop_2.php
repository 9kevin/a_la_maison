<?php
    include_once('connecting.php'); 
?>
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
                        <a href="frame.php"> <img id="menu" src="Stylesheets/images/menu.png" alt="hamburger_menu"> </a>
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

            <section id="shop_left_section">
                <button id="product_type" type="button"> Product Type </button>
                <div id="_types">
                    <a> All </a>
                    <a> Markup </a>
                    <a> Skin </a>
                    <a> Hair </a>
                    <a> Appliances </a>
                    <a> Herbal </a>
                    <a> Men </a>
                    <a> Women </a>
                    <a> Best Deals </a>
                </div>
                <button id="brand" type="button"> Brand </button>
                <button id="color" type="button"> Color </button>
            </section>

            <section id="shop_right_section">
                <button type="button"> Lower Price </button>
                <h5>Sort<br>by</h5>

                 <?php

                    $sql = "SELECT * FROM `Product`";
                    $result1 = $conn-> query($sql);

                ?>

                    <?php while($Product = mysqli_fetch_assoc($result1)) : ?>
                        
                
                        <img src="<?php echo $Product['Image'];?>" alt="product_image">
                                
                        

                            <h4><?php echo $Product['Name'];?></h4>
                            <?php
                            $user_email = $Product['User_email_FK'];
                            $query = "SELECT * FROM Users WHERE Email = '$user_email'";
                            $result = $conn->query($query);
                            $names = mysqli_fetch_assoc($result);
                            ?>
                            <h5>Posted by: <?php echo $Product['Name'];?></h5>
                            <h5><small>Quality: <?php echo $Product['Quality'];?></small></h5>
                            <h3>Price: $<?php echo $Product['Price'];?></h3>
                        
                    <?php endwhile;?>
                    ?>
                </section>

            <button type="button"> MORE </button>

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