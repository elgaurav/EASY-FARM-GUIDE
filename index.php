<?php
session_start();

    $_SESSION;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EASY FARM GUIDE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cinzel&family=Fondamento:ital@1&family=Lato&family=Poppins:wght@100;200;300;400;600;700&family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <!-- Navbar and Title Display -->

    <section class="header">
        <nav>
            <a href="index.html"><img src="img/logo.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>

        <div class="text-box">
            <h1>EASY FARM GUIDE</h1>
            <p>The platform facilitates knowledge sharing amongst farmers, agricultural experts and researchers. <br>Users can learn how to produce such crops and plants from the available resources.</p>
        </div>
    </section>

    <!-- Plants section -->

    <section class="crops-to-grow">
        <h1>Plants / Crops To Grow In Your Backyard</h1>

        <div class="row">
            <div class="crop-col">
               <a href="lemons.html"> <img src="img/lemons.jpg"> </a>
                <h3>Lemons</h3>
                <p>Lemons are citrus fruits with bright yellow skins and a sour, tangy flavor. They belong to the Rutaceae family and are prized for their culinary versatility and high vitamin C content.</p>
            </div>

            <div class="crop-col">
                <a href="bell pepper.html"> <img src="img/bell pepper.jpg" class="bell-pepper"> </a>
                <h3>Bell Peppers</h3>
                <p>Bell peppers are colorful, bell-shaped vegetables with a sweet flavor. They come in various colors, including green, red, yellow, and orange, and are rich in vitamins C and A.</p>
            </div>

            <div class="crop-col">
                <a href="tomatoes.html"> <img src="img/tomatoes.jpg"> </a>
                <h3>Tomatoes</h3>
                <p>Tomatoes are vibrant, juicy fruits often used as vegetables in cooking. They come in various sizes, colors, and shapes, from small cherry tomatoes to large beefsteak varieties.</p>
            </div>
        </div>

    </section>


    <section class="crops-to-grow">

        <div class="row">
            <div class="crop-col">
                <a href="carrot.html"> <img src="img/carrot.jpeg" class="carrots"> </a>
                <h3>Carrots</h3>
                <p>Carrots are root vegetables known for their vibrant orange color and sweet, crunchy taste. They have feathery green tops and grow underground, producing elongated taproots.</p>
            </div>

            <div class="crop-col">
                <a href="spinach.html"> <img src="img/spinach.jpg" class="spinach"> </a>
                <h3>Spinach</h3>
                <p>Spinach is a leafy green vegetable with tender, dark green leaves. It's rich in vitamins A, C, and K, as well as iron, folate, and antioxidants.</p>
            </div>

            <div class="crop-col">
                <a href="chili pepper.html"> <img src="img/chili pepper.jpeg"> </a>
                <h3>Chili Pepper</h3>
                <p>Chili peppers are small, heat-loving plants that can be grown indoors in pots or containers.Chili peppers come in a wide range of varieties, each with its own distinct characteristics.</p>
            </div>
        </div>

    </section>

    <section class="crops-to-grow">
        <h1>Flowers To Grow In Your Backyard</h1>

        <div class="row">
            <div class="crop-col">
                <a href="hibiscus.html"> <img src="img/hibiscus.jpg" class="hibiscus"> </a>
                <h3>Hibiscus</h3>
                <p> Hibiscus plants belong to the Malvaceae family and are known for their large, showy flowers in shades of red, pink, yellow, white, and orange.</p>
            </div>

            <div class="crop-col">
                <a href="lavender.html"> <img src="img/lavender.jpg" class="lavender"> </a>
                <h3>Lavender</h3>
                <p>Lavender (Lavandula) is a well-loved and widely cultivated flowering plant known for its fragrant blooms and aromatic foliage.</p>
            </div>

            <div class="crop-col">
                <a href="roses.html"> <img src="img/roses.jpg" class="roses"> </a>
                <h3>Roses</h3>
                <p>Roses are iconic flowering plants known for their beauty, fragrance, and wide range of colors and varieties.</p>
            </div>
        </div>

    </section>

    <!-- testimonials -->

    <section class="review-section">
        <h1 class="section-title">What Our <span>Users</span> Say About Us</h1>
        <div class="review-container">
            <div class="review-card">
                <div class="user-dp" data-rating="4.9"><img src="img/user 1.png" alt=""></div>
                <h2 class="review-title">Best quality content. More than my Expectations</h2>
                <p class="review"></p>
            </div>

            <div class="review-card">
                <div class="user-dp" data-rating="4.9"><img src="img/user 2.png" alt=""></div>
                <h2 class="review-title">Very Authentic Idea !! Also very pleased with the User Interface</h2>
                <p class="review"></p>
            </div>

            <div class="review-card">
                <div class="user-dp" data-rating="4.9"><img src="img/user 3.png" alt=""></div>
                <h2 class="review-title">Keep Posting More Resources About New Flowers</h2>
                <p class="review"></p>
            </div>

            <div class="review-card">
                <div class="user-dp" data-rating="4.9"><img src="img/user 4.png" alt=""></div>
                <h2 class="review-title">Highly Informative and helped me grow 2 plants this year !!</h2>
                <p class="review"></p>
            </div>
        </div>
    </section>
    
    <!-- Footer -->

    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora repudiandae maxime,<br> suscipit veniam illo non perspiciatis blanditiis vel enim harum?</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made With <i class="fa fa-heart"></i> By Gaurav and Amaan</p>
    </section>

</body>
</html>



