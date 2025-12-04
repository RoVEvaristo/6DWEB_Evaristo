<?php
require "stock.php";
include 'Header.php';

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? 'Yes' : 'No';
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax = 0): float {
    return ($price * $quantity) * ($tax / 100);
}

$tax_rate = 12;
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
        h1 {
             font-size: 70px; 
             margin: 0; 
             color: #702963; 
            }
        h2 { 
            font-size: 32px; 
            color: #FFC000; 
            }
        h3 { 
            color: #FFC000; 
            }
        p { 
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
        
    </style>
</head>
<body>

<div class="container">

    <?php
    if (!empty($royaltyInstruments)) {
        echo "<h1>Available Products:</h1>";
    } else {
        echo "<p>Out of Stock</p>";
    }
    ?>
        
    <?php foreach ($royaltyInstruments as $category => $items): ?>
    
    <h2 class="category-title"><?= $category ?></h2>

    <div class="royaltyInstruments">
        <?php foreach ($items as $item): ?>

        <?php
            $stock = $item['stock']; 
        ?>    


        <div class="item">
            <img src="img/<?= $item['img'] ?>" alt="<?= $item['name'] ?>">
            <h3><?= $item['name'] ?></h3>

            <p>₱<?= number_format($item['price']) ?></p>

            <?php
            if ($item['price'] >= 10000) {
                echo "<p><em>High Grade</em></p>";
            } else {
                echo "<p><em>Standard Grade</em></p>";
            }
            ?>

            <p>Stock: <?= $stock ?></p>

            <p>Re-Stock: <?= get_reorder_message($stock) ?></p>

            <p>Total Stock Value: ₱<?= number_format(get_total_value($item['price'], $stock)) ?></p>

            <p>Tax (<?= $tax_rate ?>%): ₱<?= number_format(get_tax_due($item['price'], $stock, $tax_rate)) ?></p>
        </div>

        <?php endforeach; ?>
    </div>

    <?php endforeach; ?>

</div>
<?php
    include 'footer.php';
?>
</body>
</html>
