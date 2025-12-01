<?php
require "includes/header.php";
require "includes/footer.php";
$username = "Ivy";
$greetings = "Hello";
$offer = array("Chocolate", 5, 25, 20);
$usual_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];
$saving = $usual_price - $offer_price;
?>
<!DOCTYPE html>
    <html>
        <body>
            <h2>MULTI-BUY OFFER</h2>
            <p><?= $greetings;?>, <?= $username;?></p>
            <p>Buy <?= $offer[1]?> packs of <?= $offer[0]?> for $<?= $offer[3]?><br>
            (usual price $<?= $offer[2] ?>)
            </p>
            <h1 class = button>Save $<?= $offer[1] ?></h1>
        </body>
    </html>
