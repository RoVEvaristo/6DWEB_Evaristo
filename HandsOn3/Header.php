<?php
$store = "Royalty Music";
$tagLine = "Music is love, Love is music";

?> 
<style>
    header {
            background: #000;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .Tagline {
            font-size: 20px;
            margin: 10px 0 30px 0;
            font-style: italic;
            color: #FFC000;
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
</style>
<header>
<h1><?= $store ?></h1>
<h2 class = "Tagline"><?= $tagLine ?></h2>
</header>
<nav>
        <a href="HomepageIndex.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="browse.php">Browse</a>
</nav>
