<?php
require "includes/header.php";
require "includes/footer.php";

$name = "Ivy";
$greeting = "Hello!";
if(!empty($name)){
    $greeting = "Welcome Back,";
}
$product = "LOLLIPOP";
$cost = 2;
$totals = [];
for ($i = 1; $i <= 15; $i++) {
    $subtotal = $cost * $i;
    $discount = ($cost / 100) * ($i * 4);
    $totals[$i] = $subtotal - $discount;
}
?>
<!DOCTYPE html>
    <html>
        <body>
            <h2><?= $greeting ?> <?= $name ?></h2>
            <h2><?=$product ?> DISCOUNTS</h2>
            <table>
                <tr>
                    <th>PACKS</th>
                    <th>PRICE</th>
                </tr>
                <?php
                foreach ($totals as $quantity => $price): ?>
                <tr>
                    <td>
                        <?= $quantity ?> pack<?= $quantity === 1 ? '' : 's' ?>
                    </td>
                    <td>
                        $<?= number_format($price, 2) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </body>
    </html>