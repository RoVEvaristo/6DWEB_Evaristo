<?php
require "stock.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $store ?> - Browse</title>
    <style>
    body {
            font-family: 'Montserrat', Helvetica, sans-serif;
            background-color: #FFC000;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        p {
            font-family: 'Montserrat', Helvetica, sans-serif;
            font-weight: bold;
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
            color: #FFC000;
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
        .category-title {
            font-size: 32px;
            font-weight: bold;
            margin-top: 40px;
            color: #FFCC00;
            background-color: #702963;
            width: 600px;
            margin: 40px auto;
            border-radius: 10px;
        }
        .royaltyInstruments {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .item {
            background: #702963;
            padding: 20px;
            border-radius: 12px;
            width: 220px;
            color: #FFC000;
            font-weight: bold;
        }
        .item img {
            width: 200px;
            height: 200px;
            border-radius: 10px;
        }
        footer {
            background: #000;
            color: #FFC000;
            padding: 10px;
            text-align: center;
            margin-top: 40px;
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
<div class = "container">
    <?php
    //Short explaination for this conditional statement: Basically po, kapag tinanggal ang laman ng array sa stock.php, lilitaw yung "out of stock" because of the condition given na kapag empty empty ang $royaltyInstrument,
    // mag e-execute ang else block"//
    if (!empty($royaltyInstruments)) {
        echo "<h1>Available Products:</h1>";
    } else {
        echo "<p>Out of Stock</p>";
    }
    ?>
    
    <?php
    foreach ($royaltyInstruments as $category => $items) {
    ?>
    <h2 class="category-title"><?= $category ?></h2>
    <div class = "royaltyInstruments">
        <?php
        foreach ($items as $item){
        ?>
        <div class = "item">
            <img src="img/<?=$item['img'] ?>" alt="<?=$item['name']?>">
            <h3><?= $item['name'] ?></h3>
            <p><strong>₱<?= ($item['price']) ?></strong></p>

            <?php
            //Dito  naman po sa if-else na toh, kapag more than or 10,000 yung price ng product, it will display "High grade", else naman po kapag below 10,000 "Standard Grade" po ang lilitaw//
            if ($item['price'] >= 10000) {
                echo "<p><em>High Grade</em></p>";
            } else {
                echo "<p><em>Standard Grade</em></p>";
            }
            ?>
        </div>
        <?php
        } 
        ?>
    </div>
    <?php   
    }
    ?>
</div>
<footer>
    <p>&copy; 2025 <?= $store ?>. All rights reserved.</p>
</footer>
</body>
</html>

