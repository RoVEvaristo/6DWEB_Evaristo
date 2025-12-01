<?php
$store = "Royalty Music";
$tagLine = "Music is love, Love is music";
$introduction = "This is where your musical journey unfolds. Here at Royalty Music, experience our selection of musical instruments from different brands and locality. Play what your heart and soul desires, we will play with you along the way.";
$instruments = [
    "Guitar" => "Guitar.jpg",
    "Bass" => "Bass.jpg",
    "Keyboards" => "Keyboards.jpg"
];
$typeOfInstruments = count($instruments); 
$instrumentCaption = "OUR SHOP CATERS " . $typeOfInstruments . " TYPES OF INSTRUMENTS!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $store ?> - Home</title>
    <style>
        body {
            font-family: 'Montserrat', Helvetica, sans-serif;
            font-weight: 600;
            background-color: #FFC000;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            color: #000;   
        }
        p {
            font-family: 'Montserrat', Helvetica, sans-serif;
        }
        h2 {
            font-size: 20px;
            margin: 10px 0 30px 0;
            font-style: italic;
            color: #FFC000;
        }
        h1{
            font-size: 70px;
            margin: 0;
            color: #702963;
        }
        h3 {
            background-color: #000;
            color: #FFC000;
            padding: 10px 100px;
            text-align: center;
            border-radius: 10px;
            max-width: 200px;
            margin: 0 auto;
        }
        header {
            background: #000;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            background: #702963;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #FFC000;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        .container {
            padding: 40px;
            text-align: center;
        }
        .intro {
            max-width: 700px;
            margin: 20px auto;
            font-size: 18px;
            line-height: 1.5;
        }
        .hero-img {
            margin: 30px auto;
            width: 80%;
            max-width: 800px;
            height: auto;
            border-radius: 12px;
        }
        .instruments {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 20px;
        }
        .instrument {
            text-align: center;
        }
        .instrument img {
            width: 180px;
            height: 180px;
            border-radius: 12px;
        }
        .instrument p {
            font-weight: bold;
            margin-top: 10px;
            font-size: 18px;
        }
        footer {
            background: #000;
            color: #FFC000;
            padding: 10px;
            text-align: center;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1><?= $store ?></h1>
        <h2><?= $tagLine ?></h2>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="browse.php">Browse</a>
    </nav>

    <div class="container">
        <h1>Welcome to <?= $store ?></h1>
        <p class="intro"><?= $introduction ?></p>
        

       
        <img src="img/hero.jpg" alt="Music Hero" class="hero-img">

        <h3>Featured Instruments</h3>
        <p class="intro"><?= $instrumentCaption ?></p> 
        <div class="instruments">
            
            <div class="instrument">
                <img src="img/<?= $instruments["Guitar"] ?>" alt="Guitar">
                <p>Guitar</p>
            </div>
            <div class="instrument">
                <img src="img/<?= $instruments["Bass"] ?>" alt="Bass">
                <p>Bass</p>
            </div>
            <div class="instrument">
                <img src="img/<?= $instruments["Keyboards"] ?>" alt="Keyboards">
                <p>Keyboards</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 <?= $store ?>. All rights reserved.</p>
    </footer>
</body>
</html>
