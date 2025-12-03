
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href="styles.css"/>
</head>
<body>
    <?php include('include/header.php'); ?>

      <nav>
        <a href = "index.php">HOME</a>
        <a href = "product.php">PRODUCT</a>
    </nav>

    <?php     
    $name = 'Ken';
    switch ($name){
        case 'Ken':
            $greeting = 'Welcome back, ' . $name;
            break;
        default:
            $greeting = 'Hello';
    }?>

    <p><?= $greeting ?></p>
    <h2>LOLLOPOP DISCOUNTS</h2>
    <table>
        <th>Packs</th>
        <th>Price</th>
        
    </table>
    <?php 
    $discounted = 4;
    $packs = 10;
    $counter = 1;
    while ($counter <= $packs) {
        echo $counter . " Pack $" . ($discounted * $counter) . "<br>";
        $counter++;


    }
    ?>
    <table>
        
    </table>
</body>

    <?php include('include/footer.php'); ?>
</html>
