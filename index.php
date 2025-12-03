<?php 
$username = "Louisse Ken";
$greeting = "Hello, " . $username. ".";
$offer = ["Chocolate", 2, 5, 4];
$usual_price = $offer[1]*$offer[2];
$offer_price = $offer[1]*$offer[3];
$saving = $usual_price - $offer_price;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href="styles.css"/>
</head>
<body>
    <h1>The Candy Store</h1>
    <nav>
        <a href = "index.php">HOME</a>
        <a href = "product.php">PRODUCT</a>
    </nav>
    <h2>MULTI-BUY OFFER</h2>
    <p>Hello, <?= $username ?></p>
    <p>Buy <?= $offer[1] ?> packs of <?= $offer[0]?> for $<?= $offer_price ?></p>
    <p>{usual price $<?= $usual_price?>}</p>
</body>
</html>




